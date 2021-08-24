<?php

class Announce
{
    private $servername = "localhost";
    private $username   = "root";
    private $password   = "NejeL8";
    private $database   = "announce";
    public  $con;


    // Database Connection 
    public function __construct()
    {
        $this->con = new mysqli($this->servername, $this->username, $this->password, $this->database);
        if (mysqli_connect_error()) {
            trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
        } else {
            return $this->con;
        }
    }

    // Insert customer data into customer table
    public function insertData($post)
    {
        $title = $this->con->real_escape_string($_POST['title']);
        $image = $this->con->real_escape_string($_POST['image']);
        $description = $this->con->real_escape_string($_POST['description']);
        $category = $this->con->real_escape_string($_POST['category']);
        $price = $this->con->real_escape_string($_POST['price']);
        $date = $this->con->real_escape_string($_POST['date']);
        $city = $this->con->real_escape_string($_POST['city']);
        $query = "INSERT INTO announces(name, image, description, category, price, date, city) VALUES('$title','$image','$description','$category', '$price', '$date', '$city')";
        $sql = $this->con->query($query);
        if ($sql == true) {
            header("Location:MySpace.php?msg1=insert");
        } else {
            echo "Registration failed try again!";
        }
    }

    // Fetch customer records for show listing
    public function displayAllAnnounces()
    {
        $query = "SELECT * FROM announces";
        $result = $this->con->query($query);
        if ($result->num_rows > 0) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else {
            echo "No found records";
        }
    }

    // Fetch single data for edit from customer table
    public function displaySingleAnnounce($id)
    {
        $query = "SELECT * FROM announces WHERE id = '$id'";
        $result = $this->con->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row;
        } else {
            echo "Record not found";
        }
    }

    // Update customer data into customer table
    public function updateAnnounces($postData)
    {
        $title = $this->con->real_escape_string($_POST['title']);
        $image = $this->con->real_escape_string($_POST['image']);
        $description = $this->con->real_escape_string($_POST['description']);
        $category = $this->con->real_escape_string($_POST['category']);
        $price = $this->con->real_escape_string($_POST['price']);
        $date = $this->con->real_escape_string($_POST['date']);
        $city = $this->con->real_escape_string($_POST['city']);
        $id = $this->con->real_escape_string($_POST['id']);
        if (!empty($id) && !empty($postData)) {
            $query = "UPDATE announces SET title = '$title', description = '$description', image = '$image', category = '$category', price = '$price', date = '$date', city = 'city' WHERE id = '$id'";
            $sql = $this->con->query($query);
            if ($sql == true) {
                header("Location:MySpace.php?msg2=updated");
            } else {
                echo "Registration updated failed try again!";
            }
        }
    }


    // Delete customer data from customer table
    public function deleteAnnounce($id)
    {
        $query = "DELETE FROM announces WHERE id = '$id'";
        $sql = $this->con->query($query);
        if ($sql == true) {
            header("Location:index.php?msg3=deleted");
        } else {
            echo "Record does not delete try again";
        }
    }
}
