<?php
/**
 * Default layout for pages
 *
 * @uses TASK_DOMAIN constant with site location
 * @uses $content variable with page html-code
 */

$menu = $data['menu'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 3.2.2</title>
    <link rel="stylesheet" type="text/css" href="<?php echo TASK_DOMAIN?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo TASK_DOMAIN?>/css/style.css">
    <link rel="icon" href="<?php echo TASK_DOMAIN?>/favicon.ico" type="image/x-icon"/>
    <script src="<?php echo TASK_DOMAIN?>/js/jquery.min.js"></script>
    <script src="<?php echo TASK_DOMAIN?>/js/popper.min.js"></script>
    <script src="<?php echo TASK_DOMAIN?>/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <?php echo $content ?>
</div>
</body>
</html>

