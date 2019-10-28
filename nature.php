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
                    <h1 class="jumbotron-heading">Portraits</h1>
                </div>
            </section>

            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img src="<?php echo $mediaPath; ?>191018_Natalie.jpg" alt="Natalie" width="100%" height"225">  
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p>Natalie</p>
                                        <p class="text-muted">2019</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img src="<?php echo $mediaPath; ?>190908_Savannah.jpg" alt="Savannah" width="100%" height"225">  
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p>Savannah</p>
                                        <p class="text-muted">2019</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img src="<?php echo $mediaPath; ?>190808_Anton.jpg" alt="Anton" width="100%" height"225">  
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p>Anton</p>
                                        <p class="text-muted">2019</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img src="<?php echo $mediaPath; ?>190705_Autoportrait.jpg" alt="Self-portrait" width="100%" height"225">  
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p>Self-portrait</p>
                                        <p class="text-muted">2019</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

        </main>

        <footer class="text-muted">
            <div class="container">
                <p class="float-right">
                    <a href="#">Back to top</a>
                </p>
                <p>All images copyright &copy; Marshall Farrier <?php echo $year; ?>. All rights reserved.</p>
                <p>Website design by Marshall Farrier using <a href="//getbootstrap.com/">Bootstrap</a>.
            </div>
        </footer>
        <?php include($templatePath . '_scripts.html') ?>
    </body>
</html>
