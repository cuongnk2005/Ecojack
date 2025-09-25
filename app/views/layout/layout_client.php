<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link type="text/css" rel="stylesheet" href="<?php echo _WEB_ROOT_?>/public/asset/css/style.css">
</head>
<body>
    <?php
    $this->render("block/header");
    $this->render($content,$subcontent);
    ?>
    <?php
     require_once _DIR_ROOT.'/app/views/block/footer.php'
      ?> 
</body>
</html>