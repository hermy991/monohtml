<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" media="all" title="Bootstrap"/>
<link rel="stylesheet" type="text/css" href="../css/eis_framework.css" media="all" title="Bootstrap"/>
<script type="text/javascript" src="../js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="../js/jquery-ui.js"></script>
<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<title>Compose Email</title>

<script>
        tinymce.init({selector:'textarea'});
</script>

<script type="text/javascript">
	jQuery(document).ready(function(){

		organizeMenu();

		jQuery("li#colapsar_menu > a.close_menu").click(function(){
			
		var menus = $('.close_menu');
		var status = jQuery(this).data('status');

		if(getCookie('menuStatus') != null)
			status = getCookie('menuStatus');

		if(status == 'open')
			closeMenuFunction(menus);
		else
			openMenuFunction(menus);
		
	});
	});


	function organizeMenu() {

		var menu = $('.close_menu');
		var status = getCookie('menuStatus');
		if(status == null)
			return false;

		if(status == 'close') 
			closeMenuFunction(menu);
	}

	function closeMenuFunction(menus) {
			jQuery(menus).addClass("menu_closed");
			jQuery(this).data('status', 'close');
			setCookie('menuStatus', 'close', 7);
	}

	function openMenuFunction(menus) {
			jQuery(menus).removeClass("menu_closed");
			jQuery(this).data('status', 'open');
			setCookie('menuStatus', 'open', 7);
	}



	/** Cookies functions **/
function setCookie(name,value,days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+value+expires+"; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}
	/** END **/
</script>
</head>

<body class="">
<div id="metro_style" class="reset">
	<div id="top_bar_wrap" class="fluid_wrap">
		<div id="top_bar_container" class="fluid_wrap">
			<a href="#" id="logotipo_top">Logotipo</a>
			<div id="top_bar_items_wrap">
				<ul class="top_bar_items">
					<li id="language_flag_wrap"><a id="language_flag">Language</a>
						<!--<ul>
							<li><a href="#"><div id="usa_flag"></div><span>English</span></a></li>
							<li><a href="#"><div id="usa_flag"></div><span>Español</span></a></li>
						</ul>-->
					</li>
					<li><a href="#" id="full_screen" class="top_bar_icons">Full Screen</a></li>
					<li><input type="text" id="search_top"/></li>
					<li><a href="#" id="settings" class="top_bar_icons">Settings</a></li>
					<li><a href="#" id="user_info" class="top_bar_icons">User info</a></li>
					<li><a href="#" id="log_out" class="top_bar_icons">Cerrar sesión</a></li>
				</ul>
			</div>
		</div><!--end top_bar_container-->
	</dvi><!--en top_bar_wrap-->
	<div id="global_wrap-side_nav" class="fluid_wrap">


		<div id="navigation_reference" class="close_menu">
			<?php include_once('navigation.php');?>

		<div id="the_content_area_right_wrap">
			<div class="col-lg-12 pl0">
				<div class="section_title_metro fluid_wrap">
					<ul class="col-lg-2 pl0">
						<li class="fl">
							<h1 class="the_title_metro">Inbox</h1>
						</li>
						<li class="inbox_dropdown">
							<a href="#">Dropdown</a>
							<ul class="dropdown_menu">
								<li><a href="#">This is the option 01</a></li>
								<li><a href="#">This is the option 02</a></li>
								<li><a href="#">This is the option 02</a></li>		
							</ul>
						</li>
					</ul>

					<ul id="inbx_user_options">
						<li><a href="#" class="inbox_important">Important Mail</a></li>
						<li><a href="#" class="inbox_folder">Folder de la casa</a></li>
						<li><a href="#" class="inbox_recicle_bin">Recicle Bin</a></li>
					</ul>

					<ul class="inbox_pagination">
						<li><p>1-30 <span>of</span> 3,495</p></li>
						<li><a href="#" id="prev_bt">Left arrow</a></li>
						<li><a href="#" id="next_bt">Right arrow</a></li>
					</ul>
				</div><!--end section_title-->


				<div id="dashboard_right_column" class="right_column_metro col-lg-12 pr0 pl0">
					<div class="container_the_content_area_metro fluid_wrap reset doc_en_proceso">
						<div class="drag_container_the_content_area">
							<div id="inbox_left_nav" class="col-lg-2 pl0">
								<ul>
									<li id="inbox_compose"><a href="inbox_comp.php">Compose</a></li>
									<li><span>Folder</span></li>
									<li><a href="inbox.php" class="active">Inbox <span class="counter">(55)</span></a></li>
									<li><a href="#">Sent</a></li>
									<li><a href="#">Draft</a></li>
									<li><a href="#">Trash</a></li>
									<li><span>Quick Access</span></li>
									<li><a href="#">Images (150)</a></li>
									<li><a href="#">Documents (15)</a></li>
								</ul>

								<div id="storage_indicator">
									<p><span>3.5 GB of </span><span class="bold">10GB</span></p>
									<div class="progress_bottom"><div class="progress_top"></div></div>
								</div>
							</div><!--end inbox_left_nav-->

							<div id="inbox_right_nav" class="col-lg-10 pr0">
								<div id="emails_list">
									
								</div><!--emails_list-->

								<div id="email_description_box">
									<h2 class="about_the_email"><p>Compose New Email</p><span class="prominent">Draft</span></h2>

									<div id="email_description_box_left_side" class="col-lg-10 pl0">
										<div id="user_email_send_to" class="users_recipient">
											<span class="sect_indicator">To</span><div class="user_emails"><span>wventura@eisdr.com</span><span>programador@hotmail.com</span>
											<span>wventura@eisdr.com</span><span>ramonmartinezcastro@hotmail.com</span><span>wventura@eisdr.com</span><span>wventura@eisdr.com</span></div>
										</div>

										<div id="user_email_send_cc" class="users_recipient">
											<span class="sect_indicator">CC</span><div class="user_emails"><span>wventura@eisdr.com</span><span>arodriguez@eisdr.com</span></div>
										</div>

										<div id="user_email_send_cc" class="users_recipient">
											<span class="sect_indicator">BCC</span><div class="user_emails"><span>wventura@eisdr.com</span><span>arodriguez@eisdr.com</span></div>
										</div>

										<div id="mail_subject" class="users_recipient">
										</div>

										<div id="the_email_text">
											<textarea class="email_compose_editor">Your content here.</textarea>
										</div><!--end the_email_text-->

										<div id="compose_option_buttons" class="users_recipient">
											<input type="submit" id="disregard" class="metro_buttons" value="Disregard"/>
											<a href="#" id="draft" class="metro_buttons">Draft</a>
											<input type="submit" id="send" class="metro_buttons fr" value="Send"/>
										</div>
										
									</div><!--end email_description_box_left_side-->

									<div id="right_related_invoice">
										<h3 class="widget_title">Related Invoice<h3>
										<ul class="invoice_list">
											<li><a href="#">Helloworld</a></li>
											<li><a href="#">Mythehelloworld programin</a></li>
										</ul>
									</div><!--end right_related_invoice-->					
								</div><!--end email_description_box-->
							</div><!--end inbox_right_nav-->

								<div id="copyright_and_powered">
									<p><span>ImaRAD Copyright 2014 - Powered by </span><a href="http://www.virtuamed.com" id="logotipo_virtuamed" target="new_blank" title="Virtuamed - Medical APP Develoment">Logotipo Virtuamed</a></p>
								</div><!--end copyright_and_powered-->
					
						</div><!--end drag_container_the_content_area-->
					</div><!--end drag_and_drop_container-->
				</div><!--end dashboard_right_column-->
			</div><!--end col-lg-12-->
		</div><!--end the_content_area-->
	</div><!--navigation_reference-->


	<script type="text/javascript">
	$( "#user_info_display" ).click(function() {
	  $( "#user_information_wrap" ).toggle( "slow" );
	});
	</script>
</div><!--end metro_style-->
</body>
</html>
