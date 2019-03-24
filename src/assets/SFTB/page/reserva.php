
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Reserva para Fire Table Beer</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Medical Appointment Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs Sign up Web Templates, 
 Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="../css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
<link href="../css/style-cita.css" rel='stylesheet' type='text/css' /><link href="../css/style-cita.css" rel='stylesheet' type='text/css' />
<!--fonts--> 
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<!--//fonts--> 
</head>
<body>
<!--background-->
<h1>Reserva para Fire Table Beer </h1>
    <div class="bg-agile">
	<div class="book-appointment">
	<h2>Hacer una reserva</h2>
				
			<form action="#" method="post" name="appointment" id="appointment">
			<div id="resultados_ajax" class="gaps"></div>
			<div class="left-agileits-w3layouts same">
			
			<div class="gaps">
				<p>Nombre de la reserva</p>
					<input type="text" name="name" placeholder="" required=""/>
			</div>	
				<div class="gaps">	
				<p>Número de teléfono</p>
					<input type="text" name="number" placeholder="" required=""/>
				</div>
				<div class="gaps">
				<p>E-mail</p>
						<input type="email" name="email" placeholder="" required="" />
				</div>	
				<div class="gaps">
				<p>Numero de personas</p>
						<textarea name="symptoms" placeholder="" required="" ></textarea>
				</div>
			</div>
			<div class="right-agileinfo same">
			<div class="gaps">
				<p>Seleccionar fecha</p>		
						<input  id="datepicker1" name="datepicker1" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
			</div>
			<div class="gaps">
				<p>Area</p>	
					<select class="form-control" name="departament">
						<option></option>
						<option value="Cardiología">Bar</option>
						<option value="Oftalmología">Restaurante</option>
						<option value="Oftalmología">Patio</option>
						
					</select>
			</div>
			<div class="gaps">
				<p>Reunion</p>	
					<select class="form-control" name="gender" required>
						<option></option>
						<option value="M">Familiar</option>
						<option value="F">Amigos</option>
					</select>
			</div>
			<div class="gaps">
				<p>Hora</p>		
					<input type="text" id="timepicker" name="time" class="timepicker form-control" value="">	
			</div>
			</div>
			<div class="clear"></div>
						  <input type="submit" value="Reservar">
			</form>
		</div>
   </div>
   <!--copyright-->
			<div class="copy w3ls">
		       <p>&copy; 2019. Formulario para reserva en restaurante
	        </div>
		<!--//copyright-->
		<script type="text/javascript" src="../js/jquery-cita.min.js"></script>
		<script type="text/javascript" src="../js/wickedpicker-cita.js"></script>
			<script type="text/javascript">
				$('.timepicker').wickedpicker({twentyFour: false});
			</script>
		<!-- Calendar -->
				<link rel="stylesheet" href="../js/jquery-ui-cita2.js" />
				<script src="../css/jquery-ui-cita.css"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
						  
				  </script>
			<!-- //Calendar -->
			<script>
				$( "#appointment" ).submit(function( event ) {
				  var parametros = $(this).serialize();
				  $.ajax({
						type: "POST",
						url: "enviar-mail.php",
						data: parametros,
						 beforeSend: function(objeto){
							$("#resultados_ajax").html("Enviando...");
						  },
						success: function(datos){
							$("#resultados_ajax").html(datos);
						}
				});
			
				  event.preventDefault();
				});
			</script>	

</body>
</html>