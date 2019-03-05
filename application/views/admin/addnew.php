
<!DOCTYPE html>
<html lang="en">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1" />

    <title>Add new proposal</title>

    <link rel="shortcut icon" href="<?php echo base_url()."uploads";?>/company/favicon.png" id="favicon">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets";?>/css/reset.min.css?v=2.2.1" id="reset-css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets";?>/plugins/roboto/roboto.css?v=2.2.1" id="roboto-css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets";?>/plugins/app-build/vendor.css?v=2.2.1" id="vendor-css">

    <link href="<?php echo base_url()."assets";?>/css/style.min.css?v=2.2.1" rel="stylesheet">

    
    <style class="custom_style_admin-menu">
.admin #side-menu,.admin #setup-menu{
background:#2a437c;
}
body {
background:#2a437c;
}
#setup-menu-wrapper {
background:#2a437c;
}
</style>
<style class="custom_style_admin-menu-submenu-open">
.admin #side-menu li .nav-second-level li,.admin #setup-menu li .nav-second-level li{
background:#cadb75;
}
</style>
<style class="custom_style_top-header">
.admin #header{
background:#88bee2;
}
</style>
<style class="custom_style_top-header-links">
.admin .navbar-nav > li > a, ul.mobile-icon-menu>li>a,.mobile-menu-toggle, .open-customizer-mobile{
color:#4423da;
}
</style>
<script>var site_url="https://libertas-fund.com/contact/",admin_url="https://libertas-fund.com/contact/admin/",max_php_ini_upload_size_bytes="2097152",calendarIDs="",is_admin="1",is_staff_member="1",has_permission_tasks_checklist_items_delete="1",app_language="english",app_is_mobile="",app_user_browser="chrome",app_date_format="Y-m-d",app_decimal_places="2",app_scroll_responsive_tables="0",app_company_is_required="1",app_default_view_calendar="month",app_maximum_allowed_ticket_attachments="4",app_show_setup_menu_item_only_on_hover="0",app_calendar_events_limit="4",app_tables_pagination_limit="25",app_newsfeed_maximum_files_upload="10",app_time_format="24",app_decimal_separator=".",app_thousand_separator=",",app_currency_placement="before",app_timezone="Africa/Harare",app_calendar_first_day="0",app_allowed_files=".png,.jpg,.pdf,.doc,.docx,.xls,.xlsx,.zip,.rar,.txt",app_acceptable_mimes="image/png, image/jpeg, application/pdf, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/vnd.ms-excel, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/x-zip, application/x-rar, text/plain",app_show_table_export_button="to_all",app_desktop_notifications="0",app_dismiss_desktop_not_after="0",app_enable_google_picker="0",app_google_client_id="",google_api="";var appLang = {};appLang["invoice_task_billable_timers_found"] = "Started timers found";appLang["validation_extension_not_allowed"] = "File extension not allowed";appLang["tag"] = "Tag";appLang["options"] = "Options";appLang["no_items_warning"] = "Enter at least one item.";appLang["item_forgotten_in_preview"] = "Have you forgotten to add this item?";appLang["email_exists"] = "Email already exists";appLang["new_notification"] = "New Notification!";appLang["estimate_number_exists"] = "This estimate number exists for the ongoing year.";appLang["invoice_number_exists"] = "This invoice number exists for the ongoing year.";appLang["confirm_action_prompt"] = "Are you sure you want to perform this action?";appLang["calendar_expand"] = "expand";appLang["proposal_save"] = "Save Proposal";appLang["contract_save"] = "Save Contract";appLang["media_files"] = "Files";appLang["credit_note_number_exists"] = "Credit note number already exists";appLang["item_field_not_formatted"] = "The number in the input field is not formatted while edit/add item and should remain not formatted do not try to format it manually in here.";appLang["filter_by"] = "Filter by";appLang["you_can_not_upload_any_more_files"] = "You can not upload any more files";appLang["cancel_upload"] = "Cancel Upload";appLang["remove_file"] = "Remove file";appLang["browser_not_support_drag_and_drop"] = "Your browser does not support drag'n'drop file uploads";appLang["drop_files_here_to_upload"] = "Drop files here to upload";appLang["file_exceeds_max_filesize"] = "The uploaded file exceeds the upload_max_filesize directive in php.ini (2 MB)";appLang["file_exceeds_maxfile_size_in_form"] = "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form (2 MB)";appLang["unit"] = "Unit";appLang["dt_length_menu_all"] = "All";appLang["dt_button_reload"] = "Reload";appLang["dt_button_excel"] = "Excel";appLang["dt_button_csv"] = "CSV";appLang["dt_button_pdf"] = "PDF";appLang["dt_button_print"] = "Print";appLang["dt_button_export"] = "Export";appLang["search_ajax_empty"] = "Select and begin typing";appLang["search_ajax_initialized"] = "Start typing to search";appLang["search_ajax_searching"] = "Searching...";appLang["not_results_found"] = "No results found";appLang["search_ajax_placeholder"] = "Type to search...";appLang["currently_selected"] = "Currently Selected";appLang["task_stop_timer"] = "Stop Timer";appLang["dt_button_column_visibility"] = "Visibility";appLang["note"] = "Note";appLang["search_tasks"] = "Search Tasks";appLang["confirm"] = "Confirm";appLang["showing_billable_tasks_from_project"] = "Showing billable tasks from project";appLang["invoice_task_item_project_tasks_not_included"] = "Projects tasks are not included in this list.";appLang["credit_amount_bigger_then_invoice_balance"] = "Total credits amount is bigger then invoice balance due";appLang["credit_amount_bigger_then_credit_note_remaining_credits"] = "Total credits amount is bigger then remaining credits";appLang["save"] = "Save";appLang["expense"] = "Expense";appLang["ticket"] = "Ticket";appLang["lead"] = "Lead";appLang["create_reminder"] = "Create Reminder";</script>

    <script>
        appLang['datatables'] = {"emptyTable":"No entries found","info":"Showing _START_ to _END_ of _TOTAL_ entries","infoEmpty":"Showing 0 to 0 of 0 entries","infoFiltered":"(filtered from _MAX_ total entries)","lengthMenu":"_MENU_","loadingRecords":"Loading...","processing":"<div class=\"dt-loader\"><\/div>","search":"<div class=\"input-group\"><span class=\"input-group-addon\"><span class=\"fa fa-search\"><\/span><\/span>","searchPlaceholder":"Search...","zeroRecords":"No matching records found","paginate":{"first":"First","last":"Last","next":"Next","previous":"Previous"},"aria":{"sortAscending":" activate to sort column ascending","sortDescending":" activate to sort column descending"}};
        var totalUnreadNotifications = 0,
        userRecentSearches = ["gg","proposal"],
        proposalsTemplates = [],
        contractsTemplates = [],
        availableTags = [],
        availableTagsIds = [],
        billingAndShippingFields = ['billing_street','billing_city','billing_state','billing_zip','billing_country','shipping_street','shipping_city','shipping_state','shipping_zip','shipping_country'],
        locale = 'en',
        isRTL = 'false',
        tinymceLang = '',
        monthsJSON = '["January","February","March","April","May","June","July","August","September","October","November","December"]',
        taskid,taskTrackingStatsData,taskAttachmentDropzone,taskCommentAttachmentDropzone,leadAttachmentsDropzone,newsFeedDropzone,expensePreviewDropzone,taskTrackingChart,cfh_popover_templates = {},_table_api;
    </script>
        <script>
        if (typeof (jQuery) === 'undefined' && !window.deferAfterjQueryLoaded) {
            window.deferAfterjQueryLoaded = [];
            Object.defineProperty(window, "$", {
                set: function (value) {
                    window.setTimeout(function () {
                        $.each(window.deferAfterjQueryLoaded, function (index, fn) {
                            fn();
                        });
                    }, 0);
                    Object.defineProperty(window, "$", {
                        value: value
                    });
                },
                configurable: true
            });
        }

        var csrfData = {"formatted":{"csrf_token_name":"ac7687ab509914703882c1daa59bd34d"},"token_name":"csrf_token_name","hash":"ac7687ab509914703882c1daa59bd34d"};

        if (typeof(jQuery) == 'undefined') {

            window.deferAfterjQueryLoaded.push(function () {
                csrf_jquery_ajax_setup();
            });
            window.addEventListener('load',function(){
                csrf_jquery_ajax_setup();
            },true);
        } else {
            csrf_jquery_ajax_setup();
        }

        function csrf_jquery_ajax_setup() {
                $.ajaxSetup({
                    data: csrfData.formatted
                });
        }
 </script>
 </head>
<body class="app admin  proposals proposal user-id-1 chrome">
<div id="header">
   <div class="hide-menu"><i class="fa fa-bars"></i></div>
   <div id="logo">
      <a href="<?php echo base_url()."admin";?>/" class=" logo img-responsive">
            <img src="<?php echo base_url()."uploads";?>/company/logo.png" class="img-responsive" alt="Libertas-Fund">
        </a>   </div>
   <nav>
      <div class="small-logo">
         <span class="text-primary">
            <a href="<?php echo base_url()."admin";?>/" class=" logo img-responsive">
            <img src="<?php echo base_url()."uploads";?>/company/logo.png" class="img-responsive" alt="Libertas-Fund">
        </a>         </span>
      </div>
      <div class="mobile-menu">
         <button type="button" class="navbar-toggle visible-md visible-sm visible-xs mobile-menu-toggle collapsed" data-toggle="collapse" data-target="#mobile-collapse" aria-expanded="false">
            <i class="fa fa-chevron-down"></i>
         </button>
         <ul class="mobile-icon-menu">
                     </ul>
         <div class="mobile-navbar collapse" id="mobile-collapse" aria-expanded="false" style="height: 0px;" role="navigation" >
            <ul class="nav navbar-nav">
               <li class="header-my-profile"><a href="<?php echo base_url()."admin";?>/profile">My Profile</a></li>
               <li class="header-my-timesheets"><a href="<?php echo base_url()."admin";?>/staff/timesheets">My Timesheets</a></li>
               <li class="header-edit-profile"><a href="<?php echo base_url()."admin";?>/staff/edit_profile">Edit Profile</a></li>
                                 <li class="header-newsfeed">
                   <a href="#" class="open_newsfeed">
                     Share documents, ideas..                  </a>
               </li>
                        <li class="header-logout"><a href="#" onclick="logout(); return false;">Logout</a></li>
         </ul>
      </div>
   </div>
   <ul class="nav navbar-nav navbar-right">
      <li id="top_search" class="dropdown" data-toggle="tooltip" data-placement="bottom" data-title="Use # + tagname to search by tags">
   <input type="search" id="search_input" class="form-control" placeholder="Search...">
   <div id="search_results">
   </div>
   <ul class="dropdown-menu search-results animated fadeIn no-mtop search-history" id="search-history">
   </ul>
</li>
<li id="top_search_button">
   <button class="btn"><i class="fa fa-search"></i></button>
</li>
        <li class="icon header-user-profile" data-toggle="tooltip" title="Asif  Aziz" data-placement="bottom">
      <a href="#" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="false">
         <img src="<?php echo base_url()."assets";?>/images/user-placeholder.jpg"  class="img img-responsive staff-profile-image-small pull-left" alt="Asif  Aziz" />      </a>
      <ul class="dropdown-menu animated fadeIn">
         <li class="header-my-profile"><a href="<?php echo base_url()."admin";?>/profile">My Profile</a></li>
         <li class="header-my-timesheets"><a href="<?php echo base_url()."admin";?>/staff/timesheets">My Timesheets</a></li>
         <li class="header-edit-profile"><a href="<?php echo base_url()."admin";?>/staff/edit_profile">Edit Profile</a></li>
                     <li class="dropdown-submenu pull-left header-languages">
               <a href="#" tabindex="-1">Language</a>
               <ul class="dropdown-menu dropdown-menu">
                  <li class=""><a href="<?php echo base_url()."admin";?>/staff/change_language">System Default</a></li>
                                       <li>
                     <a href="<?php echo base_url()."admin";?>/staff/change_language/catalan">Catalan</a>
                                       <li>
                     <a href="<?php echo base_url()."admin";?>/staff/change_language/chinese">Chinese</a>
                                       <li>
                     <a href="<?php echo base_url()."admin";?>/staff/change_language/czech">Czech</a>
                                       <li>
                     <a href="<?php echo base_url()."admin";?>/staff/change_language/dutch">Dutch</a>
                                       <li class="active">
                     <a href="<?php echo base_url()."admin";?>/staff/change_language/english">English</a>
                                       <li>
                     <a href="<?php echo base_url()."admin";?>/staff/change_language/french">French</a>
                                       <li>
                     <a href="<?php echo base_url()."admin";?>/staff/change_language/german">German</a>
                                       <li>
                     <a href="<?php echo base_url()."admin";?>/staff/change_language/indonesia">Indonesia</a>
                                       <li>
                     <a href="<?php echo base_url()."admin";?>/staff/change_language/italian">Italian</a>
                                       <li>
                     <a href="<?php echo base_url()."admin";?>/staff/change_language/japanese">Japanese</a>
                                       <li>
                     <a href="<?php echo base_url()."admin";?>/staff/change_language/persian">Persian</a>
                                       <li>
                     <a href="<?php echo base_url()."admin";?>/staff/change_language/polish">Polish</a>
                                       <li>
                     <a href="<?php echo base_url()."admin";?>/staff/change_language/portuguese">Portuguese</a>
                                       <li>
                     <a href="<?php echo base_url()."admin";?>/staff/change_language/portuguese_br">Portuguese_br</a>
                                       <li>
                     <a href="<?php echo base_url()."admin";?>/staff/change_language/romanian">Romanian</a>
                                       <li>
                     <a href="<?php echo base_url()."admin";?>/staff/change_language/russian">Russian</a>
                                       <li>
                     <a href="<?php echo base_url()."admin";?>/staff/change_language/slovak">Slovak</a>
                                       <li>
                     <a href="<?php echo base_url()."admin";?>/staff/change_language/spanish">Spanish</a>
                                       <li>
                     <a href="<?php echo base_url()."admin";?>/staff/change_language/swedish">Swedish</a>
                                       <li>
                     <a href="<?php echo base_url()."admin";?>/staff/change_language/turkish">Turkish</a>
                                       <li>
                     <a href="<?php echo base_url()."admin";?>/staff/change_language/vietnamese">Vietnamese</a>
                                 </ul>
            </li>
                  <li class="header-logout">
            <a href="#" onclick="logout(); return false;">Logout</a>
         </li>
      </ul>
   </li>
         <li class="icon header-newsfeed">
         <a href="#" class="open_newsfeed" data-toggle="tooltip" title="Share documents, ideas.." data-placement="bottom"><i class="fa fa-share fa-fw fa-lg" aria-hidden="true"></i></a>
      </li>
      <li class="icon header-todo">
      <a href="<?php echo base_url()."admin";?>/todo" data-toggle="tooltip" title="Todo items" data-placement="bottom"><i class="fa fa-check-square-o fa-fw fa-lg"></i>
         <span class="label bg-warning icon-total-indicator nav-total-todos hide">0</span>
      </a>
   </li>
   <li class="icon header-timers timer-button" data-placement="bottom" data-toggle="tooltip" data-title="My Timesheets">
      <a href="#" id="top-timers" class="dropdown-toggle top-timers" data-toggle="dropdown">
         <i class="fa fa-clock-o fa-fw fa-lg" aria-hidden="true"></i>
         <span class="label bg-success icon-total-indicator icon-started-timers hide">
            0         </span>
      </a>
      <ul class="dropdown-menu animated fadeIn started-timers-top width350" id="started-timers-top">
         <li class="text-center inline-block full-width">No started timers found</li><li class="divider top-dropdown-btn-divider"></li><button class="mtop15 text-center btn btn-success started-timers-button top-dropdown-btn" onclick="timer_action(this,0); return false;"><i class="fa fa-clock-o"></i> Start Timer</button><div class="text-center mtop15 view-all-timesheets"><a href="<?php echo base_url()."admin";?>/staff/timesheets?view=all">View all timesheets</a></div>      </ul>
   </li>
   <li class="dropdown notifications-wrapper header-notifications" data-toggle="tooltip" title="Notifications" data-placement="bottom">
      <a href="#" class="dropdown-toggle notifications-icon" data-toggle="dropdown" aria-expanded="false">
  <i class="fa fa-bell-o fa-fw fa-lg"></i>
  </a>
<ul class="dropdown-menu notifications animated fadeIn width400" data-total-unread="0">
  <li class="not_mark_all_as_read">
    <a href="#" onclick="mark_all_notifications_as_read_inline(); return false;">Mark all as read</a>
  </li>
      <li class="relative notification-wrapper" data-notification-id="15">
              <a href="<?php echo base_url()."admin";?>/clients/client/6?group=attachments" class="notification-top notification-link">
                <div class="notification-box unread">
          <img src="<?php echo base_url()."assets";?>/images/user-placeholder.jpg" class="client-profile-image-small img-circle pull-left notification-image">        <div class="media-body">
          <span class="notification-title">Rashaad  Karamat - New File(s) Uploaded in Profile<br /><span class="label inline-block mtop5 label-info">Customer</span></span><br />
        <small class="text-muted">
          <span class="text-has-action" data-placement="right" data-toggle="tooltip" data-title="2019-02-01 23:14:31">
            2 days ago          </span>
        </small>
      </div>
    </div>
        </a>
        <a href="#" class="text-muted pull-right not-mark-as-read-inline" onclick="set_notification_read_inline(15);" data-placement="left" data-toggle="tooltip" data-title="Mark as Read"><small><i class="fa fa-circle-thin" aria-hidden="true"></i></small></a>
  </li>
    <li class="relative notification-wrapper" data-notification-id="14">
              <a href="<?php echo base_url()."admin";?>/proposals/list_proposals/7" class="notification-top notification-link">
                <div class="notification-box unread">
                  <div class="media-body">
          <span class="notification-title">Proposal Accepted - PRO-000007</span><br />
        <small class="text-muted">
          <span class="text-has-action" data-placement="right" data-toggle="tooltip" data-title="2019-02-01 23:12:23">
            2 days ago          </span>
        </small>
      </div>
    </div>
        </a>
        <a href="#" class="text-muted pull-right not-mark-as-read-inline" onclick="set_notification_read_inline(14);" data-placement="left" data-toggle="tooltip" data-title="Mark as Read"><small><i class="fa fa-circle-thin" aria-hidden="true"></i></small></a>
  </li>
    <li class="relative notification-wrapper" data-notification-id="13">
              <a href="<?php echo base_url()."admin";?>/clients/client/3?group=attachments" class="notification-top notification-link">
                <div class="notification-box unread">
          <img src="<?php echo base_url()."uploads";?>/client_profile_images/2/small_logo bottom.png" class="client-profile-image-small img-circle pull-left notification-image">        <div class="media-body">
          <span class="notification-title">Farzie Karamat - New File(s) Uploaded in Profile<br /><span class="label inline-block mtop5 label-info">Customer</span></span><br />
        <small class="text-muted">
          <span class="text-has-action" data-placement="right" data-toggle="tooltip" data-title="2019-02-01 21:07:08">
            2 days ago          </span>
        </small>
      </div>
    </div>
        </a>
        <a href="#" class="text-muted pull-right not-mark-as-read-inline" onclick="set_notification_read_inline(13);" data-placement="left" data-toggle="tooltip" data-title="Mark as Read"><small><i class="fa fa-circle-thin" aria-hidden="true"></i></small></a>
  </li>
    <li class="relative notification-wrapper" data-notification-id="12">
              <a href="<?php echo base_url()."admin";?>/invoices/list_invoices/4" class="notification-top notification-link">
                <div class="notification-box unread">
                  <div class="media-body">
          <span class="notification-title">An invoice with number INV-000004 has been viewed</span><br />
        <small class="text-muted">
          <span class="text-has-action" data-placement="right" data-toggle="tooltip" data-title="2019-02-01 21:02:48">
            2 days ago          </span>
        </small>
      </div>
    </div>
        </a>
        <a href="#" class="text-muted pull-right not-mark-as-read-inline" onclick="set_notification_read_inline(12);" data-placement="left" data-toggle="tooltip" data-title="Mark as Read"><small><i class="fa fa-circle-thin" aria-hidden="true"></i></small></a>
  </li>
    <li class="relative notification-wrapper" data-notification-id="11">
              <a href="<?php echo base_url()."admin";?>/proposals/list_proposals/5" class="notification-top notification-link">
                <div class="notification-box">
                  <div class="media-body">
          <span class="notification-title">Proposal Accepted - PRO-000005</span><br />
        <small class="text-muted">
          <span class="text-has-action" data-placement="right" data-toggle="tooltip" data-title="2019-02-01 20:30:06">
            2 days ago          </span>
        </small>
      </div>
    </div>
        </a>
    </li>
    <li class="relative notification-wrapper" data-notification-id="10">
              <a href="<?php echo base_url()."admin";?>/estimates/list_estimates/2" class="notification-top notification-link">
                <div class="notification-box">
          <img src="<?php echo base_url()."assets";?>/images/user-placeholder.jpg" class="client-profile-image-small img-circle pull-left notification-image">        <div class="media-body">
          <span class="notification-title">Farzie karamat - An estimate with number EST-000002 has been viewed<br /><span class="label inline-block mtop5 label-info">Customer</span></span><br />
        <small class="text-muted">
          <span class="text-has-action" data-placement="right" data-toggle="tooltip" data-title="2019-01-31 20:31:48">
            3 days ago          </span>
        </small>
      </div>
    </div>
        </a>
    </li>
    <li class="relative notification-wrapper" data-notification-id="9">
              <a href="<?php echo base_url()."admin";?>/proposals/list_proposals/3" class="notification-top notification-link">
                <div class="notification-box">
          <img src="<?php echo base_url()."assets";?>/images/user-placeholder.jpg" class="client-profile-image-small img-circle pull-left notification-image">        <div class="media-body">
          <span class="notification-title">Farzie karamat - An proposal with number PRO-000003 has been viewed<br /><span class="label inline-block mtop5 label-info">Customer</span></span><br />
        <small class="text-muted">
          <span class="text-has-action" data-placement="right" data-toggle="tooltip" data-title="2019-01-31 20:27:45">
            3 days ago          </span>
        </small>
      </div>
    </div>
        </a>
    </li>
    <li class="relative notification-wrapper" data-notification-id="8">
              <a href="<?php echo base_url()."admin";?>/contracts/contract/1" class="notification-top notification-link">
                <div class="notification-box">
                  <div class="media-body">
          <span class="notification-title">Contract with subject <b>Bold</b> has been signed by the customer</span><br />
        <small class="text-muted">
          <span class="text-has-action" data-placement="right" data-toggle="tooltip" data-title="2019-01-31 20:11:05">
            3 days ago          </span>
        </small>
      </div>
    </div>
        </a>
    </li>
    <li class="relative notification-wrapper" data-notification-id="7">
              <a href="<?php echo base_url()."admin";?>/invoices/list_invoices/2" class="notification-top notification-link">
                <div class="notification-box">
          <img src="<?php echo base_url()."assets";?>/images/user-placeholder.jpg" class="client-profile-image-small img-circle pull-left notification-image">        <div class="media-body">
          <span class="notification-title">Farzie karamat - An invoice with number INV-000002 has been viewed<br /><span class="label inline-block mtop5 label-info">Customer</span></span><br />
        <small class="text-muted">
          <span class="text-has-action" data-placement="right" data-toggle="tooltip" data-title="2019-01-31 20:08:04">
            3 days ago          </span>
        </small>
      </div>
    </div>
        </a>
    </li>
    <li class="relative notification-wrapper" data-notification-id="6">
              <a href="<?php echo base_url()."admin";?>/estimates/list_estimates/1" class="notification-top notification-link">
                <div class="notification-box">
                  <div class="media-body">
          <span class="notification-title">Congratulations! Client accepted estimate with number EST-000001</span><br />
        <small class="text-muted">
          <span class="text-has-action" data-placement="right" data-toggle="tooltip" data-title="2019-01-31 20:08:02">
            3 days ago          </span>
        </small>
      </div>
    </div>
        </a>
    </li>
    <li class="relative notification-wrapper" data-notification-id="5">
              <a href="<?php echo base_url()."admin";?>/estimates/list_estimates/1" class="notification-top notification-link">
                <div class="notification-box">
          <img src="<?php echo base_url()."assets";?>/images/user-placeholder.jpg" class="client-profile-image-small img-circle pull-left notification-image">        <div class="media-body">
          <span class="notification-title">Farzie karamat - An estimate with number EST-000001 has been viewed<br /><span class="label inline-block mtop5 label-info">Customer</span></span><br />
        <small class="text-muted">
          <span class="text-has-action" data-placement="right" data-toggle="tooltip" data-title="2019-01-31 20:07:12">
            3 days ago          </span>
        </small>
      </div>
    </div>
        </a>
    </li>
    <li class="relative notification-wrapper" data-notification-id="4">
              <a href="<?php echo base_url()."admin";?>/invoices/list_invoices/1" class="notification-top notification-link">
                <div class="notification-box">
          <img src="<?php echo base_url()."assets";?>/images/user-placeholder.jpg" class="client-profile-image-small img-circle pull-left notification-image">        <div class="media-body">
          <span class="notification-title">Farzie karamat - An invoice with number INV-000001 has been viewed<br /><span class="label inline-block mtop5 label-info">Customer</span></span><br />
        <small class="text-muted">
          <span class="text-has-action" data-placement="right" data-toggle="tooltip" data-title="2019-01-31 20:05:55">
            3 days ago          </span>
        </small>
      </div>
    </div>
        </a>
    </li>
    <li class="relative notification-wrapper" data-notification-id="3">
              <a href="<?php echo base_url()."admin";?>/proposals/list_proposals/2" class="notification-top notification-link">
                <div class="notification-box">
                  <div class="media-body">
          <span class="notification-title">An proposal with number PRO-000002 has been viewed</span><br />
        <small class="text-muted">
          <span class="text-has-action" data-placement="right" data-toggle="tooltip" data-title="2019-01-31 20:05:26">
            3 days ago          </span>
        </small>
      </div>
    </div>
        </a>
    </li>
    <li class="relative notification-wrapper" data-notification-id="2">
              <a href="<?php echo base_url()."admin";?>/proposals/list_proposals/2" class="notification-top notification-link">
                <div class="notification-box">
                  <div class="media-body">
          <span class="notification-title">Proposal Accepted - PRO-000002</span><br />
        <small class="text-muted">
          <span class="text-has-action" data-placement="right" data-toggle="tooltip" data-title="2019-01-31 19:58:21">
            3 days ago          </span>
        </small>
      </div>
    </div>
        </a>
    </li>
    <li class="relative notification-wrapper" data-notification-id="1">
              <a href="<?php echo base_url()."admin";?>/contracts/contract/1" class="notification-top notification-link">
                <div class="notification-box">
                  <div class="media-body">
          <span class="notification-title">New comment from customer on contract Bold ...</span><br />
        <small class="text-muted">
          <span class="text-has-action" data-placement="right" data-toggle="tooltip" data-title="2019-01-21 19:31:59">
            2 weeks ago          </span>
        </small>
      </div>
    </div>
        </a>
    </li>
  <li class="divider no-mbot"></li>
<li class="text-center">
      <a href="<?php echo base_url()."admin";?>/profile?notifications=true">View all notifications</a>
  </li>
</ul>
   </li>
</ul>
</nav>
</div>
<div id="mobile-search" class="hide">
   <ul>
       </ul>
</div>
<div id="setup-menu-wrapper" class="animated ">
    <ul class="nav metis-menu" id="setup-menu">
        <li>
            <a class="close-customizer"><i class="fa fa-close"></i></a>
            <span class="text-left bold customizer-heading">Setup</span>
        </li>
                    <li>
                <a href="<?php echo base_url()."admin";?>/staff">Staff                                    </a>
                            </li>
                        <li>
                <a href="#">Customers                                        <span class="fa arrow"></span>
                                    </a>
                                <ul class="nav nav-second-level collapse" aria-expanded="false">
                                           <li>
                        <a href="<?php echo base_url()."admin";?>/clients/groups">
                                                        Groups                        </a>
                    </li>
                                    </ul>
                            </li>
                        <li>
                <a href="#">Support                                        <span class="fa arrow"></span>
                                    </a>
                                <ul class="nav nav-second-level collapse" aria-expanded="false">
                                           <li>
                        <a href="<?php echo base_url()."admin";?>/departments">
                                                        Departments                        </a>
                    </li>
                                           <li>
                        <a href="<?php echo base_url()."admin";?>/tickets/predefined_replies">
                                                        Predefined Replies                        </a>
                    </li>
                                           <li>
                        <a href="<?php echo base_url()."admin";?>/tickets/priorities">
                                                        Ticket Priority                        </a>
                    </li>
                                           <li>
                        <a href="<?php echo base_url()."admin";?>/tickets/statuses">
                                                        Ticket Statuses                        </a>
                    </li>
                                           <li>
                        <a href="<?php echo base_url()."admin";?>/tickets/services">
                                                        Services                        </a>
                    </li>
                                           <li>
                        <a href="<?php echo base_url()."admin";?>/tickets/spam_filters">
                                                        Spam Filters                        </a>
                    </li>
                                    </ul>
                            </li>
                        <li>
                <a href="#">Leads                                        <span class="fa arrow"></span>
                                    </a>
                                <ul class="nav nav-second-level collapse" aria-expanded="false">
                                           <li>
                        <a href="<?php echo base_url()."admin";?>/leads/sources">
                                                        Sources                        </a>
                    </li>
                                           <li>
                        <a href="<?php echo base_url()."admin";?>/leads/statuses">
                                                        Statuses                        </a>
                    </li>
                                           <li>
                        <a href="<?php echo base_url()."admin";?>/leads/email_integration">
                                                        Email Integration                        </a>
                    </li>
                                           <li>
                        <a href="<?php echo base_url()."admin";?>/leads/forms">
                                                        Web to Lead                        </a>
                    </li>
                                    </ul>
                            </li>
                        <li>
                <a href="#">Finance                                        <span class="fa arrow"></span>
                                    </a>
                                <ul class="nav nav-second-level collapse" aria-expanded="false">
                                           <li>
                        <a href="<?php echo base_url()."admin";?>/taxes">
                                                        Tax Rates                        </a>
                    </li>
                                           <li>
                        <a href="<?php echo base_url()."admin";?>/currencies">
                                                        Currencies                        </a>
                    </li>
                                           <li>
                        <a href="<?php echo base_url()."admin";?>/paymentmodes">
                                                        Payment Modes                        </a>
                    </li>
                                           <li>
                        <a href="<?php echo base_url()."admin";?>/expenses/categories">
                                                        Expenses Categories                        </a>
                    </li>
                                    </ul>
                            </li>
                        <li>
                <a href="#">Contracts                                        <span class="fa arrow"></span>
                                    </a>
                                <ul class="nav nav-second-level collapse" aria-expanded="false">
                                           <li>
                        <a href="<?php echo base_url()."admin";?>/contracts/types">
                                                        Contract Types                        </a>
                    </li>
                                    </ul>
                            </li>
                        <li>
                <a href="<?php echo base_url()."admin";?>/emails">Email Templates                                    </a>
                            </li>
                        <li>
                <a href="<?php echo base_url()."admin";?>/custom_fields">Custom Fields                                    </a>
                            </li>
                        <li>
                <a href="<?php echo base_url()."admin";?>/gdpr">GDPR                                    </a>
                            </li>
                        <li>
                <a href="<?php echo base_url()."admin";?>/roles">Roles                                    </a>
                            </li>
                        <li>
                <a href="#">Menu Setup                                        <span class="fa arrow"></span>
                                    </a>
                                <ul class="nav nav-second-level collapse" aria-expanded="false">
                                           <li>
                        <a href="<?php echo base_url()."admin";?>/utilities/main_menu">
                                                        Main Menu                        </a>
                    </li>
                                           <li>
                        <a href="<?php echo base_url()."admin";?>/utilities/setup_menu">
                                                        Setup Menu                        </a>
                    </li>
                                    </ul>
                            </li>
                        <li>
                <a href="<?php echo base_url()."admin";?>/utilities/theme_style">Theme Style                                    </a>
                            </li>
                        <li>
                <a href="<?php echo base_url()."admin";?>/settings">Settings                                    </a>
                            </li>
                            <li>
            <a href="https://help.perfexcrm.com" target="_blank">Help</a>
        </li>
            </ul>
</div>
<aside id="menu" class="sidebar">
   <ul class="nav metis-menu" id="side-menu">
      <li class="dashboard_user">
         Welcome Asif  <i class="fa fa-power-off top-left-logout pull-right" data-toggle="tooltip" data-title="Logout" data-placement="right" onclick="logout(); return false;"></i>
      </li>
            <li class="quick-links">
         <div class="dropdown dropdown-quick-links">
            <a href="#" class="dropdown-toggle" id="dropdownQuickLinks" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <i class="fa fa-gavel" aria-hidden="true"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownQuickLinks">
                              <li>
                  <a href="<?php echo base_url()."admin";?>/invoices/invoice" >
                    <i class="fa fa-plus-square-o"></i>
                    Invoice                  </a>
               </li>
                              <li>
                  <a href="<?php echo base_url()."admin";?>/estimates/estimate" >
                    <i class="fa fa-plus-square-o"></i>
                    Estimate                  </a>
               </li>
                              <li>
                  <a href="<?php echo base_url()."admin";?>/proposals/proposal" >
                    <i class="fa fa-plus-square-o"></i>
                    Proposal                  </a>
               </li>
                              <li>
                  <a href="<?php echo base_url()."admin";?>/credit_notes/credit_note" >
                    <i class="fa fa-plus-square-o"></i>
                    Credit Note                  </a>
               </li>
                              <li>
                  <a href="<?php echo base_url()."admin";?>/clients/client" >
                    <i class="fa fa-plus-square-o"></i>
                    Customer                  </a>
               </li>
                              <li>
                  <a href="<?php echo base_url()."admin";?>/subscriptions/create" >
                    <i class="fa fa-plus-square-o"></i>
                    Subscription                  </a>
               </li>
                              <li>
                  <a href="<?php echo base_url()."admin";?>/projects/project" >
                    <i class="fa fa-plus-square-o"></i>
                    Project                  </a>
               </li>
                              <li>
                  <a href="#" onclick="new_task();return false;">
                    <i class="fa fa-plus-square-o"></i>
                    Task                  </a>
               </li>
                              <li>
                  <a href="#" onclick="init_lead(); return false;">
                    <i class="fa fa-plus-square-o"></i>
                    Lead                  </a>
               </li>
                              <li>
                  <a href="<?php echo base_url()."admin";?>/expenses/expense" >
                    <i class="fa fa-plus-square-o"></i>
                    Expense                  </a>
               </li>
                              <li>
                  <a href="<?php echo base_url()."admin";?>/contracts/contract" >
                    <i class="fa fa-plus-square-o"></i>
                    Contract                  </a>
               </li>
                              <li>
                  <a href="<?php echo base_url()."admin";?>/goals/goal" >
                    <i class="fa fa-plus-square-o"></i>
                    Goal                  </a>
               </li>
                              <li>
                  <a href="<?php echo base_url()."admin";?>/knowledge_base/article" >
                    <i class="fa fa-plus-square-o"></i>
                    Article                  </a>
               </li>
                              <li>
                  <a href="<?php echo base_url()."admin";?>/surveys/survey" >
                    <i class="fa fa-plus-square-o"></i>
                    Survey                  </a>
               </li>
                              <li>
                  <a href="<?php echo base_url()."admin";?>/tickets/add" >
                    <i class="fa fa-plus-square-o"></i>
                    Ticket                  </a>
               </li>
                              <li>
                  <a href="<?php echo base_url()."admin";?>/staff/member" >
                    <i class="fa fa-plus-square-o"></i>
                    Staff Member                  </a>
               </li>
                              <li>
                  <a href="<?php echo base_url()."admin";?>/utilities/calendar?new_event=true&date=2019-02-03" >
                    <i class="fa fa-plus-square-o"></i>
                    Event                  </a>
               </li>
                           </ul>
         </div>
      </li>
                  <li class="menu-item-dashboard">
         <a href="<?php echo base_url()."admin";?>/" aria-expanded="false"><i class="fa fa-home menu-icon"></i>
          <span class="menu-text">
             Dashboard          </span>
                  </a>
               </li>
      <li><a href="#">HRM App</a></li>            <li class="menu-item-customers">
         <a href="<?php echo base_url()."admin";?>/clients" aria-expanded="false"><i class="fa fa-user-o menu-icon"></i>
          <span class="menu-text">
             Customers          </span>
                  </a>
               </li>
                  <li class="menu-item-sales">
         <a href="#" aria-expanded="false"><i class="fa fa-balance-scale menu-icon"></i>
          <span class="menu-text">
             Sales          </span>
                  <span class="fa arrow"></span>
                  </a>
                  <ul class="nav nav-second-level collapse" aria-expanded="false">
                        <li class="sub-menu-item-child-proposals"><a href="<?php echo base_url()."admin";?>/proposals">
                                <span class="sub-menu-text">
                   Proposals                 </span>
              </a>
            </li>
                        <li class="sub-menu-item-child-estimates"><a href="<?php echo base_url()."admin";?>/estimates/list_estimates">
                                <span class="sub-menu-text">
                   Estimates                 </span>
              </a>
            </li>
                        <li class="sub-menu-item-child-invoices"><a href="<?php echo base_url()."admin";?>/invoices/list_invoices">
                                <span class="sub-menu-text">
                   Invoices                 </span>
              </a>
            </li>
                        <li class="sub-menu-item-child-payments"><a href="<?php echo base_url()."admin";?>/payments">
                                <span class="sub-menu-text">
                   Payments                 </span>
              </a>
            </li>
                        <li class="sub-menu-item-credit_notes"><a href="<?php echo base_url()."admin";?>/credit_notes">
                              <i class="fa fa-adjust menu-icon"></i>
                                <span class="sub-menu-text">
                   Credit Notes                 </span>
              </a>
            </li>
                        <li class="sub-menu-item-child-items"><a href="<?php echo base_url()."admin";?>/invoice_items">
                                <span class="sub-menu-text">
                   Items                 </span>
              </a>
            </li>
                     </ul>
               </li>
                  <li class="menu-item-expenses">
         <a href="<?php echo base_url()."admin";?>/expenses/list_expenses" aria-expanded="false"><i class="fa fa-file-text-o menu-icon"></i>
          <span class="menu-text">
             Expenses          </span>
                  </a>
               </li>
                  <li class="menu-item-contracts">
         <a href="<?php echo base_url()."admin";?>/contracts" aria-expanded="false"><i class="fa fa-file menu-icon"></i>
          <span class="menu-text">
             Contracts          </span>
                  </a>
               </li>
                  <li class="menu-item-tasks">
         <a href="<?php echo base_url()."admin";?>/tasks/list_tasks" aria-expanded="false"><i class="fa fa-tasks menu-icon"></i>
          <span class="menu-text">
             Tasks          </span>
                  </a>
               </li>
                  <li class="menu-item-tickets">
         <a href="<?php echo base_url()."admin";?>/tickets" aria-expanded="false"><i class="fa fa-ticket menu-icon"></i>
          <span class="menu-text">
             Support          </span>
                  </a>
               </li>
                  <li class="menu-item-leads">
         <a href="<?php echo base_url()."admin";?>/leads" aria-expanded="false"><i class="fa fa-tty menu-icon"></i>
          <span class="menu-text">
             Leads          </span>
                  </a>
               </li>
                  <li class="menu-item-knowledge-base">
         <a href="<?php echo base_url()."admin";?>/knowledge_base" aria-expanded="false"><i class="fa fa-folder-open-o menu-icon"></i>
          <span class="menu-text">
             Knowledge Base          </span>
                  </a>
               </li>
                  <li class="menu-item-utilities">
         <a href="#" aria-expanded="false"><i class="fa fa-cogs menu-icon"></i>
          <span class="menu-text">
             Utilities          </span>
                  <span class="fa arrow"></span>
                  </a>
                  <ul class="nav nav-second-level collapse" aria-expanded="false">
                        <li class="sub-menu-item-child-media"><a href="<?php echo base_url()."admin";?>/utilities/media">
                                <span class="sub-menu-text">
                   Media                 </span>
              </a>
            </li>
                        <li class="sub-menu-item-child-bulk-pdf-exporter"><a href="<?php echo base_url()."admin";?>/utilities/bulk_pdf_exporter">
                                <span class="sub-menu-text">
                   Bulk PDF Export                 </span>
              </a>
            </li>
                        <li class="sub-menu-item-child-calendar"><a href="<?php echo base_url()."admin";?>/utilities/calendar">
                                <span class="sub-menu-text">
                   Calendar                 </span>
              </a>
            </li>
                        <li class="sub-menu-item-child-goals-tracking"><a href="<?php echo base_url()."admin";?>/goals">
                                <span class="sub-menu-text">
                   Goals Tracking                 </span>
              </a>
            </li>
                        <li class="sub-menu-item-child-surveys"><a href="<?php echo base_url()."admin";?>/surveys">
                                <span class="sub-menu-text">
                   Surveys                 </span>
              </a>
            </li>
                        <li class="sub-menu-item-child-announcements"><a href="<?php echo base_url()."admin";?>/announcements">
                                <span class="sub-menu-text">
                   Announcements                 </span>
              </a>
            </li>
                        <li class="sub-menu-item-child-database-backup"><a href="<?php echo base_url()."admin";?>/utilities/backup">
                                <span class="sub-menu-text">
                   Database Backup                 </span>
              </a>
            </li>
                        <li class="sub-menu-item-child-activity-log"><a href="<?php echo base_url()."admin";?>/utilities/activity_log">
                                <span class="sub-menu-text">
                   Activity Log                 </span>
              </a>
            </li>
                        <li class="sub-menu-item-ticket-pipe-log"><a href="<?php echo base_url()."admin";?>/utilities/pipe_log">
                                <span class="sub-menu-text">
                   Ticket Pipe Log                 </span>
              </a>
            </li>
                     </ul>
               </li>
                  <li class="menu-item-reports">
         <a href="#" aria-expanded="false"><i class="fa fa-area-chart menu-icon"></i>
          <span class="menu-text">
             Reports          </span>
                  <span class="fa arrow"></span>
                  </a>
                  <ul class="nav nav-second-level collapse" aria-expanded="false">
                        <li class="sub-menu-item-child-sales"><a href="<?php echo base_url()."admin";?>/reports/sales">
                                <span class="sub-menu-text">
                   Sales                 </span>
              </a>
            </li>
                        <li class="sub-menu-item-child-expenses"><a href="<?php echo base_url()."admin";?>/reports/expenses">
                                <span class="sub-menu-text">
                   Expenses                 </span>
              </a>
            </li>
                        <li class="sub-menu-item-child-expenses-vs-income"><a href="<?php echo base_url()."admin";?>/reports/expenses_vs_income">
                                <span class="sub-menu-text">
                   Expenses vs Income                 </span>
              </a>
            </li>
                        <li class="sub-menu-item-child-leads"><a href="<?php echo base_url()."admin";?>/reports/leads">
                                <span class="sub-menu-text">
                   Leads                 </span>
              </a>
            </li>
                        <li class="sub-menu-item-reports_timesheets_overview"><a href="<?php echo base_url()."admin";?>/staff/timesheets?view=all">
                                <span class="sub-menu-text">
                   Timesheets overview                 </span>
              </a>
            </li>
                        <li class="sub-menu-item-child-kb-articles"><a href="<?php echo base_url()."admin";?>/reports/knowledge_base_articles">
                                <span class="sub-menu-text">
                   KB Articles                 </span>
              </a>
            </li>
                     </ul>
               </li>
                        <li id="setup-menu-item">
         <a href="#" class="open-customizer"><i class="fa fa-cog menu-icon"></i>
         <span class="menu-text">
           Setup         </span>
          </a>
               </li>
               </ul>
</aside>
<div id="wrapper">
   <div class="content accounting-template proposal">
      <div class="row">
                     
         <form action="<?php echo base_url()."admin";?>/Userproposal/getclients" id="proposal-form" class="_transaction_form proposal-form" method="post" accept-charset="utf-8">
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                                        
         <div class="col-md-12">
            <div class="panel_s">
               <div class="panel-body">
                  <div class="row">
                                          <div class="col-md-6 border-right">
                                                             
                                                                        
                                                                         <div class="col-md-12">
                              <div class="form-group select-placeholder">
                                 <label for="status" class="control-label">Select Clients</label>
                                                                  <select name="client" class="selectpicker" data-width="100%"  data-none-selected-text="Nothing selected">
                                                                   <?php
                                    $count = 0;
                                    foreach ($usersArray as $key => $value) {
                                        $count++;
                                        echo '<option value="'. $value['userid'] .'"> <a href="'.base_url().'admin/Userproposal?id='. $value['userid'] .'">'. $value['company'] . '</a></option>'
                                                       ;

                                    }
                                    ?>
                                                                     </select>


                              </div>
                           </div>
         <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Back</button>
        <button type="submit" class="btn btn-info">Create Proposal</button>
        
        <?php echo form_close(); ?>  </div>   
</div>
<script>
    // Maybe in modal? Eq convert to invoice or convert proposal to estimate/invoice
    if(typeof(jQuery) != 'undefined'){
        init_item_js();
    } else {
     window.addEventListener('load', function () {
       var initItemsJsInterval = setInterval(function(){
            if(typeof(jQuery) != 'undefined') {
                init_item_js();
                clearInterval(initItemsJsInterval);
            }
         }, 1000);
     });
  }
// Items add/edit
function manage_invoice_items(form) {
    var data = $(form).serialize();

    var url = form.action;
    $.post(url, data).done(function (response) {
        response = JSON.parse(response);
        if (response.success == true) {
            var item_select = $('#item_select');
            if ($("body").find('.accounting-template').length > 0) {
                if (!item_select.hasClass('ajax-search')) {
                    var group = item_select.find('[data-group-id="' + response.item.group_id + '"]');
                    if (group.length == 0) {
                        var _option = '<optgroup label="' + (response.item.group_name == null ? '' : response.item.group_name) + '" data-group-id="' + response.item.group_id + '">' + _option + '</optgroup>';
                        if (item_select.find('[data-group-id="0"]').length == 0) {
                            item_select.find('option:first-child').after(_option);
                        } else {
                            item_select.find('[data-group-id="0"]').after(_option);
                        }
                    } else {
                        group.prepend('<option data-subtext="' + response.item.long_description + '" value="' + response.item.itemid + '">(' + accounting.formatNumber(response.item.rate) + ') ' + response.item.description + '</option>');
                    }
                }
                if (!item_select.hasClass('ajax-search')) {
                    item_select.selectpicker('refresh');
                } else {

                    item_select.contents().filter(function () {
                        return !$(this).is('.newitem') && !$(this).is('.newitem-divider');
                    }).remove();

                    var clonedItemsAjaxSearchSelect = item_select.clone();
                    item_select.selectpicker('destroy').remove();
                    $("body").find('.items-select-wrapper').append(clonedItemsAjaxSearchSelect);
                    init_ajax_search('items', '#item_select.ajax-search', undefined, admin_url + 'items/search');
                }

                add_item_to_preview(response.item.itemid);
            } else {
                // Is general items view
                $('.table-invoice-items').DataTable().ajax.reload(null, false);
            }
            alert_float('success', response.message);
        }
        $('#sales_item_modal').modal('hide');
    }).fail(function (data) {
        alert_float('danger', data.responseText);
    });
    return false;
}
function init_item_js() {
     // Add item to preview from the dropdown for invoices estimates
    $("body").on('change', 'select[name="item_select"]', function () {
        var itemid = $(this).selectpicker('val');
        if (itemid != '') {
            add_item_to_preview(itemid);
        }
    });

    // Items modal show action
    $("body").on('show.bs.modal', '#sales_item_modal', function (event) {

        $('.affect-warning').addClass('hide');

        var $itemModal = $('#sales_item_modal');
        $('input[name="itemid"]').val('');
        $itemModal.find('input').not('input[type="hidden"]').val('');
        $itemModal.find('textarea').val('');
        $itemModal.find('select').selectpicker('val', '').selectpicker('refresh');
        $('select[name="tax2"]').selectpicker('val', '').change();
        $('select[name="tax"]').selectpicker('val', '').change();
        $itemModal.find('.add-title').removeClass('hide');
        $itemModal.find('.edit-title').addClass('hide');

        var id = $(event.relatedTarget).data('id');
        // If id found get the text from the datatable
        if (typeof (id) !== 'undefined') {

            $('.affect-warning').removeClass('hide');
            $('input[name="itemid"]').val(id);

            requestGetJSON('invoice_items/get_item_by_id/' + id).done(function (response) {
                $itemModal.find('input[name="description"]').val(response.description);
                $itemModal.find('textarea[name="long_description"]').val(response.long_description.replace(/(<|<)br\s*\/*(>|>)/g, " "));
                $itemModal.find('input[name="rate"]').val(response.rate);
                $itemModal.find('input[name="unit"]').val(response.unit);
                $('select[name="tax"]').selectpicker('val', response.taxid).change();
                $('select[name="tax2"]').selectpicker('val', response.taxid_2).change();
                $itemModal.find('#group_id').selectpicker('val', response.group_id);
                $.each(response, function (column, value) {
                    if (column.indexOf('rate_currency_') > -1) {
                        $itemModal.find('input[name="' + column + '"]').val(value);
                    }
                });

                $('#custom_fields_items').html(response.custom_fields_html);

                init_selectpicker();
                init_color_pickers();
                init_datepicker();

                $itemModal.find('.add-title').addClass('hide');
                $itemModal.find('.edit-title').removeClass('hide');
                validate_item_form();
            });

        }
    });

    $("body").on("hidden.bs.modal", '#sales_item_modal', function (event) {
        $('#item_select').selectpicker('val', '');
    });

   validate_item_form();
}
function validate_item_form(){
    // Set validation for invoice item form
    _validate_form($('#invoice_item_form'), {
        description: 'required',
        rate: {
            required: true,
        }
    }, manage_invoice_items);
}
</script>
      </div>
      <div class="btn-bottom-pusher"></div>
   </div>
</div>
<!-- Likes -->
<div class="modal likes_modal fade" id="modal_post_likes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Colleagues who like this post</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div id="modal_post_likes_wrapper">

          </div>

        </div>

      </div>
      <div class="modal-footer">
         <a href="#" class="btn btn-info load_more_post_likes">Load More</a>
      </div>
    </div>
  </div>
</div>
<!-- Likes -->
<div class="modal likes_modal animated fadeIn" id="modal_post_comment_likes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Colleagues who like this comment</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div id="modal_comment_likes_wrapper">

          </div>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-info load_more_post_comment_likes">Load More</a>
      </div>
    </div>
  </div>
</div>
<div id="event"></div>
<div id="newsfeed" class="animated fadeIn hide" >
</div>
<!-- Task modal view -->
<div class="modal fade task-modal-single" id="task-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content data">

    </div>
  </div>
</div>

<!--Add/edit task modal-->
<div id="_task"></div>

<!-- Lead Data Add/Edit-->
<div class="modal fade lead-modal" id="lead-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content data">

    </div>
  </div>
</div>

<div id="timers-logout-template-warning" class="hide">
  <h2 class="bold">Started tasks timers found!<br />Are you sure you want to logout without stopping the timers?</h2>
  <hr />
  <a href="<?php echo base_url()."admin";?>/authentication/logout" class="btn btn-danger">Logout</a>
</div>

<!--Lead convert to customer modal-->
<div id="lead_convert_to_customer"></div>

<!--Lead reminder modal-->
<div id="lead_reminder_modal"></div>


<script type="text/javascript" src="<?php echo base_url()."assets";?>/plugins/app-build/vendor.js?v=2.2.1" id="vendor-js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets";?>/plugins/jquery/jquery-migrate.min.js?v=2.2.1" id="jquery-migrate-js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets";?>/plugins/datatables/datatables.min.js?v=2.2.1" id="datatables-js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets";?>/plugins/app-build/moment.min.js?v=2.2.1" id="moment-js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets";?>/plugins/app-build/bootstrap-select.min.js?v=2.2.1" id="bootstrap-select-js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets";?>/plugins/tinymce/tinymce.min.js?v=2.2.1" id="tinymce-js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets";?>/plugins/jquery-validation/jquery.validate.min.js?v=2.2.1" id="jquery-validation-js"></script>

<script src="<?php echo base_url()."assets";?>/js/main.min.js?v=2.2.1"></script>

    <script>
        function custom_fields_hyperlink(){
         var cf_hyperlink = $('body').find('.cf-hyperlink');
         if(cf_hyperlink.length){
             $.each(cf_hyperlink,function(){
                var cfh_wrapper = $(this);
                var cfh_field_to = cfh_wrapper.attr('data-fieldto');
                var cfh_field_id = cfh_wrapper.attr('data-field-id');
                var textEl = $('body').find('#custom_fields_'+cfh_field_to+'_'+cfh_field_id+'_popover');
                var hiddenField = $("#custom_fields\\\["+cfh_field_to+"\\\]\\\["+cfh_field_id+"\\\]");
                var cfh_value = cfh_wrapper.attr('data-value');
                hiddenField.val(cfh_value);

                if($(hiddenField.val()).html() != ''){
                    textEl.html($(hiddenField.val()).html());
                }
                var cfh_field_name = cfh_wrapper.attr('data-field-name');
                textEl.popover({
                    html: true,
                    trigger: "manual",
                    placement: "top",
                    title:cfh_field_name,
                    content:function(){
                        return $(cfh_popover_templates[cfh_field_id]).html();
                    }
                }).on("click", function(e){
                    var $popup = $(this);
                    $popup.popover("toggle");
                    var titleField = $("#custom_fields_"+cfh_field_to+"_"+cfh_field_id+"_title");
                    var urlField = $("#custom_fields_"+cfh_field_to+"_"+cfh_field_id+"_link");
                    var ttl = $(hiddenField.val()).html();
                    var cfUrl = $(hiddenField.val()).attr("href");
                    if(cfUrl){
                        $('#cf_hyperlink_open_'+cfh_field_id).attr('href',(cfUrl.indexOf('://') === -1 ? 'http://' + cfUrl : cfUrl));
                    }
                    titleField.val(ttl);
                    urlField.val(cfUrl);
                    $("#custom_fields_"+cfh_field_to+"_"+cfh_field_id+"_btn-save").click(function(){
                        hiddenField.val((urlField.val() != '' ? '<a href="'+urlField.val()+'" target="_blank">' + titleField.val() + '</a>' : ''));
                        textEl.html(titleField.val() == "" ? "Click here to add link" : titleField.val());
                        $popup.popover("toggle");
                    });
                    $("#custom_fields_"+cfh_field_to+"_"+cfh_field_id+"_btn-cancel").click(function(){
                        if(urlField.val() == ''){
                            hiddenField.val('');
                        }
                        $popup.popover("toggle");
                    });
                });
            });
         }
     }
 </script>
 <script>
   var _rel_id = $('#rel_id'),
   _rel_type = $('#rel_type'),
   _rel_id_wrapper = $('#rel_id_wrapper'),
   data = {};

   $(function(){
    init_currency_symbol();
    // Maybe items ajax search
    init_ajax_search('items','#item_select.ajax-search',undefined,admin_url+'items/search');
    validate_proposal_form();
    $('body').on('change','#rel_id', function() {
     if($(this).val() != ''){
      $.get(admin_url + 'proposals/get_relation_data_values/' + $(this).val() + '/' + _rel_type.val(), function(response) {
        $('input[name="proposal_to"]').val(response.to);
        $('textarea[name="address"]').val(response.address);
        $('input[name="email"]').val(response.email);
        $('input[name="phone"]').val(response.phone);
        $('input[name="city"]').val(response.city);
        $('input[name="state"]').val(response.state);
        $('input[name="zip"]').val(response.zip);
        $('select[name="country"]').selectpicker('val',response.country);
        var currency_selector = $('#currency');
        if(_rel_type.val() == 'customer'){
          if(typeof(currency_selector.attr('multi-currency')) == 'undefined'){
            currency_selector.attr('disabled',true);
          }

         } else {
           currency_selector.attr('disabled',false);
        }
        var proposal_to_wrapper = $('[app-field-wrapper="proposal_to"]');
        if(response.is_using_company == false && !empty(response.company)) {
          proposal_to_wrapper.find('#use_company_name').remove();
          proposal_to_wrapper.find('#use_company_help').remove();
          proposal_to_wrapper.append('<div id="use_company_help" class="hide">'+response.company+'</div>');
          proposal_to_wrapper.find('label')
          .prepend("<a href=\"#\" id=\"use_company_name\" data-toggle=\"tooltip\" data-title=\"Use company name instead\" onclick='document.getElementById(\"proposal_to\").value = document.getElementById(\"use_company_help\").innerHTML.trim(); this.remove();'><i class=\"fa fa-building-o\"></i></a> ");
        } else {
          proposal_to_wrapper.find('label #use_company_name').remove();
          proposal_to_wrapper.find('label #use_company_help').remove();
        }
       /* Check if customer default currency is passed */
       if(response.currency){
         currency_selector.selectpicker('val',response.currency);
       } else {
        /* Revert back to base currency */
        currency_selector.selectpicker('val',currency_selector.data('base'));
      }
      currency_selector.selectpicker('refresh');
      currency_selector.change();
    }, 'json');
    }
   });
    $('.rel_id_label').html(_rel_type.find('option:selected').text());
    _rel_type.on('change', function() {
      var clonedSelect = _rel_id.html('').clone();
      _rel_id.selectpicker('destroy').remove();
      _rel_id = clonedSelect;
      $('#rel_id_select').append(clonedSelect);
      proposal_rel_id_select();
      if($(this).val() != ''){
        _rel_id_wrapper.removeClass('hide');
      } else {
        _rel_id_wrapper.addClass('hide');
      }
      $('.rel_id_label').html(_rel_type.find('option:selected').text());
    });
    proposal_rel_id_select();
        });
   function proposal_rel_id_select(){
      var serverData = {};
      serverData.rel_id = _rel_id.val();
      data.type = _rel_type.val();
      init_ajax_search(_rel_type.val(),_rel_id,serverData);
   }
   function validate_proposal_form(){
      _validate_form($('#proposal-form'), {
        subject : 'required',
        proposal_to : 'required',
        rel_type: 'required',
        rel_id : 'required',
        date : 'required',
        email: {
         email:true,
         required:true
       },
       currency : 'required',
     });
   }
</script>
</body>
</html>
