<?php
session_start();
    require_once('./db.php');

    $title = $_POST['title'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $creation_date = $_POST['creation_date'];
    $city = $_POST['city'];
    $user_id = $_POST['user_id'];
    
    $file_name = $_FILES['image']['name'];
    $file_infos = pathinfo($file_name);
    $file_extension = $file_infos['extension'];
    $extensions_allowed = array("jpeg", "jpg", "png");
    $folder = "../images/";

    if(empty($_FILES['image']['name']))
    {            
            $sql_query = "INSERT INTO products(title, description, category, price, creation_date, city, image, user_id) VALUES('$title', '$description', '$category', '$price', '$creation_date', '$city', '../images/hacker.png', '$user_id')";
            $var_temp = $bd->prepare($sql_query);
            $var_temp->execute();
            header('Location:create.php');
    }
    else
    {
        if(!(in_array($file_extension, $extensions_allowed)))
        {
            header('Location:error.php?extension');
            
        }
        elseif($_FILES['image']['size'] >= 2000000)
        {
            header('Location:error.php?size');
        }
        else
        {    
            if(move_uploaded_file($_FILES["image"]["tmp_name"], $folder.$file_name))
            {
                $file_name_for_db = "../images/" . $file_name;
                $sql_query = "INSERT INTO products(title, description, category, price, creation_date, city, image, user_id) VALUES('$title', '$description', '$category', '$price', '$creation_date', '$city', '$file_name_for_db', '$user_id')";
                $var_temp = $bd->prepare($sql_query);
                $var_temp->execute();
                header('Location:create.php');
            }
            else
            {
                header('Location:error.php?upload');
            }
        }
    }    
?>