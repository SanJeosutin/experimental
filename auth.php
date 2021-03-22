<?php
    require 'vendor/autoload.php';

    $session = new SpotifyWebAPI\Session(
        '523bbb0c298d4bb4b0c655bbe65ec0f2',
        'b73182b4b7c645d4bed0fb6686a65c7d',
        'http://ec2-34-205-68-76.compute-1.amazonaws.com/en/status'
    );
    
    // Request a access token using the code from Spotify
    $session->requestAccessToken($_GET['code']);
    
    $accessToken = $session->getAccessToken();
    
    // Store the access token somewhere. In a database for example.
    
    header('Location: index.php');
    die();
?>