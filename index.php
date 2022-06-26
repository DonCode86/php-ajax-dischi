 <?php
require_once __DIR__ . '/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul>
    <?php foreach ($database as $album) { ?>
      <img src="<?= $album["poster"] ?>">
      <h1><?= $album["title"] ?></h1>
      <h2><?= $album["author"] ?></h3>
      <span><?= $album["genre"] ?></span>
      <span><?= $album["year"] ?></span>
    <?php } ?>
  </ul>
</body>
</html>