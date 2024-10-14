<?php
session_start();
include 'includes/connection.php';
include 'includes/functions.php';
$userid = $_SESSION["userid"];
$role = $_SESSION["role"];
$email = $_SESSION["email"];
if (!$_SESSION) {
    header("location:login/login");
}

$resultz = mysqli_query($conn, "select * from lecturer where email='$email'");
$row = mysqli_fetch_array($resultz);
$sadminid = $row["lec_id"];
$sdept_id = $row["dept_id"];
$sfullname = $row["fullname"];
$sphone = $row["phone"];
$semail = $row["email"];
$results = mysqli_query($conn, "select * from department where dept_id='$sdept_id'");
$rows = mysqli_fetch_array($results);
$did = $rows["dept_id"];
$dname = $rows["dept_name"];
$dcode = $rows["dept_code"];

if (isset($_GET['del'])) {
    $dp_id = $_GET['del'];
    $delete_book = mysqli_query($conn, "delete from lecturer where admin_id = '" . $dp_id . "'");
    if ($delete_book) {
        mysqli_query($conn, "delete from login where login_id = '" . $dp_id . "'");
        echo "<script>alert('Staff deleted succesfully!'); window.location.href='addstudent';</script>";
    } else {
        echo "<script>alert('Delete Operations Unsuccesfully!'); window.location.href='addstudent';</script>";
    }
}

if (isset($_POST["submit"])) {
    $q1 = base64_encode(htmlentities(addslashes($_POST["question1"])));
    $q2 = base64_encode(htmlentities(addslashes($_POST["question2"])));
    $q3 = base64_encode(htmlentities(addslashes($_POST["question3"])));
    $q4 = base64_encode(htmlentities(addslashes($_POST["question4"])));
    $q5 = base64_encode(htmlentities(addslashes($_POST["question5"])));
    $q6 = base64_encode(htmlentities(addslashes($_POST["question6"])));
    $q7 = base64_encode(htmlentities(addslashes($_POST["question7"])));
    $dept = htmlentities(addslashes($_POST["dept"]));
    $course = htmlentities(addslashes($_POST["course"]));
    $level = htmlentities(addslashes($_POST["level"]));
    
    //$stdp = $sdept_id;
    //$get_number = mysqli_num_rows(mysqli_query($conn, "select * from students where year='$stay' and level='$stlevel' and dept_id='$sdept_id' "));
    //$mat_digit = $get_number + 1;
    //$digitLenght = strlen($mat_digit);

    

    

    $insert = mysqli_query($conn, "insert into questionstorage values('','$sadminid','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$dept','$course','$level')") or die(mysqli_error($conn));
    if ($insert) {
        //mysqli_query($conn, "insert into login values('$st_mat_no','$st_mat_no','$st_mat_no','student')") or die(mysqli_error($conn));
        echo "<script>alert('Question Uploaded succesfull!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Question Upload unsuccesfull! pls try after some minutes');</script>";
    }
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title><?php echo $sitename; ?> | Add Questions </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

        <!-- Custom CSS -->
        <link href="css/style.css" rel='stylesheet' type='text/css' />

        <!-- font-awesome icons CSS -->
        <link href="css/font-awesome.css" rel="stylesheet"> 
        <!-- //font-awesome icons CSS-->

        <!-- side nav css file -->
        <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
        <!-- //side nav css file -->

        <!-- js-->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/modernizr.custom.js"></script>

        <!--webfonts-->
        <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
        <!--//webfonts--> 

        <!-- chart -->
        <script src="js/Chart.js"></script>
        <!-- //chart -->

        <!-- Metis Menu -->
        <script src="js/metisMenu.min.js"></script>
        <script src="js/custom.js"></script>
        <link href="css/custom.css" rel="stylesheet">
        <!--//Metis Menu -->
        <style>
            #chartdiv {
                width: 100%;
                height: 295px;
            }
        </style>
        <!--pie-chart --><!-- index page sales reviews visitors pie chart -->
        <script src="js/pie-chart.js" type="text/javascript"></script>
        <script type="text/javascript">

            $(document).ready(function () {
                $('#demo-pie-1').pieChart({
                    barColor: '#2dde98',
                    trackColor: '#eee',
                    lineCap: 'round',
                    lineWidth: 8,
                    onStep: function (from, to, percent) {
                        $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                    }
                });

                $('#demo-pie-2').pieChart({
                    barColor: '#8e43e7',
                    trackColor: '#eee',
                    lineCap: 'butt',
                    lineWidth: 8,
                    onStep: function (from, to, percent) {
                        $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                    }
                });

                $('#demo-pie-3').pieChart({
                    barColor: '#ffc168',
                    trackColor: '#eee',
                    lineCap: 'square',
                    lineWidth: 8,
                    onStep: function (from, to, percent) {
                        $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                    }
                });


            });

        </script>
        <!-- //pie-chart --><!-- index page sales reviews visitors pie chart -->

        <!-- requried-jsfiles-for owl -->
        <link href="css/owl.carousel.css" rel="stylesheet">
        <script src="js/owl.carousel.js"></script>
        <script>
            $(document).ready(function () {
                $("#owl-demo").owlCarousel({
                    items: 3,
                    lazyLoad: true,
                    autoPlay: true,
                    pagination: true,
                    nav: true,
                });
            });
        </script>
        <!-- //requried-jsfiles-for owl -->
    </head> 
    <body class="cbp-spmenu-push">
        <div class="main-content">
            <?php
            include 'includes/sidebar.php';
            ?>
            <!--left-fixed -navigation-->

            <!-- header-starts -->
            <?php
            include 'includes/header.php';
            ?>
            <!-- //header-ends -->
            <!-- main content start-->
            <div id="page-wrapper">
                <div class="main-page">

                    <div class="row widgettable">
                        <div style="width:100%; height: 100%; margin-left:0px;  margin-top: 30px !important;" class="col-md-12 general-grids grids-right widget-shadow">
                            <h4 class="title2">EXAM QUESTIONS</h4>

                            <div style="width:100%; height: 100%;" id="myTabContent" class="tab-content scrollbar1"> 
                                <div role="tabpanel" class="tab-pane fade" id="home" aria-labelledby="home-tab"> 
                                    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
                                        <div class="form-body">

                                            <form action="" method="post" enctype="multipart/form-data"> 

                                                <div class="form-group"> 
                                                    <label for="exampleInputEmail1">Section</label> 
                                                    <select required="" class="form-control" name="st_level">
                                                        <option value="">Select Level</option>
                                                        <option value="ND 1">ND I</option>
                                                        <option value="ND 2">ND II</option>
                                                        <option value="HND 1">HND I</option>
                                                        <option value="HND 2">HND II</option>

                                                    </select>
                                                </div>

                                                <button type="submit" name="show" class="btn btn-default">Show Class</button> 
                                            </form>
                                        </div>
                                    </div>
                                </div> 
                                <div role="tabpanel" class="tab-pane fade active in" id="profile" aria-labelledby="profile-tab"> 
                                    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
                                        <div class="form-body">

                                            <form action="" method="post" enctype="multipart/form-data"> 
                                                <div class="form-group"> 
                                                    <label for="q1">Question 1</label> 
                                                    <input type="text" required="" name="question1" class="form-control" id="exampleInputEmail1" placeholder=""> 
                                                </div>
                                                <div class="form-group"> 
                                                    <label for="q2">Question 2</label> 
                                                    <input type="text" required="" name="question2" class="form-control" id="exampleInputEmail1" placeholder=""> 
                                                </div>
                                                <div class="form-group"> 
                                                    <label for="q3">Question 3</label> 
                                                    <input type="text" required="" name="question3" class="form-control" id="exampleInputEmail1" placeholder=""> 
                                                </div>
                                                <div class="form-group"> 
                                                    <label for="q4">Question 4</label> 
                                                    <input type="text" required="" name="question4" class="form-control" id="exampleInputEmail1" placeholder=""> 
                                                </div>
                                                <div class="form-group"> 
                                                    <label for="q5">Question 5</label> 
                                                    <input type="text" required="" name="question5" class="form-control" id="exampleInputEmail1" placeholder=""> 
                                                </div>
                                                <div class="form-group"> 
                                                    <label for="q6">Question 6</label> 
                                                    <input type="text" required="" name="question6" class="form-control" id="exampleInputEmail1" placeholder=""> 
                                                </div>
                                                <div class="form-group"> 
                                                    <label for="q7">Question 7</label> 
                                                    <input type="text" required="" name="question7" class="form-control" id="exampleInputEmail1" placeholder=""> 
                                                </div>
                                                
                                                <div class="form-group"> 
                                                    <label for="dept">Department</label> 
                                                    <select class="form-control" name="dept">
                                                        <option value="">Select Dept</option>
                                                        <?php
                                                        $res = mysqli_query($conn, "select * from Department");
                                                        $a = 1;
                                                        while ($row1 = mysqli_fetch_array($res)) {
                                                            $sdid = $row1["dept_id"];
                                                            $sdname = $row1["dept_name"];
                                                            $sdcode = $row1["dept_code"];
                                                            ?>
                                                            <option value="<?php echo $sdid ?>"><?php echo $sdname ?></option>
                                                            <?php
                                                        }
                                                        ?>

                                                    </select>
                                                </div>
                                                
                                                <div class="form-group"> 
                                                    <label for="course">Course</label> 
                                                    <select required="" class="form-control" name="course">
                                                        <option value="">Select Course</option>
                                                        <option value="java">Java Programming</option>
                                                        <option value="python">Python Programming</option>
                                                        <option value="php">PHP</option>
                                                        <option value="os">OS</option>

                                                    </select>
                                                </div>
                                                
                                                <div class="form-group"> 
                                                    <label for="level">Level</label> 
                                                    <select required="" class="form-control" name="level">
                                                        <option value="">Select Level</option>
                                                        <option value="NDI">ND I</option>
                                                        <option value="NDII">ND II</option>
                                                        <option value="HNDI">HND I</option>
                                                        <option value="HNDII">HND II</option>

                                                    </select>
                                                </div>
                                                 
                                                <div class="form-group"> 
                                                    <label for="encryption">Encryption Key</label> 
                                                    <input type="password" required="" name="encryption" class="form-control" id="exampleInputEmail1" placeholder="Enter encryption key"> 
                                                </div>
                                                <input type="submit" name="submit" value="Submit Questions" class="btn btn-default"> 
                                            </form> 
                                        </div>
                                    </div>
                                </div> 

                            </div>
                        </div>
                    </div>

                    <!-- for amcharts js -->
                    <script src="js/amcharts.js"></script>
                    <script src="js/serial.js"></script>
                    <script src="js/export.min.js"></script>
                    <link rel="stylesheet" href="css/export.css" type="text/css" media="all" />
                    <script src="js/light.js"></script>
                    <!-- for amcharts js -->

                    <script  src="js/index1.js"></script>

                </div>
            </div>
            <!--footer-->
            <?php
            include 'includes/footer.php';
            ?>
            <!--//footer-->
        </div>

        <!-- new added graphs chart js-->

        <script src="js/Chart.bundle.js"></script>
        <script src="js/utils.js"></script>

        <script>
            var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            var color = Chart.helpers.color;
            var barChartData = {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                        label: 'Dataset 1',
                        backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                        borderColor: window.chartColors.red,
                        borderWidth: 1,
                        data: [
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor()
                        ]
                    }, {
                        label: 'Dataset 2',
                        backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
                        borderColor: window.chartColors.blue,
                        borderWidth: 1,
                        data: [
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor()
                        ]
                    }]

            };

            window.onload = function () {
                var ctx = document.getElementById("canvas").getContext("2d");
                window.myBar = new Chart(ctx, {
                    type: 'bar',
                    data: barChartData,
                    options: {
                        responsive: true,
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Chart.js Bar Chart'
                        }
                    }
                });

            };

            document.getElementById('randomizeData').addEventListener('click', function () {
                var zero = Math.random() < 0.2 ? true : false;
                barChartData.datasets.forEach(function (dataset) {
                    dataset.data = dataset.data.map(function () {
                        return zero ? 0.0 : randomScalingFactor();
                    });

                });
                window.myBar.update();
            });

            var colorNames = Object.keys(window.chartColors);
            document.getElementById('addDataset').addEventListener('click', function () {
                var colorName = colorNames[barChartData.datasets.length % colorNames.length];
                ;
                var dsColor = window.chartColors[colorName];
                var newDataset = {
                    label: 'Dataset ' + barChartData.datasets.length,
                    backgroundColor: color(dsColor).alpha(0.5).rgbString(),
                    borderColor: dsColor,
                    borderWidth: 1,
                    data: []
                };

                for (var index = 0; index < barChartData.labels.length; ++index) {
                    newDataset.data.push(randomScalingFactor());
                }

                barChartData.datasets.push(newDataset);
                window.myBar.update();
            });

            document.getElementById('addData').addEventListener('click', function () {
                if (barChartData.datasets.length > 0) {
                    var month = MONTHS[barChartData.labels.length % MONTHS.length];
                    barChartData.labels.push(month);

                    for (var index = 0; index < barChartData.datasets.length; ++index) {
                        //window.myBar.addData(randomScalingFactor(), index);
                        barChartData.datasets[index].data.push(randomScalingFactor());
                    }

                    window.myBar.update();
                }
            });

            document.getElementById('removeDataset').addEventListener('click', function () {
                barChartData.datasets.splice(0, 1);
                window.myBar.update();
            });

            document.getElementById('removeData').addEventListener('click', function () {
                barChartData.labels.splice(-1, 1); // remove the label first

                barChartData.datasets.forEach(function (dataset, datasetIndex) {
                    dataset.data.pop();
                });

                window.myBar.update();
            });
        </script>
        <!-- new added graphs chart js-->

        <!-- Classie --><!-- for toggle left push menu script -->
        <script src="js/classie.js"></script>
        <script>
            var menuLeft = document.getElementById('cbp-spmenu-s1'),
                    showLeftPush = document.getElementById('showLeftPush'),
                    body = document.body;

            showLeftPush.onclick = function () {
                classie.toggle(this, 'active');
                classie.toggle(body, 'cbp-spmenu-push-toright');
                classie.toggle(menuLeft, 'cbp-spmenu-open');
                disableOther('showLeftPush');
            };


            function disableOther(button) {
                if (button !== 'showLeftPush') {
                    classie.toggle(showLeftPush, 'disabled');
                }
            }
        </script>
        <!-- //Classie --><!-- //for toggle left push menu script -->

        <!--scrolling js-->
        <script src="js/jquery.nicescroll.js"></script>
        <script src="js/scripts.js"></script>
        <!--//scrolling js-->

        <!-- side nav js -->
        <script src='js/SidebarNav.min.js' type='text/javascript'></script>
        <script>
            $('.sidebar-menu').SidebarNav()
        </script>
        <!-- //side nav js -->



        <!-- Bootstrap Core JavaScript -->
        <script src="js/data-table.js"></script>
        <script src="js/datatable/datatables.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <!-- //Bootstrap Core JavaScript -->

    </body>
</html>