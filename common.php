<?php
    $title = "Spiritual reflections";
    $year = '2019';
    $paths = array(
        "templates" => $root . 'templates/',
        "media" => $root . 'media/',
        "data" => $root . 'data/',
        "scripts" => $root . 'scripts/'
    );

    function json_file_to_obj($fileName) {
        $jsonFileContents = file_get_contents($fileName);
        return json_decode($jsonFileContents, true);
    }
?>
