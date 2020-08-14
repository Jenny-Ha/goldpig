<?php 
    $destination = "ps.jennyha@gmail.com"; // email address of destination pass: @goldpigperu
    
    //Correo que se enviará
    $name 	 = stripslashes($_POST['name']);
    $email 	 = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = stripslashes($_POST['message']);

    $header = "Enviado desde Goldpig";
    $mensajeCompleto = $message . '\nAtentamente: ' . $name;

    mail($destination, $subject, $mensajeCompleto,$header);

    echo "<script>alert('Su mensaje se envió correctamente')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\", 1000)</script>";

?>