<?php
/**
 * Created by IntelliJ IDEA.
 * User: ISURU UMAYANGA
 * Date: 6/17/2019
 * Time: 1:40 AM
 */
?>

<!----------------------------------Open-head---------------------------------------------------------------->
<?php
include 'head.php';
?>
<!----------------------------------Close-head---------------------------------------------------------------->

<body>

<div class="d-flex" id="wrapper">

    <!-----------------------------------Open-sidebar--------------------------------------------------------------->
    <?php
    include 'sidebar.php';
    ?>
    <!-----------------------------------Open-sidebar--------------------------------------------------------------->



    <div id="page-content-wrapper">

        <!------------------------------------------Open-headbar--------------------------------------------------------->
        <?php
        include 'headbar.php';
        ?>
        <!------------------------------------------Open-headbar--------------------------------------------------------->


        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" id="content">

                    <div class="alert alert-dark" role="alert">

                        <h4><a href="index.html" class="contentsidebar">Dashboard/</a>Customer Form</h4>
                    </div>
                    <h4 class="ui dividing header" style="font-size: 20px;color: #0e8c8c">Customer Information</h4><br>
                    <div class="ui form">
                        <div class="two fields">

                            <div class="field">
                                <label style="font-size: 15px">First Name</label>
                                <input placeholder="First Name"  type="text" id="cfname">
                            </div>
                            <div class="field">
                                <label style="font-size: 15px">Last Name</label>
                                <input placeholder="Last Name" type="text" id="clname">
                            </div>
                        </div>
                    </div>
                    <form class="ui form">
                        <div class="field">
                            <label style="font-size: 15px">Address</label>
                            <input type="text" name="first-name" placeholder="Address" id="caddress">
                        </div>
                        <div class="field">
                            <label style="font-size: 15px">E-Mail</label>
                            <input type="text" name="first-name" placeholder="E-Mail" id="cmail">
                        </div>

                        <form class="ui form">
                            <div class="two fields">
                                <div class="field">
                                    <label style="font-size: 15px">City</label>
                                    <input type="text" name="first-name" placeholder="City" id="ccity">
                                </div>
                            </div>

                            <div class="ui form">
                                <div class="two fields">

                                    <div class="field">
                                        <label style="font-size: 15px">Birth Day</label>
                                        <input placeholder="Birth Day"  type="text" id="cbirthday">
                                    </div>
                                    <div class="field">
                                        <label style="font-size: 15px">NIC</label>
                                        <input placeholder="NIC"  type="text" id="cnic">
                                    </div>
                                </div>
                            </div>
                            <div class="ui form">
                                <div class="two fields">

                                    <div class="field">
                                        <label style="font-size: 15px">Telephone No</label>
                                        <input placeholder="Telephone No"  type="text" id="ctel">
                                    </div>
                                </div>
                            </div>

                        </form>
                    </form>
                    <br>
                    <table class="ui celled table" style="border: 1px solid black;overflow: auto" id="custtable">
                        <thead>
                        <tr>
                            <th style="background: #ccccff;">First Name</th>
                            <th style="background: #ccccff;">Last Name</th>
                            <th style="background: #ccccff;">Address</th>
                            <th style="background: #ccccff;">E-Mail</th>
                            <th style="background: #ccccff;">City</th>
                            <th style="background: #ccccff;">Birth Day</th>
                            <th style="background: #ccccff;">Nic</th>
                            <th style="background: #ccccff;">Telephone</th>
                            <th style="background: #00b300;">Edit</th>
                            <th style="background: #ff1a1a">Delete</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>

                    <div class="ui buttons" style="position: fixed;top: 106px;right: 14px;">
                        <button class="ui button" style="background-color: #0d71bb" id="btnadd">Add Customer</button>
                        <div class="or"></div>
                        <button class="ui positive button" style="background-color: #a3a375" id="btnrefresh">Refresh Form</button>
                    </div>

                </div>
                <!--////////////////////////////////////Close-Custsection/////////////////////////////////////////////////////////////////////////          -->

                <div>
                    <a href="#"id="specialbtn"><i class="fas fa-arrow-circle-up fa-4x" style="color: red" id="aa"></i></a>
                </div>
            </div>


            <!--//////////////////////////////////////////////Close-Content/////////////////////////////////////////////////////////-->

        </div>
    </div>
</div>


<!--------------------------------Open-script-------------------------------------------------------------------->
<?php
include 'script.php';
?>
<!--------------------------------Open-script-------------------------------------------------------------------->


</body>

<!-----------------------------Open-footer----------------------------------------------->
<?php
include 'footer.php'
?>
<!-----------------------------Open-footer----------------------------------------------->

</html>

