<!doctype html>
<html lang="en">
    <?php
    // define variables
    $root = './';
    include($root . 'common.php');
    $cardDataFile = $paths['data'] . 'portraits.json';
    $previewImage = '200224_Allena.jpg';

    // generate head
    include($paths['templates'] . '_head.html');
    ?>
    <body>
    <?php
    include($paths['templates'] . '_header.html');
    ?>

        <main role="main">

            <section class="jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading">Portraits</h1>
                </div>
            </section>
<?php
    include($paths['templates'] . '_items.php');
?>
        </main>
        <?php include($paths['templates'] . '_footer.html'); ?>
        <?php include($paths['templates'] . '_scripts.html') ?>
    </body>
</html>
