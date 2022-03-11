<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <link href="css/main.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">

        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="index.php">
                    <img src="images/icon/icon.png"/>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        
                        <li>
                            <a href="#">
                                <i class="fas fa-map-marker-alt"></i>Logout</a>
                        </li>
                        <li>
                            <a href="#cust">
                                <i class="fas fa-map-marker-alt"></i>Customer Details</a>
                        </li>
                        <li>
                            <a href="#pro">
                                <i class="fas fa-map-marker-alt"></i>Product Details</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="page-container">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>402</h2>
                                                <span>Members</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2>530</h2>
                                                <span>Items Solid</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>450</h2>
                                                <span>Orders</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2>32,891 Taka</h2>
                                                <span>Earning</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">recent reports</h3>
                                        <div>
                                            <div>    
                                            </div>
                                        </div>
                                        <div class="recent-report__chart">
                                            <canvas id="recent-rep-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="cust">
                            <h2>Customer details</h2>
                            <?php
                                $con = mysqli_connect("localhost","root","","grp-5");
                                $q="select * from customer;";
                                $res=mysqli_query($con,$q);
                                
                               ?>
                               <table class="table">
                                   <tr>
                                       <th>Name</th>
                                       <th>Email</th>
                                       <th>Adress</th>
                                       <th>Phone</th>
                                   </tr>
                                   <?php
                                         while($row=mysqli_fetch_row($res)){?>
                                   <tr>
                                       <td> <?php echo $row[1];?> </td>
                                       <td> <?php echo $row[3];?> </td>
                                       <td> <?php echo $row[4];?> </td>
                                       <td> <?php echo $row[6];?> </td>
                                   </tr>
                                   <?php } ?>
                               </table>
                               
                                
                                    
                                    
                            
                            
                        </div>
                        <div class="row" id="pro">
                            <h2>Product details</h2>
                            <?php
                                $con = mysqli_connect("localhost","root","","grp-5");
                                $q="select * from product;";
                                $res=mysqli_query($con,$q);
                                
                               ?>
                               <table class="table">
                                   <tr>
                                       <th class="shadow mt-3 mb-2 p-2">Name</th>
                                       <th class="shadow mt-3 mb-2 p-2">Brand</th>
                                       <th class="shadow mt-3 mb-2 p-2">Type</th>
                                       <th class="shadow mt-3 mb-2 p-2">Price</th>
                                   </tr>
                                   <?php
                                         while($row=mysqli_fetch_row($res)){?>
                                   <tr>
                                       <td class="shadow mt-3 mb-2 p-2"> <?php echo $row[1];?> </td>
                                       <td class="shadow mt-3 mb-2 p-2"> <?php echo $row[2];?> </td>
                                       <td class="shadow mt-3 mb-2 p-2"> <?php echo $row[3];?> </td>
                                       <td class="shadow mt-3 mb-2 p-2"> <?php echo $row[4];?> </td>
                                   </tr>
                                   <?php } ?>
                               </table>
                               
                                
                                    
                                    
                            
                            
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="vendor/jquery-3.2.1.min.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>

