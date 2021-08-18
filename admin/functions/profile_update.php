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
if((!empty($fname) && !empty($lname)) && !ctype_space($fname) && !ctype_space($address) && !ctype_space($contact) && !ctype_space($lname) && !ctype_space($mname))
{
    $query = query("UPDATE user_profile 
                    SET user_fname= '{$fname}', 
                        user_mname = '{$mname}', 
                        user_lname = '{$lname}', 
                        user_contact = '{$contact}', 
                        user_mailaddress = '{$address}', 
                        user_facebook = '{$facebook}', 
                        user_youtube = '{$youtube}', 
                        user_twitter = '{$twitter}', 
                        user_bio = '{$bio}' 
                    WHERE user_id = '{$_SESSION['id']}' ");
    confirm($query); 

    // INSERT SESSION AGAIN
    $update_query = query("Select * from user_profile WHERE user_id = '{$_SESSION['id']}'");
    confirm($update_query);
    while($row = fetch_assoc($update_query))
    {
        $_SESSION['fname'] = $row['user_fname'];
        $_SESSION['mname'] = $row['user_mname'];
        $_SESSION['lname'] = $row['user_lname'];
    }           

}

else 
{
    $span = "Empty Fields";
    echo $span;
}
?>