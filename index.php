<!doctype html>
<html lang="en">
    <?php
    $root = './';
    $templatePath = $root . 'templates/';
    $mediaPath = $root . 'media/';
    include($root . 'common.php');
    include($templatePath . '_head.html');
    ?>
    <body>
    <?php
    include($templatePath . '_header.html');
    ?>

        <main role="main">

            <section class="jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading">Marshall Farrier</h1>
                    <p class="lead text-muted">My work riffs on the spiritual energy of its subjects. It aims to represent visually the soul of 
                    concrete beings and the essence of abstract emotions.</p>
                </div>
            </section>

            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img src="<?php echo $mediaPath; ?>191018_Natalie.jpg" alt="Natalie" width="100%" height"225">  
                                <div class="card-body">
                                    <h4 class="card-text">Portraits</h4>
                                    <a href="portraits.php" class="stretched-link"></a>                               
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img src="<?php echo $mediaPath; ?>190921_Crows.jpg" alt="Crows" width="100%" height"225">  
                                <div class="card-body">
                                    <h4 class="card-text">Nature</h4>
                                    <a href="nature.php" class="stretched-link"></a>                               
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img src="<?php echo $mediaPath; ?>190803_SquirrelTotem.jpg" alt="Squirrel totem" width="100%" height"225">  
                                <div class="card-body">
                                    <h4 class="card-text">Sculpture</h4>
                                    <a href="sculpture.php" class="stretched-link"></a>                               
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img src="<?php echo $mediaPath; ?>190912_Cup.jpg" alt="Cup" width="100%" height"225">  
                                <div class="card-body">
                                    <h4 class="card-text">Studies</h4>
                                    <a href="#" class="stretched-link"></a>                               
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img src="<?php echo $mediaPath; ?>190416_SmokeSignal.jpg" alt="Smoke signal" width="100%" height"225">  
                                <div class="card-body">
                                    <h4 class="card-text">Abstractions</h4>
                                    <a href="#" class="stretched-link"></a>                               
                                </div>
                            </div>
                        </div>
                        <!--
                        Additional genres for the future:
                        - Figures
                        - Cities
                        Copy-paste above divs to incorporate different genres.
                        -->
                    </div>
                </div>
            </div>
        </main>
        <?php include($templatePath . '_footer.html'); ?>
        <?php include($templatePath . '_scripts.html'); ?>
    </body>
</html>
