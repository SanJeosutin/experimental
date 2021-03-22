<?php
    require_once 'vendor/autoload.php';
    
    $session = new SpotifyWebAPI\Session(
        '523bbb0c298d4bb4b0c655bbe65ec0f2',
        'b73182b4b7c645d4bed0fb6686a65c7d',
        'http://ec2-34-205-68-76.compute-1.amazonaws.com/en/status'
    );

    $options = [
        'scope' => [
            'user-read-private',
            'user-read-email',
            'playlist-modify-public',
            'playlist-modify-private'
        ],
    ];
    

    header('Location: ' . $session->getAuthorizeUrl($options));
    die();
?>