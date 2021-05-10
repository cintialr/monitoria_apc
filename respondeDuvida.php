    <?php
    require __DIR__.'/vendor/autoload.php';
    require __DIR__.'/src/PHPMailer.php';
    require __DIR__.'/src/SMTP.php';
    require __DIR__.'/src/Exception.php';
    
    include __DIR__.'/include/header.php';
    include __DIR__.'/include/telaRespondeDuvida.php';
    include __DIR__.'/include/footer.php';
    
    use \App\DB\DataBase;
    use \App\Entity\Duvida;
    use \PHPMailer\PHPMailer\PHPMailer;
    use \PHPMailer\PHPMailer\SMTP;
    use \PHPMailer\PHPMailer\Exception;
    
    $mail = new PHPMailer(true);
    
    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'monitoria.apc@gmail.com';
        $mail->Password = 'monitoriaapc2020';
        $mail->Port = 587;
    
        $mail->setFrom('monitoria.apc@gmail.com');
       // $mail->addAddress($duvida->matricula.'@aluno.unb.br');
        $mail->addAddress('cintialeal2789@gmail.com');
    
        $mail->isHTML(true);
        $mail->Subject = 'Dúvida rapida APC';
        $mail->Body = 'Chegou o email teste do <strong>Canal TI</strong>';
        $mail->AltBody = 'Chegou o email teste do Canal TI';
    
        print_r($mail);
        if($mail->send()) {
            echo 'Email enviado com sucesso';
        } else {
            echo 'Email nao enviado';
        }
    } catch (Exception $e) {
        echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
    }