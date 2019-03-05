<?php defined('BASEPATH') or exit('No direct script access allowed');

// echo "<pre>";
// print_r($proposal->tblcustomfieldsvalues);
// die();


// print_r(json_encode($proposal));
//die();
$current_user=get_staff_full_name();
//$members->name;
$items = $proposal->items;
$descrip = $proposal->items;
$dec= $descrip[0]['description'];
$items= $descrip[0]['long_description'];
$myArray = explode(',00', $items);
//print_r($myArray);
$months=$myArray[0];
$capital=$myArray[1];
$months = preg_replace("/[^0-9]/", "", $months);
$capital = preg_replace("/[^0-9]/", "", $capital);
//echo $capital;
//echo $months;
//die();
$stuff = $proposal->stuffdetails;
$tblcustomfieldsvalues = $proposal->tblcustomfieldsvalues;
//$customer_id_number  = $tblcustomfieldsvalues[0];




$dimensions = $pdf->getPageDimensions();

$pdf_logo_url = pdf_logo_url();
$pdf->writeHTMLCell(($dimensions['wk'] - ($dimensions['rm'] + $dimensions['lm'])), '', '', '', $pdf_logo_url, 0, 1, false, true, 'L', true);

$pdf->ln(4);
// Get Y position for the separation
$y            = $pdf->getY();

$proposal_info = '<div style="color:#424242;">';
    $proposal_info .= format_organization_info();
$proposal_info .= '</div>';

$pdf->writeHTMLCell(($swap == '0' ? (($dimensions['wk'] / 2) - $dimensions['rm']) : ''), '', '', ($swap == '0' ? $y : ''), $proposal_info, 0, 0, false, true, ($swap == '1' ? 'R' : 'J'), true);

$rowcount = max(array($pdf->getNumLines($proposal_info, 80)));

// Proposal to
$client_details = '<b>'._l('proposal_to').'</b>';
$client_details .= '<div style="color:#424242;">';
    $client_details .= format_proposal_info($proposal,'pdf');
     $client_details .= '<br>';
     
   //$client_details .= $proposal->first_name;

    // $custom_fields = get_custom_fields('proposal');

    // $client_details .= $custom_fields->proposal_bank_name;
$client_details .= '</div>';

$pdf->writeHTMLCell(($dimensions['wk'] / 2) - $dimensions['lm'], $rowcount*7, '', ($swap == '1' ? $y : ''), $client_details, 0, 1, false, true, ($swap == '1' ? 'J' : 'R'), true);

$pdf->ln(6);

$proposal_date = _l('proposal_date') . ': ' . _d($proposal->date);
$open_till = '';

if(!empty($proposal->open_till)){
    $open_till = _l('proposal_open_till'). ': ' . _d($proposal->open_till) . '<br />';
}

$item_width = 38;
// If show item taxes is disabled in PDF we should increase the item width table heading
$item_width = get_option('show_tax_per_item') == 0 ? $item_width+15 : $item_width;
$custom_fields_items = get_items_custom_fields_for_table_html($proposal->id,'proposal');

// Calculate headings width, in case there are custom fields for items
$total_headings = get_option('show_tax_per_item') == 1 ? 4 : 3;
$total_headings += count($custom_fields_items);
$headings_width = (100-($item_width+6)) / $total_headings;

// The same language keys from estimates are used here
$qty_heading = _l('estimate_table_quantity_heading');
if($proposal->show_quantity_as == 2){
    $qty_heading = _l('estimate_table_hours_heading');
} else if($proposal->show_quantity_as == 3){
    $qty_heading = _l('estimate_table_quantity_heading') .'/'._l('estimate_table_hours_heading');
}

// Header
$items_html = '<table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="8">';

$items_html .= '<tr height="30" bgcolor="' . get_option('pdf_table_heading_color') . '" style="color:' . get_option('pdf_table_heading_text_color') . ';">';

$items_html .= '<th width="5%;" align="center">'._l('the_number_sign').'</th>';
$items_html .= '<th width="'.$item_width.'%" align="left">' . _l('estimate_table_item_heading') . '</th>';

foreach ($custom_fields_items as $cf) {
   $items_html .= '<th width="'.$headings_width.'%" align="left">' . $cf['name'] . '</th>';
}

$items_html .= '<th width="'.$headings_width.'%" align="right">' . $qty_heading . '</th>';
$items_html .= '<th width="'.$headings_width.'%" align="right">' . _l('estimate_table_rate_heading') . '</th>';

if (get_option('show_tax_per_item') == 1) {
    $items_html .= '<th width="'.$headings_width.'%" align="right">' . _l('estimate_table_tax_heading') . '</th>';
}

$items_html .= '<th width="'.$headings_width.'%" align="right">' . _l('estimate_table_amount_heading') . '</th>';
$items_html .= '</tr>';

$items_html .= '<tbody>';

$items_data = get_table_items_and_taxes($proposal->items,'proposal');

$taxes = $items_data['taxes'];
$items_html .= $items_data['html'];

$items_html .= '</tbody>';
$items_html .= '</table>';
$items_html .= '<br /><br />';
$items_html .= '';
$items_html .= '<table cellpadding="6" style="font-size:'.($font_size+4).'px">';

$items_html .= '
<tr>
    <td align="right" width="85%"><strong>'._l('estimate_subtotal').'</strong></td>
    <td align="right" width="15%">' . format_money($proposal->subtotal,$proposal->symbol) . '</td>
</tr>';

if(is_sale_discount_applied($proposal)){
    $items_html .= '
    <tr>
        <td align="right" width="85%"><strong>' . _l('estimate_discount');
        if(is_sale_discount($proposal,'percent')){
            $items_html .= '(' . _format_number($proposal->discount_percent, true) . '%)';
        }
        $items_html .= '</strong>';
        $items_html .= '</td>';
        $items_html .= '<td align="right" width="15%">-' . format_money($proposal->discount_total, $proposal->symbol) . '</td>
    </tr>';
}

foreach ($taxes as $tax) {
    $items_html .= '<tr>
    <td align="right" width="85%"><strong>' . $tax['taxname'] . ' (' . _format_number($tax['taxrate']) . '%)' . '</strong></td>
    <td align="right" width="15%">' . format_money($tax['total_tax'], $proposal->symbol) . '</td>
</tr>';
}

if ((int)$proposal->adjustment != 0) {
    $items_html .= '<tr>
    <td align="right" width="85%"><strong>'._l('estimate_adjustment').'</strong></td>
    <td align="right" width="15%">' . format_money($proposal->adjustment,$proposal->symbol) . '</td>
</tr>';
}
$items_html .= '
<tr style="background-color:#f0f0f0;">
    <td align="right" width="85%"><strong>'._l('estimate_total').'</strong></td>
    <td align="right" width="15%">' . format_money($proposal->total, $proposal->symbol) . '</td>
</tr>';
$items_html .= '</table>';

if(get_option('total_to_words_enabled') == 1){
    $items_html .= '<br /><br /><br />';
    $items_html .= '<strong style="text-align:center;">'._l('num_word').': '.$CI->numberword->convert($proposal->total,$proposal->currency_name).'</strong>';
}

//$proposal->content = str_replace('{proposal_items}', $items_html, $proposal->content);


	
	// output the HTML content

	
	// reset pointer to the last page
//	$pdf->lastPage();
//
$proposal->content = str_replace('{proposal_items}', $items_html, $proposal->content);

//$items_html .= '<h2> MY CODE STARTS HERE<h2>';


//$pdf->AddPage();
// Get the proposals css
// Theese lines should aways at the end of the document left side. Dont indent these lines
$html = <<<EOF
<p style="font-size:20px;"># $number
<br /><span style="font-size:15px;">//$proposal->subject</span>
</p>
$proposal_date
<br />
$open_till
<div style="width:675px !important;">
$proposal->content
</div>
EOF;

$pdf->writeHTML($html, true, false, true, false, '');
$date1=$proposal->date;

$date2=$tblcustomfieldsvalues[0]['dob'];

$year1=date('Y', strtotime($date1));
$year2=date('Y', strtotime($date2));
$year1=(int)$year1;
$year2=(int)$year2;
$year3=$year1-$year2;
$effectiveDate = date('Y-m-d', strtotime("+$months months", strtotime($date1)));
$html = '<h1>Prepared for</h1>


<table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="8">
<tr>
<td>'.$proposal->proposal_to.'</td><td></td>
</tr>
<tr>
<td>'.$tblcustomfieldsvalues[0]['identity_number'].'</td><td></td>
</tr>

<h2>Prepared by:</h2>
<tr>
<td>'.$stuff[0]['firstname'].'  '.$stuff[0]['lastname'].'</td><td>Cell:'.$stuff[0]['phone'].'</td>
</tr>
<tr>
<td>Advisor </td><td>Email:'.$stuff[0]['email'].'</td>

</tr>
</table>

';
	//Generate HTML table data from MySQL - end
	
	// add a page
	$pdf->AddPage();
	
	// output the HTML content
	$pdf->writeHTML($html, true, false, true, false, '');
	
	// reset pointer to the last page
	$pdf->lastPage();
	
	//customfields

	
	//customfields

$html1 = '<h1>Quotation number: 1 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;   Date: '. $date1.'</h1>
	<hr/>
The plan is an investment policy as described under, and regulated by the Long-term Insurance Act, 1998. The plan will be administered by us.<br>

In this quotation we refer to you, the applicant, as the plan holder.<br>

<h2>Plan details:</h2>
';

$html1 .= '<table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="8">
<tr>
<td>Product name: </td><td>Adsertor Off-Shore </td>
</tr>
<tr>
<td>Product option:</td><td>'.$dec.' '.$months.' Months</td>
</tr>
<tr>
<td>Target savings date</td><td>'.date('d-m-Y',strtotime($effectiveDate)).'</td>
</tr>
<tr>
<td>Tax dispensation</td><td>Natural person</td>

</tr>
</table>'

;
$html1 .='<h2>Start date
</h2>
The plan starts on '.$proposal->date.'.<br>
<h2>Personal details</h2>
';

$html1 .= '<table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="8">
<tr>
<td>Title and surname </td><td> '.$tblcustomfieldsvalues[0]['titles'].'   '.$tblcustomfieldsvalues[0]['surname'].'</td>
</tr>
<tr>
<td>First name</td><td>'.$tblcustomfieldsvalues[0]['client_name'].'</td>
</tr>
<tr>
<td>Date of birth </td><td>'.$tblcustomfieldsvalues[0]['dob'].'</td>
</tr>
<tr>
<td>Age next birthday</td><td>'.($year3+1).'</td>
</tr>
<tr>
<td>Gender</td><td>'.$tblcustomfieldsvalues[0]['gender'].'</td>
</tr>
<tr>
<td>Language </td><td>'.$tblcustomfieldsvalues[0]['default_language'].'</td>

</tr>
</table>
See "Benefit descriptions" for information about the benefits for this plan.<br />
<h2>Investment details</h2>
<h3>Once-Off Investment</h3>
This capital is guaranteed, a once-off payment of ' . format_money($capital, $proposal->symbol) . ' is payable by EFT on the <br />
payment  due date  ' . _d($proposal->open_till) . ', .<br> 
 <hr/>';

$month=$months;
$rate=6;
$base=$capital;
$newbase=$capital;
$growth=$capital;
if ($dec=="Edge") {
  
  $rate=2;
  # code...
}elseif ($dec=="Bolt") {
 
  $rate=6;
  # code...
}elseif ($dec=="Fusion") {

  $rate=2;
}

$html1 .='<table style="text-align:center;  border-collapse: collapse;">';
$html1 .='<thead><tr style="border:1px solid black;">
  <td rowspan="1" style="border: 1px solid black;"><b>#Months</b></td>
  <td style="border: 1px solid black;"><b>Capital investiment</b></td>
  <td style="border: 1px solid black;"><b>Expected Growth</b></td>
  <td style="border: 1px solid black;"><b>Annual Withrawal</b></td>
    
    <td style="border: 1px solid black;"><b>Increment % p.a</b></td>

  </tr>
   <tr style="border: 1px solid black;">
  <td style="border: 1px solid black;">'.$month.',00</td>
  <td style="border: 1px solid black;">' . format_money($capital, $proposal->symbol) . '</td>
  <td style="border: 1px solid black;">'.$rate.',00</td>
  <td style="border: 1px solid black;">--</td>
    
    <td style="border: 1px solid black;">--</td>

  </tr>
  
  <tr style="width: 10px ;" >
  <td ></td>
  <td ></td>
  <td ></td>
  <td ></td>
    
    <td ></td>

  </tr>
 
  <tr style="border: 1px solid black;">
  <td rowspan="1" style="border: 1px solid black;"><b>Months</b></td>
  <td style="border: 1px solid black;"><b>Opening balance</b></td>
  <td style="border: 1px solid black;"><b>Annual Withrawal</b></td>
    <td style="border: 1px solid black;"><b>Growth</b></td>
    <td style="border: 1px solid black;"><b>Closing balance</b></td>

  </tr></thead>
  ';
$html1 .='<tbody>';

for ($i=1; $i <=$month; $i++) { 
	//$newbase=50000;
$growth=$newbase*($rate/100);
	$newbase=$newbase+($newbase*($rate/100));
  $opening=$newbase-$growth;
$html1 .=' <tr style="border: 1px solid black;">
  <td rowspan="1" style="border: 1px solid black;">'.$i.'</td>
 <td style="border: 1px solid black;">'.number_format((float)$opening, 2, '.', '').'</td>
 <td style="border: 1px solid black;">--</td>
    <td style="border: 1px solid black;">'.number_format((float)$growth, 2, '.', '').'</td>

    <td style="border: 1px solid black;">'.number_format((float)$newbase, 2, '.', '').'</td>

  </tr>

';



	

}
$html1 .='</tbody>';

$html1 .='</table>';


$pdf->AddPage();
	
	// output the HTML content
	$pdf->writeHTML($html1, true, false, true, false, '');
	
	// reset pointer to the last page
	$pdf->lastPage();

	//third page
	$html2 = ' <h2>Company Banking Details Off-Shore</h2>


	<table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="8">
<tr>
<td>Account Name: </td><td>DVT CONSULT LIMITED</td>
</tr>
<tr>
<td>Account Number:</td><td>0515117461302 (USD)</td>
</tr>
<tr>
<td>IBAN Number:</td><td>AE070260000515117461302</td>
</tr>
<tr>
<td>SWIFT Code:</td><td>EBILAEAD</td>
</tr>
<tr>
<td>Branch Name:</td><td>JUMEIRAH BRANCH</td>
</tr>
<tr>
<td>Bank Name & Address:</td><td>Emirates NBD Bank PJSC P.O. Box 777 Al Was! Road, Dubai</td>
</tr>
<tr>
<td>Relationship Manager :</td><td>MR. Mohammed Khurram Aijaz</td>
</tr>
<tr>
<td>Contact Numbers:</td><td>00971-50-2659459</td>
</tr>
<tr>
<td>Tel. Number: </td><td>00971-4-4053205</td>
</tr>
<tr>
<td>Email: </td><td>MohammedAlI@emiratesnbd.com</td>

</tr>

<tr>
<td>Website: </td><td>http://www.emiratesnbd.com/en/businessbanking</td>
</tr>
</table><br>
    <h2>Company Banking Details Local</h2>


<table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="8">
<tr>
<td>Bank Name & Address: </td><td>DVT CONSULT LIMITED</td>
</tr>
<tr>
<td>Account Number:</td><td>0515117461302 (USD)</td>
</tr>
<tr>
<td>Branch Code:</td><td>AE070260000515117461302</td>
</tr>
<tr>
<td>Reference:</td><td>EBILAEAD</td>
</tr>
<tr>
<td>Client Name and Surname:</td><td>'.$tblcustomfieldsvalues[0]['client_name'].'   '.$tblcustomfieldsvalues[0]['surname'].'</td>
</tr>

<tr>
<td></td><td></td>
</tr>
<tr>
<td></td><td></td>
</tr>
<tr>
<td></td><td></td>
</tr>




';
$html2 .='<p></p>';

$html2 .='
<tr>
<td><h2>Customer Banking Details Local</h2></td>

</tr>

<tr>
<td>Bank Name: </td><td> '.$tblcustomfieldsvalues[0]['clientbank_name'].'</td>
</tr>
<tr>
<td>Account Name: </td><td> '.$tblcustomfieldsvalues[0]['client_name'].'</td>
</tr>
<tr>
<td>Account Number: </td><td>'.$tblcustomfieldsvalues[0]['clientbank_acc'].'</td>
</tr>
<tr>
<td>Branch Code:  </td><td> '.$tblcustomfieldsvalues[0]['client_bank_branchcode'].'</td>
</tr>
<tr>
<td>Website: </td><td> '.$tblcustomfieldsvalues[0]['website'].'</td>
</tr>



</table><br/>';



	//Generate HTML table data from MySQL - end
	
	// add a page
	$pdf->AddPage();
	
	// output the HTML content
	$pdf->writeHTML($html2, true, false, true, false, '');
	
	// reset pointer to the last page
	$pdf->lastPage();



$html = '<h1>Investment details</h1>



<table class="table-responsive" border="1">
	
<thead>
	<tr>	

	<td>Investment fund</td><td>Fund number</td><td>Risk classification/ asset class</td><td>Allocation </td>
	</tr>
	<tbody><tr>	
	<td>Adsertor  Off-Shore Trust Funds</td><td>Fund group: Managed Options – Off-shore</td></tr>
<tr>	
	<td>'.$dec.'</td><td>Fund number</td><td>41	Aggressive</td><td>100.00</td></tr>

	</tbody>
</thead>
</table><br/>

<p></p>
Information about all investment funds we offer, is available on the Adsertor Website www.adsertor.io .<br>

We invest a payment, less charges, in the respective chosen investment funds by buying units in each of these investment funds.<br>

For all investment funds the unit price is not guaranteed, and may increase or decrease over time.<br>

The fund value of a specific investment fund is the number of units multiplied by the unit price for that investment fund.<br>

The fund value of the plan is the total fund value of all the investment funds for the plan.<br>
Factors affecting the return on the plan<br>
<h2>Investment return on chosen investment funds</h2><br>
The gross investment return is the rate of return earned on the investment funds chosen by the plan holder, before deductions for life office tax and charges. This rate will depend on financial market<br> conditions and the rate of inflation during the plan term.

<h2>Effect of inflation</h2><br>
No effects of inflation apply with this off-shore investment during the investment, however may affect the payout.<br> 

<h2>Effect of charges</h2><br>
<p>The Effective Annual Cost (EAC) is a measure of the Association for Savings and Investment South Africa (ASISA) which allows you to compare the charges incurred and its impact on investment returns when you invest in different financial products. EAC is expressed as an annualized percentage. EAC is made up of four components, which are added together, as indicated in the table below. The effect of some of these components may vary over time, also indicated below. The EAC calculation assumes that subject to legislation you terminate your investment at the end of the relevant period shown in the table, as measured from start date and shows the extent to which the investment return on the plan will be reduced. The term to target savings date column assumes that you continue with your investment until the target savings date. The lower the EAC, the more cost-effective the investment is.<p>


<table class="table-responsive" border="1">
	
<thead>
	<tr>	

	<td>EAC components</td><td>1 Year</td>
	</tr>
	<tbody><tr>	
	<td>Investment management1</td><td>0.9%</td></tr>
<tr>	
	<td>Advice2</td><td>5.7%</td></tr>
	<tr>	
	<td>Administration3</td><td>0.5%</td></tr>
	<tr>	
	<td>Other4</td><td>4.1%</td></tr>
	<tr>	
	<td>Total Effective Once-Off Cost</td><td>11.2%</td></tr>

	</tbody>
</thead>
</table><br/>








';
	//Generate HTML table data from MySQL - end
	
	// add a page
	$pdf->AddPage();
	
	// output the HTML content
	$pdf->writeHTML($html, true, false, true, false, '');
	
	// reset pointer to the last page
	$pdf->lastPage();

$html = '<h2>Explanation of EAC components</h2>



1.	The investment management is calculated based on the current investment funds using the total investment cost (TIC) of each of the selected investment funds, allowing for any discount due to Reality membership as applicable on this plan.<br>
2.	This component shows the effect of the initial marketing charge levied on the plan to recover any commission paid to the intermediary and the effect of any fund-based fee paid to the intermediary for the provision of on-going investment advice.<br>
3.	Administration includes part of the marketing and administration charge used to cover the cost for the administration of this plan. The effect of any stop order payment charges is also included.<br>
4.	Other includes part of the marketing and administration charge used for our marketing and any other distribution costs. The charge is for this specific plan but excludes any potential discounts as a result of multiple plans.<br>

<h2>Notes</h2>

All calculations include value-added tax (VAT) at the prevailing rate, where applicable.<br>Where applicable, inflation has been taken into account with the calculation of the EAC.

<h2>Charges</h2>
This information is given as on '. $date1.' and any reference to "current" or "currently" refers to this date. This means that the charges may change from time to time.
<h2>Charges for the plan</h2>
The current charges are indicated above.<br>
<h2>Alteration charge</h2>
We will not levy an alteration charge for alterations to this plan.<br>

<h2>Commission</h2>
The commission below, if applicable, is not levied in addition to the "Charges". A part of these<br> charges pays for the following commission to the intermediary.<br>
The maximum payment-based commission payable will increase in the same proportion as any increase in payment, reducing with the outstanding term.

<h2>Taxability of plan benefits</h2>
According to current legislation the returns of the plan will not be taxable in your hands.


<h2>Investment fund considerations</h2>
May an investment fund be closed?<br><p>
Yes. This may occur if, for example, legislation changes or certain classes of assets become unavailable or it is in our opinion no longer prudent to invest in the specific investment fund. If the plan is affected, we will request the plan holder to choose another investment fund allowed at that stage for this type of plan, and to inform us of the choice made.  If we receive no response to such a request, we will decide in which investment fund to invest the affected part of the plan.</p>

<h2>Switches and revised payment allocations</h2>
<p>
Switching of investment funds allowed at the time for this type of plan may be done on request. We will sell units of the investment funds out of which a switch is done, and buy units of the investment funds into which a switch is done. We do this on the first working day after receiving the switch request.</p>
<p>
Future payments may be allocated to any investment fund allowed for this type of plan. The payments already allocated to the current investment funds, will then remain in these investment funds.
</p>
<p>
Currently there is no transaction charge for the first four switches in a plan year. For each subsequent switch in a plan year, we will levy a transaction charge, which will be determined at the time. We may change the number of free switches from time to time.</p>
<p>The transaction charge for a switch requested by you is currently R 750.00. This only applies once all free switches in a plan year have been used. This charge will be increased from time to time to allow for inflation, as determined by us.</p>








';
	//Generate HTML table data from MySQL - end
	
	// add a page
	$pdf->AddPage();
	
	// output the HTML content
	$pdf->writeHTML($html, true, false, true, false, '');
	
	// reset pointer to the last page
	$pdf->lastPage();

$html = '
<h2>Benefit descriptions</h2>
<h3>Benefit payable at death</h3>
The fund value at the date on which we received notice of the death of the life insured will be payable.

<h2>Payment growth</h2>
<h3>Adsertor inflation</h3>
The recurring payment will be increased each year by the inflation rate, as determined by us. In setting the rate, we will take into account the change in the consumer price index, or any other commonly accepted method of measuring inflation that may apply at the time. The Adsertor inflation rate may differ from official rates, due to differences in calculation methods. A minimum increase applies, which may change from time to time. 


<h2>Claim procedure</h2>
<p>
In the event of a claim please inform us as soon as possible. To obtain the necessary claim forms and to ensure that all the required information is supplied, contact your Adsertor Advisor. Depending on the nature of the claim, documentary proof (e.g. a death certificate or medical report) will be required.</p>

<h2>Enquiries</h2><p>
If you have any questions regarding this quotation, please contact your intermediary, as indicated on the front page of the quotation or the Client Care Centre or visit your nearest Client Care Office. Please always provide the plan number when you contact us.</p>

<h2>Client Care Centre details</h2>
e-mail for enquiries	info@libertas-fund.com <br>
e-mail for Compliance department	complianceoffice@libertas-fund.com<br>

<h2>Compliance</h2>
<p>
For any problem regarding compliance of products, advice or service, the Compliance department may be contacted via the Client Care Centre.</p>

<h2>Complaints</h2>
<p>
If you are dissatisfied with our service, advice or any of our products, we would like to hear about it. We have an internal complaints handling process where the complaint can be escalated up to the Adsertor Arbitrator. You may contact the Client Care Centre or the Adsertor Arbitrator at the contact details given below. Please always provide the plan number when you contact us.</p>

<h2>Client Care Centre details</h2>
e-mail for enquiries:	info@libertas-fund.com <br>
e-mail for Compliance department:	complianceoffice@libertas-fund.com<br>

<h2>Adsertor Arbitrator</h2>
e-mail	arbitrator@libertas-fund.com <br>


<h2>Client protection</h2><p>
The Financial Advisory and Intermediary Services Act and its sub-legislation regulate advice and intermediary services of financial products. Through its debarment system it also protects the public from persons who are not fit and proper to market financial products, and it controls those who are engaged to market such products.</p>
<p>
The intermediary, Advisor’s Name, is authorised to market this product and in terms of the above legislation he/she has not been debarred nor has any authorisation given to him/her been withdrawn or suspended, or lapsed.</p>


<h2>Validity period</h2>
<p>
The quotation is valid until ' . _d($proposal->open_till) . ' .</p>

<h2>Investment fund descriptions</h2><p>
For non-linked policies, we may leverage the assets in the investment funds for transactions such as scrip lending. Any income or loss arising from these transactions will be for our own account, and therefore do not affect the benefits to which the plan holder is entitled under this plan.</p>

';
	//Generate HTML table data from MySQL - end
	
	// add a page
	$pdf->AddPage();
	
	// output the HTML content
	$pdf->writeHTML($html, true, false, true, false, '');
	
	// reset pointer to the last page
	$pdf->lastPage();


	$html = '<h1>For office use</h1>




<table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="8">

<h2>Fund-based fee</h2>
No fund-based fee is payable.	11.2%. This percentage includes VAT, if applicable. <br>




<h2>Beneficiary details</h2>

<tr>
<td>Name and Surname:</td><td> '.$tblcustomfieldsvalues[0]['beneficiary_name'].'  '.$tblcustomfieldsvalues[0]['beneficiary_surname'].'</td>
</tr>
<tr>
<td>Identity Number: </td><td> '.$tblcustomfieldsvalues[0]['beneficiary_id_number'].'</td>
</tr>
<tr>
<td>Relationship: </td><td> '.$tblcustomfieldsvalues[0]['relationship'].'</td>
</tr>
<tr>
<td>Email Address:  </td><td> '.$tblcustomfieldsvalues[0]['beneficiary_email'].'</td>
</tr>
<tr>
<td>Contact Number: </td><td>'.$tblcustomfieldsvalues[0]['beneficiary_contacts'].'</td>
</tr>



</table>

';
	//Generate HTML table data from MySQL - end
	
	// add a page
	$pdf->AddPage();
	
	// output the HTML content
	$pdf->writeHTML($html, true, false, true, false, '');
	
	// reset pointer to the last page
	$pdf->lastPage();

	//Close and output PDF document
	$pdf->Output(md5(time()).'.pdf', 'I');