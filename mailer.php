<?php
$name = $_POST['name'];
  $email = $_POST['email'];
  $phone =  $_POST['phone'];
   $company =  $_POST['company'];
  $subject = $_POST['subject'];
   $message = $_POST['message'];
   $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From:  < Jazztarunsharma@gmail.com >" . "\r\n" .
            "Bcc:";
   
    $to = 'jazztarunsharma@gmail.com';

    $message = '<div style="background-color: #c5c5c5; padding: 45px; margin-bottom: 40px;">
	                        <div style="width: 80%; background-color: #eee; border-radius: 10px; border-bottom: 3px solid #d74937; padding: 60px; margin: auto;">
	                            <h1></h1>
	                            <p style="font-size: 16px; margin-bottom:30px;">Enquiry</p>
	                            <p style="font-size: 16px; margin-bottom:0px; font-weight:600;">Name -</p>
	                            <p style="font-size: 13px; margin-bottom:30px; margin-top: 0;">' . $name . ' </p>
	                            <p style="font-size: 16px; margin-bottom:0px; font-weight:600;">Email -</p>
	                            <p style="font-size: 13px; margin-bottom:30px; margin-top: 0;"">' . $email.'-</p>
	                             <p style="font-size: 16px; margin-bottom:0px; font-weight:600;">PHONE-</p>
	                            <p style="font-size: 13px; margin-bottom:30px; margin-top: 0;""> ' . $phone . ' </p>
	                            <p style="font-size: 16px; margin-bottom:0px; font-weight:600;">Company name -</p>
	                            <p style="font-size: 13px; margin-bottom:30px; margin-top: 0;"">' . $company.'-</p>
	                            <p style="font-size: 16px; margin-bottom:0px; font-weight:600;">Subject -</p>
	                            <p style="font-size: 13px; margin-bottom:30px; margin-top: 0;"">' . $subject.'-</p>
	                            <p style="font-size: 16px; margin-bottom:0px; font-weight:600;">Message-</p>
	                            <p style="font-size: 13px; margin-bottom:30px; margin-top: 0;""> ' .$message . ' </p>
	                        </div>
	                    </div>';
	                    
	                  

    if (mail($to, $subject, $message, $headers)) {
        // echo "<p class='success'>Successfully Sent mail</p>";
       echo "<script>location.href='thank-you.php'</script>";
    } else {
        print "<p class='Error'>Problem in Sending Mail!.</p>";
}
?>