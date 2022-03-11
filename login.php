<?php
    session_start();
    $con = mysqli_connect("localhost","root","","grp-5");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="icon" type="image/x-icon" href="icons/icon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <style>

    </style>
</head>

<body style="background-image: url('img/log.jpg');background-size: 1600px 1000px;">


<div class="row shadow mt-5 mb-2 p-3 mx-2 text-white">
    <div class="col-6">
      <div class="cont">
          <h2 class="title">
            <span class="title-word title-word-1">Welcome</span>
            <span class="title-word title-word-2">to</span>
            <span class="title-word title-word-3">Gaming</span>
            <span class="title-word title-word-4">world</span>
          </h2>
          <p>The Indian technology media industry is driven by hundreds of people who, at one time or another, worked and trained at Digit. We’re proud of our legacy of shaping the industry as pioneers in the field, and extremely happy that so many of our Digit family have helped scale the technology media vertical to new heights, and are helping India take over the digital world.</p>
        </div>
    </div>
    <div class="col-6">
    <div class="container mt-3 shadow mt-3 mb-2 p-3 mx-2">
  <h1 style=" text-shadow: 1px 2px 0 #969696, 1px 13px 5px #aba8a8, 8px 2px 3px rgba(206,89,55,0);" class="fill">Fill the form to login:</h1>
  <form action="login.php" method="POST">
    <div class="mb-3 mt-3 shadow mt-3 mb-2 p-3 mx-2">
      <label for="uname"  class="fill">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter Username" name="uname" required>
    </div>
    <div class="mb-3 shadow mt-3 mb-2 p-3 mx-2">
      <label for="pwd" class="fill">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass" required>
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-secondary shadow mt-3 mb-2  mx-2" name="submit">Submit</button>
  </form>
  <h4 class="mt-3 shadow mt-3 mb-2 p-3 mx-2 text-secondary"> Not signed up? <a href="signup.php">Click here to sign up</a></h4>
</div>

</div>

</div>
<?php
    if(isset($_POST['submit'])){
        $uname=$_POST["uname"];
        $pass=$_POST["pass"];
        $q="select * from customer where name='$uname' and pass='$pass';";
        $res=mysqli_query($con,$q);
        
        $row=mysqli_fetch_array($res);
        if(is_array($row)){
            $_SESSION['uname']=$row['name'];
            $_SESSION['pass']=$row['pass'];
            echo "<script>location.href='home.php'</script>";
        }else{
            echo "<script>alert('Ivalid username or password')</script>";
        }

    }
?>
</body>
</html>