<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>Patient Treatment Register</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="bootstrap/js/html5shiv.js"></script>
    <script src="bootstrap/js/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target="#topnav">

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="images/hotr_logo_web.p" alt="HOTR logo" /> </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                   <!-- <li role="presentation" class="active"><a href="index.php">HOME</a></li>    
                    <li role="presentation" ><a href="upload.php">UPLOAD</a></li>-->
            </ul>
        </div>
        <!--/.navbar-collapse -->
    </div>
</div>

<?php
                    //processing form for errors
                    error_reporting(0);
                    $generalErr =$success ="";
                    include('connection.php');
                    
                    if($_SERVER['REQUEST_METHOD']=='POST')
                    {

                        // form validation using an included function

                        $name = mysqli_real_escape_string($dbc,trim($_POST['name']));
                        $dateOfBirth = mysqli_real_escape_string($dbc,trim($_POST['dateOfBirth']));
                        $gender =mysqli_real_escape_string($dbc,trim($_POST['gender']));
                        $doctor = mysqli_real_escape_string($dbc,trim($_POST['doctor']));
                        $complaint = mysqli_real_escape_string($dbc,trim($_POST['complaint']));    
                        $examination = mysqli_real_escape_string($dbc,trim($_POST['examination']));
                        $diagnosis = mysqli_real_escape_string($dbc,trim($_POST['diagnosis']));
                        $treatment = mysqli_real_escape_string($dbc,trim($_POST['treatment']));
                        
                       if(!empty($name) && !empty($dateOfBirth) && !empty($complaint) && !empty($examination) && !empty($diagnosis) && !empty($treatment))
                       {
                        mysqli_query($dbc, "INSERT INTO tbl_patientregister(name,dateOfBirth,gender,complaint,examination,diagnosis,treatment,doctor) 
                                            VALUES('$name','$dateOfBirth','$gender','$complaint','$examination','$diagnosis','$treatment','$doctor')");
                        $registered = mysqli_affected_rows($dbc);
                        $success = "Entry successfully submitted";
                       }else{
                        $generalErr="You left some values in blank.Please complete all fields.";
                       }
                        
                    }
                       
                    mysqli_close($dbc);
                    ?>



<?php include('connection.php');?>



<section class="contact" id="contact">

    <div class="container">

        <div class="row">
<h3><span class="error"><?php echo $generalErr;?></span></h3>
                <h3><span><?php echo $success;?></span></h3>
                <h2 class="short"><strong>Patient</strong> Treatment Register</h2>
                
                <form class="clearfix" accept-charset="utf-8" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-7 form-group">
                                <label for="name">Name</label>
                                <span class="error">*</span>
                                <input type="text" placeholder="" name="name" id="name" 
                                value="<?php echo $name;?>"
                                       class="form-control input-lg"/>
                            </div>

                            <div class="col-sm-5 form-group">
                                <label for="dateOfBirth">Date Of Birth</label>
                                <span class="error">*</span>
                                <input type="date" placeholder="" name="dateOfBirth" id="dateOfBirth"
                                value="<?php echo $dateOfBirth;?>"
                                       class="form-control input-lg" >
                            </div>

                    
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="complaint">Complaint</label>
                                <span class="error">*</span>
                                <textarea rows="4" name="complaint" id="complaint" class="form-control"><?php echo $complaint;?></textarea>
                            </div>
                        </div>

                         <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="examination">Examination</label>
                                <span class="error">*</span>
                                <textarea rows="4" name="examination" id="examination" class="form-control"><?php echo $examination;?></textarea>
                            </div>
                        </div>
                    </div>
            <div class="col-md-offset-1 col-md-5">
                          
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                    <label for="gender">Gender</label>
                                    <select class="form-control input-lg" name="gender" id="gender">
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                    </select>
                
                                    </div>
                                
                                <div class="col-sm-6 form-group">
                                    <label for="doctor">Doctor on Duty</label>
                                    <select class="form-control input-lg" name="doctor" id="doctor">
                                        <option value="doctor 1">doctor 1</option>
                                        <option value="doctor 2">doctor 2</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 form-group">
                                        <label for="diagnosis">Diagnosis</label>
                                        <span class="error">*</span>
                                        <textarea rows="4" name="diagnosis" id="diagnosis" class="form-control"><?php echo $diagnosis; ?></textarea>
                                    </div>
                                </div>

                                 <div class="row">
                                    <div class="col-sm-12 form-group">
                                        <label for="treatment">Treatment</label>
                                        <span class="error">*</span>
                                        <textarea rows="4" name="treatment" id="treatment" class="form-control"><?php echo $treatment; ?></textarea>
                                    </div>
                                </div>

                        </div>
                        <button class="btn btn-success btn-xlg " type="submit">SUBMIT ENTRY</button>
                        <a  class="btn btn-success btn-xlg " href="index.php">ADD NEW ENTRY</a>
                </form>
        </div>

    </div>

</section>

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="footer-ribbon" style="right: 0">
                <h3 class="title" style="margin: 0;padding: 5px 10px">Thank <span>You</span></h3>
            </div>

        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <a class="logo" href="index.php">
                        <img src="images/hotr_logo_web.p" alt="HOTR logo">
                    </a>
                </div>
                <div class="col-md-5">
                    <p>&copy; Copyright 2015 by HOTR Medical Team. All Rights Reserved.</p>
                </div>
                <div class="col-md-5">
                    <nav id="footer-menu">
                        <ul>
                            <li><a href="#">FAQ's</a></li>
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
