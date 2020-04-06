<?php
    if(isset($_GET['code'])) {
    	//add your site url 
    	header("Location: https://yourappname.herokuapp.com");
    	ext();
        ;}
               else {
                echo '<b>referral code error...!<b>';
                       }?>