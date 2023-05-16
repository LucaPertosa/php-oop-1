<?php

require_once "db.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Film</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Lista film</h1>
        <?php foreach($movies as $movie) {?>
            <div class="movie">
                <?php $movie->printMovieDetails(); ?>
            </div>
        <?php }?>
    </div>
</body>
</html>