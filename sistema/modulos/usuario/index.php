<?php
	include_once 'modulos/header/index.php';
	include_once 'modulos/menu/index.php'; 
?>
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  		<div class="row mt">
			  		<div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Informações do usuário</h4>
						<form class="form-horizontal style-form" onsubmit="atualizarUsuario(event)">
							<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nome</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" id="nome" value="<?php echo $_SESSION['usuario']; ?>" />
                              </div>
							</div>
							<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Senha</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" id="senha" value="<?php echo $_SESSION['senha']; ?>" />
                              </div>
							</div>
							<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Email</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" id="email" value="<?php echo $_SESSION['email']; ?>" />
                                  <input type="hidden" class="form-control" id="id" value="<?php echo $_SESSION['cod']; ?>" />
                              </div>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
                                  <input type="submit" class="btn btn-primary" value="Atualizar">
                              </div>
							</div>
						</form>
					</div>
				</div>
		</section>
      </section>
		
		
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
	
	<script type="text/javascript">
		function atualizarUsuario(event){
			
			event.preventDefault();
			acao = 'atualizarUsuario';
			
			nome = $('#nome').val();
			senha = $('#senha').val();
			email = $('#email').val();
			id = $('#id').val();
			
			$.ajax({
				url:'funcoes/func.php',
				type:'POST',
				data:{
					acao:acao,
					nome:nome,
					senha:senha,
					email:email,
					id:id
				},
				success:function(ret){
					console.log(ret)
				},
				complete: function(sus){
				}
			});
		}
	</script>

  </body>
</html>
