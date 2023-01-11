<?php

date_default_timezone_set('Brazil/East');

$date = date('d/m/Y');
$hour = date('H:i');

$nome = !empty($_POST['nomeCliente']) ? filter_var($_POST['nomeCliente'], FILTER_SANITIZE_STRING) : null;
$telefone = !empty($_POST['telefoneCliente']) ? filter_var($_POST['telefoneCliente'], FILTER_SANITIZE_STRING) : null;
$email = !empty($_POST['emailCliente']) ? filter_var($_POST['emailCliente'], FILTER_SANITIZE_STRING) : null;
$msg = !empty($_POST['mensagemCliente']) ? filter_var($_POST['mensagemCliente'], FILTER_SANITIZE_STRING) : null;


$username = 'webmaster.duettoag@gmail.com';
$password = 'bjtpyhsaqtddvwqo';


# Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

# Define os dados do servidor e tipo de conexão
$mail = new PHPMailer();
$mail->IsSMTP(); # Define que a mensagem será SMTP
$mail->Host = "smtp.gmail.com"; # Endereço do servidor SMTP
$mail->Port = 465;  # Porta TCP para a conexão
$mail->SMTPAutoTLS = true; # Utiliza TLS Automaticamente se disponível
$mail->SMTPAuth = true; # Usar autenticação SMTP - Sim
$mail->Username = $username; # Usuário de e-mail
$mail->Password = $password;  # Senha do usuário de e-mail

# Define o remetente (você)
$mail->From = ('webmaster.duettoag@gmail.com'); # Seu e-mail
$mail->FromName = $nome; # Seu nome

# Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();

# Define os destinatário(s)
$mail->AddAddress('webmaster.duettoag@gmail.com');
#$mail->AddAddress('contato@sala03.arq.br'); # Copia

# Define os dados técnicos da Mensagem
$mail->IsHTML(true); # Define que o e-mail será enviado como HTML
$mail->CharSet = 'utf-8'; # Charset da mensagem (opcional)
#$mail->SMTPDebug = 4; #Ativar Caso queira debugar o Envio de e-mail
$mail->SMTPSecure = "ssl";


# Define a mensagem (Texto e Assunto)
$mail->Subject = "Contato - Sala 03 Arquitetura"; # Assunto da mensagem
$mail->AltBody = "Este é o corpo da mensagem de teste, somente Texto! \r\n :)";

$msg = '<h3>Informações de contato</h3>
    <table border="1" width="100%" cellpadding="5">
    <tr>
        <td width="30%">Nome</td>
        <td width="70%">' . $nome . '</td>
    </tr>
    <tr>
        <td width="30%">Telefone</td>
        <td width="70%">' . $telefone . '</td>
    </tr>
    <tr>
        <td width="30%">Email</td>
        <td width="70%">' . $email . '</td>
    </tr>
    <tr>
        <td width="30%">Mensagem</td>
        <td width="70%">' . $msg . '</td>
    </tr>
    <tr>
        <td width="30%">Data/Hora</td>
        <td width="70%">' . $date . ' - ' . $hour . '</td>
    </tr>
    </table>';


$mail->Body = $msg;
# Envia o e-mail
$enviado = $mail->Send();
