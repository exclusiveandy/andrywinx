<?php include "../../function.php";

header('Content-type:application/json;charset=utf-8');

$password = escape_string($_POST['password']);
$hash = escape_string($_POST['hash']);
$cpass = escape_string($_POST['cpass']);

if(password_verify($password, $hash))
{

    $cpass = password_hash($cpass, PASSWORD_BCRYPT, array('cost' => 12) );
    $query = query("UPDATE user_profile SET user_password= '{$cpass}' WHERE user_id = '{$_SESSION['id']}' ");
    confirm($query); 
    $response['status'] = "Updated";
    echo json_encode($response);    

}
else 
{
    $response['status'] = "Incorrect";
    echo json_encode($response); 
}
?>