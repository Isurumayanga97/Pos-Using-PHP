<?php
/**
 * Created by IntelliJ IDEA.
 * User: ISURU UMAYANGA
 * Date: 6/17/2019
 * Time: 1:41 AM
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>View-Order</title>

    <link rel="stylesheet" href="css/stylesheet.css">

    <link rel="stylesheet" type="text/css" href="css/semantic.min.css">
    <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <script src="js/semantic.min.js"></script>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Roboto&display=swap" rel="stylesheet">


</head>

<body>

<div class="d-flex" id="wrapper">

    <!--////////////////////////////////////////////Open-Sidebar//////////////////////////////////////////////////////////////////-->

    <div class="bg-light border-right" id="sidebar-wrapper" style="background-color:#666666!important;">

        <div class="sidebar-heading sidebarpos"><h3>Pos System </h3></div>
        <img src="images/dashnavimage.jpeg" alt="" class="sideimage">
        <div class="list-group list-group-flush">
            <a href="index.php" class="list-group-item list-group-item-action bg-dark sidetext"><i class="fas fa-home"></i>Dashboard</a>
            <a href="customer.php" class="list-group-item list-group-item-action bg-dark sidetext"><i class="fas fa-user-check"></i>Customer</a>
            <a href="item.php" class="list-group-item list-group-item-action bg-dark sidetext"><i class="fas fa-archive"></i>Item</a>
            <a href="order.php" class="list-group-item list-group-item-action bg-dark sidetext"><i class="far fa-chart-bar"></i>Order</a>
            <a href="invoice.php" class="list-group-item list-group-item-action bg-dark sidetext"><i class="far fa-file-alt"></i>View Order</a>
        </div>
    </div>

    <!--////////////////////////////////////////////Close-Sidebar//////////////////////////////////////////////////////////////////-->

    <!--////////////////////////////////////////////////Open-Content/////////////////////////////////////////////////////////////////-->

    <div id="page-content-wrapper">
        <!--/////////////////////////////////////////////////Open-Headbar////////////////////////////////////////////////////////////-->
        <nav class="navbar navbar-expand-lg navbar-light border-bottom headbar" id="headbar">
            <button type="button" class="btn btn-danger" id="menu-toggle"><i class="fas fa-sliders-h fa-2x"></i></button>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="background-color: white!important;"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0" id="headicon">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Search From
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Customer ID</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Customer Name</a>
                        </div>
                    </li>


                    <button class="btn btn-primary searchicon" type="button">
                        <input type="search" placeholder="  Search" class="search">
                        <i class="fas fa-search fa-1x"></i>
                    </button>

                    <ul class="navbar-nav ml-auto ml-md-0">
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-2x navicon"></i>
                                <span class="badge badge-danger headiconnum" >9+</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                                <a class="dropdown-item" href="#">New Notification</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-2x navicon"></i>
                                <span class="badge badge-danger headiconnum">7+</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                                <a class="dropdown-item" href="#">New Massage</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user-circle fa-2x navicon" style="color: #ffcc80"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="#">Activity Log</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                            </div>
                        </li>
                    </ul>

                </ul>
            </div>
        </nav>
        <!--/////////////////////////////////////Close-Headbar///////////////////////////////////////////////////////////////////////-->

        <!--////////////////////////////////////Close-Custsection/////////////////////////////////////////////////////////////////////////   -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" id="content">

                    <div class="alert alert-dark" role="alert">

                        <h4><a href="index.php" class="contentsidebar">Dashboard/</a>View Order</h4>
                    </div>
                    <h4 class="ui dividing header" style="font-size: 20px;color: #0e8c8c">Invoice Information</h4><br>

                    <div id="invoice">

                        <div class="row">
                            <div class="col-md-12">
                                <div>
                                    <div class="row pad-top-botm ">
                                        <div class="col-lg-6 col-md-6 col-sm-6 ">
                                            <h1 id="companyname">Umayanga Brothers PVT</h1>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">

                                            <strong>Umayanga Brothers(PVT)</strong>
                                            <br>
                                            <i>Address :</i> 114/204 Udugama Division,
                                            <br>
                                            Nakiyadeniya,Galle,
                                            <br>
                                            Sri Lanka.
                                        </div>
                                    </div>
                                    <div class="row text-center contact-info">
                                        <div class="col-lg-12 col-md-12 col-sm-12"id="info">
                                            <hr>
                                            <span>
                                                 <strong>E-mail : </strong>umayangaisuru97@gami.com
                                            </span>
                                            <span>
                                                <strong>Call : </strong>  0773571232
                                            </span>
                                            <span>
                 <strong>Fax : </strong> 0912242368
             </span>
                                            <hr>
                                            <br>
                                        </div>
                                    </div>
                                    <div class="row pad-top-botm client-info">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <h4>  <strong><u>Client Information</u></strong></h4>
                                            <strong>  Janith Umayanga</strong>
                                            <br>
                                            <b>Address :</b> 145/908 ,Udugama Division,
                                            <br>
                                            Nakiyadeniya,Galle.
                                            <br>
                                            <b>Call :</b> 0778917921
                                            <br>
                                            <b>E-mail :</b> umaynagajanith04@gmail.com
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">

                                            <h4>  <strong><u>Payment Details </u></strong></h4>
                                            <b>Bill Amount :  Rs 246782.00 </b>
                                            <br>
                                            Bill Date :  01th August 2019
                                            <br>
                                            <b>Payment Status :  Paid </b>
                                            <br>
                                            Delivery Date :  10th August 2019
                                            <br>
                                            Purchase Date :  30th July 2019
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover" style="border: 2px solid black!important;">
                                                    <thead>
                                                    <tr>
                                                        <th style="background: #ccccff">Number</th>
                                                        <th style="background: #ccccff">Item Name</th>
                                                        <th style="background: #ccccff">Order</th>
                                                        <th style="background: #ccccff">Quantity</th>
                                                        <th style="background: #ccccff">Unit Price</th>
                                                        <th style="background: #ccccff">Sub Total</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Milk Powder</td>
                                                        <td>68</td>
                                                        <td>100</td>
                                                        <td>560</td>
                                                        <td>3456.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <hr>
                                            <div class="ttl-amts">
                                                <h5>  Total Amount : Rs 34976.00 </h5>
                                            </div>
                                            <hr>
                                            <div class="ttl-amts">
                                                <h5>  Tax : Rs 5680.00 ( by 10 % on bill ) </h5>
                                            </div>
                                            <hr>
                                            <div class="ttl-amts">
                                                <h4> <strong>Bill Amount :Rs 466990.00</strong> </h4>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <strong> Important: </strong>
                                            <ol>
                                                <li>
                                                    This is an electronic generated invoice so doesn't require any signature.

                                                </li>
                                                <li>
                                                    Please read all terms and polices on  www.yourdomaon.com for returns, replacement and other issues.

                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                    <div class="row pad-top-botm" style="margin-bottom: 10px!important;">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <hr>
                                            <a href="#" class="btn btn-primary btn-lg">Print Invoice</a>
                                            &nbsp;&nbsp;&nbsp;
                                            <a href="#" class="btn btn-success btn-lg">Download In Pdf</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!--////////////////////////////////////Close-Custsection/////////////////////////////////////////////////////////////////////////          -->


                <div>
                    <a href="#"id="specialbtn"><i class="fas fa-arrow-circle-up fa-4x" style="color: red" id="aa"></i></a>
                </div>
            </div>

        </div>
        <!--//////////////////////////////////////////////Close-Content/////////////////////////////////////////////////////////-->



    </div>
</div>

<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>
<footer>
    <div style="width: 100%;height: 60px;background-color: #666666;">
        <div id="socialicon">
            <button class="ui circular facebook icon button">
                <i class="fab fa-facebook-f"></i>
            </button>
            <button class="ui circular twitter icon button">
                <i class="fab fa-twitter"></i>
            </button>
            <button class="ui circular linkedin icon button">
                <i class="fab fa-linkedin-in"></i>
            </button>
            <button class="ui circular google plus icon button">
                <i class="fab fa-google"></i>
            </button>
        </div>
    </div>
</footer>
</html>

