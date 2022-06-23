<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf8">
        <meta name="viewport" content="initial-scale=1.0, width=device-width">
        <title><?php echo escape($this->getTitle()); ?></title>
        <link rel="stylesheet" href="<?php echo asset('main.css') ?>">
    </head>
    <body>
        <?php echo $this->child(); ?>
    </body>
</html>
