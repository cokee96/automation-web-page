html>
 <head>
  <title>Ansible Application</title>
 </head>
 <body>
 <h1>Ansible Demo</h1>
        <p>Este es el nodo: puppet-node-2</p>
<?php
echo  "Correos electronicos: </BR>";
$link = mysqli_connect('192.168.56.118', 'coke', '658078381', 'noeds_email') or die(mysqli_connect_error($link));
$res = mysqli_query($link, "SELECT * FROM usuarios;");

 while ($row = mysqli_fetch_array($res)) {
         echo $row["nombre"] . ": " . $row["correo_electronico"] . "</br>";
 }
?>
</body>
</html>