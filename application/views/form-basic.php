
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
                     
         <form action="<?php echo base_url()."admin";?>/proposals/proposal" id="proposal-form" class="_transaction_form proposal-form" method="post" accept-charset="utf-8">
<input type="hidden" name="csrf_token_name" value="ac7687ab509914703882c1daa59bd34d" />                                                         
         <div class="col-md-12">
            <div class="panel_s">
               <div class="panel-body">
                  <div class="row">
                                          <div class="col-md-6 border-right">
                                                                        <div class="form-group" app-field-wrapper="subject"><label for="subject" class="control-label">Subject</label><input type="text" id="subject" name="subject" class="form-control" autofocus="1" value=""></div>                        
                        <div class="form-group select-placeholder">
                           <label for="rel_type" class="control-label">Related</label>
                           <select name="rel_type" id="rel_type" class="selectpicker" data-width="100%" data-none-selected-text="Nothing selected">
                              <option value=""></option>
                              <option value="lead" >Lead</option>
                              <option value="customer" >Customer</option>
                           </select>
                        </div>
                        <div class="form-group select-placeholder hide " id="rel_id_wrapper">
                           <label for="rel_id"><span class="rel_id_label"></span></label>
                           <div id="rel_id_select">
                               
                              <select name="rel_id" id="rel_id" class="ajax-search" data-width="100%" data-live-search="true" data-none-selected-text="Nothing selected">
                                                            </select>
                           </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                                                            <div class="form-group" app-field-wrapper="date"><label for="date" class="control-label">Date</label><div class="input-group date"><input type="text" id="date" name="date" class="form-control datepicker"  value="2019-02-03" autocomplete="off"><div class="input-group-addon">
    <i class="fa fa-calendar calendar-icon"></i>
</div></div></div>                          </div>
                          <div class="col-md-6">
                            <div class="form-group" app-field-wrapper="open_till"><label for="open_till" class="control-label">Open Till</label><div class="input-group date"><input type="text" id="open_till" name="open_till" class="form-control datepicker"  value="2019-02-10" autocomplete="off"><div class="input-group-addon">
    <i class="fa fa-calendar calendar-icon"></i>
</div></div></div>                          </div>
                        </div>
                                                   <div class="row">
                             <div class="col-md-6">
                                 <div class="select-placeholder form-group" app-field-wrapper="currency"><label for="currency" class="control-label">Currency</label><select id="currency" name="currency" class="selectpicker" data-show-subtext="1" data-base="3" data-width="100%" data-none-selected-text="Nothing selected" data-live-search="true"><option value=""></option><option value="4" data-subtext="$">USD</option><option value="3" selected data-subtext="R">ZAR</option></select></div>                             </div>
                             <div class="col-md-6">
                               <div class="form-group select-placeholder">
                                 <label for="discount_type" class="control-label">Discount Type</label>
                                 <select name="discount_type" class="selectpicker" data-width="100%" data-none-selected-text="Nothing selected">
                                  <option value="" selected>No discount</option>
                                  <option value="before_tax" >Before Tax</option>
                                  <option value="after_tax" >After Tax</option>
                                </select>
                              </div>
                            </div>
                           </div>
                                                <div class="row"><div class="col-md-6"><a href="<?php echo base_url()."admin";?>/custom_fields/field/31" tabindex="-1" target="_blank" class="custom-field-inline-edit-link"><i class="fa fa-pencil-square-o"></i></a><div class="form-group" app-field-wrapper="custom_fields[proposal][31]"><label for="custom_fields[proposal][31]" class="control-label">Phone</label><input type="text" id="custom_fields[proposal][31]" name="custom_fields[proposal][31]" class="form-control" data-custom-field-required="1" data-fieldto="proposal" data-fieldid="31" value=""></div></div><div class="col-md-6"><a href="<?php echo base_url()."admin";?>/custom_fields/field/32" tabindex="-1" target="_blank" class="custom-field-inline-edit-link"><i class="fa fa-pencil-square-o"></i></a><div class="form-group" app-field-wrapper="custom_fields[proposal][32]"><label for="custom_fields[proposal][32]" class="control-label">Company</label><input type="text" id="custom_fields[proposal][32]" name="custom_fields[proposal][32]" class="form-control" data-custom-field-required="1" data-fieldto="proposal" data-fieldid="32" value=""></div></div><div class="col-md-6"><a href="<?php echo base_url()."admin";?>/custom_fields/field/33" tabindex="-1" target="_blank" class="custom-field-inline-edit-link"><i class="fa fa-pencil-square-o"></i></a><div class="form-group" app-field-wrapper="custom_fields[proposal][33]"><label for="custom_fields[proposal][33]" class="control-label">Website</label><input type="text" id="custom_fields[proposal][33]" name="custom_fields[proposal][33]" class="form-control" data-custom-field-required="1" data-fieldto="proposal" data-fieldid="33" value=""></div></div><div class="col-md-6"><a href="<?php echo base_url()."admin";?>/custom_fields/field/34" tabindex="-1" target="_blank" class="custom-field-inline-edit-link"><i class="fa fa-pencil-square-o"></i></a><div class="form-group"><label for="custom_fields[proposal][34]">Initials</label><select data-custom-field-required="1" data-fieldto="proposal" data-fieldid="34"  name="custom_fields[proposal][34]" class="select-placeholder selectpicker form-control" data-width="100%" data-none-selected-text="Nothing selected"  data-live-search="true"><option value=""></option><option value="Mr.">Mr.</option><option value="Mrs.">Mrs.</option><option value="Miss">Miss</option><option value="Sir">Sir</option><option value="Madam">Madam</option><option value="Dr">Dr</option></select></div></div><div class="col-md-6"><a href="<?php echo base_url()."admin";?>/custom_fields/field/35" tabindex="-1" target="_blank" class="custom-field-inline-edit-link"><i class="fa fa-pencil-square-o"></i></a><div class="form-group" app-field-wrapper="custom_fields[proposal][35]"><label for="custom_fields[proposal][35]" class="control-label">Name</label><input type="text" id="custom_fields[proposal][35]" name="custom_fields[proposal][35]" class="form-control" data-custom-field-required="1" data-fieldto="proposal" data-fieldid="35" value=""></div></div><div class="col-md-6"><a href="<?php echo base_url()."admin";?>/custom_fields/field/36" tabindex="-1" target="_blank" class="custom-field-inline-edit-link"><i class="fa fa-pencil-square-o"></i></a><div class="form-group" app-field-wrapper="custom_fields[proposal][36]"><label for="custom_fields[proposal][36]" class="control-label">Surname</label><input type="text" id="custom_fields[proposal][36]" name="custom_fields[proposal][36]" class="form-control" data-custom-field-required="1" data-fieldto="proposal" data-fieldid="36" value=""></div></div><div class="col-md-6"><a href="<?php echo base_url()."admin";?>/custom_fields/field/37" tabindex="-1" target="_blank" class="custom-field-inline-edit-link"><i class="fa fa-pencil-square-o"></i></a><div class="form-group" app-field-wrapper="custom_fields[proposal][37]"><label for="custom_fields[proposal][37]" class="control-label">Contact Number</label><input type="text" id="custom_fields[proposal][37]" name="custom_fields[proposal][37]" class="form-control" data-custom-field-required="1" data-fieldto="proposal" data-fieldid="37" value=""></div></div><div class="col-md-6"><a href="<?php echo base_url()."admin";?>/custom_fields/field/38" tabindex="-1" target="_blank" class="custom-field-inline-edit-link"><i class="fa fa-pencil-square-o"></i></a><div class="form-group" app-field-wrapper="custom_fields[proposal][38]"><label for="custom_fields[proposal][38]" class="control-label">Cell Number</label><input type="text" id="custom_fields[proposal][38]" name="custom_fields[proposal][38]" class="form-control" data-custom-field-required="1" data-fieldto="proposal" data-fieldid="38" value=""></div></div><div class="col-md-6"><a href="<?php echo base_url()."admin";?>/custom_fields/field/39" tabindex="-1" target="_blank" class="custom-field-inline-edit-link"><i class="fa fa-pencil-square-o"></i></a><div class="form-group" app-field-wrapper="custom_fields[proposal][39]"><label for="custom_fields[proposal][39]" class="control-label">Mail Address</label><input type="text" id="custom_fields[proposal][39]" name="custom_fields[proposal][39]" class="form-control" data-custom-field-required="1" data-fieldto="proposal" data-fieldid="39" value=""></div></div><div class="col-md-6"><a href="<?php echo base_url()."admin";?>/custom_fields/field/40" tabindex="-1" target="_blank" class="custom-field-inline-edit-link"><i class="fa fa-pencil-square-o"></i></a><div class="form-group" app-field-wrapper="custom_fields[proposal][40]"><label for="custom_fields[proposal][40]" class="control-label">Physical Address</label><input type="text" id="custom_fields[proposal][40]" name="custom_fields[proposal][40]" class="form-control" data-custom-field-required="1" data-fieldto="proposal" data-fieldid="40" value=""></div></div><div class="col-md-6"><a href="<?php echo base_url()."admin";?>/custom_fields/field/41" tabindex="-1" target="_blank" class="custom-field-inline-edit-link"><i class="fa fa-pencil-square-o"></i></a><div class="form-group" app-field-wrapper="custom_fields[proposal][41]"><label for="custom_fields[proposal][41]" class="control-label">Date of Birth</label><div class="input-group date"><input type="text" id="custom_fields[proposal][41]" name="custom_fields[proposal][41]" class="form-control datepicker" data-custom-field-required="1" data-fieldto="proposal" data-fieldid="41" value="" autocomplete="off"><div class="input-group-addon">
    <i class="fa fa-calendar calendar-icon"></i>
</div></div></div></div><div class="col-md-6"><a href="<?php echo base_url()."admin";?>/custom_fields/field/42" tabindex="-1" target="_blank" class="custom-field-inline-edit-link"><i class="fa fa-pencil-square-o"></i></a><div class="form-group"><label for="custom_fields[proposal][42]">Gender</label><select data-custom-field-required="1" data-fieldto="proposal" data-fieldid="42"  name="custom_fields[proposal][42]" class="select-placeholder selectpicker form-control" data-width="100%" data-none-selected-text="Nothing selected"  data-live-search="true"><option value=""></option><option value="Male">Male</option><option value="Female">Female</option></select></div></div><div class="col-md-6"><a href="<?php echo base_url()."admin";?>/custom_fields/field/43" tabindex="-1" target="_blank" class="custom-field-inline-edit-link"><i class="fa fa-pencil-square-o"></i></a><div class="form-group"><label for="custom_fields[proposal][43]">Marrital Status</label><select data-custom-field-required="1" data-fieldto="proposal" data-fieldid="43"  name="custom_fields[proposal][43]" class="select-placeholder selectpicker form-control" data-width="100%" data-none-selected-text="Nothing selected"  data-live-search="true"><option value=""></option><option value="Single">Single</option><option value="Married">Married</option></select></div></div><div class="col-md-12"><a href="<?php echo base_url()."admin";?>/custom_fields/field/44" tabindex="-1" target="_blank" class="custom-field-inline-edit-link"><i class="fa fa-pencil-square-o"></i></a><div class="form-group"><label for="custom_fields[proposal][44]">Identity Type</label><select data-custom-field-required="1" data-fieldto="proposal" data-fieldid="44"  name="custom_fields[proposal][44]" class="select-placeholder selectpicker form-control" data-width="100%" data-none-selected-text="Nothing selected"  data-live-search="true"><option value=""></option><option value="National ID">National ID</option><option value="Passport">Passport</option></select></div></div><div class="col-md-6"><a href="<?php echo base_url()."admin";?>/custom_fields/field/45" tabindex="-1" target="_blank" class="custom-field-inline-edit-link"><i class="fa fa-pencil-square-o"></i></a><div class="form-group" app-field-wrapper="custom_fields[proposal][45]"><label for="custom_fields[proposal][45]" class="control-label">Identity Number</label><input type="text" id="custom_fields[proposal][45]" name="custom_fields[proposal][45]" class="form-control" data-custom-field-required="1" data-fieldto="proposal" data-fieldid="45" value=""></div></div><div class="col-md-6"><a href="<?php echo base_url()."admin";?>/custom_fields/field/46" tabindex="-1" target="_blank" class="custom-field-inline-edit-link"><i class="fa fa-pencil-square-o"></i></a><div class="form-group"><label for="custom_fields[proposal][46]">Country of ID Issue</label><select data-custom-field-required="1" data-fieldto="proposal" data-fieldid="46"  name="custom_fields[proposal][46]" class="select-placeholder selectpicker form-control" data-width="100%" data-none-selected-text="Nothing selected"  data-live-search="true"><option value=""></option><option value="South Africa">South Africa</option><option value="Kenya">Kenya</option></select></div></div><div class="col-md-6"><a href="<?php echo base_url()."admin";?>/custom_fields/field/47" tabindex="-1" target="_blank" class="custom-field-inline-edit-link"><i class="fa fa-pencil-square-o"></i></a><div class="form-group" app-field-wrapper="custom_fields[proposal][47]"><label for="custom_fields[proposal][47]" class="control-label">Retirement Age</label><input type="text" id="custom_fields[proposal][47]" name="custom_fields[proposal][47]" class="form-control" data-custom-field-required="1" data-fieldto="proposal" data-fieldid="47" value=""></div></div><div class="col-md-6"><a href="<?php echo base_url()."admin";?>/custom_fields/field/48" tabindex="-1" target="_blank" class="custom-field-inline-edit-link"><i class="fa fa-pencil-square-o"></i></a><div class="form-group"><label for="custom_fields[proposal][48]">Highest Academic Qualification</label><select data-custom-field-required="1" data-fieldto="proposal" data-fieldid="48"  name="custom_fields[proposal][48]" class="select-placeholder selectpicker form-control" data-width="100%" data-none-selected-text="Nothing selected"  data-live-search="true"><option value=""></option><option value="Diploma">Diploma</option><option value="Digree">Digree</option><option value="Masters">Masters</option><option value="PhD">PhD</option></select></div></div><div class="col-md-6"><a href="<?php echo base_url()."admin";?>/custom_fields/field/49" tabindex="-1" target="_blank" class="custom-field-inline-edit-link"><i class="fa fa-pencil-square-o"></i></a><div class="form-group" app-field-wrapper="custom_fields[proposal][49]"><label for="custom_fields[proposal][49]" class="control-label">Bank Name</label><input type="text" id="custom_fields[proposal][49]" name="custom_fields[proposal][49]" class="form-control" data-custom-field-required="1" data-fieldto="proposal" data-fieldid="49" value=""></div></div><div class="col-md-6"><a href="<?php echo base_url()."admin";?>/custom_fields/field/50" tabindex="-1" target="_blank" class="custom-field-inline-edit-link"><i class="fa fa-pencil-square-o"></i></a><div class="form-group" app-field-wrapper="custom_fields[proposal][50]"><label for="custom_fields[proposal][50]" class="control-label">Account Number</label><input type="text" id="custom_fields[proposal][50]" name="custom_fields[proposal][50]" class="form-control" data-custom-field-required="1" data-fieldto="proposal" data-fieldid="50" value=""></div></div><div class="col-md-6"><a href="<?php echo base_url()."admin";?>/custom_fields/field/51" tabindex="-1" target="_blank" class="custom-field-inline-edit-link"><i class="fa fa-pencil-square-o"></i></a><div class="form-group" app-field-wrapper="custom_fields[proposal][51]"><label for="custom_fields[proposal][51]" class="control-label">Branch Code: </label><input type="text" id="custom_fields[proposal][51]" name="custom_fields[proposal][51]" class="form-control" data-custom-field-required="1" data-fieldto="proposal" data-fieldid="51" value=""></div></div><div class="col-md-6"><a href="<?php echo base_url()."admin";?>/custom_fields/field/52" tabindex="-1" target="_blank" class="custom-field-inline-edit-link"><i class="fa fa-pencil-square-o"></i></a><div class="form-group" app-field-wrapper="custom_fields[proposal][52]"><label for="custom_fields[proposal][52]" class="control-label">Beneficiary Nmae</label><input type="text" id="custom_fields[proposal][52]" name="custom_fields[proposal][52]" class="form-control" data-custom-field-required="1" data-fieldto="proposal" data-fieldid="52" value=""></div></div><div class="col-md-6"><a href="<?php echo base_url()."admin";?>/custom_fields/field/53" tabindex="-1" target="_blank" class="custom-field-inline-edit-link"><i class="fa fa-pencil-square-o"></i></a><div class="form-group" app-field-wrapper="custom_fields[proposal][53]"><label for="custom_fields[proposal][53]" class="control-label">Beneficiary Surname</label><input type="text" id="custom_fields[proposal][53]" name="custom_fields[proposal][53]" class="form-control" data-custom-field-required="1" data-fieldto="proposal" data-fieldid="53" value=""></div></div><div class="col-md-6"><a href="<?php echo base_url()."admin";?>/custom_fields/field/54" tabindex="-1" target="_blank" class="custom-field-inline-edit-link"><i class="fa fa-pencil-square-o"></i></a><div class="form-group" app-field-wrapper="custom_fields[proposal][54]"><label for="custom_fields[proposal][54]" class="control-label">Beneficiary Contacts</label><input type="text" id="custom_fields[proposal][54]" name="custom_fields[proposal][54]" class="form-control" data-custom-field-required="1" data-fieldto="proposal" data-fieldid="54" value=""></div></div><div class="col-md-6"><a href="<?php echo base_url()."admin";?>/custom_fields/field/55" tabindex="-1" target="_blank" class="custom-field-inline-edit-link"><i class="fa fa-pencil-square-o"></i></a><div class="form-group" app-field-wrapper="custom_fields[proposal][55]"><label for="custom_fields[proposal][55]" class="control-label">Beneficiary ID</label><input type="text" id="custom_fields[proposal][55]" name="custom_fields[proposal][55]" class="form-control" data-custom-field-required="1" data-fieldto="proposal" data-fieldid="55" value=""></div></div><div class="col-md-6"><a href="<?php echo base_url()."admin";?>/custom_fields/field/56" tabindex="-1" target="_blank" class="custom-field-inline-edit-link"><i class="fa fa-pencil-square-o"></i></a><div class="form-group" app-field-wrapper="custom_fields[proposal][56]"><label for="custom_fields[proposal][56]" class="control-label">Beneficiary Email Address</label><input type="text" id="custom_fields[proposal][56]" name="custom_fields[proposal][56]" class="form-control" data-custom-field-required="1" data-fieldto="proposal" data-fieldid="56" value=""></div></div><div class="col-md-6"><a href="<?php echo base_url()."admin";?>/custom_fields/field/57" tabindex="-1" target="_blank" class="custom-field-inline-edit-link"><i class="fa fa-pencil-square-o"></i></a><div class="form-group"><label for="custom_fields[proposal][57]">Relationship</label><select data-custom-field-required="1" data-fieldto="proposal" data-fieldid="57"  name="custom_fields[proposal][57]" class="select-placeholder selectpicker form-control" data-width="100%" data-none-selected-text="Nothing selected"  data-live-search="true"><option value=""></option><option value="Husband">Husband</option><option value="Wife">Wife</option><option value="Children">Children</option></select></div></div><div class="col-md-6"><a href="<?php echo base_url()."admin";?>/custom_fields/field/58" tabindex="-1" target="_blank" class="custom-field-inline-edit-link"><i class="fa fa-pencil-square-o"></i></a><div class="form-group" app-field-wrapper="custom_fields[proposal][58]"><label for="custom_fields[proposal][58]" class="control-label">Beneficially  Bank Account</label><input type="text" id="custom_fields[proposal][58]" name="custom_fields[proposal][58]" class="form-control" data-custom-field-required="1" data-fieldto="proposal" data-fieldid="58" value=""></div></div></div>                         <div class="form-group no-mbot">
                           <label for="tags" class="control-label"><i class="fa fa-tag" aria-hidden="true"></i> Tags</label>
                           <input type="text" class="tagsinput" id="tags" name="tags" value="" data-role="tagsinput">
                        </div>
                        <div class="form-group mtop10 no-mbot">
                            <p>Allow Comments</p>
                            <div class="onoffswitch">
                              <input type="checkbox" id="allow_comments" class="onoffswitch-checkbox"  value="on" name="allow_comments">
                              <label class="onoffswitch-label" for="allow_comments" data-toggle="tooltip" title="If you check this options comments will be allowed when your client view the proposal."></label>
                            </div>
                          </div>
                     </div>
                     <div class="col-md-6">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group select-placeholder">
                                 <label for="status" class="control-label">Status</label>
                                                                  <select name="status" class="selectpicker" data-width="100%"  data-none-selected-text="Nothing selected">
                                                                        <option value="6" >Draft</option>
                                                                        <option value="4" >Sent</option>
                                                                        <option value="1" >Open</option>
                                                                        <option value="5" >Revised</option>
                                                                        <option value="2" >Declined</option>
                                                                        <option value="3" >Accepted</option>
                                                                     </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="select-placeholder form-group" app-field-wrapper="assigned"><label for="assigned" class="control-label">Assigned</label><select id="assigned" name="assigned" class="selectpicker" data-width="100%" data-none-selected-text="Nothing selected" data-live-search="true"><option value=""></option><option value="1">Asif  Aziz</option></select></div>                           </div>
                        </div>
                                                <div class="form-group" app-field-wrapper="proposal_to"><label for="proposal_to" class="control-label">To</label><input type="text" id="proposal_to" name="proposal_to" class="form-control"  value=""></div>                                                <div class="form-group" app-field-wrapper="address"><label for="address" class="control-label">Address</label><textarea id="address" name="address" class="form-control" rows="4"></textarea></div>                        <div class="row">
                           <div class="col-md-6">
                                                            <div class="form-group" app-field-wrapper="city"><label for="city" class="control-label">City</label><input type="text" id="city" name="city" class="form-control"  value=""></div>                           </div>
                           <div class="col-md-6">
                                                            <div class="form-group" app-field-wrapper="state"><label for="state" class="control-label">State</label><input type="text" id="state" name="state" class="form-control"  value=""></div>                           </div>
                           <div class="col-md-6">
                                                                                          <div class="select-placeholder form-group" app-field-wrapper="country"><label for="country" class="control-label">Country</label><select id="country" name="country" class="selectpicker" data-width="100%" data-none-selected-text="Nothing selected" data-live-search="true"><option value=""></option><option value="1" data-subtext="AF">Afghanistan</option><option value="2" data-subtext="AX">Aland Islands</option><option value="3" data-subtext="AL">Albania</option><option value="4" data-subtext="DZ">Algeria</option><option value="5" data-subtext="AS">American Samoa</option><option value="6" data-subtext="AD">Andorra</option><option value="7" data-subtext="AO">Angola</option><option value="8" data-subtext="AI">Anguilla</option><option value="9" data-subtext="AQ">Antarctica</option><option value="10" data-subtext="AG">Antigua and Barbuda</option><option value="11" data-subtext="AR">Argentina</option><option value="12" data-subtext="AM">Armenia</option><option value="13" data-subtext="AW">Aruba</option><option value="14" data-subtext="AU">Australia</option><option value="15" data-subtext="AT">Austria</option><option value="16" data-subtext="AZ">Azerbaijan</option><option value="17" data-subtext="BS">Bahamas</option><option value="18" data-subtext="BH">Bahrain</option><option value="19" data-subtext="BD">Bangladesh</option><option value="20" data-subtext="BB">Barbados</option><option value="21" data-subtext="BY">Belarus</option><option value="22" data-subtext="BE">Belgium</option><option value="23" data-subtext="BZ">Belize</option><option value="24" data-subtext="BJ">Benin</option><option value="25" data-subtext="BM">Bermuda</option><option value="26" data-subtext="BT">Bhutan</option><option value="27" data-subtext="BO">Bolivia</option><option value="28" data-subtext="BQ">Bonaire, Sint Eustatius and Saba</option><option value="29" data-subtext="BA">Bosnia and Herzegovina</option><option value="30" data-subtext="BW">Botswana</option><option value="31" data-subtext="BV">Bouvet Island</option><option value="32" data-subtext="BR">Brazil</option><option value="33" data-subtext="IO">British Indian Ocean Territory</option><option value="34" data-subtext="BN">Brunei</option><option value="35" data-subtext="BG">Bulgaria</option><option value="36" data-subtext="BF">Burkina Faso</option><option value="37" data-subtext="BI">Burundi</option><option value="38" data-subtext="KH">Cambodia</option><option value="39" data-subtext="CM">Cameroon</option><option value="40" data-subtext="CA">Canada</option><option value="41" data-subtext="CV">Cape Verde</option><option value="42" data-subtext="KY">Cayman Islands</option><option value="43" data-subtext="CF">Central African Republic</option><option value="44" data-subtext="TD">Chad</option><option value="45" data-subtext="CL">Chile</option><option value="46" data-subtext="CN">China</option><option value="47" data-subtext="CX">Christmas Island</option><option value="48" data-subtext="CC">Cocos (Keeling) Islands</option><option value="49" data-subtext="CO">Colombia</option><option value="50" data-subtext="KM">Comoros</option><option value="51" data-subtext="CG">Congo</option><option value="52" data-subtext="CK">Cook Islands</option><option value="53" data-subtext="CR">Costa Rica</option><option value="54" data-subtext="CI">Cote d'ivoire (Ivory Coast)</option><option value="55" data-subtext="HR">Croatia</option><option value="56" data-subtext="CU">Cuba</option><option value="57" data-subtext="CW">Curacao</option><option value="58" data-subtext="CY">Cyprus</option><option value="59" data-subtext="CZ">Czech Republic</option><option value="60" data-subtext="CD">Democratic Republic of the Congo</option><option value="61" data-subtext="DK">Denmark</option><option value="62" data-subtext="DJ">Djibouti</option><option value="63" data-subtext="DM">Dominica</option><option value="64" data-subtext="DO">Dominican Republic</option><option value="65" data-subtext="EC">Ecuador</option><option value="66" data-subtext="EG">Egypt</option><option value="67" data-subtext="SV">El Salvador</option><option value="68" data-subtext="GQ">Equatorial Guinea</option><option value="69" data-subtext="ER">Eritrea</option><option value="70" data-subtext="EE">Estonia</option><option value="71" data-subtext="ET">Ethiopia</option><option value="72" data-subtext="FK">Falkland Islands (Malvinas)</option><option value="73" data-subtext="FO">Faroe Islands</option><option value="74" data-subtext="FJ">Fiji</option><option value="75" data-subtext="FI">Finland</option><option value="76" data-subtext="FR">France</option><option value="77" data-subtext="GF">French Guiana</option><option value="78" data-subtext="PF">French Polynesia</option><option value="79" data-subtext="TF">French Southern Territories</option><option value="80" data-subtext="GA">Gabon</option><option value="81" data-subtext="GM">Gambia</option><option value="82" data-subtext="GE">Georgia</option><option value="83" data-subtext="DE">Germany</option><option value="84" data-subtext="GH">Ghana</option><option value="85" data-subtext="GI">Gibraltar</option><option value="86" data-subtext="GR">Greece</option><option value="87" data-subtext="GL">Greenland</option><option value="88" data-subtext="GD">Grenada</option><option value="89" data-subtext="GP">Guadaloupe</option><option value="90" data-subtext="GU">Guam</option><option value="91" data-subtext="GT">Guatemala</option><option value="92" data-subtext="GG">Guernsey</option><option value="93" data-subtext="GN">Guinea</option><option value="94" data-subtext="GW">Guinea-Bissau</option><option value="95" data-subtext="GY">Guyana</option><option value="96" data-subtext="HT">Haiti</option><option value="97" data-subtext="HM">Heard Island and McDonald Islands</option><option value="98" data-subtext="HN">Honduras</option><option value="99" data-subtext="HK">Hong Kong</option><option value="100" data-subtext="HU">Hungary</option><option value="101" data-subtext="IS">Iceland</option><option value="102" data-subtext="IN">India</option><option value="103" data-subtext="ID">Indonesia</option><option value="104" data-subtext="IR">Iran</option><option value="105" data-subtext="IQ">Iraq</option><option value="106" data-subtext="IE">Ireland</option><option value="107" data-subtext="IM">Isle of Man</option><option value="108" data-subtext="IL">Israel</option><option value="109" data-subtext="IT">Italy</option><option value="110" data-subtext="JM">Jamaica</option><option value="111" data-subtext="JP">Japan</option><option value="112" data-subtext="JE">Jersey</option><option value="113" data-subtext="JO">Jordan</option><option value="114" data-subtext="KZ">Kazakhstan</option><option value="115" data-subtext="KE">Kenya</option><option value="116" data-subtext="KI">Kiribati</option><option value="117" data-subtext="XK">Kosovo</option><option value="118" data-subtext="KW">Kuwait</option><option value="119" data-subtext="KG">Kyrgyzstan</option><option value="120" data-subtext="LA">Laos</option><option value="121" data-subtext="LV">Latvia</option><option value="122" data-subtext="LB">Lebanon</option><option value="123" data-subtext="LS">Lesotho</option><option value="124" data-subtext="LR">Liberia</option><option value="125" data-subtext="LY">Libya</option><option value="126" data-subtext="LI">Liechtenstein</option><option value="127" data-subtext="LT">Lithuania</option><option value="128" data-subtext="LU">Luxembourg</option><option value="129" data-subtext="MO">Macao</option><option value="130" data-subtext="MK">Macedonia</option><option value="131" data-subtext="MG">Madagascar</option><option value="132" data-subtext="MW">Malawi</option><option value="133" data-subtext="MY">Malaysia</option><option value="134" data-subtext="MV">Maldives</option><option value="135" data-subtext="ML">Mali</option><option value="136" data-subtext="MT">Malta</option><option value="137" data-subtext="MH">Marshall Islands</option><option value="138" data-subtext="MQ">Martinique</option><option value="139" data-subtext="MR">Mauritania</option><option value="140" data-subtext="MU">Mauritius</option><option value="141" data-subtext="YT">Mayotte</option><option value="142" data-subtext="MX">Mexico</option><option value="143" data-subtext="FM">Micronesia</option><option value="144" data-subtext="MD">Moldava</option><option value="145" data-subtext="MC">Monaco</option><option value="146" data-subtext="MN">Mongolia</option><option value="147" data-subtext="ME">Montenegro</option><option value="148" data-subtext="MS">Montserrat</option><option value="149" data-subtext="MA">Morocco</option><option value="150" data-subtext="MZ">Mozambique</option><option value="151" data-subtext="MM">Myanmar (Burma)</option><option value="152" data-subtext="NA">Namibia</option><option value="153" data-subtext="NR">Nauru</option><option value="154" data-subtext="NP">Nepal</option><option value="155" data-subtext="NL">Netherlands</option><option value="156" data-subtext="NC">New Caledonia</option><option value="157" data-subtext="NZ">New Zealand</option><option value="158" data-subtext="NI">Nicaragua</option><option value="159" data-subtext="NE">Niger</option><option value="160" data-subtext="NG">Nigeria</option><option value="161" data-subtext="NU">Niue</option><option value="162" data-subtext="NF">Norfolk Island</option><option value="163" data-subtext="KP">North Korea</option><option value="164" data-subtext="MP">Northern Mariana Islands</option><option value="165" data-subtext="NO">Norway</option><option value="166" data-subtext="OM">Oman</option><option value="167" data-subtext="PK">Pakistan</option><option value="168" data-subtext="PW">Palau</option><option value="169" data-subtext="PS">Palestine</option><option value="170" data-subtext="PA">Panama</option><option value="171" data-subtext="PG">Papua New Guinea</option><option value="172" data-subtext="PY">Paraguay</option><option value="173" data-subtext="PE">Peru</option><option value="174" data-subtext="PH">Phillipines</option><option value="175" data-subtext="PN">Pitcairn</option><option value="176" data-subtext="PL">Poland</option><option value="177" data-subtext="PT">Portugal</option><option value="178" data-subtext="PR">Puerto Rico</option><option value="179" data-subtext="QA">Qatar</option><option value="180" data-subtext="RE">Reunion</option><option value="181" data-subtext="RO">Romania</option><option value="182" data-subtext="RU">Russia</option><option value="183" data-subtext="RW">Rwanda</option><option value="184" data-subtext="BL">Saint Barthelemy</option><option value="185" data-subtext="SH">Saint Helena</option><option value="186" data-subtext="KN">Saint Kitts and Nevis</option><option value="187" data-subtext="LC">Saint Lucia</option><option value="188" data-subtext="MF">Saint Martin</option><option value="189" data-subtext="PM">Saint Pierre and Miquelon</option><option value="190" data-subtext="VC">Saint Vincent and the Grenadines</option><option value="191" data-subtext="WS">Samoa</option><option value="192" data-subtext="SM">San Marino</option><option value="193" data-subtext="ST">Sao Tome and Principe</option><option value="194" data-subtext="SA">Saudi Arabia</option><option value="195" data-subtext="SN">Senegal</option><option value="196" data-subtext="RS">Serbia</option><option value="197" data-subtext="SC">Seychelles</option><option value="198" data-subtext="SL">Sierra Leone</option><option value="199" data-subtext="SG">Singapore</option><option value="200" data-subtext="SX">Sint Maarten</option><option value="201" data-subtext="SK">Slovakia</option><option value="202" data-subtext="SI">Slovenia</option><option value="203" data-subtext="SB">Solomon Islands</option><option value="204" data-subtext="SO">Somalia</option><option value="205" data-subtext="ZA">South Africa</option><option value="206" data-subtext="GS">South Georgia and the South Sandwich Islands</option><option value="207" data-subtext="KR">South Korea</option><option value="208" data-subtext="SS">South Sudan</option><option value="209" data-subtext="ES">Spain</option><option value="210" data-subtext="LK">Sri Lanka</option><option value="211" data-subtext="SD">Sudan</option><option value="212" data-subtext="SR">Suriname</option><option value="213" data-subtext="SJ">Svalbard and Jan Mayen</option><option value="214" data-subtext="SZ">Swaziland</option><option value="215" data-subtext="SE">Sweden</option><option value="216" data-subtext="CH">Switzerland</option><option value="217" data-subtext="SY">Syria</option><option value="218" data-subtext="TW">Taiwan</option><option value="219" data-subtext="TJ">Tajikistan</option><option value="220" data-subtext="TZ">Tanzania</option><option value="221" data-subtext="TH">Thailand</option><option value="222" data-subtext="TL">Timor-Leste (East Timor)</option><option value="223" data-subtext="TG">Togo</option><option value="224" data-subtext="TK">Tokelau</option><option value="225" data-subtext="TO">Tonga</option><option value="226" data-subtext="TT">Trinidad and Tobago</option><option value="227" data-subtext="TN">Tunisia</option><option value="228" data-subtext="TR">Turkey</option><option value="229" data-subtext="TM">Turkmenistan</option><option value="230" data-subtext="TC">Turks and Caicos Islands</option><option value="231" data-subtext="TV">Tuvalu</option><option value="232" data-subtext="UG">Uganda</option><option value="233" data-subtext="UA">Ukraine</option><option value="234" data-subtext="AE">United Arab Emirates</option><option value="235" data-subtext="GB">United Kingdom</option><option value="236" data-subtext="US">United States</option><option value="237" data-subtext="UM">United States Minor Outlying Islands</option><option value="238" data-subtext="UY">Uruguay</option><option value="239" data-subtext="UZ">Uzbekistan</option><option value="240" data-subtext="VU">Vanuatu</option><option value="241" data-subtext="VA">Vatican City</option><option value="242" data-subtext="VE">Venezuela</option><option value="243" data-subtext="VN">Vietnam</option><option value="244" data-subtext="VG">Virgin Islands, British</option><option value="245" data-subtext="VI">Virgin Islands, US</option><option value="246" data-subtext="WF">Wallis and Futuna</option><option value="247" data-subtext="EH">Western Sahara</option><option value="248" data-subtext="YE">Yemen</option><option value="249" data-subtext="ZM">Zambia</option><option value="250" data-subtext="ZW">Zimbabwe</option></select></div>                           </div>
                           <div class="col-md-6">
                                                            <div class="form-group" app-field-wrapper="zip"><label for="zip" class="control-label">Zip Code</label><input type="text" id="zip" name="zip" class="form-control"  value=""></div>                           </div>
                           <div class="col-md-6">
                                                            <div class="form-group" app-field-wrapper="email"><label for="email" class="control-label">Email</label><input type="text" id="email" name="email" class="form-control"  value=""></div>                           </div>
                           <div class="col-md-6">
                                                            <div class="form-group" app-field-wrapper="phone"><label for="phone" class="control-label">Phone</label><input type="text" id="phone" name="phone" class="form-control"  value=""></div>                           </div>
                                            <?php
                                    $count = 0;
                                    foreach ($usersArray as $key => $value) {
                                        $count++;
                                        echo " Company     ";
                                        echo $value['company'];
                                        echo "<br/>";
                                        
                                                       
                                    }
                                    ?>                  
                                                 </div>
                     </div>
                  </div>
                  <div class="btn-bottom-toolbar bottom-transaction text-right">
                  
                    <button type="button" class="btn btn-info mleft10 proposal-form-submit save-and-send transaction-submit">
                        Save & Send                    </button>
                    <button class="btn btn-info mleft5 proposal-form-submit transaction-submit" type="button">
                      Save                    </button>
                    
                      
               </div>
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="panel_s">
               <div class="panel-body mtop10">
   <div class="row">
      <div class="col-md-4">
          <div class="form-group mbot25 items-wrapper select-placeholder input-group-select">
  <div class="input-group input-group-select">
    <div class="items-select-wrapper">
     <select name="item_select" class="selectpicker no-margin _select_input_group" data-width="100%" id="item_select" data-none-selected-text="Add Item" data-live-search="true">
      <option value=""></option>
            <optgroup data-group-id="0" label="">
              <option value="1" data-subtext=" Months  Capital        Investment   Expected growth    
 6,00         50 000,00   6,00    
...">(50,000.00) Bolt</option>
              <option value="2" data-subtext=" Months   Capital      Investment   Expected growth  
 12,00        50 000,00    2,00  
...">(500,000.00) Edge</option>
              <option value="3" data-subtext=" Months   Capital         Investment   Expected growth  
 18,00           50 000,00   3,00  
...">(50,000.00) Fusion</option>
              <option value="4" data-subtext="...">(1,000,000.00) test</option>
            </optgroup>
        </select>
 </div>
  <div class="input-group-addon">
   <a href="#" data-toggle="modal" data-target="#sales_item_modal">
    <i class="fa fa-plus"></i>
  </a>
</div>
</div>
</div>
      </div>
      <div class="col-md-8 text-right show_quantity_as_wrapper">
         <div class="mtop10">
            <span>Show quantity as:</span>
            <div class="radio radio-primary radio-inline">
               <input type="radio" value="1" id="1" name="show_quantity_as" data-text="Qty" checked>
               <label for="1">Qty</label>
            </div>
            <div class="radio radio-primary radio-inline">
               <input type="radio" value="2" id="2" name="show_quantity_as" data-text="Hours" >
               <label for="2">Hours</label>
            </div>
            <div class="radio radio-primary radio-inline">
               <input type="radio" id="3" value="3" name="show_quantity_as" data-text="Qty/Hours" >
               <label for="3">Qty/Hours</label>
            </div>
         </div>
      </div>
   </div>
   <div class="table-responsive s_table">
      <table class="table estimate-items-table items table-main-estimate-edit has-calculations no-mtop">
         <thead>
            <tr>
               <th></th>
               <th width="20%" align="left"><i class="fa fa-exclamation-circle" aria-hidden="true" data-toggle="tooltip" data-title="New lines are not supported for item description. Use the item long description instead."></i> Item</th>
               <th width="25%" align="left">Description</th>
                              <th width="10%" class="qty" align="right">Qty</th>
               <th width="15%" align="right">Rate</th>
               <th width="20%" align="right">Tax</th>
               <th width="10%" align="right">Amount</th>
               <th align="center"><i class="fa fa-cog"></i></th>
            </tr>
         </thead>
         <tbody>
            <tr class="main">
               <td></td>
               <td>
                  <textarea name="description" rows="4" class="form-control" placeholder="Description"></textarea>
               </td>
               <td>
                  <textarea name="long_description" rows="4" class="form-control" placeholder="Long description"></textarea>
               </td>
                              <td>
                  <input type="number" name="quantity" min="0" value="1" class="form-control" placeholder="Quantity">
                  <input type="text" placeholder="Unit" name="unit" class="form-control input-transparent text-right">
               </td>
               <td>
                  <input type="number" name="rate" class="form-control" placeholder="Rate">
               </td>
               <td>
                  <select class="selectpicker display-block tax main-tax" data-width="100%" name="taxname" multiple data-none-selected-text="No Tax"><option value="VAT|15.00"data-taxrate="15.00" data-taxname="VAT" data-subtext="VAT">15.00%</option></select>               </td>
               <td></td>
               <td>
                                    <button type="button" onclick="add_item_to_table('undefined','undefined',undefined); return false;" class="btn pull-right btn-info"><i class="fa fa-check"></i></button>
               </td>
            </tr>
                     </tbody>
      </table>
   </div>
   <div class="col-md-8 col-md-offset-4">
      <table class="table text-right">
         <tbody>
            <tr id="subtotal">
               <td><span class="bold">Sub Total :</span>
               </td>
               <td class="subtotal">
               </td>
            </tr>
            <tr id="discount_area">
               <td>
                  <div class="row">
                     <div class="col-md-7">
                        <span class="bold">Discount</span>
                     </div>
                     <div class="col-md-5">
                        <div class="input-group" id="discount-total">

                           <input type="number" value="0" class="form-control pull-left input-discount-percent" min="0" max="100" name="discount_percent">

                           <input type="number" data-toggle="tooltip" data-title="The number in the input field is not formatted while edit/add item and should remain not formatted do not try to format it manually in here." value="0" class="form-control pull-left input-discount-fixed hide" min="0" name="discount_total">

                           <div class="input-group-addon">
                              <div class="dropdown">
                                 <a class="dropdown-toggle" href="#" id="dropdown_menu_tax_total_type" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                 <span class="discount-total-type-selected">
                                  %                                 </span>
                                 <span class="caret"></span>
                                 </a>
                                 <ul class="dropdown-menu" id="discount-total-type-dropdown" aria-labelledby="dropdown_menu_tax_total_type">
                                   <li>
                                    <a href="#" class="discount-total-type discount-type-percent selected">%</a>
                                  </li>
                                  <li>
                                    <a href="#" class="discount-total-type discount-type-fixed">
                                      Fixed Amount                                    </a>
                                  </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </td>
               <td class="discount-total"></td>
            </tr>
            <tr>
               <td>
                  <div class="row">
                     <div class="col-md-7">
                        <span class="bold">Adjustment</span>
                     </div>
                     <div class="col-md-5">
                        <input type="number" data-toggle="tooltip" data-title="The number in the input field is not formatted while edit/add item and should remain not formatted do not try to format it manually in here." value="0" class="form-control pull-left" name="adjustment">
                     </div>
                  </div>
               </td>
               <td class="adjustment"></td>
            </tr>
            <tr>
               <td><span class="bold">Total :</span>
               </td>
               <td class="total">
               </td>
            </tr>
         </tbody>
      </table>
   </div>
   <div id="removed-items"></div>
</div>
            </div>
         </div>
         </form>         <div class="modal fade" id="sales_item_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">
                    <span class="edit-title">Edit Item</span>
                    <span class="add-title">Add New Item</span>
                </h4>
            </div>
            <form action="<?php echo base_url()."admin";?>/invoice_items/manage" id="invoice_item_form" method="post" accept-charset="utf-8">
<input type="hidden" name="csrf_token_name" value="ac7687ab509914703882c1daa59bd34d" />                                                        
            
<input type="hidden" name="itemid" value="" />
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-warning affect-warning hide">
                            Changing item info won't affect on the created invoices/estimates/proposals/credit notes.                        </div>
                        <div class="form-group" app-field-wrapper="description"><label for="description" class="control-label">Description</label><input type="text" id="description" name="description" class="form-control"  value=""></div>                        <div class="form-group" app-field-wrapper="long_description"><label for="long_description" class="control-label">Long Description</label><textarea id="long_description" name="long_description" class="form-control" rows="4"></textarea></div>                        <div class="form-group">
                        <label for="rate" class="control-label">
                            Rate - ZAR <small>(Base Currency)</small></label>
                            <input type="number" id="rate" name="rate" class="form-control" value="">
                        </div>
                                                        <div class="form-group">
                                    <label for="rate_currency_4" class="control-label">
                                        Rate - USD</label>
                                        <input type="number" id="rate_currency_4" name="rate_currency_4" class="form-control" value="">
                                    </div>
                                                     <div class="row">
                            <div class="col-md-6">
                             <div class="form-group">
                                <label class="control-label" for="tax">Tax 1</label>
                                <select class="selectpicker display-block" data-width="100%" name="tax" data-none-selected-text="No Tax">
                                    <option value=""></option>
                                                                        <option value="1" data-subtext="VAT">15.00%</option>
                                                                    </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                         <div class="form-group">
                            <label class="control-label" for="tax2">Tax 2</label>
                            <select class="selectpicker display-block" disabled data-width="100%" name="tax2" data-none-selected-text="No Tax">
                                <option value=""></option>
                                                                <option value="1" data-subtext="VAT">15.00%</option>
                                                            </select>
                        </div>
                    </div>
                </div>
                <div class="clearfix mbot15"></div>
                <div class="form-group" app-field-wrapper="unit"><label for="unit" class="control-label">Unit</label><input type="text" id="unit" name="unit" class="form-control"  value=""></div>                <div id="custom_fields_items">
                                    </div>
                <div class="select-placeholder form-group" app-field-wrapper="group_id"><label for="group_id" class="control-label">Item Group</label><select id="group_id" name="group_id" class="selectpicker" data-width="100%" data-none-selected-text="Nothing selected" data-live-search="true"><option value=""></option></select></div>            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info">Save</button>
        </form>    </div>
</div>
</div>
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
