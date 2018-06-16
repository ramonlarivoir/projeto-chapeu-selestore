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
          <li><img src="../assets/img/e-mail.jpg"/> Email: <strong>chapeuselestore@gmail.com</strong></li>
          <li><img src="../assets/img/telefone.png"/> Telefone: <strong>(32)3333-3333</strong></li>
          <li><img src="../assets/img/facebook.png"/> Facebook: <a href="https://www.facebook.com/">Chapéu SeleStore</a></li>
        </ul>
			</div>
    </div>
	</div>


	<?php
		include("footer.php");
	?>