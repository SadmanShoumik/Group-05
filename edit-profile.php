<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit pfofile</title>
    <link rel="icon" type="image/x-icon" href="icons/icon.ico">
    <link rel="stylesheet" type="text/css" href="customer.css?v=<?php echo time(); ?>"/>
    <link rel="stylesheet" type="text/css" href="home.css?v=<?php echo time(); ?>"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css">
    
    <style>
        body{
            color: orange;
        }
    </style>
</head>
<body>
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

 <nav class="navbar navbar-expand-sm bg-dark navbar-dark mt-0" id="top">
  <div class="container-fluid">
    <ul class="navbar-nav">
    <a class="navbar-brand" href="home.php">
      <img src="icons/game.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill"> 
    </a>
      <li class="nav-item">
        <a class="nav-link active" href="edit-profile.php" style="margin-left:90px">My account <img src="icons/user.png" width="40px" height="40px"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="cart.php" style="margin-left:90px">View cart<img src="icons/cart.png" width="40px" height="40px"> </a>
      </li>

    </ul>
    <form class="d-flex" action="home.php" method="post">
        <input class="form-control me-2" type="text" name="brand" placeholder="Search by brand"  onkeyup="showhint(this.value)">
        <button class="btn btn-secondary" type="submit" name="search">Search</button>
        <h2 class="text-white badge badge-primary">clue:<span id="txthints" class="text-white badge badge-dark"></span> </h2>
      </form>
  </div>
</nav>

    <div class="container">
        <div class="page-content page-container" id="page-content">
            <div class="padding">
                <div class="row container d-flex justify-content-center">
                    <div class="col-md-12 ">
                        <div class="card user-card-full">
                            <div class="row m-l-0 m-r-0">
                                <div class="col-sm-4 bg-c-lite-green user-profile">
                                    <div class="card-block text-center text-white">
                                        <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                        <h6 class="f-w-600">Welcome</h6>
                                        <p><?php echo $uname; ?></p>                                         
                                    </div>
                                </div>
                                
                                <div class="col-sm-8 center-block hello">
                                    <div class="card-block">
                                        <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                            <form action="edit-profile.php" method="post">
                            <div class="form-control">
                                <input type="text" name="name" id="name" placeholder="Edit your username" class="form control ">
                            </div>
                            
                            <input type="submit" value="Edit Username" name="bname" class="form-control btn btn-dark float-left mb-3"> 
                            <div class="form-control">
                                <input type="email" name="email" id="email" placeholder="Edit your Email" class="form control">
                            </div>
                            
                            <input type="submit" value="Edit Email" name="bemail" class="form-control btn btn-dark float-left mb-3">
                            <div class="form-control">
                                <input type="phone" name="phn" id="phn" placeholder="Edit your Phone" class="form control">
                            </div>
                            
                            <input type="submit" value="Edit Phone" name="bphn" class="form-control btn btn-dark float-left mb-3">  
                            <div class="form-control">
                                <input type="text" name="addr"  placeholder="Edit your Address" class="form control">
                            </div>
                            
                            <input type="submit" value="Edit address" name="baddr" class="form-control btn btn-dark float-left mb-3"> 
                            <!-- <div class="form-control">
                                <input type="password" name="ppass"  placeholder="Enter previous password" class="form control">
                            </div>
                            <div class="form-control">
                                <input type="password" name="npass"  placeholder="Enter new password" class="form control">
                            </div>
                            <input type="submit" value="Set Password" name="bpass" class="form-control btn btn-dark float-left mb-3"> -->
                        </form>

                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
                if(isset($_POST['bname'])){
                    $con=mysqli_connect("localhost","root","","grp-5");
                    $n=$_POST['name'];
                    $q="UPDATE customer SET name = '$n' WHERE id = $id;";
                    $res=mysqli_query($con,$q);
                    echo "<script>alert('Username is updated')</script>";
                    echo "<script>location.href='customer.php'</script>";
                }
                if(isset($_POST['bemail'])){
                    $con=mysqli_connect("localhost","root","","grp-5");
                    $n=$_POST['email'];
                    $q="UPDATE customer SET email = '$n' WHERE id = $id;";
                    $res=mysqli_query($con,$q);
                    echo "<script>alert('Email is updated')</script>";
                    echo "<script>location.href='customer.php'</script>";
                }
                if(isset($_POST['baddr'])){
                    $con=mysqli_connect("localhost","root","","grp-5");
                    $n=$_POST['addr'];
                    $q="UPDATE customer SET addr = '$n' WHERE id = $id;";
                    $res=mysqli_query($con,$q);
                    echo "<script>alert('Address is updated')</script>";
                    echo "<script>location.href='customer.php'</script>";
                }
                if(isset($_POST['bphn'])){
                    $con=mysqli_connect("localhost","root","","grp-5");
                    $n=$_POST['phn'];
                    $q="UPDATE customer SET phone = '$n' WHERE id = $id;";
                    $res=mysqli_query($con,$q);
                    echo "<script>alert('phone number is updated')</script>";
                    echo "<script>location.href='customer.php'</script>";
                }
                if(isset($_POST['bphn'])){
                    $con=mysqli_connect("localhost","root","","grp-5");
                    $n=$_POST['ppass'];
                    $np=$_POST['npass'];
                    if($P==$n){
                        $q="UPDATE customer SET password = '$np' WHERE id = $id;";
                        $res=mysqli_query($con,$q);
                        echo "<script>alert('password is updated')</script>";
                        echo "<script>location.href='customer.php'</script>";
                    }else{
                        echo "<script>alert('Enter previous password correctly')</script>";
                        
                    }
                   
                }
            ?>

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
</body>
</html>