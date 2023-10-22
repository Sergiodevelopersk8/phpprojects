

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="vistas.css">
    <title>vistas</title>
</head>
<body>
    
    <?php
if(isset($_COOKIE['contador'])){
    setcookie('contador',$_COOKIE['contador']+1,time()+365*24*60*60);?>
  <div id="vistasdiv"><?php echo "numero de visitas ".$_COOKIE['contador'];
    ?></div>
    <?php
}

else{
    setcookie('contador', 1,time()+ 365 * 24 * 60 * 60 );
    echo"Bienvenido porpor primera vez a nuestra página web";
}


?>
</body>
</html>