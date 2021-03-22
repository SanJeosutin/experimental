<?php require 'vendor/autoload.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>iSpotty</title>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js" data-auto-replace-svg="nest"></script>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <i class="fab fa-spotify"></i><br>
        <a class="navbar-brand" href="#"> iSpotty</a>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">

            <h1 class="display-4">iTunes to Spotify</h1>
            <hr>
            <p class="lead">
                Transfer your iTunes playlist to Spotify with ease!
            </p>

            <form method="POST" action="app.php">
                <div class="form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="file_id_0" id="file_id_0" accept=".xml" />
                        <label class="custom-file-label" for="file_id_0">Choose .xml file</label>
                    </div>
                </div>
                <?php
                    $api = new SpotifyWebAPI\SpotifyWebAPI();

                    if (isset($_GET['code'])) {
                        $session->requestAccessToken($_GET['code']);
                        $api->setAccessToken($session->getAccessToken());

                        echo "Hi ". $me->display_name;
                    } else {
                        echo "<button type=\"submit\" class=\"btn btn-primary\" name=\"loginSpotty\" id=\"loginSpotty\">Login to Spotify</button>";
                    }
                ?>
            </form>

        </div>
        <footer class="fixed-bottom" align="center"><strong>Made By your loveable friend: <em>Moi :D <3</em></strong></footer>
    </div>
</body>

</html>