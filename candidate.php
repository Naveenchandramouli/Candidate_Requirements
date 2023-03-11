
<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="mcc";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST["submit"]))
{
$submit=$_POST["submit"];

if(strcmp($submit,"Submit")==0)
{
$name=$_POST["name"];
$address=$_POST["address"];
$dob=$_POST["dob"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$ug=$_POST["ug"];
$pg=$_POST["pg"];
$doct=$_POST["doct"];
$teaching=$_POST["teaching"];
$industry=$_POST["indus"];
$pub=$_POST["pub"];
$pubs=$_POST["pubs"];
$chapter=$_POST["chapter"];
$major=$_POST["major"];
$minor=$_POST["minor"];
$emp=$_POST["emp"];
$expected=$_POST["expected"];
$curent=$_POST["curent"];
$doj=$_POST["doj"];
$lname=$_POST["lname"];

$file=$_FILES['file'];

$fileName=$_FILES['file']['name'];
$fileTmpName=$_FILES['file']['tmp_name'];
$fileSize=$_FILES['file']['size'];
$fileError=$_FILES['file']['error'];
$fileType=$_FILES['file']['type'];
$fileExt=explode('.',$fileName);
$fileActualExt=strtolower(end($fileExt));
$allowed=array('jpg','jpeg','png','pdf');



if(in_array($fileActualExt,$allowed))
{
    if($fileError === 0)
    {
        if($fileSize<1000000)
        {
            $sql="insert into candidate(fname,lname,address,dob,email,mobile,ug,pg,doct,teaching,industry,pub,pubs,chapter,major,minor,emp,curent,expected,doj,file) values('$name','$lname','$address','$dob','$email','$mobile','$ug','$pg','$doct','$teaching','$industry','$pub','$pubs','$chapter','$major','$minor','$emp','$curent','$expected','$doj','$fileName')";
            mysqli_query($conn,$sql);
            $fileNameNew = uniqid('',true).".".$fileActualExt;
            $fileDestination='uploads/'.$fileNameNew;
            move_uploaded_file($fileTmpName,$fileDestination);
            echo '<script> alert("Inserted"); </script>';
        }
        else
        {
            echo '<script> alert("Your file is to big") </script>';
        }
    }
    else
    {
        echo '<script> alert("There was an error uploading your file!") </script>';
    }
}
else
{
    echo '<script> alert("you cannot upload this type of file"); </script>';
}

}

if(strcmp($_POST["submit"],"Action")==0)
{
    header("location:action.php");
}




}
?>









<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mega Able bootstrap admin template by codedthemes </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">

</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
 
    <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">
          <nav class="navbar header-navbar pcoded-header">
              <div class="navbar-wrapper">
                  <div class="navbar-logo">
                      <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                          <i class="ti-menu"></i>
                      </a>
                      <div class="mobile-search waves-effect waves-light">
                          <div class="header-search">
                              <div class="main-search morphsearch-search">
                                  <div class="input-group">
                                      <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                      <input type="text" class="form-control" placeholder="Enter Keyword">
                                      <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a href="index.html">
                          <img class="img-fluid" src="assets/images/mcc.png" alt="Theme-Logo" width="80" height="175"/>
                      </a>
                      
                      <a class="mobile-options waves-effect waves-light">
                          <i class="ti-more"></i>
                      </a>
                  </div>
                  
                  <div class="navbar-container container-fluid">
                      <ul class="nav-Center">
                      
                          
                      </ul>
                      <ul class="nav-right">
                      <li>
                          <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                      </li>
                      <li class="header-search">
                          <div class="main-search morphsearch-search">
                              <div class="input-group">
                                  <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                  <input type="text" class="form-control">
                                  <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                              </div>
                          </div>
                      </li>
                      <li>
                          <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                              <i class="ti-fullscreen"></i>
                          </a>
                      </li>
                          <li class="user-profile header-notification">
                              <a href="#!" class="waves-effect waves-light">
                                  <img src="assets/images/photo.jpeg" class="img-radius" alt="User-Profile-Image" width="80" height="50">
                                  <span>Naveenchandramouli</span>
                                  <i class="ti-angle-down"></i>
                              </a>
                              <ul class="show-notification profile-notification">
                                  
                                  <li class="waves-effect waves-light">
                                      <a href="user-profile.php">
                                          <i class="ti-user"></i> Profile
                                      </a>
                                  </li>
                                
                                  <li class="waves-effect waves-light">
                                      <a href="auth-lock-screen.php">
                                          <i class="ti-lock"></i> Lock Screen
                                      </a>
                                  </li>
                                  <li class="waves-effect waves-light">
                                      <a href="auth-normal-sign-in.php">
                                          <i class="ti-layout-sidebar-left"></i> Logout
                                      </a>
                                  </li>
                              </ul>
                          </li>
                      </ul>
                  </div>
              </div>
          </nav>

          <div class="pcoded-main-container">
              <div class="pcoded-wrapper">
                  <nav class="pcoded-navbar">
                      <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                      <div class="pcoded-inner-navbar main-menu">
                          <div class="">
                              <div class="main-menu-header">
                                  <img class="img-80 img-radius" src="assets/images/photo.jpeg" alt="User-Profile-Image">
                                  <div class="user-details">
                                      <span id="more-details">Naveenchandramouli<i class="fa fa-caret-down"></i></span>
                                  </div>
                              </div>
        
                              <div class="main-menu-content">
                                  <ul>
                                      <li class="more-details">
                                          <a href="user-profile.php"><i class="ti-user"></i>View Profile</a>
                                          <a href="#!"><i class="ti-settings"></i>Settings</a>
                                          <a href="auth-normal-sign-in.php"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                      </li>
                                  </ul>
                              </div>
                          </div>



                            <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Layout</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="index.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                        <span class="pcoded-mtext"
                                            data-i18n="nav.basic-components.main">Components</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="accordion.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.alert">Accordion</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="breadcrumb.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Breadcrumbs</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="button.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.alert">Button</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="tabs.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Tabs</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="color.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.alert">Color</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="label-badge.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Label Badge</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="tooltip.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.alert">Tooltip</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="typography.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Typography</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="notification.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.alert">Notification</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-themify.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Themify</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                            
                            <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Forms</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li class="active">
                                  <a href="candidate.php" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Candidate Form</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
        
                          </ul>
        
                          <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Chart &amp; Maps</div>
                          <ul class="pcoded-item pcoded-left-item">
                              
                              <li class="pcoded-hasmenu">
                                  <a href="javascript:void(0)" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                      <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Pages</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                                  <ul class="pcoded-submenu">
                                      <li class=" ">
                                          <a href="auth-normal-sign-in.php" class="waves-effect waves-dark">
                                              <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                              <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Login</span>
                                              <span class="pcoded-mcaret"></span>
                                          </a>
                                      </li>
                                      <li class=" ">
                                          <a href="auth-sign-up.php" class="waves-effect waves-dark">
                                              <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                              <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Register</span>
                                              <span class="pcoded-mcaret"></span>
                                          </a>
                                      </li>
                                      
                                  </ul>
                              </li>
        
                          </ul>
        
                          <div class="pcoded-navigation-label" data-i18n="nav.category.other">Other</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li class="pcoded-hasmenu ">
                                  <a href="javascript:void(0)" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-direction-alt"></i><b>M</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.menu-levels.main">Menu Levels</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                                  <ul class="pcoded-submenu">
                                      <li class="">
                                          <a href="javascript:void(0)" class="waves-effect waves-dark">
                                              <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                              <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-21">Menu Level 2.1</span>
                                              <span class="pcoded-mcaret"></span>
                                          </a>
                                      </li>
                                      <li class="pcoded-hasmenu ">
                                          <a href="javascript:void(0)" class="waves-effect waves-dark">
                                              <span class="pcoded-micon"><i class="ti-direction-alt"></i></span>
                                              <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-22.main">Menu Level 2.2</span>
                                              <span class="pcoded-mcaret"></span>
                                          </a>
                                          <ul class="pcoded-submenu">
                                              <li class="">
                                                  <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                      <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                      <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-22.menu-level-31">Menu Level 3.1</span>
                                                      <span class="pcoded-mcaret"></span>
                                                  </a>
                                              </li>
                                          </ul>
                                      </li>
                                      <li class="">
                                          <a href="javascript:void(0)" class="waves-effect waves-dark">
                                              <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                              <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-23">Menu Level 2.3</span>
                                              <span class="pcoded-mcaret"></span>
                                          </a>
                                      </li>
                
                                  </ul>
                              </li>
                          </ul>
                      </div>
                  </nav>
                  <div class="pcoded-content">

                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <!-- Page body start -->


                                    <!-- Input Alignment card start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Candidate Form</h5>
                                            <span>
                                                
                                                No.of Candidate:
                                                <?php
                                                $servername="localhost";
                                                $username="root";
                                                $password="";
                                                $dbname="mcc";
                                                
                                                $conn=mysqli_connect($servername,$username,$password,$dbname);
                                                $sql="select id from candidate order by id";
                                                $res=mysqli_query($conn,$sql);
                                                $num=mysqli_num_rows($res);
                                                echo $num;
                                                ?>

                                                </span>

                                        </div>
                                        <div class="card-block">

                                        





                                            <script>
                                                function validateForm()
                                                 {
                                                    var name=document.myform.name.value;
                                                    var lname=document.myform.lname.value;
                                                    var address=document.myform.address.value;
                                                    var email= document.myform.email.value;
                                                    var dob=document.myform.dob.value;
                                                    var mobile=document.myform.mobile.value;
                                                    var doct=document.myform.doct.value;
                                                    var teaching=document.myform.teaching.value;
                                                    var industrial=document.myform.indus.value;
                                                    var pub=document.myform.pub.value;
                                                    var pubs=document.myform.pubs.value;
                                                    var chapter=document.myform.chapter.value;
                                                    var major=document.myform.major.value;
                                                    var minor=document.myform.minor.value;
                                                    var emp=document.myform.emp.value;
                                                    var curent=document.myform.curent.value;
                                                    var expected=document.myform.expected.value;
                                                    var doj=document.myform.doj.value;
                                                    var file=document.myform.file.value;
                                                    var atpos=email.indexOf("@");
                                                    var dotpos=email.lastIndexOf(".");

                                                        if(name=="")
                                                        {
                                                            alert("Name can't be empty");
                                                            document.myform.name.focus();
                                                            return false;
                                                        }
                                                        if(lname=="")
                                                        {
                                                            alert("last name can't be empty");
                                                            document.myform.lname.focus();
                                                            return false;
                                                        }
                                                        else if(address=="")
                                                        {
                                                            alert("Address can't be empty");
                                                            document.myform.address.focus();
                                                            return false;
                                                        }
                                                        else if(dob=="")
                                                        {
                                                            alert("dob can't be empty");
                                                            document.myform.dob.focus();
                                                            return false;
                                                        }
                                                        else if(email=="")
                                                        {
                                                            alert("email can't be empty");
                                                            document.myform.email.focus();
                                                            return false;
                                                        }
                                                        else if(atpos<1 || (dotpos-atpos<2))
                                                        {
                                                            alert("Please enter correct email");
                                                            document.myform.email.focus();
                                                            return false;
                                                        }
                                                        else if(mobile=="")
                                                        {
                                                            alert("Mobile cant't be empty");
                                                            document.myform.mobile.focus();
                                                            return false;
                                                        }
                                                        else if(isNaN(mobile))
                                                        {
                                                            alert("Enter valid number");
                                                            document.myform.mobile.focus();
                                                            return false;
                                                        }
                                                        else if(document.getElementById("r1").checked==false && document.getElementById("r2").checked==false)
                                                        {
                                                            alert("Select the ug");
                                                            return false;
                                                        }
                                                        else if(document.getElementById("r3").checked==false && document.getElementById("r4").checked==false)
                                                        {
                                                            alert("Select the pg");
                                                            return false;
                                                        }
                                                        else if(doct=="")
                                                        {
                                                            alert("Doctral research cant't be empty");
                                                            document.myform.doct.focus();
                                                            return false;
                                                        }
                                                        else if(teaching=="")
                                                        {
                                                            alert("Teaching experience cant't be empty");
                                                            document.myform.teaching.focus();
                                                            return false;
                                                        }
                                                        else if(industrial=="")
                                                        {
                                                            alert("Industrail experience cant't be empty");
                                                            document.myform.indus.focus();
                                                            return false;
                                                        }
                                                        else if(pub=="")
                                                        {
                                                            alert("Publication cant't be empty");
                                                            document.myform.pub.focus();
                                                            return false;
                                                        }
                                                        else if(pubs=="")
                                                        {
                                                            alert("Publication cant't be empty");
                                                            document.myform.pubs.focus();
                                                            return false;
                                                        }
                                                        else if(chapter=="")
                                                        {
                                                            alert("Chapter cant't be empty");
                                                            document.myform.chapter.focus();
                                                            return false;
                                                        }
                                                        else if(major=="")
                                                        {
                                                            alert("Major project cant't be empty");
                                                            document.myform.major.focus();
                                                            return false;
                                                        }
                                                        else if(minor=="")
                                                        {
                                                            alert("Minor project cant't be empty");
                                                            document.myform.minor.focus();
                                                            return false;
                                                        }
                                                        else if(emp=="")
                                                        {
                                                            alert("Employee status cant't be empty");
                                                            document.myform.emp.focus();
                                                            return false;
                                                        }
                                                        else if(curent=="")
                                                        {
                                                            alert("Current renumeration cant't be empty");
                                                            document.myform.curent.focus();
                                                            return false;
                                                        }
                                                        else if(isNaN(curent))
                                                        {
                                                            alert("Current renumeration cant't be string");
                                                            document.myform.curent.focus();
                                                            return false;
                                                        }
                                                        else if(expected=="")
                                                        {
                                                            alert("Expected renumeration cant't be empty");
                                                            document.myform.expected.focus();
                                                            return false;
                                                        }
                                                        else if(isNaN(expected))
                                                        {
                                                            alert("Expected renumeration cant't be string");
                                                            document.myform.expected.focus();
                                                            return false;
                                                        }
                                                        else if(doj=="")
                                                        {
                                                            alert("Date of joining cant't be empty");
                                                            document.myform.doj.focus();
                                                            return false;
                                                        }
                                                    }

                                                
                                            </script>
                                            <style>
                                                b
                                                {
                                                    color:darkred;
                                                }
                                                </style>
                                           
                                            <form name="myform" method="post" action="" enctype="multipart/form-data" autocomplete="on">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">First Name <b>&nbsp*</b></label>
                                             
                                                    <div class="col-sm-10">
                                                        <input type="text" name="name"
                                                            class="form-control form-control-normal"
                                                            placeholder="Enter your first Name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Last Name <b>&nbsp*</b></label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="lname"
                                                            class="form-control form-control-normal"
                                                            placeholder="Enter your last name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Communication Address <b>&nbsp*</b></label>
                                                    <div class="col-sm-10">
                                                        <textarea name="address"
                                                            class="form-control form-control-normal"
                                                            placeholder="Enter your communication address">
                                                        </textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">DOB <b>&nbsp*</b></label>
                                                    <div class="col-sm-10">
                                                        <input type="date" name="dob"
                                                            class="form-control form-control-normal"
                                                            placeholder="DD/MM/YYYY">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Email Address <b>&nbsp*</b></label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="email"
                                                            class="form-control form-control-normal"
                                                            placeholder="Enter your Email address" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Mobile Number <b>&nbsp*</b></label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="mobile"
                                                            class="form-control form-control-normal"
                                                            placeholder="Enter your mobile number" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">UG <b>&nbsp*</b></label>
                                                    <div class="col-sm-10">
                                                        <input type="radio" name="ug" id="r1" value="Regular">Regular
                                                        <input type="radio" name="ug" id="r2" value="Distance">Distance

                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">PG <b>&nbsp*</b></label>
                                                    <div class="col-sm-10">
                                                        <input type="radio" name="pg" id="r3" value="Regular">Regular
                                                        <input type="radio" name="pg" id="r4" value="Distance">Distance
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Doctral Research <b>&nbsp*</b></label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="doct"
                                                            class="form-control form-control-normal"
                                                            placeholder="Doctral research information" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Teaching Experience <b>&nbsp*</b></label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="teaching"
                                                            class="form-control form-control-normal"
                                                            placeholder="Teaching Experience" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Industrial Experience <b>&nbsp*</b></label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="indus"
                                                            class="form-control form-control-normal"
                                                            placeholder="Industrial experience">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Publications <b>&nbsp*</b></label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="pub"
                                                            class="form-control form-control-normal"
                                                            placeholder="Publications in peer reviewed indexed journals"
                                                            >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Publications <b>&nbsp*</b></label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="pubs"
                                                            class="form-control form-control-normal"
                                                            placeholder="Publications in ugc care listed journals"
                                                            >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Chapters <b>&nbsp*</b></label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="chapter"
                                                            class="form-control form-control-normal"
                                                            placeholder="Chapters or books published" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Major Projects <b>&nbsp*</b></label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="major"
                                                            class="form-control form-control-normal"
                                                            placeholder="Major projects">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Minor Projects <b>&nbsp*</b></label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="minor"
                                                            class="form-control form-control-normal"
                                                            placeholder="Minor projects" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Employment status<b>&nbsp*</b></label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="emp"
                                                            class="form-control form-control-normal"
                                                            placeholder="Enter your Employment status">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Current Remuneration <b>&nbsp*</b></label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="curent"
                                                            class="form-control form-control-normal"
                                                            placeholder="Current remuneration">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Expected Remuneration <b>&nbsp*</b></label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="expected"
                                                            class="form-control form-control-normal"
                                                            placeholder="Expected remuneration">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Date of Joining <b>&nbsp*</b></label>
                                                    <div class="col-sm-10">
                                                        <input type="date" name="doj"
                                                            class="form-control form-control-normal"
                                                            placeholder="DD/MM/YYYY">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Upload your CV <b>&nbsp*</b></label>
                                                    <div class="col-sm-10">
                                                    <input type="file" name="file">

                                                    </div>
                                                </div>
                                        </div>
                                        <div class="form-group row">

                                            <div class="col-sm-10">
                                                <center>
                                                    <input type="submit" name="submit" value="Submit" onclick="return validateForm()">
                                                </center>
                                                <br>
                                                <br>
                                                <br>
                                                <center>
                                                   <h6>Admin Login - <input type="submit" name="submit" value="Action"></h6>
                                                </center>
                                            </div>
                                        </div>
                                        
                                        </form>
                                    </div>
                                </div>
                                <!-- Input Alignment card end -->



                                <!-- Warning Section Starts -->
                                <!-- Older IE warning message -->
                                <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers
        to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
                                <!-- Warning Section Ends -->
                                <!-- Required Jquery -->
                                <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
                                <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
                                <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
                                <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
                                <!-- jquery slimscroll js -->
                                <script type="text/javascript"
                                    src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
                                <!-- waves js -->
                                <script src="assets/pages/waves/js/waves.min.js"></script>

                                <!-- modernizr js -->
                                <script type="text/javascript" src="assets/js/SmoothScroll.js"></script>
                                <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
                                <!-- Custom js -->
                                <script src="assets/js/pcoded.min.js"></script>
                                <script src="assets/js/vertical-layout.min.js "></script>
                                <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
                                <script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>