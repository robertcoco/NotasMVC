<?php
use Hola\Notas\models\Nota;
require_once 'src\models\Notas.php';
$notes = Nota::getAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoyBásico</title>
    <link rel="stylesheet" href="src/view/resources/main.css">
</head>
<body>
    <?php include "nav.php"; ?>
    
    <h1>Bienvenido a esta pagina web</h1>
    <div class="noteContainer">
    <?php foreach($notes as $note) {?>
        <a href="?view=view&id=<?php echo $note->GetUuid(); ?>">
            <div class="note-preview">
                <div class="title"><?php echo $note->GetTitle(); ?></div>
                <div class="title"><?php echo $note->GetContent(); ?></div>
            </div>
        </a>
    
    <?php } ?>
    </div>
</body>
</html0>