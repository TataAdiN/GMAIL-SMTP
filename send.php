<html>
    <head>
        <title>Kirim Email</title>
    </head>
    <body>
        <center>
            <?php
                use PHPMailer\PHPMailer\PHPMailer;
                use PHPMailer\PHPMailer\OAuth;
                date_default_timezone_set('Etc/UTC');
                require 'vendor/autoload.php';

                $kepada = 'tataa2237@gmail.com';
                $nama = 'Tata Adi N';
                $judul_email = 'Kirim Email dengan Gmail API';
                $link = 'tataadin.blogspot.com';
                
                $mail = new PHPMailer;
                $mail->isSMTP();
                $mail->SMTPDebug = 2;
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = 587;
                $mail->SMTPAuth = true;
                $mail->Username= 'novemberend99@gmail.com';
                $mail->Password= 'takbolehlewat';
                $mail->setFrom('novemberend99@gmail.com','admin-noreply');
                $mail->addAddress($kepada);
                $mail->Subject = $judul_email;
                $mail->CharSet = 'utf-8';
                $mail->isHTML(true);   
                $mail->Body = '<b>Terimakasih '. $nama .', Telah Mengirim Email</b>
                <br/>Buka Blog Tata Adi N <a href='. $link.'>disini</a>';
                if (!$mail->send()) {
                    echo "Mailer Error: " . $mail->ErrorInfo;
                } else {
                    echo "Kirim Email Berhasil";
                }
            ?> 
        </center>
    </body>
</html>