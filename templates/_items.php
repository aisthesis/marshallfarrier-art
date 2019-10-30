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
                                    '<p class="float-right"><small class="text-muted">' . $card['price'] . '</small></p>' .
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
