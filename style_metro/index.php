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
					<li><a href="#" id="full_screen" class="top_bar_icons">Full Screen</a></li>
					<li><input type="text" id="search_top"/></li>
					<li><a href="#" id="settings" class="top_bar_icons">Settings</a></li>
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
							<h1 class="the_title_metro">Dashboard</h1>
						</li>
					</ul>
				</div><!--end section_title-->

				<div id="dashboard_right_column" class="right_column_metro col-lg-12 pr0 pl0">
					<div class="container_the_content_area_metro fluid_wrap reset doc_en_proceso">
						<div id="dashboard_left_column" class="col-lg-4 pl0 pr0">
							<div class="drag_and_drop_container fluid_wrap reset anuncios">
								<div class="drag_container_title">
									<h2>Anuncios</h2>
									<ul class="drag_container_buttons">
										<li><a href="#" class="setting">Settings</a></li>
										<li><a href="#" class="add">Add</a></li>
										<li><a href="#" class="close_this">Close</a></li>
									</ul>
								</div><!--end drag_container_title-->

								<div class="drag_container_the_content_area">
									<div class="info_container_anuncios fluid_wrap">
										<h3>Reunión  (Hotel Lina)</h3>
										<p>integer egestas porta magna sociis tempor in pid nec, dictumst enim lectus porttitor! Turpis porta eros amet elit eros, scelerisque scelerisque auctor diam magna montes porta natoque.</p>
									</div><!--text_container-->
									<div class="info_container_anuncios">
										<h3>Auditoría (Cemento Titán)</h3>
										<p>integer egestas porta magna sociis tempor in pid nec, dictumst enim lectus porttitor! Turpis porta eros amet elit eros, scelerisque scelerisque auctor diam magna montes porta natoque.</p>
									</div><!--text_container-->
									<div class="info_container_anuncios">
										<h3>Reunión (Interna)</h3>
										<p>integer egestas porta magna sociis tempor in pid nec, dictumst enim lectus porttitor! Turpis porta eros amet elit eros, scelerisque scelerisque auctor diam magna montes porta natoque.</p>
									</div><!--text_container-->
								</div><!--end drag_container_the_content_area-->

								<div class="drag_container_pagination">
									<ul>
										<li><a href="#" class="bt_back">Back</a></li>
										<li><a href="#" class="active">1</a></li>
										<li><a href="#" class="">2</a></li>
										<li><a href="#" class="">3</a></li>
										<li><a href="#" class="">4</a></li>
										<li><a href="#" class="bt_next">Next</a></li>
									</ul>
								</div><!--end drag_container_pagination-->
							</div><!--end drag_and_drop_container-->

							<div class="drag_and_drop_container fluid_wrap reset doc_en_proceso">
								<div class="drag_container_title">
									<h2>Documentos en Proceso</h2>
									<ul class="drag_container_buttons">
										<li><a href="#" class="setting">Settings</a></li>
										<li><a href="#" class="close_this">Close</a></li>
									</ul>
								</div><!--end drag_container_title-->

								<div class="drag_container_the_content_area">
									<ul class="info_container_documentos fluid_wrap">
										<li>					
											<h3>Manual de calidad</h3>
											<span>Tipo: Manuales</span>
										</li>
										<li>					
											<h3>Manual de calidad</h3>
											<span>Tipo: Manuales</span>
										</li>
										<li>					
											<h3>Manual de calidad</h3>
											<span>Tipo: Manuales</span>
										</li>
										<li>					
											<h3>Manual de calidad</h3>
											<span>Tipo: Manuales</span>
										</li>
									</ul>
								</div><!--end drag_container_the_content_area-->

								<div class="drag_container_pagination">
									<ul>
										<li><a href="#" class="bt_back">Back</a></li>
										<li><a href="#" class="active">1</a></li>
										<li><a href="#" class="">2</a></li>
										<li><a href="#" class="">3</a></li>
										<li><a href="#" class="">4</a></li>
										<li><a href="#" class="bt_next">Next</a></li>
									</ul>
								</div><!--end drag_container_pagination-->
							</div><!--end drag_and_drop_container-->
						</div><!--end dashboard_left_column-->

						<div id="dashboard_right_column" class="col-lg-8 pr0">
							<div class="drag_and_drop_container fluid_wrap reset doc_en_proceso">
								<div class="drag_container_title">
									<h2>Tareas Pendientes</h2>
									<ul class="drag_container_buttons">
										<li><a href="#" class="setting">Settings</a></li>
										<li><a href="#" class="add">Add</a></li>
										<li><a href="#" class="close_this">Close</a></li>
									</ul>
								</div><!--end drag_container_title-->

								<div class="drag_container_the_content_area">
									<div class="data_table_container ">
										<table class="eis_table table">
											<tr>
												<th></th>
												<th>Tarea</th>
												<th>Sistema</th>
												<th>Tiempo</th>
												<th>Indicador</th>
											</tr>
											<tr>
												<td><input type="checkbox"/></td>
												<td>Tristique enim cras hac augue nunc, nunc, ac augue  ac.</td>
												<td>Porta magna sociis tempor in pid</td>
												<td>3 de 15</td>
												<td><p><img src="images/indicator_yellow.png" width="11" height="11" alt="indicator"/></p></td>
											</tr>
											<tr>
												<td><input type="checkbox"/></td>
												<td>Tristique enim cras hac augue nunc, nunc, ac augue  ac.</td>
												<td>Porta magna sociis tempor in pid</td>
												<td>3 de 15</td>
												<td><p><img src="images/indicator_green.png" width="11" height="11" alt="indicator"/></p></td>
											</tr>
											<tr>
												<td><input type="checkbox"/></td>
												<td>Tristique enim cras hac augue nunc, nunc, ac augue  ac.</td>
												<td>Porta magna sociis tempor in pid</td>
												<td>3 de 15</td>
												<td><p><img src="images/indicator_red.png" width="11" height="11" alt="indicator"/></p></td>
											</tr>
											<tr>
												<td><input type="checkbox"/></td>
												<td>Tristique enim cras hac augue nunc, nunc, ac augue  ac.</td>
												<td>Porta magna sociis tempor in pid</td>
												<td>3 de 15</td>
												<td><p><img src="images/indicator_red.png" width="11" height="11" alt="indicator"/></p></td>
											</tr>
										</table>
									</div><!--end data_table_container-->
								</div><!--end drag_container_the_content_area-->
							</div><!--end drag_and_drop_container-->

							<div class="drag_and_drop_container fluid_wrap reset doc_en_proceso">
								<div class="drag_container_title">
									<h2>Últimos Documentos Aprobados</h2>
									<ul class="drag_container_buttons">
										<li><a href="#" class="setting">Settings</a></li>
										<li><a href="#" class="close_this">Close</a></li>
									</ul>
								</div><!--end drag_container_title-->

								<div class="drag_container_the_content_area">
									<ul class="info_container_documentos">
										<li>					
											<h3>Gestión de Procesos</h3>
											<span>Tipo: Proceso</span>
										</li>
										<li>					
											<h3>Índice de Calidad en Proyectos</h3>
											<span>Tipo: Indicador</span>
										</li>
										<li>					
											<h3>Calidad en los Servicios V2</h3>
											<span>Tipo: Encuesta</span>
										</li>
										<li>					
											<h3>Manual de calidad</h3>
											<span>Tipo: Manuales</span>
										</li>
									</ul>
								</div><!--end drag_container_the_content_area-->

								<div class="drag_container_pagination">
									<ul>
										<li><a href="#" class="bt_back">Back</a></li>
										<li><a href="#" class="active">1</a></li>
										<li><a href="#" class="">2</a></li>
										<li><a href="#" class="">3</a></li>
										<li><a href="#" class="">4</a></li>
										<li><a href="#" class="bt_next">Next</a></li>
									</ul>
								</div><!--end drag_container_pagination-->
							</div><!--end drag_and_drop_container-->
						</div><!--end dashboard_right_column-->
							
						<div id="copyright_and_powered">
							<p><span>ImaRAD Copyright 2014 - Powered by </span><a href="http://www.virtuamed.com" id="logotipo_virtuamed" target="new_blank" title="Virtuamed - Medical APP Develoment">Logotipo Virtuamed</a></p>
						</div><!--end copyright_and_powered-->
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
		</div>-->
	</div>

	<script type="text/javascript">
	$( "#user_info_display" ).click(function() {
	  $( "#user_information_wrap" ).toggle( "slow" );
	});
	</script>

</div><!--end metro_style-->
</body>
</html>
