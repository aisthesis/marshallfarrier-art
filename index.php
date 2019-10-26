<!doctype html>
<html lang="en">
    <?php
    $root = './';
    $templatePath = $root . 'templates/';
    // $sectionTitle = 'Blurbs';
    include($templatePath . '_head.html');
    ?>
    <body>
        <h1>Hello, world!</h1>
        <p><?php echo $templatePath; ?></p>
        
        <?php include($templatePath . '_scripts.html') ?>
    </body>
</html>
