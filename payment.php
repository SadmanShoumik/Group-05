<?php
    session_start();
    $user=$_SESSION['uname'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="icon" type="image/x-icon" href="icons/icon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/payment.css">
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
</head>

<style type="text/css">
    
.footer-widget p {
    margin-bottom: 27px;
}

p {
    font-family: 'Nunito', sans-serif;
    font-size: 16px;
    line-height: 28px;
}

.animate-border {
    position: relative;
    display: block;
    width: 115px;
    height: 3px;
    background: #007bff;
}

.animate-border:after {
    position: absolute;
    content: "";
    width: 35px;
    height: 3px;
    left: 0;
    bottom: 0;
    border-left: 10px solid #fff;
    border-right: 10px solid #fff;
    -webkit-animation: animborder 2s linear infinite;
    animation: animborder 2s linear infinite;
}

@-webkit-keyframes animborder {
    0% {
        -webkit-transform: translateX(0px);
        transform: translateX(0px);
    }
    100% {
        -webkit-transform: translateX(113px);
        transform: translateX(113px);
    }
}

@keyframes animborder {
    0% {
        -webkit-transform: translateX(0px);
        transform: translateX(0px);
    }
    100% {
        -webkit-transform: translateX(113px);
        transform: translateX(113px);
    }
}

.animate-border.border-white:after {
    border-color: #fff;
}

.animate-border.border-yellow:after {
    border-color: #F5B02E;
}

.animate-border.border-orange:after {
    border-right-color: #007bff;
    border-left-color: #007bff;
}

.animate-border.border-ash:after {
    border-right-color: #EEF0EF;
    border-left-color: #EEF0EF;
}

.animate-border.border-offwhite:after {
    border-right-color: #F7F9F8;
    border-left-color: #F7F9F8;
}


/* Animated heading border */

@keyframes primary-short {
    0% {
        width: 15%;
    }
    50% {
        width: 90%;
    }
    100% {
        width: 10%;
    }
}

@keyframes primary-long {
    0% {
        width: 80%;
    }
    50% {
        width: 0%;
    }
    100% {
        width: 80%;
    }
}

.dk-footer {
    padding: 75px 0 0;
    background-color: #151414;
    position: relative;
    z-index: 2;
}

.dk-footer .contact-us {
    margin-top: 0;
    margin-bottom: 30px;
    padding-left: 80px;
}

.dk-footer .contact-us .contact-info {
    margin-left: 50px;
}

.dk-footer .contact-us.contact-us-last {
    margin-left: -80px;
}

.dk-footer .contact-icon i {
    font-size: 24px;
    top: -15px;
    position: relative;
    color: #007bff;
}

.dk-footer-box-info {
    position: absolute;
    top: -122px;
    background: #202020;
    padding: 40px;
    z-index: 2;
}

.dk-footer-box-info .footer-social-link h3 {
    color: #fff;
    font-size: 24px;
    margin-bottom: 25px;
}

.dk-footer-box-info .footer-social-link ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.dk-footer-box-info .footer-social-link li {
    display: inline-block;
}

.dk-footer-box-info .footer-social-link a i {
    display: block;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    text-align: center;
    line-height: 40px;
    background: #000;
    margin-right: 5px;
    color: #fff;
}

.dk-footer-box-info .footer-social-link a i.fa-facebook {
    background-color: #3B5998;
}

.dk-footer-box-info .footer-social-link a i.fa-twitter {
    background-color: #55ACEE;
}

.dk-footer-box-info .footer-social-link a i.fa-google-plus {
    background-color: #DD4B39;
}

.dk-footer-box-info .footer-social-link a i.fa-linkedin {
    background-color: #0976B4;
}

.dk-footer-box-info .footer-social-link a i.fa-instagram {
    background-color: #B7242A;
}

.footer-awarad {
    margin-top: 285px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
    -moz-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -moz-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}

.footer-awarad p {
    color: #fff;
    font-size: 24px;
    font-weight: 700;
    margin-left: 20px;
    padding-top: 15px;
}

.footer-info-text {
    margin: 26px 0 32px;
}

.footer-left-widget {
    padding-left: 80px;
}

.footer-widget .section-heading {
    margin-bottom: 35px;
}

.footer-widget h3 {
    font-size: 24px;
    color: #fff;
    position: relative;
    margin-bottom: 15px;
    max-width: -webkit-fit-content;
    max-width: -moz-fit-content;
    max-width: fit-content;
}

.footer-widget ul {
    width: 50%;
    float: left;
    list-style: none;
    margin: 0;
    padding: 0;
}

.footer-widget li {
    margin-bottom: 18px;
}

.footer-widget p {
    margin-bottom: 27px;
}

.footer-widget a {
    color: #878787;
    -webkit-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
}

.footer-widget a:hover {
    color: #007bff;
}

.footer-widget:after {
    content: "";
    display: block;
    clear: both;
}

.dk-footer-form {
    position: relative;
}

.dk-footer-form input[type=email] {
    padding: 14px 28px;
    border-radius: 50px;
    background: #2E2E2E;
    border: 1px solid #2E2E2E;
}

.dk-footer-form input::-webkit-input-placeholder,
.dk-footer-form input::-moz-placeholder,
.dk-footer-form input:-ms-input-placeholder,
.dk-footer-form input::-ms-input-placeholder,
.dk-footer-form input::-webkit-input-placeholder {
    color: #878787;
    font-size: 14px;
}

.dk-footer-form input::-webkit-input-placeholder,
.dk-footer-form input::-moz-placeholder,
.dk-footer-form input:-ms-input-placeholder,
.dk-footer-form input::-ms-input-placeholder,
.dk-footer-form input::placeholder {
    color: #878787;
    font-size: 14px;
}

.dk-footer-form button[type=submit] {
    position: absolute;
    top: 0;
    right: 0;
    padding: 12px 24px 12px 17px;
    border-top-right-radius: 25px;
    border-bottom-right-radius: 25px;
    border: 1px solid #007bff;
    background: #007bff;
    color: #fff;
}

.dk-footer-form button:hover {
    cursor: pointer;
}


/* ==========================

    Contact

=============================*/

.contact-us {
    position: relative;
    z-index: 2;
    margin-top: 65px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -moz-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}

.contact-icon {
    position: absolute;
}

.contact-icon i {
    font-size: 36px;
    top: -5px;
    position: relative;
    color: #007bff;
}

.contact-info {
    margin-left: 75px;
    color: #fff;
}

.contact-info h3 {
    font-size: 20px;
    color: #fff;
    margin-bottom: 0;
}

.copyright {
    padding: 28px 0;
    margin-top: 55px;
    background-color: #202020;
}

.copyright span,
.copyright a {
    color: #878787;
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear;
}

.copyright a:hover {
    color: #007bff;
}

.copyright-menu ul {
    text-align: right;
    margin: 0;
}

.copyright-menu li {
    display: inline-block;
    padding-left: 20px;
}

.back-to-top {
    position: relative;
    z-index: 2;
}

.back-to-top .btn-dark {
    width: 35px;
    height: 35px;
    border-radius: 50%;
    padding: 0;
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: #2e2e2e;
    border-color: #2e2e2e;
    display: none;
    z-index: 999;
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear;
}

.back-to-top .btn-dark:hover {
    cursor: pointer;
    background: #FA6742;
    border-color: #FA6742;
}
</style>

<?php

$uname= $_SESSION['uname'];
$q="select * from customer where name='$uname'";
$con=mysqli_connect("localhost","root","","grp-5");
$res=mysqli_query($con,$q);
while($row=mysqli_fetch_row($res)){
    $addr=$row[4];
    $phn=$row[6];
    $email=$row[3];
    $P=$row[2];
    $id=$row[0];
}
?>

<body style="background-color: gray;">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark mt-0">
  <div class="container-fluid">
    <ul class="navbar-nav">
    <a class="navbar-brand" href="home.php">
      <img src="icons/game.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill"> 
    </a>

    <li class="nav-item text-white ml-5">
        <h3 id="header">Gaming World</h3>
    </li>
      
      <li class="nav-item">
        <a class="nav-link active" href="customer.php" style="margin-left:90px">My account <img src="icons/user.png" width="40px" height="40px"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="cart.php" style="margin-left:90px">View cart<img src="icons/cart.png" width="40px" height="40px"> </a>
      </li>

    </ul>

  </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-lg-4 mb-lg-0 mb-3">
            <div class="card p-3">
                <div class="img-box"> <img src="icons/bkash.png" alt=""> </div>
                <div class="number"> <label class="fw-bold" for=""><?php echo $phn; ?></label> </div>
                <div class="d-flex align-items-center justify-content-between"><small><span class="fw-bold">Name:</span><span><?php echo $uname; ?></span></small> </div>
            </div>
        </div>
        <div class="col-lg-4 mb-lg-0 mb-3">
            <div class="card p-3">
                <div class="img-box"> <img src="icons/rocket.png" alt=""> </div>
                <div class="number"> <label class="fw-bold"><?php echo $phn; ?></label> </div>
                <div class="d-flex align-items-center justify-content-between"><small><span class="fw-bold">Name:</span><span><?php echo $uname; ?></span></small> </div>
            </div>
        </div>
        <div class="col-lg-4 mb-lg-0 mb-3">
            <div class="card p-3">
                <div class="img-box"> <img src="icons/nagad.png" alt=""> </div>
                <div class="number"> <label class="fw-bold"><?php echo $phn; ?></label> </div>
                <div class="d-flex align-items-center justify-content-between"><small><span class="fw-bold">Name:</span><span><?php echo $uname; ?></span></small> </div>
            </div>
        </div>
        <div class="col-12 mt-4">
            <div class="card p-3">
                <p class="mb-0 fw-bold h4">Payment Methods</p>
            </div>
        </div>
        <div class="col-12">
            <div class="card p-3">


                <div class="card-body border p-0">
                    <p> <a class="btn btn-primary p-2 w-100 h-100 d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample"> <span class="fw-bold">bKash</span></a> </p>
                    <div class="collapse show p-3 pt-0" id="collapseExample">
                        <div class="row">
                            <div class="col-lg-5 mb-lg-0 mb-3">
                                <p class="h4 mb-0">Confirm Payment</p>
                            </div>
                            <div class="col-lg-7">
                                <form action="payment.php" class="form" method="post">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form__div"> <input type="text" class="form-control" placeholder=" " name="bnum"> <label for="" class="form__label">Confirm Phone Number</label> </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form__div"> <input type="text" class="form-control" placeholder=" " name="bpin"> <label for="" class="form__label">Enter PIN</label> </div>
                                        </div>
                                        <div class="col-12">
                                            <input type="submit" value="Submit" name="bsub" class="btn btn-primary w-100">
                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="card-body border p-0">
                    <p> <a class="btn btn-primary p-2 w-100 h-100 d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample"> <span class="fw-bold">Nagad</span></a> </p>
                    <div class="collapse show p-3 pt-0" id="collapseExample">
                        <div class="row">
                            <div class="col-lg-5 mb-lg-0 mb-3">
                                <p class="h4 mb-0">Confirm Payment</p>
                            </div>
                            <div class="col-lg-7">
                                <form action="payment.php" class="form" method="post">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form__div"> <input type="text" class="form-control" placeholder=" " name="nnum"> <label for="" class="form__label">Confirm Phone Number</label> </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form__div"> <input type="text" class="form-control" placeholder=" " name="npin"> <label for="" class="form__label">Enter PIN</label> </div>
                                        </div>
                                        <div class="col-12">
                                        <input type="submit" value="Submit" name="nsub" class="btn btn-primary w-100">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card-body border p-0">
                    <p> <a class="btn btn-primary p-2 w-100 h-100 d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample"> <span class="fw-bold">DB Rocket</span></a> </p>
                    <div class="collapse show p-3 pt-0" id="collapseExample">
                        <div class="row">
                            <div class="col-lg-5 mb-lg-0 mb-3">
                                <p class="h4 mb-0">Confirm Payment</p>
                            </div>
                            <div class="col-lg-7">
                                <form action="payment.php" class="form" method="post">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form__div"> <input type="text" class="form-control" placeholder=" " name="rnum"> <label for="" class="form__label">Confirm Phone Number</label> </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form__div"> <input type="text" class="form-control" placeholder=" " name="rpin"> <label for="" class="form__label">Enter PIN</label> </div>
                                        </div>
                                        <div class="col-12">
                                        <input type="submit" value="Submit" name="rsub" class="btn btn-primary w-100">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>






                <div class="card-body border p-0">
                    <p> <a class="btn btn-primary p-2 w-100 h-100 d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample"> <span class="fw-bold">Cash on Delivery</span></a> </p>
                    <div class="collapse show p-3 pt-0" id="collapseExample">
                        <div class="row">
                            <div class="col-lg-5 mb-lg-0 mb-3">
                                <p class="h4 mb-0">Confirm Address and Receiver</p>
                            </div>
                            <div class="col-lg-7">
                                <form action="payment.php" class="form" method="post">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form__div"> <input type="text" class="form-control" placeholder=" " name="cnam"> <label for="" class="form__label">Receiver Name</label> </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form__div"> <input type="text" class="form-control" placeholder=" " name="cnum"> <label for="" class="form__label">Confirm Phone Number</label> </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form__div"> <input type="text" class="form-control" placeholder=" " name="cadd"> <label for="" class="form__label">Address</label> </div>
                                        </div>
                                        <div class="col-12">
                                        <input type="submit" value="Submit" name="csub" class="btn btn-primary w-100">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>





            </div>
        </div>
        
    </div>
</div>

<footer id="dk-footer" class="dk-footer mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="dk-footer-box-info">
                        <a href="index.html" class="footer-logo">
                            <img src="icons/pur.png" alt="footer_logo" class="img-fluid">
                        </a>
                        <p class="footer-info-text text-white">
                           Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.
                        </p>
                        <div class="footer-social-link">
                            <h3>Follow us</h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                       
                    </div>
                   
                    <div class="footer-awarad">
                        <img src="images/icon/best.png" alt="">
                        <p>Best Design Company 2019</p>
                    </div>
                </div>
                
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-us">
                                <div class="contact-icon">
                                    <i class="fa fa-map-o" aria-hidden="true"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    <h3>Gaming World</h3>
                                    <p>5353 Road Avenue</p>
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                        <div class="col-md-6">
                            <div class="contact-us contact-us-last">
                                <div class="contact-icon">
                                    <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    <h3>01636421651</h3>
                                    <p>Give us a call</p>
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Contact Row -->
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget footer-left-widget">
                                <div class="section-heading">
                                    <h3>Useful Links</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#">About us</a>
                                    </li>
                                    <li>
                                        <a href="#">Services</a>
                                    </li>
                                    <li>
                                        <a href="#">Projects</a>
                                    </li>
                                    <li>
                                        <a href="#">Our Team</a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="#">Contact us</a>
                                    </li>
                                    <li>
                                        <a href="#">Blog</a>
                                    </li>
                                    <li>
                                        <a href="#">Testimonials</a>
                                    </li>
                                    <li>
                                        <a href="#">Faq</a>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                       
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget">
                                <div class="section-heading">
                                    <h3> All Right Reserved by Gaming world</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <p>
                                Reference site about Lorem Ipsum, giving information on its origins, as well.</p>
                               
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        


        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <span>Copyright © 2022, All Right Reserved Gaming world</span>
                    </div>
                    <!-- End Col -->
                    <div class="col-md-6">
                        <div class="copyright-menu">
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">Terms</a>
                                </li>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Copyright Container -->
        </div>
        <!-- End Copyright -->
        <!-- Back to top -->
        <div id="back-to-top" class="back-to-top">
          <a href="#top">
          <button class="btn btn-dark" title="Back to Top" style="display: block;">
                <i class="fa fa-angle-up"></i>
            </button>


          </a>
            
        </div>
        <!-- End Back to top -->
</footer>  

<?php
    $q="select * from customer where name='$user'";
    $con=mysqli_connect("localhost","root","","grp-5");
    $res=mysqli_query($con,$q);
    $id=0;
    while($row=mysqli_fetch_row($res)){
        $id=$row[0];
    }
    if(isset($_POST['bsub'])){
        $bk=$_POST["bnum"];
        $pass=$_POST["bpin"];
        $q="insert into payment (bkash,bpin,user,uname) values($bk,$pass,$id,'$user'); ";
        $res=mysqli_query($con,$q);
        $query="delete  from cart where user=$id";
        $res=mysqli_query($con,$query);
       
        echo "<script>alert('Payment Successfull')</script>";
        echo "<script>window.open('home.php','_self')</script>";
        

    }
    if(isset($_POST['nsub'])){
        $bk=$_POST["nnum"];
        $pass=$_POST["npin"];
        $q="insert into payment (nagad,npin,user,uname) values($bk,$pass,$id,'$user'); ";
        $res=mysqli_query($con,$q);
        $query="delete from cart where user=$id";
        $res=mysqli_query($con,$query);
       
        echo "<script>alert('Payment Successfull')</script>";
        echo "<script>window.open('home.php','_self')</script>";
        

    }
    if(isset($_POST['rsub'])){
        $bk=$_POST["rnum"];
        $pass=$_POST["rpin"];
        $q="insert into payment (rocket,rpin,user,uname) values($bk,$pass,$id,'$user'); ";
        $res=mysqli_query($con,$q);
        $query="delete from cart where user=$id";
        $res=mysqli_query($con,$query);
       
        echo "<script>alert('Payment Successfull')</script>";
        echo "<script>window.open('home.php','_self')</script>";
        

    }


    if(isset($_POST['csub'])){
        $cname=$_POST["cnam"];
        $cnumb=$_POST["cnum"];
        $caddr=$_POST["cadd"];
        $q="insert into payment (c_name,c_addr,c_num,user,uname) values('$cname','$caddr','$cnumb',$id,'$user'); ";
        $res=mysqli_query($con,$q);
        $query="delete from cart where user=$id";
        $res=mysqli_query($con,$query);
       
        echo "<script>alert('Payment Successfull')</script>";
        echo "<script>window.open('home.php','_self')</script>";
        

    }

?>




</body>
