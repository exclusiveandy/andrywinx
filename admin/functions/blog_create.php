<?php include "../../function.php";


 
move_uploaded_file($_FILES['image_file']['tmp_name'], '../../images/' . $_FILES['image_file']['name']);
 
$title = escape_string($_POST['title']);
$details = escape_string($_POST['details']);
$image = '../images/' . $_FILES['image_file']['name'];
$user_id = $_SESSION['id'];


$create_blog_query = "INSERT INTO user_blog (
                            blog_title, 
                            blog_details, 
                            blog_image, 
                            user_id)"; 
$create_blog_query .= "VALUES (
                            '{$title}', 
                            '{$details}', 
                            '{$image}', 
                            '{$user_id}')";

$query = query($create_blog_query);
confirm($query);


echo trim("Success"); 
   



