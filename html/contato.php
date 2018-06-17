<?php include ('navbar.php') ?>

<?php

  function clean_input($data){
      $cleandata = trim($data);
      $cleandata = stripslashes($cleandata);
      $cleandata = htmlspecialchars($cleandata);

      return $cleandata;
  }

          if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $assunto = $_POST['assunto'];
            $mensagem = $_POST['mensagem'];

            if ($nome == "") {
              $erro_nome = '* O nome é obrigatório';
            } elseif ($email == "") {
              $erro_email = '* O email é obrigatório';
            } elseif ($assunto == "") {
              $erro_assunto = '* O email é obrigatório';
            } elseif ($mensagem == "") {
              $erro_mensagem = '* O email é obrigatório';    
            } elseif ( filter_var($email,FILTER_VALIDATE_EMAIL) == false ) {
              $erro_email = '* O e-mail informado é inválido';
            } else {
              $email = clean_input($email);
            }
          }  
            ?>
  
  
                  



<div class="color">
    <div class ="container-fluid">
      <div class="contato col-12">
        <h2>Envie sua mensagem</h2>
        <h3>Em breve uma coruja nos entregará sua carta</h3>
        <form action="contato.php" method="post">
          <div class "form-group">
          <label for="nome">Nome:</label>
          <input type="text" class="form-control" name="nome" id="nome" />
          </div>
          <div class="erro-form"><?php echo $erro_nome; ?></div>
          <div class "form-group">
          <label for="email">Email:</label>
          <input type="text" class="form-control" name="email" id="email" />
          <div class="erro-form"><?php echo $erro_email; ?></div>
          </div>
          <div class "form-group">
          <label for="assunto">Assunto:</label>
          <input type="text" class="form-control" name="assunto" id="assunto" />
          <div class="erro-form"><?php echo $erro_assunto; ?></div>
          </div>
          <div class "form-group">
          <label for="mensagem">Mensagem:</label>
          <textarea name="mensagem" class="form-control" id="mensagem"></textarea>
          <div class="erro-form"><?php echo $erro_mensagem; ?></div>
          </div>
          <input type="submit" class="botao" name="enviar" value="Enviar mensagem" />
        </form>
        <h3>Contato direto:</h3>
        <ul class="sem-padding sem-marcador">
          <li><img src="../assets/img/e-mail.jpg"/> Email: <strong>chapeuselestore@gmail.com</strong></li>
          <li><img src="../assets/img/telefone.png"/> Telefone: <strong>(32)3333-3333</strong></li>
          <li><img src="../assets/img/facebook.png"/> Facebook: <a href="https://www.facebook.com/">Chapéu SeleStore</a></li>
        </ul>
        <p><?php echo $nome; ?></p>
        <p><?php echo $email; ?></p>
        <p><?php echo $assunto; ?></p>
        <p><?php echo $mensagem; ?></p>

       

      </div>
    </div>
  </div>


  <?php
    include("footer.php");
  ?>