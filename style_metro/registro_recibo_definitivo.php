<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" media="all" title="Bootstrap"/>
<link rel="stylesheet" type="text/css" href="../css/style.css" media="all" title="Bootstrap"/>
<script type="text/javascript" src="../js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="../js/jquery-ui.js"></script>
<title>Aside Nav</title>

<script type="text/javascript">
	jQuery(document).ready(function(){
		$( "#accordion" ).accordion({
		      heightStyle: "content",
		      collapsible: true/*,
		      active: 1*/
		    });

		organizeMenu();

		jQuery("#colapsar_menu > a.close_menu").on('click',function(){
			
			var menus = $('.close_menu');
			var status = jQuery(this).data('status');

			if(getCookie('menuStatus') != null)
				status = getCookie('menuStatus');

			if(status == 'open'){
				$('.sub_navigation').removeClass('hide_menu');
				closeMenuFunction(menus);
			}else{
				$('.sub_navigation').addClass('hide_menu');
				openMenuFunction(menus);
			}
		});
		
		    var menus = $('.close_menu');
			var status = jQuery(this).data('status');

			if(getCookie('menuStatus') != null)
				status = getCookie('menuStatus');

			if(status == 'open'){
				$('.sub_navigation').addClass('hide_menu');
			}

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
			$( "#accordion" ).accordion({
		      heightStyle: "content",
		      collapsible: true,
		      active:true,
		      disabled: true
		    });

	}

	function openMenuFunction(menus) {
			$( "#accordion" ).accordion({
		      heightStyle: "content",
		      collapsible: true,
		      active:false,
		      disabled: false
		    });
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

<body class="apliacion_de_aseguradoras">

<div id="metro_style" class="reset">
	<div id="top_bar_wrap" class="fluid_wrap">
		<div id="top_bar_container" class="fluid_wrap">
			<a href="#" id="logotipo_top">Logotipo</a>
			<div id="top_bar_items_wrap">
				<ul class="top_bar_items">
					<li><input type="text" id="search_top"/></li>
					<li><a href="#" id="settings" class="top_bar_icons">Settings</a>
					<!--<ul id="user_info">
							<li><div id="user_pic"><img src="../images/user_picture-2.png" width="80" height="63"/></div></li>
							<li><a id="user_name" href="#">wventura@eisdr.com</a></li>
							<li><a id="user_account_info" href="#">My Account</a></li>
							<li><a id="bt_off" title="Log out">Logout</a></li>
						</ul> -->
					</li>
					<li><a href="#" id="user_info" class="top_bar_icons">User info</a></li>
					<li><a href="#" id="log_out" class="top_bar_icons">Cerrar sesión</a></li>
				</ul>
			</div>
		</div><!--end top_bar_container-->
	</div><!--en top_bar_wrap-->
	<div id="global_wrap-side_nav" class="fluid_wrap">


		<div id="navigation_reference" class="close_menu">
		
		<?php include_once('navigation.php');?>
			<div id="the_content_area_right_wrap">
		<div class="col-lg-12 pl0">
			<div class="section_title_metro fluid_wrap">
				<ul class="col-lg-8 pl0">
					<li class="fl">
						<h1 class="the_title_metro">Registro de Recibo Definitivo</h1>
					</li>
					
				</ul>
			</div><!--end section_title-->

			<div id="dashboard_right_column" class="right_column_metro col-lg-12 pr0 pl0">
				<div class="container_the_content_area_metro fluid_wrap reset doc_en_proceso">
					<div class="metro_numerador col-lg-8 pr0 pl0">
						<ul class="col-lg-6 pl0 fl">
							<li>
								<div class="dropdown col-lg-12 pl0 pr0">
									<select id="localidad" class="col-lg-12 form-control dropdown-select" name="sexo">
										<option>Masculino</option>
										<option>Femenino</option>
									</select>
								</div>	
							</li>
						</ul>
					</div><!--end drag_container_title-->
					<div class="drag_container_the_content_area">
						<div class="data_table_container ">
							<table class="eis_table_metro table">
								<tr>
									<th>Client ID</th>
									<th>Nombre Cliente</th>
									<th>Asignado a</th>
									<th>Moneda</th>
									<th>Interes</th>
									<th>Monto</th>
								</tr>
								<tr>
									<td><input type="checkbox"> 805555DFSS0</td>
									<td>Hermy Garcia</td>
									<td>RD</td>
									<td>0001-Luis Diaz</td>
									<td>100</td>
									<td>1000</td>
								</tr>
								
								<tr class="selected">
									<td><input type="checkbox"> 805555DFSS0</td>
									<td>Consoro Hernandez</td>
									<td>RD</td>
									<td>0001-Luis Diaz</td>
									<td>50</td>
									<td>2000</td>
								</tr>
								
								<tr>
									<td><input type="checkbox"> 805555DFSS0</td>
									<td>Ram&oacute;n Antonio Fernandez Reina</td>
									<td>RD</td>
									<td>0001-Luis Diaz</td>
									<td>100</td>
									<td>1000</td>
								</tr>
							</table>
							
							
						</div><!--end data_table_container-->
					</div><!--end drag_container_the_content_area-->
				</div><!--end drag_and_drop_container-->
			</div><!--end dashboard_right_column-->
		</div><!--end col-lg-12-->
	</div><!--end the_content_area-->
			

		</div><!--navigation_reference-->

	</div>


	<script type="text/javascript">
	$( "#user_info_display" ).click(function() {
	  $( "#user_information_wrap" ).toggle( "slow" );
	});
	</script>

</div><!--end metro_style-->
</body>
</html>
