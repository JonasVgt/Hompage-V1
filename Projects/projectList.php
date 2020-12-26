<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/style.css">
    <link rel="stylesheet" type="text/css" href="/Projects/articleList.css">
</head>

<body>
    <div style="background-color: rebeccapurple;">
        <?php
        $conn = new mysqli("localhost", "root", "", "website");
        if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
        }
        echo $conn->host_info . "<br>";
        
        $sql = "SELECT title, author, date, text FROM articles";
        $result = $conn->query($sql);
        if($result->num_rows > 0){

            while($row = $result-> fetch_assoc()){
                echo("title:".$row["title"]."  author".$row["author"]."<br>");
                include("articlePreview.php");
            }
        }else{
            echo("no data");
        }

        $conn->close();
        ?>
    </div>



</body>

</html>