<?php
    require_once('db/db_connect.php');

    $title = addslashes(htmlspecialchars($_POST['title']));
    $description = addslashes(htmlspecialchars($_POST['description']));
    $category = addslashes(htmlspecialchars($_POST['category']));
    $price = addslashes(htmlspecialchars($_POST['price']));
    $creation_date = addslashes(htmlspecialchars($_POST['creation_date']));
    $city = addslashes(htmlspecialchars($_POST['city']));
    $user_id = addslashes(htmlspecialchars($_POST['user_id']));
    $image = addslashes(htmlspecialchars($_POST['image']));
    $product_id = $_GET['product_id'];
    
    $file_name = $_FILES['image']['name'];
    $file_infos = pathinfo($file_name);
    $file_extension = $file_infos['extension'];
    $extensions_allowed = array("jpeg", "jpg", "png");
    $folder = "../images/";

    if(empty($_FILES['image']['name']))
    {            
            $sql_query = "UPDATE products SET title='$title', description='$description', category='$category', price='$price', creation_date='$creation_date', city='$city', image='$image', user_id='$user_id' WHERE product_id='$product_id'";
            $var_temp = $db->prepare($sql_query);
            $var_temp->execute();
            header('Location:MySpace.php');
    }
    else{
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
                $sql_query = "UPDATE products SET title='$title', description='$description', category='$category', price='$price', creation_date='$creation_date', city='$city', image='$file_name_for_db', user_id='$user_id' WHERE product_id='$product_id'";
                $var_temp = $db->prepare($sql_query);
                $var_temp->execute();
                header('Location:MySpace.php');
            }
            else
            {
                header('Location:error.php?upload');
            }
        }
    }    
?>