<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body style="
    background-image: url('background.jpg');
    background-repeat: no-repeat;
    background-position: center top;
    background-size: auto 800pt;">

    <div class="wrapper">

        
        
        <?php
        include("header/header.php");
        include("article_preview.html");
        
        ?>


        <div class="textbox">
            <p>

                Hello my Name is Jonas Voigt,
                I have just started to study software ingeneering at the RWTH university in Aachen, Germany.
                For about 10 Years programming has been one of my biggest Hobbies. Now I want to share some of my future
                Projects on this Website.
                Hopefully you can get Inspired or learn something.
                If you need help, have questions or ideas, feel free to contact me via Mail or the contact form.
                Jonas

            </p>


        </div>

        <?php include("Projects/projectList.php");?>
    </div>
    <?php include "footer/footer.php" ?>

</body>

</html>