<?php include "../../function.php";

$fname = escape_string($_POST['fname']);
$mname = escape_string($_POST['mname']);
$lname = escape_string($_POST['lname']);
$contact =  escape_string($_POST['contact']);
$address =  escape_string($_POST['maddress']);
$facebook =  escape_string($_POST['facebook']);
$youtube =  escape_string($_POST['youtube']);
$twitter =  escape_string($_POST['twitter']);
$bio =  escape_string($_POST['bio']);

$query = query("UPDATE user_blog 
                SET blog_title = '{$fname}', 
                    blog_details = '{$mname}', 
                    blog_image = '{$lname}', 
                    user_contact = '{$contact}', 
                    user_mailaddress = '{$address}', 
                    user_facebook = '{$facebook}', 
                    user_youtube = '{$youtube}', 
                    user_twitter = '{$twitter}', 
                    user_bio = '{$bio}' 
                WHERE user_id = '{$_SESSION['id']}' ");
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

?>