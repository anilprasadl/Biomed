<?php  include('../session.php');
role_check($_SESSION['role'],1);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>View Details</title>

    <!-- Canonical SEO -->
    <link rel="canonical" href=""/>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href="../assets/css/paper-dashboard.css?v=1.2.1" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="../assets/css/themify-icons.css" rel="stylesheet">
</head>

<body>
<div class="row">
    <div class="sidebar" data-background-color="brown" data-active-color="danger">
        <!--
            Tip 1: you can change the color of the sidebar's background using: data-background-color="white | brown"
            Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
        -->
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                CT
            </a>

            <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                BIO-MED
            </a>
        </div>
        <div class="sidebar-wrapper">
            <div class="user">
                <div class="photo">
                    <img src="../assets/img/faces/face-2.jpg" />
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" class="collapsed">
	                        <span>
								Admin
		                        <b class="caret"></b>
							</span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="sidebar-mini">Mp</span>
                                    <span class="sidebar-normal">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="sidebar-mini">Ep</span>
                                    <span class="sidebar-normal">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="sidebar-mini">S</span>
                                    <span class="sidebar-normal">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
                <li>
                    <a href="adduser.php">
                        <i class="ti-calendar"></i>
                        <p>ADD </p>
                    </a>
                </li>
                <li>
                    <a data-toggle="collapse" href="#dashboardOverview">
                        <i class="ti-panel"></i>
                        <p>User
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="dashboardOverview">
                        <ul class="nav">
                            <li>
                                <a href="adduser.php">
                                    <span class="sidebar-mini">A</span>
                                    <span class="sidebar-normal">ADD</span>
                                </a>
                            </li>
                            <li>
                                <a href="manage.php">
                                    <span class="sidebar-mini">M</span>
                                    <span class="sidebar-normal">Manage</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>



            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">


                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="/logout.php" class="dropdown-toggle btn-magnify" >
                                <i class="ti-panel"></i>
                                <p><b>Logout</b></p>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="container">
                            <fieldset class="card-content">
                                <form method="get" action="adduser.php" class="form-horizontal">
                                    <fieldset>
                                        <div class="form-group">
                                            <label class="col-sm-7 control-label" ><center><p style="font-size: larger" ><H3>Patient Details</H3></p></center></label>

                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">First Name</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" placeholder="Enter the first Name" required type="submit">
                                            </div>
                                            <label class="col-sm-2 control-label">Last Name</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" placeholder="Enter the last Name" required type="submit">
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Address</label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" placeholder="Enter the Address" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <fieldset>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Age</label>
                                                <div class="col-sm-3">
                                                    <input type="number" pattern="3" class="form-control" placeholder="Enter the Age" required type="submit">
                                                </div>
                                                <label class="col-sm-2 control-label">Last Name</label>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" placeholder="Enter the last Name" required type="submit">
                                                </div>
                                            </div>
                                        </fieldset>
                                      <br><label class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-3">
                                            <input type="email"  class="form-control" placeholder="Enter the Email" required type="submit">
                                        </div>
                                        <label class="col-sm-2 control-label">Emergency Contact Name</label>
                                        <div class="col-sm-3">
                                            <input type="text"  class="form-control" placeholder="Emergency person's name" required type="submit">
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <br><label class="col-sm-2 control-label">Patient Ph.No.</label>
                                        <div class="col-sm-3">
                                            <input type="text"  class="form-control" placeholder="Enter the Phone number" required type="submit">
                                        </div>
                                        <label class="col-sm-2 control-label">Emergency Contact Number</label>
                                        <div class="col-sm-3">
                                            <input type="text"  class="form-control" placeholder="Emergency person's number" required type="submit">
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <br><label class="col-sm-2 control-label">Blood Group</label>
                                            <div class="col-sm-2">
                                                    <select class="selectpicker" data-style="btn btn-danger btn-block" title="O+" data-size="3">
                                                        <option class="form-control" value="A+">A+</option>
                                                        <option class="form-control" value="A-">A-</option>
                                                        <option class="form-control" value="B+">B+</option>
                                                        <option class="form-control" value="B-">B-</option>
                                                        <option class="form-control" value="O+">O+</option>
                                                        <option class="form-control" value="O-">O-</option>
                                                        <option class="form-control" value="AB+">AB+</option>
                                                        <option class="form-control" value="AB-">AB-</option>
                                                    </select>

                                            </div>
                                        <label class="col-sm-3 control-label">Relaionship with the patient</label>
                                        <div class="col-sm-3">
                                            <input type="text"  class="form-control" placeholder="Relation" required type="submit">
                                        </div><br>
                                    </fieldset>

                                    <fieldsset>

                                        <script type="text/javascript">
                                            function ShowHideDi(chkPassport) {
                                                var dvPassport = document.getElementById("dvPassport");
                                                dvPassport.style.display = chkPassport.checked ? "block" : "none";
                                            }
                                        </script>
                                        <div class="col-sm-6">
                                            <label for="chkPassport"  >
                                             <br>   <input type="checkbox" id="chkPassport  "onclick="ShowHideDi(this)" />
                                                Has the patient undergone any Operations before?
                                            </label>
                                        <div id="dvPassport" style="display: none">
                                           <div class="col-sm-6">
                                                <br><input type="text" class="form-control" placeholder="Enter the operations" required type="submit">
                                                <input type="text" class="form-control" placeholder="Enter the operations" required type="submit">
                                                <input type="text" class="form-control" placeholder="Enter the operations" required type="submit">
                                            </div>
                                        </div>
                                        </div>
                                        <script type="text/javascript">
                                        function ShowHideDiv(Insurance) {
                                            var insID = document.getElementById("insID");
                                            insID.style.display = Insurance.checked ? "block" : "none";
                                        }
                                    </script>
                                    <div class="col-sm-5">
                                        <br><label for="Insurance" >
                                            <input type="checkbox" id="Insurance  "onclick="ShowHideDiv(this)" />
                                            Has the patient Insured
                                        </label>
                                        <div id="insID" style="display: none">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" placeholder="Enter the Insurance ID" required type="submit">
                                            </div>
                                    </div>
                                    </div>
                                </fieldset><br>
                                    <fieldset>
                                        <div class="form-group">
                                            &nbsp;<label class="col-sm-1 control-label">Patient Summary&nbsp;</label>
                                            <div class="col-sm-8">
                                               <textarea class="form-control" placeholder="Enter the Patient's medical summary" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </fieldset>
<br>
                                <fieldset>
                                <div class="col-xs-5">
                                <button type="submit" class="btn btn-fill btn-info"> Submit</button>
                            </div>
                                </fieldset>
                                </form>
                            </div>

                        </div>  <!-- end card -->
                    </div> <!-- end col-md-12 -->
                </div>
                </div>





            </div>

        </div>
    </div>
</div>

<div class="fixed-plugin">
    <div class="dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
            <li class="header-title">Sidebar Background</li>
            <li class="adjustments-line text-center">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <span class="badge filter badge-brown active" data-color="brown"></span>
                    <span class="badge filter badge-white" data-color="white"></span>
                </a>
            </li>

            <li class="header-title">Sidebar Active Color</li>
            <li class="adjustments-line text-center">
                <a href="javascript:void(0)" class="switch-trigger active-color">
                    <span class="badge filter badge-primary" data-color="primary"></span>
                    <span class="badge filter badge-info" data-color="info"></span>
                    <span class="badge filter badge-success" data-color="success"></span>
                    <span class="badge filter badge-warning" data-color="warning"></span>
                    <span class="badge filter badge-danger active" data-color="danger"></span>
                </a>
            </li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/paper-dashboard?ref=pdp-free-demo" target="_blank" class="btn btn-info btn-block">Get Free Demo</a>
                    <a href="http://www.creative-tim.com/product/paper-dashboard-pro" target="_blank" class="btn btn-danger btn-block btn-fill">Buy for $39</a>
                </div>
            </li>

            <li class="header-title">Thank you for sharing!</li>

            <li class="button-container">
                <button id="twitter" class="btn btn-social btn-twitter btn-round"><i class="fa fa-twitter"></i> </button>
                <button id="facebook" class="btn btn-social btn-facebook btn-round"><i class="fa fa-facebook-square"></i></button>
            </li>

        </ul>
    </div>
</div>

</body>

<!--   Core JS Files. Extra: TouchPunch for touch library inside jquery-ui.min.js   -->
<script src="../assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="../assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="../assets/js/perfect-scrollbar.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Forms Validations Plugin -->
<script src="../assets/js/jquery.validate.min.js"></script>

<!-- Promise Library for SweetAlert2 working on IE -->
<script src="../assets/js/es6-promise-auto.min.js"></script>

<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="../assets/js/moment.min.js"></script>

<!--  Date Time Picker Plugin is included in this js file -->
<script src="../assets/js/bootstrap-datetimepicker.js"></script>

<!--  Select Picker Plugin -->
<script src="../assets/js/bootstrap-selectpicker.js"></script>

<!--  Switch and Tags Input Plugins -->
<script src="../assets/js/bootstrap-switch-tags.js"></script>

<!-- Circle Percentage-chart -->
<script src="../assets/js/jquery.easypiechart.min.js"></script>

<!--  Charts Plugin -->
<script src="../assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="../assets/js/bootstrap-notify.js"></script>

<!-- Sweet Alert 2 plugin -->
<script src="../assets/js/sweetalert2.js"></script>

<!-- Vector Map plugin -->
<script src="../assets/js/jquery-jvectormap.js"></script>

<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFPQibxeDaLIUHsC6_KqDdFaUdhrbhZ3M"></script>

<!-- Wizard Plugin    -->
<script src="../assets/js/jquery.bootstrap.wizard.min.js"></script>

<!--  Bootstrap Table Plugin    -->
<script src="../assets/js/bootstrap-table.js"></script>

<!--  Plugin for DataTables.net  -->
<script src="../assets/js/jquery.datatables.js"></script>

<!--  Full Calendar Plugin    -->
<script src="../assets/js/fullcalendar.min.js"></script>

<!-- Paper Dashboard PRO Core javascript and methods for Demo purpose -->
<script src="../assets/js/paper-dashboard.js?v=1.2.1"></script>

<!--   Sharrre Library    -->
<script src="../assets/js/jquery.sharrre.js"></script>

<!-- Paper Dashboard PRO DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

</html>
