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
          	<h3><i class="fa fa-angle-right"></i> Farmácias > Pague Menos / Extra Farma / Dose Certa</h3>
		  	<div class="row mt">
			  	<div class="col-lg-12">
                    <div class="form-panel">
                          <section id="unseen" style="height: 378px;overflow-y: scroll;width: 100%;">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>Código</th>
                                  <th>Nome</th>
                                  <th>Valor</th>
                                  <th>Volume</th>
                                  <th>Tipo</th>
                              </tr>
                              </thead>
                              <tbody id="valores">
                              </tbody>
                          </table>
                          </section>
					</div><!-- /content-panel -->
				</div><!-- /col-lg-4 -->
		
				<div class="col-lg-12">
          			<div class="form-panel">
						<h4>Adicione um novo medicamento!</h4>
                      <form class="form-inline" role="form" id="addItens">
                          <div class="form-group">
                              <label class="sr-only" >Nome</label>
                              <input type="text" class="form-control" id="nomeProduto" placeholder="Nome">
                          </div>
                          <div class="form-group">
                              <label class="sr-only" >Valor</label>
                              <input type="number" class="form-control" id="valorProduto" placeholder="Valor">
                          </div>
						  <div class="form-group">
                              <label class="sr-only" >Volume</label>
                              <input type="text" class="form-control" id="volumeProduto" placeholder="Volume">
                          </div>
						  <div class="form-group">
                              <label class="sr-only" >Tipo</label>
                              <select class="form-control" id="tipoProduto">
								<option value="0">Escolha o tipo</option>
								<option value="Anti-Psicotico">Anti-Psicótico</option>
								<option value="Antidepressivos">Antidepressivos</option>
								<option value="Antiflamatorio">Antiflamatório</option>
								<option value="Hipoglecimiante">Hipoglecimiante</option>
								<option value="Antihistaminico">Antihistamínico</option>
								<option value="Anti-hipertensivo">Anti-hipertensivo</option>
							  </select>
                          </div>
                          <button type="submit" class="btn btn-theme">Adicionar</button>
                      </form>
          			</div><!-- /form-panel -->
          		</div>
		  	</div><!-- /row -->
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
        $(document).ready(function () {
			listarItens();
			
			$('#addItens').submit(function(event){
				event.preventDefault();
				
				acao = 'adicionarItem';
				nome = $('#nomeProduto').val();
				valor = $('#valorProduto').val();
				volume = $('#volumeProduto').val();
				tipo = $('#tipoProduto').val();
			
				$.ajax({
					url:'funcoes/func.php',
					type: 'POST',
					dataType: 'json',
					data:{
						acao:acao,
						nome:nome,
						valor:valor,
						volume:volume,
						tipo:tipo
					},
					success:function(retorno){
						limpar();
						listarItens();
					}
				});
				
			})
		});
		
		function limpar(){
			$('#nomeProduto').val("");
			$('#valorProduto').val("");
			$('#volumeProduto').val("");
			$('#tipoProduto').val("");
		}
		function listarItens(){
			acao = 'listarItens';
			
			$.ajax({
				url:'funcoes/func.php',
				type: 'POST',
				dataType: 'json',
				data:{
					acao:acao
				},
				success:function(retorno){
					$('#valores').html(retorno.table)
				}
			});
		}
	</script>

  </body>
</html>
