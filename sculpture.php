<!doctype html>
<html lang="en">
    <?php
    // define variables
    $root = './';
    include($root . 'common.php');
    $cardDataFile = $paths['data'] . 'sculpture.json';

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
                    <h1 class="jumbotron-heading">Sculpture</h1>
                </div>
            </section>

            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row">
                        <?php
                            $jsonFileContents = file_get_contents($cardDataFile);
                            $cards = json_decode($jsonFileContents, true);
                            foreach ($cards as $card) {
                                $imgPath = $paths['media'] . $card['filename'];
                                $txt = '' .
                                    '<div class="col-md-4">' .
                                        '<div class="card mb-4 shadow-sm">' .
                                            '<img src="' . $imgPath . '" alt="' . $card['title'] . '" width="100%" height"225" class="img-fluid">' .
                                            '<div class="card-body">' .
                                                '<h5 class="card-title">' . $card['title'] . '</h5>' .
                                                '<h6 class="card-subtitle mb-2 text-muted">' . $card['year'] . '</h6>' .
                                                '<p class-"card-text"><small class="text-muted">' . $card['medium'] . '. ' . $card['dimensions'] . '</small></p>' .
                                                '<a href="' . $imgPath . '" class="stretched-link" data-toggle="lightbox"></a>                               ' .
                                            '</div>' .
                                        '</div>' .
                                    '</div>';
                                echo $txt;
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
        </main>
        <?php include($paths['templates'] . '_footer.html'); ?>
        <?php include($paths['templates'] . '_scripts.html') ?>
    </body>
</html>
