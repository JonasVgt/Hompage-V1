<!DOCTYPE html>

<div class="article">
            <img class="article-thumbnail" src="/article1.jpg">
            <p class="title"><?php echo($row["title"]);?></p>
            <p class="text-preview">
            <?php
            
            echo(substr($row["text"],0,100) . "...");
            ?></p>
            <p class="date"><?php echo($row["date"]);?></p>
        </div>

<?php



?>