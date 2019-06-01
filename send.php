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

                $kepada = 'email tujuan';
                $nama = 'nama orang yang dituju';
                $judul_email = 'Kirim Email dengan Gmail API';
                $link = 'tataadin.blogspot.com';
                
                $mail = new PHPMailer;
                $mail->isSMTP();
                $mail->SMTPDebug = 2;
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = 587;
                $mail->SMTPAuth = true;
                $mail->Username= 'alamat email mu';
                $mail->Password= 'password email mu';
                $mail->setFrom('alamat email mu','admin-noreply'); //untuk memunculkan alias
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
