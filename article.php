<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="article.css">
    <title>Document</title>
</head>
<body>
    <?php
    include("/header/header.php");
    ?>

    <?php
        $conn = new mysqli("localhost", "root", "", "website");
        if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
        }

        echo $conn->host_info . "<br>";
        
        $sql = "SELECT title, author, date, text FROM articles";
        $result = $conn->query($sql);

        if($result->num_rows <= 0){
            echo("no data");
            return;
        }

        $row = $result-> fetch_assoc();
        echo("'".$row["title"]."'  by ".$row["author"]."<br>");

        $conn->close();
        ?>

    <div class="wrapper">
    <h1><?php echo($row["title"]); ?></h1>

    <p>
    <?php
    echo($row["text"]);
    ?>

    </p>


    </div>

    <?php
    include("/footer/footer.php");
    ?>
</body>
</html>