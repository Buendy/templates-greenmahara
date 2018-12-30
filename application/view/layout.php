<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Plantilla 2</title>
    <link href="<?php echo URL; ?>css/styles.css" rel="stylesheet">
</head>
<body>
<div class="content">
    <div class="header-left">


    </div>
    <div class="header-right">
        <p class="aligncenter"><img src="./php.png" alt="" width="100" height="100"></p>
    </div>
</div>
<?php $this->insert('partials/menu') ?>
<div class="content">
    <?php $this->insert('partials/left') ?>
    <div class="center">
        <?= $this->section('content') ?>

    </div>
    <div class="right">


    </div>
</div>
<?php $this->insert('partials/footer') ?>

</body>
</html>