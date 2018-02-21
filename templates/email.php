<?php
require("correo/src/PHPMailer.php");
require("correo/src/SMTP.php");
include("db.php");

class Send {

    function sendMail(){

        $lista = array();
        $listades = array();
        $db = new db();
        $sql = "SELECT email FROM persona WHERE noticias = 1";
        $resultado = $db->lanzar_consulta($sql);
        $sqlNews = "SELECT title, description FROM noticias";
        $resultadoNews = $db->lanzar_consulta($sqlNews);
        while($filaNews = $resultadoNews->fetch_assoc()){
            $lista[] = "<h2 style='color:darkred;'>".$filaNews["title"]."</h2><br>";
            $listades[] = "<p style='margin:0; padding-bottom: 20px; border-bottom: 1px solid black;'>".$filaNews["description"]."</><br>";
        }
        while($fila = $resultado->fetch_assoc()){

            $mail = new \PHPMailer\PHPMailer\PHPMailer();
            $mail->SMTPAuth = true;
            $mail->Host = "smtp-mail.outlook.com";
            $mail->SMTPSecure = "STARTTLS";
            $mail->Username = "pruebapracticaalba@outlook.es";
            $mail->Password = "lanaja1994"; 
            $mail->Port = "587";
            $mail->From = "pruebapracticaalba@outlook.es"; 
            $mail->isSMTP(); 
            $rec1 = $fila["email"]; //"albalanaja94@gmail.com"; 
            $mail->AddAddress($rec1);
            $mail->Subject = "RSS";
            $mail->Body = "<h1 style='color:black;'>Gracias por suscribirte a las noticias de Santander ".$rec1.", aqui tienes las noticias mensuales</h1><br><br>";
            foreach (array_combine($lista, $listades) as $title => $description) {
                $mail->Body .= $title;
                $mail->Body .= $description;
            }
            $mail->isHTML(true);
            $mail->WordWrap = 200;

            try {
                if (!$mail->Send()) {
                    echo 'El mensaje no se ha enviado!.';
                    echo 'Error: ' . $mail->ErrorInfo;
                } else {
                    /*echo  //Fill in the document.location thing
                    '<script type="text/javascript">
                                        if(confirm("Your mail has been sent"))
                                        document.location = "index.php";
                        </script>';*/
                }
            } catch (\PHPMailer\PHPMailer\Exception $e) {
            }
        }
    }
}
