<?php 

require_once __DIR__ . '/backend/database.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        
    </header>
    <main class="dischi__main">
        <div class="container">
            <?php foreach($database as $disco) {?>
            <div class="dischi">
                <img src="<?php echo $disco['poster'] ?>">
                <h1 class="title"><?php echo $disco['title'] ?><h1>
                <p class="author"><?php echo $disco['author'] ?></p>
                <p class="genre"><?php echo $disco['genre'] ?></p>
                <p class="year"><?php echo $disco['year'] ?><p>
            </div>
            <?php } ?>
    </main>
</body>
</html>