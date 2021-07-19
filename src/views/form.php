<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="Iván Delgado">
            <meta name="keywords" content="HTML, CSS, JavaScript, Front End, Back end, Web Development, Fullstack, Kashix, Kashix., Iván, Iván Delgado, Portfolio">
            <link rel="stylesheet" href="styles/style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <title>Kashix's Project</title>
        </head>
    <body>

        <?php
            
            $name = $_REQUEST["name"];
            $email = $_REQUEST["email"];
            $message = $_REQUEST["message"];

            $array = array($name, $email, $message);
            $dt = new DateTime();
            $datenow = $dt->getTimestamp();
            $filename = $email . "_" . $datenow;
            
            $json = json_encode($array);
            $bytes = file_put_contents($filename . ".json", $json);

        ?>
        
        <div id="contact">

            <div class="category">
                <h1 class="category-title">Contact</h1>
                <p class="category-text">Message successfully sent!</p>
            </div>

            <div id="form">
                <form action="#" id="contact">
                    <div id="form-data">
                        <label>Name</label>
                        <br>
                        <input id="name" type="text" readonly="" value="<?php $name; ?>">
                        <br>
                        <label>Email</label>
                        <br>
                        <input id="email" type="email" readonly="" value="<?php $email; ?>">
                        <br>
                    </div>
                    <div id="form-message">
                        <label>Message</label>
                        <br>
                        <textarea id="message" cols="60" rows="10" readonly="" value="<?php $message; ?>"></textarea>
                    </div>
                    <br>
                </form>
            </div>

            <div id="hrefback">
                <a href="index.html">Get back to main page</a>
            </div>
            

        </div>

    </body>
</html>