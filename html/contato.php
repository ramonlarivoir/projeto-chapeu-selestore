<?php include ('navbar.php') ?>

<?php

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

// Usar as classes sem o namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

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
                $erro_assunto = '* O assunto é obrigatório';
              } elseif ($mensagem == "") {
                $erro_mensagem = '* A mensagem é obrigatória';    
              } elseif ( filter_var($email,FILTER_VALIDATE_EMAIL) == false ) {
                $erro_email = '* O e-mail informado é inválido';
              } else {
                $email = clean_input($email);

                // Criação do Objeto da Classe PHPMailer
                $mail = new PHPMailer(true); 

                try {
                              
                  //Retire o comentário abaixo para soltar detalhes do envio 
                  // $mail->SMTPDebug = 2;                                
                                
                  // Usar SMTP para o envio
                  $mail->isSMTP();                                      

                  // Detalhes do servidor (No nosso exemplo é o Google)
                  $mail->Host = 'smtp.gmail.com';

                  // Permitir autenticação SMTP
                  $mail->SMTPAuth = true;                               

                  // Nome do usuário
                  $mail->Username = 'chapeuselestore@gmail.com';        
                  // Senha do E-mail         
                  $mail->Password = 'codehp123!';                           
                  // Tipo de protocolo de segurança
                  $mail->SMTPSecure = 'tls';   

                  // Porta de conexão com o servidor                        
                  $mail->Port = 587;
                                
                  // Garantir a autenticação com o Google
                  $mail->SMTPOptions = array(
                    'ssl' => array(
                          'verify_peer' => false,
                          'verify_peer_name' => false,
                          'allow_self_signed' => true
                    )
                  );

                  // Remetente
                  $mail->setFrom("$email", "$nome");
                                
                  // Destinatário
                  $mail->addAddress('chapeuselestore@gmail.com', 'Chapeu SeleStore');

                  // Conteúdo

                  // Define conteúdo como HTML
                  $mail->isHTML(true);                                  

                  // Assunto
                  $mail->Subject = "$assunto";
                  $mail->Body    = "$mensagem";
                  $mail->AltBody = 'Formato alternativo em texto puro para emails que não aceitam HTML';

                  // Enviar E-mail
                  $mail->send();
                  $msg_sucess = 'Mensagem enviada com sucesso!';
                  } catch (Exception $e) {
                  $msg_sucess = 'A mensagem não foi enviada pelo seguinte motivo: ' . "$mail->ErrorInfo";
                  }
                                  
              }
          }  
            
  ?>
  
  <div class="margem-sup fonte">
    <div class ="container-fluid">
      <div class="contato col-12">
        <h2>Envie sua mensagem</h2>
        <h3>Em breve uma coruja nos entregará sua carta</h3>
        <p class ="msg-sucesso"><?php echo $msg_sucess; ?></p>
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
          <li><img src="../assets/img/e-mail.png"/> Email: <strong>chapeuselestore@gmail.com</strong></li>
          <li><img src="../assets/img/tele.png"/> Telefone: <strong>(32)3333-3333</strong></li>
          <li><img src="../assets/img/facebook.png"/> Facebook: <a href="https://www.facebook.com/" class="link-face">Chapéu SeleStore</a></li>
        </ul>  

      </div>
    </div>
  </div>


  <?php
    include("footer.php");
  ?>