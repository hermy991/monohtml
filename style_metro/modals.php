<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" media="all" title="Bootstrap"/>
<link rel="stylesheet" type="text/css" href="../css/eis_framework.css" media="all" title="Bootstrap"/>
<script type="text/javascript" src="../js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="../js/jquery-ui.js"></script>
<title>Aside Nav</title>

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
<!--<div id="logout_modal_wrap">
	<div id="log_out_container_windows">
		<div id="log_out_icon"></div>
		<h1>Logout <span>juanramon21?</span></h1>
		<p>You can improve your security further after logging out by closing this opened browser</p>
		<div id="control_buttons_wrap">
			<input type="button" value="Yes" class="metro_buttons button_all_ok blue_button_metro"/>
			<a href="#" class="metro_buttons button_cancel yellow_button_metro">No</a>
		</div>
	</div>-end log_out_container_windows-->
</div>

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
				<ul class="col-lg-8 pl0">
					<li class="fl">
						<h1 class="the_title_metro">Controles de Texto</h1>
					</li>
				</ul>
			</div><!--end section_title-->

			<div id="dashboard_right_column" class="right_column_metro col-lg-12 pr0 pl0">
				<div class="drag_and_drop_container fluid_wrap reset doc_en_proceso">
					<div class="drag_container_title">
						<h2>Tareas Pendientes</h2>
						<ul class="drag_container_buttons">
							<li><a href="#" class="setting">Settings</a></li>
							<li><a href="#" class="add">Add</a></li>
							<li><a href="#" class="close_this">Close</a></li>
						</ul>
					</div><!--end drag_container_title-->

					<div class="drag_container_the_content_area drag_content_area_fluid_wrap">
						<div id="notas_metro">
							<div id="login_metro_wrap" class="addnotes fluid_wrap">
									<div id="form_container">
										<div class="bar">
											<span>Notes</span>
											<img class="fr" src="../images/metro_modal_close.png">
										</div>
										<div class="right_side">
											<form>
												<ul class="fl">
													<li class="fl">
														<div class="fl note_container">
															<span class="fl note_arrow">flecha</span>
															<img src="../images/image_user_note.png">
															<ul class="fl ">
																<li class="fl name_date and_name">Ram&oacute;n Francisco</li>
																<li class="fl name_date">17/12/2013 15:33:44</li>
																<li class="fl note_decs">Ac hac tristique etiam placerat tincidunt aliquet a duis pid. Cursus magna etiam ultricies nec, dignissim, penatibus auctor elit ut! Urna dolor tincidunt parturient, placerat ridiculus placerat.</li>
															</ul>
														</div>
													</li>

													<li class="fl">
														<div class="fl note_container">
															<span class="fl note_arrow">flecha</span>
															<img src="../images/image_user_note.png">
															<ul class="fl ">
																<li class="fl name_date and_name">Ram&oacute;n Francisco</li>
																<li class="fl name_date">17/12/2013 15:33:44</li>
																<li class="fl note_decs">Ac hac tristique etiam placerat tincidunt aliquet a duis pid. Cursus magna etiam ultricies nec, dignissim, penatibus auctor elit ut! Urna dolor tincidunt parturient, placerat ridiculus placerat.</li>
															</ul>
														</div>
													</li>

													<li class="fl">
														<div class="fl note_container">
															<span class="fl note_arrow">flecha</span>
															<img src="../images/image_user_note.png">
															<ul class="fl ">
																<li class="fl name_date and_name">Ram&oacute;n Francisco</li>
																<li class="fl name_date">17/12/2013 15:33:44</li>
																<li class="fl note_decs">Ac hac tristique etiam placerat tincidunt aliquet a duis pid. Cursus magna etiam ultricies nec, dignissim, penatibus auctor elit ut! Urna dolor tincidunt parturient, placerat ridiculus placerat.</li>
															</ul>
														</div>
													</li>

													<li class="fl">
														<div class="fl note_container">
															<span class="fl note_arrow">flecha</span>
															<img src="../images/image_user_note.png">
															<ul class="fl ">
																<li class="fl name_date and_name">Ram&oacute;n Francisco</li>
																<li class="fl name_date">17/12/2013 15:33:44</li>
																<li class="fl note_decs">Ac hac tristique etiam placerat tincidunt aliquet a duis pid. Cursus magna etiam ultricies nec, dignissim, penatibus auctor elit ut! Urna dolor tincidunt parturient, placerat ridiculus placerat.</li>
															</ul>
														</div>
													</li>

													<li class="fl">
														<div class="fl note_container">
															<span class="fl note_arrow">flecha</span>
															<img src="../images/image_user_note.png">
															<ul class="fl ">
																<li class="fl name_date and_name">Ram&oacute;n Francisco</li>
																<li class="fl name_date">17/12/2013 15:33:44</li>
																<li class="fl note_decs">Ac hac tristique etiam placerat tincidunt aliquet a duis pid. Cursus magna etiam ultricies nec, dignissim, penatibus auctor elit ut! Urna dolor tincidunt parturient, placerat ridiculus placerat.</li>
															</ul>
														</div>
													</li>
												</ul>
											</form>
										</div><!--end right_side-->

										<div class="fl add_note">
											<h1 class="title_note">Write Note</h1>
											<textarea></textarea>
											<input class="fr green_metro_button metro_button" type="button" value="Add Note" />
										</div>
									
								</div><!--end form_container-->
							</div><!--end login_metro_wrap-->
						</div><!--end notas_metro-->
						
					</div><!--end drag_container_the_content_area-->
				</div><!--end drag_and_drop_container-->

					<div class="drag_container_the_content_area drag_content_area_fluid_wrap">
						<div class="drag_container_the_content_area">
							<div id="copyright_and_powered">
								<p><span>ImaRAD Copyright 2014 - Powered by </span><a href="http://www.virtuamed.com" id="logotipo_virtuamed" target="new_blank" title="Virtuamed - Medical APP Develoment">Logotipo Virtuamed</a></p>
							</div><!--end copyright_and_powered-->
						</div><!--end drag_container_the_content_area-->
					</div><!--end drag_and_drop_container-->

			</div><!--end dashboard_right_column-->
		</div><!--end col-lg-12-->
	</div><!--end the_content_area-->
</div><!--navigation_reference-->

	<!--<div class="relative_buttons">
		<ul>
			<li class="button_save_metro"><input class=" btstyles_metro col-lg-12" type="submit" value="Save" /></li>
			<li class="button_cancel_metro"><input class=" btstyles_metro col-lg-12" type="submit" value="Cancel" /></li>
			<li class="button_back_metro"><a class=" btstyles_metro col-lg-12" href="#">Back</a></li>
		</ul>
	</div>
</div>-->


<script type="text/javascript">
$( "#user_info_display" ).click(function() {
  $( "#user_information_wrap" ).toggle( "slow" );
});
</script>
</div><!--end metro_style-->


<script src="../js/chosen.jquery.js" type="text/javascript"></script>

<script type="text/javascript">
	var config = {
	  '.chosen-select'           : {},
	  '.chosen-select-deselect'  : {allow_single_deselect:true},
	  '.chosen-select-no-single' : {disable_search_threshold:10},
	  '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
	  '.chosen-select-width'     : {width:"95%"}
	}
	for (var selector in config) {
	  $(selector).chosen(config[selector]);
	}
</script>


</body>
</html>
