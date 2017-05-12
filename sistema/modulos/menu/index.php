<?php
	$str = $_SERVER['REQUEST_URI'];
	$produtos;
	$home;
	$usr;
	
	$v = strpos($str, 'produtos');
	if(!$v){
		$produtos = '';
	}
	else{
		$produtos = 'class="active" ';
	}
	
	$h = strpos($str, 'home');
	if(!$h){
		$home = '';
	}else{
		$home = 'class="active" ';
	}
	
	$u = strpos($str, 'usuario');
	if(!$u){
		$usr = '';
	}else{
		$usr = 'class="active" ';
	}

?>
<!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
				<ul class="sidebar-menu" id="nav-accordion">
              
				<p class="centered"><a href="profile.html"><img src="assets/img/ui-sam2.jpg" class="img-circle" width="60"></a></p>
				<h5 class="centered"><?php echo $_SESSION['usuario']; ?></h5>

					<li class="mt">
						<a <?php echo $home; ?> href="home.php">
							<i class="fa fa-dashboard"></i>
							<span>Painel Principal</span>
						</a>
					</li>
					<li class="sub-menu">
                      <a <?php echo $produtos; ?> href="produtos.php">
							<i class="fa fa-tasks"></i>
							<span>Pordutos</span>
						</a>
					</li>
					<li class="sub-menu">
                      <a <?php echo $usr; ?> href="usuario.php">
							<i class="fa fa-user"></i>
							<span>Usuário</span>
						</a>
					</li>
					
					
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
<!--sidebar end-->