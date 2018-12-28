<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Plantilla 1</title>
    <link href="<?php echo URL; ?>css/styles.css" rel="stylesheet">
    <script src="<?php echo URL; ?>js/jquery-3.3.1.min.js" ></script>
    <script src="<?php echo URL; ?>js/java.js"></script>
</head>
<body>
<?php $this->insert('partials/menu') ?>

<div class="content">
    <?php $this->insert('partials/left') ?>
    <div class="center">
        <?= $this->section('content') ?>

    </div>
</div>
<?php $this->insert('partials/footer') ?>

</body>
</html>