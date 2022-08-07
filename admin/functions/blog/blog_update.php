<?php include "../../../function.php";


$blog_id = escape_string($_POST['blog_id']);
$title = escape_string($_POST['title']);
$details = escape_string($_POST['details']);
$image = '../images/' . $_FILES['image_file']['name'];
$user_id = $_SESSION['id'];

$query = query("UPDATE user_blog 
                SET blog_title = '{$title}', 
                    blog_details = '{$details}', 
                    blog_image = '{$image}'                   
                WHERE blog_id = '{$blog_id}' ");
confirm($query); 

// INSERT SESSION AGAIN
$update_query = query("SELECT * FROM user_profile WHERE user_id = '{$_SESSION['id']}'");
confirm($update_query);
while($row = fetch_assoc($update_query))
{
    $_SESSION['fname'] = $row['user_fname'];
    $_SESSION['mname'] = $row['user_mname'];
    $_SESSION['lname'] = $row['user_lname'];
}    



echo trim("success"); 


?>