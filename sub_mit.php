<?php

    $to = "contact@fermidatasolutions.com";
    $email = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $company = $_REQUEST['company'];
    $number = $_REQUEST['number'];
    $cmessage = $_REQUEST['cmessage'];


        $subject = "Submitted By $email  through fermidatasolutions";
        $body = <<<EOD
       
        <table cellspacing="0" cellpadding="1" border="1">
            <tbody>
                <tr>
                    <td style="padding: 5px 10px;" width="150">Name: </td>
                    <td style="padding: 5px 10px;">$name</td>
                </tr>
<tr>
<td style="padding: 5px 10px;" width="150">Phone: </td>
<td style="padding: 5px 10px;">$number</td>
</tr>


<tr>
<td style="padding: 5px 10px;" width="150">Company: </td>
<td style="padding: 5px 10px;">$company</td>
</tr>



<tr>
<td style="padding: 5px 10px;" width="150">Message: </td>
<td style="padding: 5px 10px;">$cmessage</td>
</tr>
               
            </tbody>
        </table>
       
EOD;
    








   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.yandex.ru";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "contact@fermidatasolutions.com";
   $mail ->Password = "fermidatasolutions";
   $mail ->SetFrom("contact@fermidatasolutions.com");
   $mail ->Subject = $subject;
   $mail ->Body = $body;
   $mail ->AddAddress("contact@fermidatasolutions.com");


// if(!$mail->send()) {
//     echo 'Message could not be sent.';
//     echo 'Mailer Error: ' . $mail->ErrorInfo;
// } else {
//     echo 'Message has been sent';
// }


   if(!$mail->Send())
   {
   echo"<script language='javascript'>
        
        window.location.href=`contact.html`;
</script>
";
   }
   else
   {
    echo"<script language='javascript'>
        
        window.location.href=`index.html`;
</script>
";
   }