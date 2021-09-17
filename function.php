<?php 
include("database/connection.php");
// require("vendor/autoload.php");


ob_start();
session_start();    
function redirect($location){
    header("Location: $location");
}

function validate(){
if(!isset($_SESSION['id']))
    {
      redirect('../admin/login');
    }
}

function session_check(){
    if ($_GET['id'] == $_SESSION['id']){

    }
    else{
        redirect('../admin/login');
    }

}

function user_login()
{
    if(isset($_POST['login']))
    {
        $email = escape_string($_POST['email']);
        $password = escape_string($_POST['password']);

                if(empty($email) || empty($password))
                {
                    $message = <<<END
                    <div class="alert alert-dark" role="alert">
                    *Empty Fields
                    </div>

END;
                    echo $message;
                }
             else
                {
                        
                    $login_query = query("SELECT user_fname, user_mname, user_lname, user_id, user_password, user_email
                                         FROM user_profile
                                         WHERE user_email = '{$email}'");
                    confirm($login_query);
                    if(mysqli_num_rows($login_query)==1)
                    {
                        while($row = fetch_assoc($login_query))
                        {
                            $db_fname = $row['user_fname'];
                            $db_mname = $row['user_mname'];
                            $db_lname = $row['user_lname'];
                            $db_id = $row['user_id'];
                            $db_password = $row['user_password'];
                            $db_email = $row['user_email'];

                        }
                        // if ($db_password == $password)
                        if(password_verify($password,$db_password))
                        {
                        
                            $_SESSION['fname'] = $db_fname;
                            $_SESSION['mname'] = $db_mname;
                            $_SESSION['lname'] = $db_lname;  
                            $_SESSION['id'] = $db_id;
                            $_SESSION['email'] = $db_email;
                            redirect("../admin/dashboard");

                        }
                        else
                        {
                            $message = <<<END
                            <div class="alert alert-dark" role="alert">
                            Invalid Email or Password
                            </div>
END;
                        echo $message;
                            unset($_SESSION['fname']);
                            unset($_SESSION['lname']);
                            unset($_SESSION['mname']);
                            unset($_SESSION['id']);
                        }
                    } 
                    
                    else 
                    {
                        
                                    $message = <<<END
                    <div class="alert" role="alert">
  Invalid Email or Password
</div>
END;
                        echo $message;
                        unset($_SESSION['fname']);
                        unset($_SESSION['lname']);
                        unset($_SESSION['mname']);
                        unset($_SESSION['id']);

                    }
                }
    }       

}

function forgot_password(){
              if(isset($_POST['cancel']))
          {
              redirect("login.php");
          }
             else if(isset($_POST['send']))
            {
              if(empty($_POST['email']))
              {
                validation_error("Please fill out your email");
              }
              else
                {
                          $email = escape_string($_POST['email']);
                          $sql = query("SELECT * from user_table where user_email = '{$email}'");
                           if(row_count($sql)==1)
                          {
                            $validation_code = escape_string(md5($email . microtime()));
                            $subject = "Please reset your password";
                            $msg = "Here is your password reset code <b>{$validation_code}</b>
                            Click here to reset your password http://localhost/istr-ojs/pages/code.php?email=$email&code=$validation_code";
                            setcookie('temp_access_code', $validation_code, time()+900);
                            send_email($email, $subject, $msg);
                            $sql = query("UPDATE user_table set validation_code = '{$validation_code}' where user_email = '{$email}'");
                            confirm($sql);
                               set_message("<div class=\"alert alert-primary\" role=\"alert\">Please check your email or spam folder for password reset</div>");
                                redirect("login.php");
                            

                           }
                      else
                      {
                        validation_error("Your email does not exsist in our system. Kindly register first");
                      }
                }
            }
}
function validation_code(){
    if(isset($_COOKIE['temp_access_code']))
    {
            if(isset($_GET['email']) && isset($_GET['code']))
            {
                    if(isset($_POST['validation_code']))
                    {
                            $email = escape_string($_GET['email']);
                            $code = escape_string($_POST['validation_code']);
                            $sql = query("SELECT * from user_table where validation_code = '{$code}' AND user_email = '{$email}'");
                            confirm($sql);
                            if(row_count($sql) == 1)
                            {
                              setcookie('temp_access_code', $code, time()+300);
                              redirect("resetpassword.php?email=$email&validation_code=$code");
                            }
                            else
                            {
                                echo validation_error("Sorry wrong validation code");
                            }


                    }
            }
            else
            {
                redirect("login.php");
            }
    }
    else
    {
        set_message("<div class=\"alert alert-secondary\" role=\"alert\"> Sorry your validation code has expired!! </div>");
        redirect("login.php");

    }
}

function password_reset(){
     if(isset($_COOKIE['temp_access_code']))
    {
         
                if(isset($_GET['email']) && isset($_GET['validation_code']))
                {
                    if(isset($_POST['Reset']))
                    {
                        if($_POST['cpassword'] === $_POST['npassword'])
                        {
                            $pass = escape_string($_POST['npassword']);
                            $cpassword = escape_string($_POST['cpassword']);
                            $email = escape_string($_GET['email']);
                            if(empty($pass) || empty($cpassword))
                            {
                                validation_error("Please fill out both fields");
                            }
                            else
                            {
                                 
                                 $password = password_hash($pass, PASSWORD_BCRYPT, array('cost' => 12) );
                                 $sql = query("UPDATE user_table set user_password = '{$password}' where user_email = '{$email}'");
                                 confirm($sql);
                                set_message("<div class=\"alert alert-primary\" role=\"alert\">Successful on reseting the password</div>");
                                    redirect("login.php");



                            } 

                        }
                        else
                        {
                            echo validation_error("Password does not match");
                        }
                    }
               


                }
                else
                {

                }
    }
    else
    {
                set_message("<div class=\"alert alert-secondary\" role=\"alert\"> Sorry your time has expired!! </div>");
                redirect("forgotpassword.php");

    }
}


function send_email($email, $subject, $msg){
// Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);


    //Server settings
                                    // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'ojs.pup@gmail.com';                     // SMTP username
    $mail->Password   = 'pupojs2019';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;   
            
    $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );                         // TCP port to connect to

    //Recipients
    $mail->AddReplyTo( 'ojs.pup@gmail.com', 'Contact ISTR' );
    $mail->setFrom('ojs.pup@gmail.com', 'Institute of Science and Research Technology - PUP ');
    $mail->addAddress($email);     // Add a recipient
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $msg;
    $mail->AltBody = $msg;
    $mail->send();
  

//return mail($email, $subject, $msg);


}


function query($sql) {
global $connection;
    return mysqli_query($connection, $sql);
}

function multi_query($sql) {
global $connection;
    return mysqli_multi_query($connection, $sql);
}
function last_id(){
    global $connection;
    return mysqli_insert_id($connection);
}

function confirm($result){
    global $connection;
    if(!$result){
        die("Query Failed ". mysqli_error($connection));
    }
}

function escape_string($string){
    global $connection;
    return mysqli_escape_string($connection, $string);
}

function fetch_assoc($result){
return mysqli_fetch_assoc($result);
}

function clean($string){
  htmlentities($string);
}

function row_count($result){
  return mysqli_num_rows($result);
}

function set_message($message){
  if(!empty($message))
  {
    $_SESSION['message'] = $message;
  }
  else
  {
      $message = " ";
  }
}

function display_message()
{
  if(isset($_SESSION['message']))
  {
    echo $_SESSION['message'];
    unset($_SESSION['message']);
  }
}


function validation_error($error_message)
{
$error_message =<<<END
  <div class="alert alert-dark alert-dismissible" role="alert">
  <strong>Warning!</strong> $error_message
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
  </div>
END;
echo $error_message;
}





function display_all_blogs($user_id)
{     
    $user = $user_id;
    $select_blogs = query("SELECT blog_id, blog_title, create_date FROM user_blog WHERE user_id = '{$user}'");
    confirm($select_blogs);
    while($row = fetch_assoc($select_blogs))
    {   
        
        $created_blogs =<<<END
            <tr>
                <td>{$row['blog_title']}</td>
                <td>{$row['create_date']}</td>
                <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                        <button href="blog_view?id={$row['blog_id']}" class="btn btn-info"><i class="fas fa-eye"></i></button>
                        <button href="download.php?path={$row['blog_id']}" id="{$row['blog_id']}" class="btn btn-danger" onclick="deleteFunction(this.id)"><i class="fas fa-trash"></i></button>

                    </div>
                </td>
            </tr>     
END;
    echo $created_blogs;
    }
}


function activate_user()
{

  if(isset($_GET['email']))
  {
    $email = escape_string($_GET['email']);
      echo $email;
      $sql = query("SELECT * from user_table where user_email = '{$email}'");
      confirm($sql);
      if(row_count($sql) == 1)
      {
        date_default_timezone_set('Asia/Manila');
        $date = date("Y-m-d H:i:s");
        $salutation = escape_string($_POST['salutation']);
        $sql2 = query("UPDATE user_table SET activate = 1, register_date = '{$date}' WHERE user_email = '{$email}'");
        confirm($sql2);
        set_message("<h6><p>Your account has been activated please login</p></h6>");
         $message = $email." has registered to the system";
         $notification = "INSERT INTO notification(message,date,status,notification_type, user_id) VALUES ('{$message}', '{$date}', 'unread', 'user', '2')";
         query($notification);
        redirect("login.php");

      }
      else
      {
        set_message("<h6><p>Your account does not exsist in our system</p></h6>");
        redirect("login.php");

      }

  }   
}


function notification()
{

$notification = "INSERT INTO notification(message,date,status,notification_type, user_id) VALUES ('{$message}', '{$date}', {$status}, {type}, {user_role_id}, {user_id})";

}


