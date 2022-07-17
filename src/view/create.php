<?php
use Hola\Notas\models\Nota;
require_once 'src\models\Notas.php';
?>
<?php
    if(count($_POST) > 0) {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $nota = new Nota($title,$content);
        $nota->save();
        header("Location:?view=home");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreatPage</title>
    <link rel="stylesheet" href="src/view/resources/main.css">
</head>
<body>
    <?php include "nav.php"; ?>
    <h1>CreatPage</h1>
    <form action="?view=create" method="post">
        <input type="text" name="title" id="" placeholder="Title ...">
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="Enviar">
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script> 
</body>
</html>