<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>DocumentDFGHJ</title>
</head>
<?php
require 'data.php'
?>

<body>
    
    <header>
        <a class="box1" href="">lijst 1</a>
        <a class="box2" href="">Lijst 2</a>
        <button class="button">Menu</button>
    </header>
    <main>
        <?php foreach ($library as $song){
            ?>
              <div class="card">
              <img src=<?php echo $song["images"]   ?> alt="">
              <h2><?php echo $song["artiest"]  ?></h2>
              <h2><?php echo $song["titel"]   ?></h2>
              <h2><?php echo $song["genre"]  ?></h2>
             
          </div>
        
        <?php
        }?>
    </main>
  
    
</body>
</html>