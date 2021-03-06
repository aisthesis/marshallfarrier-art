<!doctype html>
<html lang="en">
<?php
// define variables
$root = './';
include($root . 'common.php');
$cardDataFile = $paths['data'] . 'index.json';
$previewImage = '200224_Allena.jpg';
$content = json_file_to_obj($root . 'content.json');
$emailRef = 'mailto:' . $content['email']['address'] . '?subject=' . $content['email']['subject'];

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
                    <h1 class="jumbotron-heading">Marshall Farrier</h1>
                    <p class="lead text-muted"><?php echo $content['lead']; ?></p>
                </div>
            </section>

            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row">
<?php
/* Possible future genres:
 * - Figures
 * - Cities
 */
    $rawDataFile = file_get_contents($cardDataFile);
    $cards = json_decode($rawDataFile, true);
    foreach ($cards as $card) {
        $imgPath = $paths['media'] . $card['thumbnail'];
        $txt = '' .
            '<div class="col-md-4">' .
                '<div class="card mb-4 shadow-sm">' .
                    '<img src="' . $imgPath . '" alt="' . $card['category'] . '" width="100%" height"225">  ' .
                    '<div class="card-body">' .
                        '<h4 class="card-text">' . $card['category'] . '</h4>' .
                        '<a href="' . $card['target'] . '" class="stretched-link"></a>' .
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
        <?php include($paths['templates'] . '_scripts.html'); ?>
    </body>
</html>
