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
      <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes" />
      <!-- Favicon icon -->
      <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
      <!-- Google font-->     <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
      <!-- waves.css -->
      <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
      <!-- waves.css -->
      <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
  </head>
  <body>
    <?php 
$servername="localhost";
$username="root";
$password="";
$dbname="mcc";

$conn=mysqli_connect($servername,$username,$password,$dbname);

    $sql="select * from candidate";
    $res = mysqli_query($conn,$sql);
    if(mysqli_num_rows($res) > 0)
    {
        echo "<center> <h3> Candidate Information </h3> </center>";

        
    
    



?>
 <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        
                                                            <?php
                                                            echo "<tr>";
                                                            echo "<th>First name</th>";
                                                            echo "<th>Last name</th>";
                                                            echo "<th>Address</th>";
                                                            echo "<th>DOB</th>";
                                                            echo "<th>Email</th>";
                                                            echo "<th>Mobile</th>";
                                                            echo "<th>UG</th>";
                                                            echo "<th>PG</th>";
                                                            echo "<th>Doctral research</th>";
                                                            echo "<th>Teaching experience</th>";
                                                            echo "<th>Industrial experience</th>";
                                                            echo "<th>Publication</th>";
                                                            echo "<th>Publications</th>";
                                                            echo "<th>chapter</th>";
                                                            echo "<th>Major</th>";
                                                            echo "<th>Minor</th>";
                                                            echo "<th>Employee status</th>";
                                                            echo "<th>Expected renumeration</th>";
                                                            echo "<th>Current renumeration</th>";
                                                            echo "<th>Date of joining</th>";
                                                            echo "<th>File</th>";
                                                            echo "</tr>";
                                                            ?>
                                                        
                                                           <?php
                                                           while($row=mysqli_fetch_assoc($res))
        {
            
            echo '<tr>';
            echo '<td>'.$row['fname'].'</td>';
            echo '<td>'.$row['lname'].'</td>';
            echo '<td>'.$row['address'].'</td>';
            echo '<td>'.$row['dob'].'</td>';
            echo '<td>'.$row['email'].'</td>';
            echo '<td>'.$row['mobile'].'</td>';
            echo '<td>'.$row['ug'].'</td>';
            echo '<td>'.$row['pg'].'</td>';
            echo '<td>'.$row['doct'].'</td>';
            echo '<td>'.$row['teaching'].'</td>';
            echo '<td>'.$row['industry'].'</td>';
            echo '<td>'.$row['pub'].'</td>';
            echo '<td>'.$row['pubs'].'</td>';
            echo '<td>'.$row['chapter'].'</td>';
            echo '<td>'.$row['major'].'</td>';
            echo '<td>'.$row['minor'].'</td>';
            echo '<td>'.$row['emp'].'</td>';
            echo '<td>'.$row['expected'].'</td>';
            echo '<td>'.$row['curent'].'</td>';
            echo '<td>'.$row['doj'].'</td>';
            echo '<td>'.$row['file'].'</td>';
            echo '</tr>';
        }
      }
      ?>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                   
  </body>
<html>

  <center>
  <a href="candidate.php"><button>Back</button></a>
  </center>
  </html>









