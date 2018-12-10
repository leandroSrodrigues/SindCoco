<?php

    session_start();

    if(!isset($_SESSION["login"])){
        header("Location: /admin/home.php");
    }

?>
<!doctype html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Administração Sindcoco</title>
        <meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="shortcut icon" type="image/png" href="/img/logoMini.png"/>

		<?php
		
			require("../util/imports.php");

		?>
    </head>
    <body>
        
        <?php

            require("nav.php");

        ?>

        <br>    
        <h1>
            <?=$_SESSION["nome"];?>
        </h1>
       

    </body>
</html>