<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Marvel</title>
</head>

<body>
    <?php
    $api_url = 'https://gateway.marvel.com/v1/public/comics?ts=1&apikey=c54f130692af94c53ce2d019cf8c4c70&hash=9aa20f481d0495291328ce15e93de88f';
    $response = file_get_contents($api_url);
    $data = json_decode($response, true);

    if (isset($data['data']['results']) && count($data['data']['results']) > 0) {
        foreach ($data['data']['results'] as $comic) {
            echo (!empty($comic['title']) ? '<h2>' . $comic['title'] . '</h2>': '');
            echo (!empty($comic['id']) ? 'ID: ' . $comic['id'] . '<br>': '');
            echo (!empty($comic['digitalId']) ? 'Digital ID: ' . $comic['digitalId'] . '<br>': '') ;
            echo (!empty($comic['description']) ? 'Description: ' . $comic['description'] . '<br>': '');
            echo (!empty($comic['variantDescription']) ? 'Variant Description: ' . $comic['variantDescription'] . '<br>': '');
            echo (!empty($comic['issueNumber']) ? 'Issue Number: ' . $comic['issueNumber'] . '<br>': '');
            echo (!empty($comic['isbn']) ? 'ISBN: ' . $comic['isbn'] . '<br>': '');
            echo (!empty($comic['upc']) ? 'UPC: ' . $comic['upc'] . '<br>': '');
            echo (!empty($comic['diamondCode']) ? 'Diamond Code: ' . $comic['diamondCode'] . '<br>': '');
            echo (!empty($comic['ean']) ? 'EAN: ' . $comic['ean'] . '<br>': '');
            echo (!empty($comic['issn']) ? 'ISSN: ' . $comic['issn'] . '<br>': '');
            echo (!empty($comic['modified']) ? 'Modified Date: ' . $comic['modified'] . '<br>': '');
            echo (!empty($comic['format']) ? 'Format: ' . $comic['format'] . '<br>': '');
            echo ($comic['pageCount'] > 0 ? 'Page Count: ' . $comic['pageCount'] . '<br><br>': '');

            if (isset($comic['creators']['items']) && count($comic['creators']['items']) > 0) {
                echo '<strong>Creators:</strong><ul>';
                foreach ($comic['creators']['items'] as $creator) {
                    echo '<li>' . $creator['name'] . ' (' . $creator['role'] . ')</li>';
                }
                echo '</ul>';
            }

            if (isset($comic['characters']['items']) && count($comic['characters']['items']) > 0) {
                echo '<strong>Characters:</strong><ul>';
                foreach ($comic['characters']['items'] as $character) {
                    echo '<li>' . $character['name'] . '</li>';
                }
                echo '</ul>';
            }

            if (isset($comic['stories']['items']) && count($comic['stories']['items']) > 0) {
                echo '<strong>Stories:</strong><ul>';
                foreach ($comic['stories']['items'] as $story) {
                    echo '<li>' . $story['name'] . ': ' . $story['type'] . '</li>';
                }
                echo '</ul>';
            }

            if (isset($comic['events']['items']) && count($comic['events']['items']) > 0) {
                echo '<strong>Events:</strong><ul>';
                foreach ($comic['events']['items'] as $event) {
                    echo '<li>' . $event['name'] . '</li>';
                }
                echo '</ul>';
            }

            echo '<img src="' . $comic['thumbnail']['path'] . '.' . $comic['thumbnail']['extension'] . '" alt="' . $comic['title'] . '"><br>';
            echo '<br><hr>';
        }
    } else {
        echo 'Error al consultar la API.';
    }
    ?>
</body>

</html>

