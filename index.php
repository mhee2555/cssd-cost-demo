<?php
session_start();
date_default_timezone_set("Asia/Bangkok");

// if (!isset($_SESSION['userData'])) {
//     header("location:login.php");
//     exit(0);
// }


// $Url = "https://phc.dyndns.biz/api/unit-cost-test";
// $Url = "http://10.11.9.5:4001";
// $Url = "http://localhost:4001";
$Url = "https://phc.dyndns.biz/api/unit-cost/";


$page = isset($_GET['page']) ? $_GET['page'] : 'depreciation-machine';
?>
<!DOCTYPE html>
<html lang="en">
<title> COST CSSD </title>

<head>
    <?php include_once('import/css.php'); ?>

    <style>
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            right: 0;
            background-color: #ffff;
            overflow-x: hidden;
            transition: 0.5s;
        }

        .overlay3 {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 999;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.9);
            overflow-y: auto;
            overflow-x: hidden;
            text-align: center;
            opacity: 0;
            transition: opacity 1s;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }

        .bold {
            font-weight: bold;
        }



        body {
            font-family: 'Noto Sans Thai', sans-serif;
            transition: background-color .5s;
        }

        ะ .sidebar-dark .nav-item .nav-link {
            color: black;
            font-weight: bold;
        }

        label {
            color: black;
            /* font-weight: bold; */
        }

        table {
            color: black;
            /* font-weight: bold; */
        }


        .sidebar-dark .nav-item.active .nav-link {
            color: #4e73df !important;
        }

        label {
            font-size: 20px;
        }

        input[type="radio"] {
            width: 20px;
            height: 18px;
        }

        th {
            position: sticky;
            top: 0;
        }
    </style>
</head>

<body id="page-top" class="sidebar-toggled">
    <div id="wrapper">

        <?php require("pages/layout/menu.php"); ?>



        <div id="content-wrapper" class="d-flex flex-column">

            <?php require("pages/layout/header.php"); ?>


            <!-- Main Content -->
            <div id="content ">
                <div class="container-fluid mt-3">



                    <?php include('pages/menu/' . $page . '.php'); ?>

                </div>
            </div>

            <!-- <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer> -->

        </div>








    </div>


    <?php include_once('import/js.php'); ?>

    <script>
        // var userId = sessionStorage.getItem("userId");
        // if(userId==null){
        //     window.location.href = "login.php";
        // }

        $(function() {
            var page = '<?php echo $page; ?>';

            $(`#li_${page}`).addClass("active");
            $(`ul .active`).css("background", "linear-gradient(130.25deg, #154FEF 36.87%, #4C83FF 100%)");



        });

        $(document).ready(function() {

        });
    </script>
    <?php include_once('script-function/' . $page . '.php'); ?>
</body>

</html>