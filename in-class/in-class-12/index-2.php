<?php
$request = $_SERVER['REQUEST_URI'];
$path = parse_url($request, PHP_URL_PATH);

switch ($path) {
    case '/html':
        header('Content-Type: text/html');
        echo '
        <!DOCTYPE html>
        <html>
        <head>
            <title>HTML Response</title>
        </head>
        <body>
            <h1>HTML is working</h1>
            <p>Hi Maia here!</p>
        </body>
        </html>';
        break;

    case '/json':
        header('Content-Type: application/json');
        $data = array(
            'message' => 'JSON is working',
            'items' => array(
                'it1' => 'v1',
                'it2' => 'v2',
                'it3' => 'v3'
            ),
            'success' => true
        );
        echo json_encode($data);
        break;

    default:
        echo 'Try accessing /html or /json paths';
        break;
}
?>
