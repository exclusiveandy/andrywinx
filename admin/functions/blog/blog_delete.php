<?php include "../../../function.php";


$blog_id = escape_string($_POST['blog_id']);

$query = "DELETE FROM user_blog where blog_id = '{$blog_id}'";
$final_query = query($query);
confirm($final_query);

echo $final_query;
echo $query;

