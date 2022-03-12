<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup page</title>
    <link rel="icon" type="image/x-icon" href="icons/icon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/signup.css">
</head>


<body>


<div class="container" id="container" style="margin-top: 100px">
    
    <div class="form-container sign-in-container">
      <form method="POST" action="signup.php" class="form" id="login">
        <h1 class="form__title"> Sign Up here</h1>
        <div class="form__input-group">
          
          <input type="text" class="form__input" name="uname" id="username" maxlength="20" placeholder="Enter your username" required> 
        </div>
        <div class="form__input-group">
        
          <input type="text" class="form__input" name="email" id="username" maxlength="100" placeholder="Enter your email" required> 
        </div>
        <div class="form__input-group">
         
          <input type="text" class="form__input" name="phn" id="username" maxlength="20" placeholder="Enter phone number" required> 
        </div>
        <div class="form__input-group">
          
          <input type="text" class="form__input" name="addr" id="username" maxlength="20" placeholder="Enter your Address" required> 
        </div>
        <div class="form__input-group">
         
          <input type="password" class="form__input" name="pswd" id="pass" maxlength="20"  placeholder="Enter your Password" required> 
        </div>
        <div class="form__input-group">
          <button type="submit" class="form__button" name="submit">Register</button>
        </div>
     </form>
    </div>
    
 
    
   <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>Please login with your personal info</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and start journey with us</p>
                <p>Explore Gaming tools</p>
                
            </div>
        </div>
    </div>
 </div>

 <?php

     //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    //Load Composer's autoloader
    require('PHPMailer/Exception.php');
    require('PHPMailer/SMTP.php');
    require('PHPMailer/PHPMailer.php');


    if(isset($_POST["submit"])){
        $uname=$_POST["uname"];
        $email=$_POST["email"];

        $phn=$_POST["phn"];
        $addr=$_POST["addr"];
        $cart=0;
        $pass=$_POST["pswd"];
        $con = mysqli_connect("localhost","root","","grp-5");
        $query="insert into customer (name,email,addr,phone,pass) values('$uname','$email','$addr','$phn','$pass'); ";
        $res=mysqli_query($con,$query);



                        //Create an instance; passing `true` enables exceptions
                        $mail = new PHPMailer(true);

                        try {
                            //Server settings
                            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                            $mail->isSMTP();                                            //Send using SMTP
                            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                            $mail->Username   = 'irfan.daraz101@gmail.com';                     //SMTP username
                            $mail->Password   = 'gamingworld';                               //SMTP password
                            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                            //Recipients
                            $mail->setFrom('irfan.daraz101@gmail.com', 'Gaming World');
                            $mail->addAddress($email, $uname);     //Add a recipient


                            //Attachments
                            $mail->addAttachment('img/hd4.jpg');         //Add attachments
                            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                            //Content
                            $mail->isHTML(true);                                  //Set email format to HTML
                            $mail->Subject = 'Your account has been registered.';
                            $mail->Body    = 'You have successfully registered to gaming world.</b>';


                            $mail->send();

                        } catch (Exception $e) {
                            //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                            echo "<script>alert('Please enter a valid email.')</script>";
                        }

        

        if($res){
            echo "<script>alert('You have been Registered Successfully')</script>";

            echo "<script>window.open('login.php','_self')</script>";
        }

    }


?>
    
</body>
</html>
