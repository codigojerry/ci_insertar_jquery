<!doctype html>
<html>
<head>
	<title><?php echo ''; ?> - CodeIgniter 2 Tutorial</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/mystyle.css'; ?>">
	<script src="<?php echo base_url().'js/jquery-1.9.1.min.js'; ?>"></script>

	<script>

	$(document).ready(function(){

	  $("#add").click(function(){
	  	
	  	$("#mens").fadeIn(2000);
	  	$("#mens").css({"background-color":"yellow","width":"300px"}); 

	  	title=$("#title").val();
	  	txt=$("#text").val();

	  	if(title!="" && txt!=""){

		  	$.ajax({url:"<?php echo base_url().'index.php/news/create'; ?>",type:'POST',data:{titulo:title,texto:txt},success:function(result){
		      $("#mens").html(result);
		      $("#mens").fadeOut(5000);
		    }});

		  	//$("#mens").load("<?php echo base_url().'index.php/news/create'; ?>",{titulo:title,texto:txt}); otra forma

	  	}else{

			$("#mens").html("No deje campos vacíos");
			$("#mens").fadeOut(5000);

	  	}

	  });

	});

	</script>


</head>
<body>

	<div id="cabecera">
		<h1>Insertar datos a MySQL con CodeIgniter y AJAX jQuery</h1>

		<a href="<?php echo base_url().'index.php/pages/view'; ?>"><b>Home</b> </a>|
		<a href="<?php echo base_url().'index.php/news'; ?>"><b>News</b></a>

	</div>

	<hr />