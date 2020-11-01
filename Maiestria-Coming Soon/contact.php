<?php 
    if(isset($_POST['submit'])){
        $to = "uursu.adrian@gmail.com"; 

        $message = $_POST["email"]; 

        $subject = "Maiestria coming soon";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <uursu.adrian@gmail.com>' . "\r\n";

        mail($to, $subject, $message,$headers);
        echo "<script> location.href=''; </script>";
        exit;
    }
?>