﻿<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Pesqui Farma</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
	<script type="text/javascript">
		function logOut(event){
			event.preventDefault();
			
			acao = 'sair';
			
			$.ajax({
				url:'funcoes/func.php',
				type:'POST',
				data:{
					acao:acao
				},
				success:function(ret){
					
				},
				complete:function(sus){
					$('#log').click();
				}
			});
		}
	</script>
<body>
  
	<section id="container" >
      
		<!--header start-->
		<header class="header black-bg">
			<div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
			</div>
            <!--logo start-->
            <a href="home.php" class="logo"><b>Pesqui Farma</b></a>
            <!--logo end-->
            
			<a id="log" class="btn hide" href="index.php">Sair</a>
			 
            <div class="top-menu" >
            	<ul class="nav pull-right top-menu">
                    <li>
						<a class="logout" href="index.php">Sair</a>
					</li>
            	</ul>
            </div>
        </header>
      <!--header end-->