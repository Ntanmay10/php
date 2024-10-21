<?php
    if((($_FILES["file"]["type"]="image/jpeg")||($_FILES["file"]["type"]="image/jpg")||($_FILES["file"]["type"]="image/png") )&&($_FILES["file"]["size"]<40000))
    {
        if($_FILES["file"]["error"] > 0)
        {
            echo "Error".$_FILES["file"]["error"]."<br>";
        }
        else
        {
            echo "Upload - ".$_FILES["file"]["name"]."<br>";
            echo "Size - ".($_FILES["file"]["size"] / 1024)."kb <br>";
            echo "Type - ".$_FILES["file"]["type"]."<br>";
            echo "Store in -"."upload/".$_FILES["file"]["tmp_name"]."<br>";
        }
    }
    else
    {
        echo "Invalid..";
    }
?>