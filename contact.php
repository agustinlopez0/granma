<?php
if($_POST) {
    $destinatario = 'agustinlopez686@gmail.com';
    $nombre =  "";
    $tel = "";
    $mensaje = "";
    $email = "";

    if(isset($_POST['nombre'])) {
        $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
      }
       
      if(isset($_POST['email'])) {
          $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
      }
       
      if(isset($_POST['asunto'])) {
          $asunto = filter_var($_POST['asunto'], FILTER_SANITIZE_STRING);
      }
  
       
      if(isset($_POST['mensaje'])) {
          $mensaje = htmlspecialchars($_POST['mensaje']);
      }

      if(isset($_POST['tel'])){
          $tel = $_POST['tel'];
      }


    $header = "Enviado desde www.electricistamatriculadorosario.com";
    $mensajeCompleto = $mensaje . "\n\nAtentamente " . $nombre . "\n" . "Email: " . $email . "\nTelefono: " . $tel;
    $asunto = 'Mensaje nuevo de (' . $nombre . ')';

    if(mail($destinatario, $asunto, $mensajeCompleto, $header)){
        include('index.html');
    echo "<script>alert('correo enviado exitosamente');</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000) </script>";
    }else{
        echo "<script>alert('no se pudo enviar');</script>";
    }
}else{
    echo "<script>alert('algo salio mal');</script>";
}

?>