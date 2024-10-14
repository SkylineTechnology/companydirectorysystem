<?php
session_start();
include 'includes/connection.php';
include 'includes/functions.php';
$userid = $_SESSION["userid"];
$role = $_SESSION["role"];
$lec_id = isset($_GET["id"]) ? $_GET["id"] : "";
if (!$_SESSION) {
    header("location:login/login");
}

$result = mysqli_query($conn, "select * from cloud_storage where lec_id='$lec_id'");
$row = mysqli_fetch_array($result);

$lec_id = $row["lec_id"];
$sdept_id = $row["dept"];
$q1 = $row["q1"];
$resultx = mysqli_query($conn, "select * from department where dept_id='$sdept_id'");
$rowz = mysqli_fetch_array($resultx);
$did = $rowz["dept_id"];
$dname = $rowz["dept_name"];
$dcode = $rowz["dept_code"];
$q2 = $row["q2"];
$q3 = $row["q3"];
$q4 = $row["q4"];
$q5 = $row["q5"];
$q6 = $row["q6"];
$q7 = $row["q7"];
$cse = $row["course"];
$level = $row["level"];
$date = date("d-m-Y");

?>
<!DOCTYPE HTML>
<html>
    <head>
        <title><?php echo $sitename; ?> | Students Details </title>
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
            
            .question h4{
                font-weight: bolder;
                font-size: 22px
            }
            
            .question hr{
                border: 1px solid black;
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
                            <div class="question">
                            <h4 class="title2" align="center">NIGERIAN ARMY COLLEGE OF ENVIRONMENTAL SCIENCE AND TECHNOLOGY</h4>
                            <h4 class="title2" align="center">DEPARTMENT OF <?php echo strtoupper($dname) ?></h4>
                            <h4 class="title2" align="center">FIRST SEMESTER EXAMINATION 2022/2023</h4>
                            <h4 class="title2" align="center">COM 313: <?php echo strtoupper($cse) ?> <?php echo strtoupper($level) ?> <?php echo strtoupper($date) ?> TIME ALLOWED: 3HRS</h4>
                            <h4 class="title2" align="center">INSTRUCTIONS: ATTEMPT ANY FIVE (5) QUESTION, ATTACHED IS THE CONVERSION TABLE.</h4>
                            <hr />
                            </div>
                           
                          

                            <div style="width:100%; height: 100%;" id="myTabContent" class="tab-content scrollbar1"> 
                                
                                <div>
                                    <label>1)</label>
                                    <p><?php echo base64_decode($q1) ?></p>
                                </div>
                                
                                <div>
                                    <label>2)</label>
                                    <p><?php echo base64_decode($q2) ?></p>
                                </div>
                                
                                <div>
                                    <label>3)</label>
                                    <p><?php echo base64_decode($q3) ?></p>
                                </div>
                                
                                <div>
                                    <label>4)</label>
                                    <p><?php echo base64_decode($q4) ?></p>
                                </div>
                                
                                <div>
                                    <label>5)</label>
                                    <p><?php echo base64_decode($q5) ?></p>
                                </div>
                                
                                <div>
                                    <label>6)</label>
                                    <p><?php echo base64_decode($q6) ?></p>
                                </div>
                                
                                <div>
                                    <label>7)</label>
                                    <p><?php echo base64_decode($q7) ?></p>
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