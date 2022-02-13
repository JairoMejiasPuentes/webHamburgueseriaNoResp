<?php

  $to = 'jairomejiaspuentes@gmail.com';
  $subject = 'pedidos hamburguesería';
  $message = "\n Nombre: ".$_POST['fname']."\n Apellido: "
    .$_POST[ 'lname']."\n Dirección: "
    .$_POST[ 'address']."\n Teléfono: "
    .$_POST[ 'phoneNumber']."\n eMail: "
    .$_POST[ 'email']."\n\n Pedido: \n"
    ."Entrantes: "
    ."\tEnsalada: ".$_POST[ 'product1-1']."\n"
    ."\tCroquetas: ".$_POST[ 'product1-2']."\n"
    ."\tMozza Sticks: ".$_POST[ 'product1-3']."\n"
    ."\tPatatas: ".$_POST[ 'product1-4']."\n"
    ."Hamburguesas: "
    ."\tKrusty Burguero: ".$_POST[ 'product1']."\n"
    ."\tCangreBurguer: ".$_POST[ 'product2']."\n"
    ."\tMcPolla: ".$_POST[ 'product3']."\n"
    ."\tHappy Shit: ".$_POST[ 'product4']."\n"
    ."Bebidas: "
    ."Ensalada: ".$_POST[ 'product1-1']."\n"
    ."Croquetas: ".$_POST[ 'product1-2']."\n"
    ."Mozza Sticks: ".$_POST[ 'product1-3']."\n"
    ."Patatas: ".$_POST[ 'product1-4']."\n"
    ."Ensalada: ".$_POST[ 'product1-1']."\n"
    ."Croquetas: ".$_POST[ 'product1-2']."\n"
    ."Mozza Sticks: ".$_POST[ 'product1-3']."\n"
    ."Patatas: ".$_POST[ 'product1-4']."\n"
  $headers = 'From: jairomejiaspuentes@gmail.com'. "\r\n" .
                 'Reply-To: jairomejiaspuentes@gmail.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

                 

if (mail($to, $subject, $message, $headers)) {
    echo "Email successfully sent to $to...<br>";
    if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['address']) && isset($_POST['phoneNumber']) && isset($_POST['email'])){
      echo "Nombre: ".$_POST['fname']."<br> Apellido: ".$_POST['lname']."<br> Dirección: "
      .$_POST['address']."<br> Teléfono: "
      .$_POST['phoneNumber']."<br> eMail: "
      .$_POST['email']."<br><br> Pedido: <br>"
      ."Krusty Burguer: ".$_POST['product1']."<br> "
      ."CangreBurguer: ".$_POST['product2']."<br> "
      ."McPolla: ".$_POST['product3']."<br> "
      ."Happy Shit: ".$_POST['product4'];
    }else{
        echo "Hubo un problema con las variables post";
    }

} else {
    echo "Email sending failed...";
}
 
// Comprobamos si estan definidas las variables post y mostramos su contenido

"product1-2"
"product1-3"
"product1-4"

"product2-1"
"product2-2"
"product2-3"
"product2-4"

"product3-1"
"product3-2"
"product3-3"
"product3-4"

"product4-1"
"product4-2"
"product4-3"
"product4-4"


?>