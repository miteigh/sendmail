<?php  

    if (isset($_POST['sendmail'])) {
        $name = addslashes($_POST['name']);
        $email = addslashes($_POST['email']);
        $sj = addslashes($_POST['subject']);
        $msg = addslashes($_POST['message']);

        $to = "64414402010@reru.ac.th";
        $subject = $sj;

        $message = $msg;

        $header = "From: " . $email . "\r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";

        $retval = mail($to,$subject,$message,$header);

        if ($retval) {
            echo "ส่งสำเร็จ";
        } else {
            echo "ส่งไม่สำเร็จ";
        }
    }
?> 