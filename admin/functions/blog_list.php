<?php include "../../function.php";

$user_id = $_SESSION['id'];
$select_blogs = query("SELECT blog_id, blog_title, create_date, blog_view_count FROM user_blog WHERE user_id = '{$user_id}' ORDER BY 1 DESC");
$result = confirm($select_blogs);
$data = array();

if(row_count($select_blogs) > 0)
{
	while($row = fetch_assoc($select_blogs))
	{   

        $view_button = "<a href='blog_view?id=".$user_id."&blog_id=".$row['blog_id']."'' class='btn btn-info'><i class='fas fa-eye'></i></a>";
        $delete_button = "<button id='".$row['blog_id']."'' class='btn btn-danger' onclick='deleteFunction(this.id)'><i class='fas fa-trash'></i></button>";
		$action = $view_button.' '.$delete_button;
        $data[] = array(
           "title" => $row['blog_title'],
           "date" => $row['create_date'],
           "views" => $row['blog_view_count'],
           "action" => $action
         );
	   

	}

    $response = array(
        "aaData" => $data
    );

   echo json_encode($response);

						
}
else
{
    echo json_encode( array("status" => 1,"data" => $response = array()) );
}

?>