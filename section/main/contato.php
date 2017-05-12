<section id="contact" class="section section-center section-contact">
          <div class="container">
            <h2 class="section-title"><span>Contato</span></h2>
            <p>Fale conosco, pelo nosso formulário de email</p>
            <div class="main-action">
              <!-- action="contact.php" -->
			  <form method="post" name="contactform" id="contactform">
                <div class="results"></div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="sr-only">Mensagem</label>
                      <textarea name="message" class="form-control" placeholder="Mensagem" style="height: 181px" rows="6" required></textarea>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="sr-only">Telefone</label>
                      <input name="subject" type="text" class="form-control" placeholder="Telefone" required>
                    </div>
                    <div class="form-group">
                      <label class="sr-only">Nome</label>
                      <input name="name" type="text" class="form-control" placeholder="Nome" required>
                    </div>
                    <div class="form-group">
                      <label class="sr-only">Email</label>
                      <input name="email" type="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <!--<div class="col-md-3 col-sm-3 col-xs-12">
                          <img src="image.php" alt="Image verification" class="captcha-image">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="verify" type="text" id="verify" class="form-control" placeholder="Type the code shown" required>
                        </div>-->
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <button id="submit" type="submit" class="btn btn-default btn-block">Enviar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </section>