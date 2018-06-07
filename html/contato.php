<?php include ('navbar.php') ?>

<div class="color">
		<div class ="container-fluid">
			<div class="contato col-12">
				<h2>Envie sua mensagem</h2>
				<h3>Em breve uma coruja nos entregará sua carta</h3>
				<form action="">
					<div class "form-group">
          <label for="nome">Nome:</label>
          <input type="text" class="form-control" name="nome" id="nome" />
          </div>
          <div class "form-group">
          <label for="email">Email:</label>
          <input type="text" class="form-control" name="email" id="email" />
          </div>
          <div class "form-group">
          <label for="assunto">Assunto:</label>
          <input type="text" class="form-control" name="assunto" id="assunto" />
          </div>
          <div class "form-group">
          <label for="mensagem">Mensagem:</label>
          <textarea name="mensagem" class="form-control" id="mensagem"></textarea>
          </div>
          <input type="submit" class="botao" name="enviar" value="Enviar mensagem" />
				</form>
        <h3>Contato direto:</h3>
        <ul class="sem-padding sem-marcador">
          <li><img src="../assets/img/e-mail.jpg"/> Email: <strong>chapeuselestore@outlook.com</strong></li>
          <li><img src="../assets/img/telefone.png"/> Telefone: <strong>(32)3333-3333</strong></li>
          <li><img src="../assets/img/facebook.png"/> Facebook: <a href="https://www.facebook.com/">Chapéu SeleStore</a></li>
        </ul>
			</div>
    </div>
	</div>


	<footer>
        <div class="container-fluid text-center page-footer">
            <div class="row">
                <!-- coluna 1-->
                <div class="col-md-4 col-sm-3 text-md-left text-sm-left" id="footer-nav">
                    <ul class="list-unstyled nav-flex-collum">
                        <li class="nav-item">
                            <a href="index.html">Principal</a>
                        </li>
                        <li class="nav-item">
                            <a href="QuemSomos.html">Quem Somos</a>
                        </li>
                        <li class="nav-item">
                            <a href="produtos.html">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a href="#">Contato</a>
                        </li>
                    </ul>
                </div>
                <!-- coluna 2-->
                <div class="col-md-4 col-sm-3 text-md-center text-sm-center">
                    <img id="logo-footer" src="../assets/img/Chapeu-Logo.png">
                </div>
                <!-- coluna 3-->
                <div class="col-md-4 col-sm-3 text-md-right text-sm-right">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">
                                <img class="SocialMedia" src="../assets/img/twitter.png">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="SocialMedia" src="../assets/img/facebook.png">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="SocialMedia" src="../assets/img/instagram.png">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="SocialMedia" src="../assets/img/localizacao.png">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Copyright -->
            <div class="row">
                <div class="container-fluid footer-copyright text-center" id="copyright-footer">
                    © 2018 Copyright:
                    <a href="https://codejr.com.br/"> codejr.com.br </a>
                </div>
            </div>
        </div>
    </footer>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
			

</body>
</html>