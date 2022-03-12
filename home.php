<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    <link rel="icon" type="image/x-icon" href="icons/icon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
</head>
<body style="background:black;">

    
    <div class="bg-secondary mb-0">
    <p class="text-light "> <?php echo "User: ". $_SESSION['uname']; ?></p>
    </div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark mt-0" id="top">
  <div class="container-fluid">
    <ul class="navbar-nav">
    <a class="navbar-brand" href="home.php">
      <img src="icons/game.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill"> 
    </a>
      
      <li class="nav-item">
        <form action="home.php" method="post" > 
          <button type="submit" name="m" class="btn btn-secondary">Gaming Mouse</button>
        </form>
        
      </li>
      <li class="nav-item">
      <form action="home.php" method="post" > 
          <button type="submit" name="kb" class="btn btn-secondary">Gaming Keyboard</button>
        </form>
      </li>
      <li class="nav-item">
      <form action="home.php" method="post" > 
          <button type="submit" name="hp" class="btn btn-secondary">Gaming Headphone</button>
        </form>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="customer.php" style="margin-left:90px">My account <img src="icons/user.png" width="40px" height="40px"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="cart.php" style="margin-left:90px">View cart<img src="icons/cart.png" width="40px" height="40px"> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="login.php" style="margin-left:90px">Logout<img src="icons/logout.png" width="40px" height="40px"> </a>
      </li>

    </ul>
    <form class="d-flex" action="home.php" method="post">
        <input class="form-control me-2" type="text" name="brand" placeholder="Search by brand"  onkeyup="showhint(this.value)">
        <button class="btn btn-secondary" type="submit" name="search">Search</button>
        <h2 class="text-white badge badge-primary">clue:<span id="txthints" class="text-white badge badge-dark"></span> </h2>
      </form>
  </div>
</nav>
<script>
                  function showhint(str) {
                    if (str.length == 0) {
                      document.getElementById("txthints").innerHTML = "";
                      return;
                    } else {
                       var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                          document.getElementById("txthints").innerHTML = this.responseText;
                        }
                    } ;
                      xmlhttp.open("GET", "gethint.php?q=" + str, true);
                       xmlhttp.send();
                    }
                 }
</script>

    <div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/hd4.jpg" alt="Los Angeles" class="d-block h-50" style="width:100%">
      <div class="carousel-caption">
        <h3 style=" font-family: 'PT Sans Narrow', sans-serif;">Welcome to Gaming Arena</h3>
        <p>Explore the best gaming tools</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/hd1.jpg" alt="Chicago" class="d-block h-50" style="width:100% ">
    </div>
    <div class="carousel-item">
      <img src="img/hd2.jpg" alt="New York" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="img/hd3.jpg" alt="New York" class="d-block" style="width:100%">
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
<?php
  $con=mysqli_connect("localhost","root","","grp-5");
  $hp=1;$kb=1;$m=1;
  $kbname=array();
  $kbprice=array();
  $kbimg=array();
  
  $hpname=array();
  $hpprice=array();
  $hpimg=array();

  $mname=array();
  $mprice=array();
  $mimg=array();

  if(isset($_POST['m'])){
    $m=1;$kb=0;$hp=0;
  }
  if(isset($_POST['kb'])){
    $m=0;$kb=1;$hp=0;
  }
  if(isset($_POST['hp'])){
    $m=0;$kb=0;$hp=1;
  }
  $br=0;
  if(isset($_POST['search'])){
    $m=0;$kb=0;$hp=0;$br=1;
    $brand=$_POST["brand"];
    $con=mysqli_connect('localhost','root','','grp-5');
    $query="select * from product where brand='$brand';";
    $res=mysqli_query($con,$query);
    
    
    while($row=mysqli_fetch_row($res)){
      $name=$row[1];
      $price=$row[4];
      $image=$row[5];
      
       
      ?>
      <div class="card shadow mt-3 mb-2 p-2 bg-dark text-white" style="width: 300px;" >
              <img class="card-img-top" src="img/<?php echo $image ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $name ?> </h5>
                <p class="card-text"> Price: <?php echo $price ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="hp1"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>

              </div>
      </div><?php
    
    }

  }
  if($kb==1){
    $q="select * from product where type='Keyboard'";
    $tab=mysqli_query($con,$q);
    while($row=mysqli_fetch_row($tab)){
      array_push($kbname,$row[1]);
      array_push($kbprice,$row[4]);
      array_push($kbimg,$row[5]);
    }
  }
  if($hp==1){
    $q="select * from product where type='Headphone'";
    $tab=mysqli_query($con,$q);
    while($row=mysqli_fetch_row($tab)){
      array_push($hpname,$row[1]);
      array_push($hpprice,$row[4]);
      array_push($hpimg,$row[5]);
    }
  }
  if($m==1){
    $q="select * from product where type='Mouse'";
    $tab=mysqli_query($con,$q);
    while($row=mysqli_fetch_row($tab)){
      array_push($mname,$row[1]);
      array_push($mprice,$row[4]);
      array_push($mimg,$row[5]);
    }
  }
  if($hp)
  {
     ?>
     <div class="container text-white" style="background: #202020;background: #202020;">
        <div class="row">
          <div class="col">
            <div class="card shadow mt-3 mb-2 p-2 bg-dark" style="width: 300px;" >
              <img class="card-img-top" src="img/hp/<?php echo $hpimg[0] ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $hpname[0] ?> </h5>
                <p class="card-text"> Price: <?php echo $hpprice[0] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="hp1"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>

              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 p-2 bg-dark" style="width: 300px;" >
              <img class="card-img-top" src="img/hp/<?php echo $hpimg[1] ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $hpname[1] ?> </h5>
                <p class="card-text"> Price: <?php echo $hpprice[1] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="hp2"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>

              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 p-2 bg-dark" style="width: 300px;" >
              <img class="card-img-top" src="img/hp/<?php echo $hpimg[2] ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $hpname[2] ?> </h5>
                <p class="card-text"> Price: <?php echo $hpprice[2] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="hp3"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 p-2 bg-dark" style="width: 300px;" >
              <img class="card-img-top" src="img/hp/<?php echo $hpimg[3] ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $hpname[3] ?> </h5>
                <p class="card-text"> Price: <?php echo $hpprice[3] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="hp4"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>

              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 p-2 bg-dark" style="width: 300px;" >
              <img class="card-img-top" src="img/hp/<?php echo $hpimg[4] ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $hpname[4] ?> </h5>
                <p class="card-text"> Price: <?php echo $hpprice[4] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="hp5"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>

              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow mt-3 mb-2 p-2 bg-dark" style="width: 300px;" >
              <img class="card-img-top" src="img/hp/<?php echo $hpimg[5] ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $hpname[5] ?> </h5>
                <p class="card-text"> Price: <?php echo $hpprice[5] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="hp6"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>

              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 p-2 bg-dark" style="width: 300px;" >
              <img class="card-img-top" src="img/hp/<?php echo $hpimg[6] ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $hpname[6] ?> </h5>
                <p class="card-text"> Price: <?php echo $hpprice[6] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="hp7"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>

              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 p-2 bg-dark" style="width: 300px;" >
              <img class="card-img-top" src="img/hp/<?php echo $hpimg[7] ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $hpname[7] ?> </h5>
                <p class="card-text"> Price: <?php echo $hpprice[7] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="hp8"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>

              </div>
            </div>
          </div>


        </div>
     </div>

     
        
          
      
     
     <?php
  }
  
      
?>
<?php
  if($kb){
    ?>
     <div class="container text-white" style="background: #202020;background: #202020;">
        <div class="row">
          <div class="col">
            <div class="card shadow mt-3 mb-2 p-2 bg-dark text-white" style="width: 300px;" >
              <img class="card-img-top" src="img/kb/<?php echo $kbimg[0] ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $kbname[0] ?> </h5>
                <p class="card-text"> Price: <?php echo $kbprice[0] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="kb1"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>

              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 p-2 bg-dark text-white" style="width: 300px;" >
              <img class="card-img-top" src="img/kb/<?php echo $kbimg[1] ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $kbname[1] ?> </h5>
                <p class="card-text"> Price: <?php echo $kbprice[1] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="kb2"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>

              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 p-2 bg-dark text-white" style="width: 300px;" >
              <img class="card-img-top" src="img/kb/<?php echo $kbimg[2] ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $kbname[2] ?> </h5>
                <p class="card-text"> Price: <?php echo $kbprice[2] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="kb3"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>

              </div>
            </div>
          </div>


          <div class="col">
            <div class="card shadow mt-3 mb-2 p-2 bg-dark text-white" style="width: 300px;" >
              <img class="card-img-top" src="img/kb/<?php echo $kbimg[3] ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $kbname[3] ?> </h5>
                <p class="card-text"> Price: <?php echo $kbprice[3] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="kb4"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>

              </div>
            </div>
          </div>


          <div class="col">
            <div class="card shadow mt-3 mb-2 p-2 bg-dark text-white" style="width: 300px;" >
              <img class="card-img-top" src="img/kb/<?php echo $kbimg[4] ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $kbname[4] ?> </h5>
                <p class="card-text"> Price: <?php echo $kbprice[4] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="kb5"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>

              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 p-2 bg-dark text-white" style="width: 300px;" >
              <img class="card-img-top" src="img/kb/<?php echo $kbimg[5] ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $kbname[5] ?> </h5>
                <p class="card-text"> Price: <?php echo $kbprice[5] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="kb6"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>

              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 p-2 bg-dark text-white" style="width: 300px;" >
              <img class="card-img-top" src="img/kb/<?php echo $kbimg[6] ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $kbname[6] ?> </h5>
                <p class="card-text"> Price: <?php echo $kbprice[6] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="kb7"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>

              </div>
            </div>
          </div>



          </div>
        </div>
    <?php
  }
?>
<?php
  if($m){
    ?>
     <div class="container text-white" style="background: #202020;background: #202020;">
        <div class="row">
          <div class="col">
            <div class="card shadow mt-3 mb-2 p-2 bg-dark text-white" style="width: 300px;" >
              <img class="card-img-top" src="img/m/<?php echo $mimg[0] ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $mname[0] ?> </h5>
                <p class="card-text"> Price: <?php echo $mprice[0] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="m1"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>

              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 p-2 bg-dark text-white" style="width: 300px;" >
              <img class="card-img-top" src="img/m/<?php echo $mimg[1] ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $mname[1] ?> </h5>
                <p class="card-text"> Price: <?php echo $mprice[1] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="m2"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>

              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 p-2 bg-dark text-white" style="width: 300px;" >
              <img class="card-img-top" src="img/m/<?php echo $mimg[2] ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $mname[2] ?> </h5>
                <p class="card-text"> Price: <?php echo $mprice[2] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="m3"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>

              </div>
            </div>
          </div>


          <div class="col">
            <div class="card shadow mt-3 mb-2 p-2 bg-dark text-white" style="width: 300px;" >
              <img class="card-img-top" src="img/m/<?php echo $mimg[3] ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $mname[3] ?> </h5>
                <p class="card-text"> Price: <?php echo $mprice[3] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="m4"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>

              </div>
            </div>
          </div>


          <div class="col">
            <div class="card shadow mt-3 mb-2 p-2 bg-dark text-white" style="width: 300px;" >
              <img class="card-img-top" src="img/m/<?php echo $mimg[4] ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $mname[4] ?> </h5>
                <p class="card-text"> Price: <?php echo $mprice[4] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="m5"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>

              </div>
            </div>
          </div>


          <div class="col">
            <div class="card shadow mt-3 mb-2 p-2 bg-dark text-white" style="width: 300px;" >
              <img class="card-img-top" src="img/m/<?php echo $mimg[6] ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $mname[6] ?> </h5>
                <p class="card-text"> Price: <?php echo $mprice[6] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="m7"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>

              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 p-2 bg-dark text-white" style="width: 300px;" >
              <img class="card-img-top" src="img/m/<?php echo $mimg[5] ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $mname[5] ?> </h5>
                <p class="card-text"> Price: <?php echo $mprice[5] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="m6"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>

              </div>
            </div>
          </div>




          </div>
        </div>
    <?php
  }
?>
<?php
   $con=mysqli_connect("localhost","root","","grp-5");
   $user=$_SESSION['uname'];
   $q1="select id from customer where name='$user';";
   $r1=mysqli_query($con,$q1);
   $u_id=0;
   while($row=mysqli_fetch_row($r1)){
      $u_id=$row[0];
   }
   if(isset($_POST['m7'])){
     $q="INSERT INTO cart (c_id, cart, user) VALUES (NULL, 23,$u_id );";
     $r=mysqli_query($con,$q);
   }
   if(isset($_POST['m6'])){
    $q="INSERT INTO cart (c_id, cart, user) VALUES (NULL, 22,$u_id );";
    $r=mysqli_query($con,$q);
  }
  if(isset($_POST['m5'])){
    $q="INSERT INTO cart (c_id, cart, user) VALUES (NULL, 21,$u_id );";
    $r=mysqli_query($con,$q);
  }
  if(isset($_POST['m4'])){
    $q="INSERT INTO cart (c_id, cart, user) VALUES (NULL, 20,$u_id );";
    $r=mysqli_query($con,$q);
  }
  if(isset($_POST['m3'])){
    $q="INSERT INTO cart (c_id, cart, user) VALUES (NULL, 19,$u_id );";
    $r=mysqli_query($con,$q);
  }
  if(isset($_POST['m2'])){
    $q="INSERT INTO cart (c_id, cart, user) VALUES (NULL, 18,$u_id );";
    $r=mysqli_query($con,$q);
  }
  if(isset($_POST['m1'])){
    $q="INSERT INTO cart (c_id, cart, user) VALUES (NULL, 17,$u_id );";
    $r=mysqli_query($con,$q);
  }
  if(isset($_POST['kb7'])){
    $q="INSERT INTO cart (c_id, cart, user) VALUES (NULL, 15,$u_id );";
    $r=mysqli_query($con,$q);
  }
  if(isset($_POST['kb6'])){
    $q="INSERT INTO cart (c_id, cart, user) VALUES (NULL, 14,$u_id );";
    $r=mysqli_query($con,$q);
  }
  if(isset($_POST['kb5'])){
    $q="INSERT INTO cart (c_id, cart, user) VALUES (NULL, 13,$u_id );";
    $r=mysqli_query($con,$q);
  }
  if(isset($_POST['kb4'])){
    $q="INSERT INTO cart (c_id, cart, user) VALUES (NULL, 12,$u_id );";
    $r=mysqli_query($con,$q);
  }
  if(isset($_POST['kb3'])){
    $q="INSERT INTO cart (c_id, cart, user) VALUES (NULL, 11,$u_id );";
    $r=mysqli_query($con,$q);
  }
  if(isset($_POST['kb2'])){
    $q="INSERT INTO cart (c_id, cart, user) VALUES (NULL, 10,$u_id );";
    $r=mysqli_query($con,$q);
  }
  if(isset($_POST['kb1'])){
    $q="INSERT INTO cart (c_id, cart, user) VALUES (NULL, 9,$u_id );";
    $r=mysqli_query($con,$q);
  }
  if(isset($_POST['hp8'])){
    $q="INSERT INTO cart (c_id, cart, user) VALUES (NULL, 8,$u_id );";
    $r=mysqli_query($con,$q);
  }
  if(isset($_POST['hp7'])){
    $q="INSERT INTO cart (c_id, cart, user) VALUES (NULL, 7,$u_id );";
    $r=mysqli_query($con,$q);
  }
  if(isset($_POST['hp6'])){
    $q="INSERT INTO cart (c_id, cart, user) VALUES (NULL, 6,$u_id );";
    $r=mysqli_query($con,$q);
  }
  if(isset($_POST['hp4'])){
    $q="INSERT INTO cart (c_id, cart, user) VALUES (NULL, 4,$u_id );";
    $r=mysqli_query($con,$q);
  }
  if(isset($_POST['hp5'])){
    $q="INSERT INTO cart (c_id, cart, user) VALUES (NULL, 5,$u_id );";
    $r=mysqli_query($con,$q);
  }
  if(isset($_POST['hp3'])){
    $q="INSERT INTO cart (c_id, cart, user) VALUES (NULL, 3,$u_id );";
    $r=mysqli_query($con,$q);
  }
  if(isset($_POST['hp2'])){
    $q="INSERT INTO cart (c_id, cart, user) VALUES (NULL, 2,$u_id );";
    $r=mysqli_query($con,$q);
  }
  if(isset($_POST['hp1'])){
    $q="INSERT INTO cart (c_id, cart, user) VALUES (NULL, 1,$u_id );";
    $r=mysqli_query($con,$q);
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