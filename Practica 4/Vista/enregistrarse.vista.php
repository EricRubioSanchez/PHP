<!-- Eric Rubio Sanchez -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">  
	<link rel="stylesheet" href="../Vista/estils.css"> <!-- feu referència al vostre fitxer d'estils -->
    <link rel="stylesheet" href="../Vista/estilForms.css"> <!-- feu referència al vostre fitxer d'estils -->
	<title>Registrar</title>
</head>
<body>
	<?php include_once'../Controlador/enregistrarse.php' ?>
    <nav>
		<ul>
 			<li><a href="../Vista/index.vista.php">Articles</a></li>
  			<li class="logs"><a href="../Vista/logarse.vista.php">Logar-se</a></li>
			<li class="logs active"><a href="../Vista/enregistrarse.vista.php">Enregistrar-se</a></li>
		</ul>
	</nav>
    <form action="../Controlador/enregistrarse.php" method="post">
            <label><h1>Enregistrar</h1></label>
            <br>
            <label>
                    Nom: <input type="text" required name="nom" maxlength="20" minlength="1" value="<?php if(isset($nom)){echo $nom;}?>">
            </label>
            <br>
            <label>Correu electronic:
                <input type="email" name="correu" maxlength="30" minlength="4" required value="<?php if(isset($correu)){echo $correu;}?>">
            </label>
            <br>
            <label>Contrasenya:
                <input type="password" name="password" required value="<?php if(isset($password)){echo $password;}?>">
            </label>
            <br>
            <label> Torna a introduir la contrasenya
                <input type="password" name="password2" required value="<?php if(isset($password2)){echo $password2;}?>">
            </label>
            <?php if (!empty($errors)):?>
                <div><?php
                    echo "<p class='errors'>".$errors."</p>";
                    ?>
                </div>
            <?php endif ?>
            <?php if (!empty($correcte)):?>
                <div><?php
                    echo "<p class='correcte'>".$correcte."</p>";
                    ?>
                </div>
            <?php endif ?>
            <input type="submit" value="Enviar">
        </form>
</body>
</html>