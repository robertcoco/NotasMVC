<?php
use Hola\Notas\models\Nota;
require_once 'src\models\Notas.php';

if(count($_POST) > 0) {
    // obteniendo el title y content para resetearlos 
    $title = isset($_POST['title'])? $_POST['title']: "titulo";
    $content = isset($_POST['content'])? $_POST['content']: "content";
    $uuid = $_POST['id'];

    //reseteando datos
    $note = Nota::get($uuid);
    $note->SetTitle($title);
    $note->SetContent($content);

    // actualizando registros en la base de datos.
    $note->update();
}

if($_GET['id']) {
    $note = Nota::get($_GET['id']);
}else {
    header("Location:?view=home");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ViewVista</title>
    <link rel="stylesheet" href="src/view/resources/main.css">
    
</head>

<body onload="HoraActual(),cambiar()" >
    <?php include "nav.php"; ?>
    <h1>Actualizar</h1>

    <form action="?view=view&id=<?php echo $note->GetUuid();?>" method="post">
        <input type="text" name="title" id="" placeholder="Title ..." value="<?php echo $note->GetTitle(); ?>">
        <textarea name="content" id="" cols="20" rows="5"><?php echo $note->GetContent();?></textarea>
        <input type="submit" value="Enviar">
        <input type="hidden" name="id" value="<?php echo $note->GetUuid();?>">
    </form>

    <div id="contenedor_reloj"></div>

    <div class="container">
        <p class="parrafo">B</p>
        <p class="parrafo">I</p>
        <p class="parrafo">E</p>
        <p class="parrafo">N</p>
        <p class="parrafo">V</p>
        <p class="parrafo">E</p>
        <p class="parrafo">N</p>
        <p class="parrafo">I</p>
        <p class="parrafo">D</p>
        <p class="parrafo">O</p> 
    </div>
    <div class="img">
        <img src='src/view/avion.svg' alt="some file"  height='200'
        width='200' style="color:red;"/>
    </div> 
    <div class="arrow">
        <img src='src/view/arrow-svgrepo-com.svg' alt="some file"  height='50'
        width='50' style="color:red;"/>
    </div> 
    <button id="button">stop\</button>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
<script language="JavaScript" src="src/view/main.js">
</script>  

</body>
</html>