<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
//the importent line in php 
require 'configration.php';

//------------------from the ssesion you can get information about the user------------------
session_start();
if (!isset($_SESSION['id'])) {
    //if the user delete the ssesion it will redirect the user to the login again 
    header("Location:index.html");
    exit();
}

//-----------------to get info about the class----------------- 
if (isset($_GET['ClassID'])) {
    $mysql_info = "SELECT * FROM `class` WHERE id = '" . $_GET['ClassID'] . "';";
    $result_info = mysqli_query($connection, $mysql_info);
    $row_class = mysqli_fetch_assoc($result_info);
    if (!$result_info) {
        echo '<script type="text/JavaScript"> window.alert("Something want wrong!! \n' . mysql_error($connection) . '"); </script>';
    }

//-----------------------------to get trainees list only for the coach and display it-----------------------------
    if ($_SESSION['type'] == 'coach') {
        if ($_GET['Type_Of_Info'] == 'trainees_list') {
            $sql_trainees = "SELECT * FROM `trainee` WHERE id IN (SELECT trainee_id FROM enrolment WHERE class_id = '" . $_GET['ClassID'] . "');";
            $result_trainees = mysqli_query($connection, $sql_trainees);
            if (!$result_trainees) {
                echo '<script type="text/JavaScript"> window.alert("Something want wrong!! \n' . mysql_error($connection) . '"); </script>';
            }
        }
    }
}
?>
<html>

    <head>
        <title>Fitness Class Information</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="image/Logo1.png" type="image/gif" sizes="16x16">
        <link rel="stylesheet" href="home.css">
        <script src="https://kit.fontawesome.com/48735e6971.js" crossorigin="anonymous"></script>
        <script src="javaS/home.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <style>

            /*--------------------- Table --------------*/

            .limiter {
                width: 100%;
                margin: 0 auto;
            }

            .container-table100 {
                width: 100%;
                min-height: 70vh;
                display: -webkit-box;
                display: -webkit-flex;
                display: -moz-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-wrap: wrap;
            }

            .wrap-table100 {
                width: 1170px;
            }
            table {  
                border-spacing: 1;
                border-collapse: collapse;
                background-color: white;
                border-radius: 10px;
                overflow: hidden;
                width: 100%;
                height: 300px;
                margin: 0 auto;
                position: relative;
            }

            table * {
                position: relative;
            }

            table td, table th {
                padding-left: 8px;
            }

            table thead tr {
                height: 60px;
                background: #36304a;
            }

            table tbody tr {
                height: 50px;
                background: #f5f5f5;

            }

            table tbody tr:last-child {
                border: 0;
                background: #f5f5f5;
            }

            table td, table th {
                text-align: left;
            }

            table td.l, table th.l {
                text-align: right;
            }

            table td.c, table th.c {
                text-align: center;
            }

            table td.r, table th.r {
                text-align: center;
            }

            .table100-head th{
                font-family: Roboto, -apple-system, 'Helvetica Neue', 'Segoe UI', Arial, sans-serif;
                font-size: 24px;
                color: #fff;
                line-height: 1.2;
                font-weight: unset;
            }

            tbody tr:nth-child(even) {
                background-color: white;
            }

            tbody tr {
                font-family: Roboto, -apple-system, 'Helvetica Neue', 'Segoe UI', Arial, sans-serif;
                font-size: 18px;
                color: #808080;
                line-height: 1.2;
                background-color:white;
            }

            tbody tr:hover {
                color: #555555;
                background-color: #f5f5f5;
            }

            .column1 {
                width: 260px;
                padding-left: 40px;

            }

            .column2 {
                width: 160px;
            }

            .column3 {
                width: 245px;
            }

            @media screen and (max-width: 992px) {
                table {
                    display: block;
                }
                table > *, table tr, table td, table th {
                    display: block;
                }
                table thead {
                    display: none;
                }
                table tbody tr {
                    height: auto;
                    padding: 37px 0;
                }
                table tbody tr td {
                    padding-left: 40% !important;
                    margin-bottom: 24px;
                }
                table tbody tr td:last-child {
                    margin-bottom: 0;
                }
                table tbody tr td:before {
                    font-family: OpenSans-Regular;
                    font-size: 14px;
                    color: #999999;
                    line-height: 1.2;
                    font-weight: unset;
                    position: absolute;
                    width: 40%;
                    left: 30px;
                    top: 0;
                }
                table tbody tr td:nth-child(1):before {
                    content: "Course";
                }
                table tbody tr td:nth-child(2):before {
                    content: "Status";
                }
                table tbody tr td:nth-child(3):before {
                    content: "";
                }

                .column1,
                .column2,
                .column3 {
                    width: 100%;
                }

                tbody tr {
                    font-size: 14px;
                }
            }

            @media (max-width: 576px) {
                .container-table100 {
                    padding-left: 15px;
                    padding-right: 15px;
                }
            }
            /*>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Lama : Fitness Class Information >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>.*/
            /*--------------title and  Edite button-------------------*/
            svg.Edit{
                margin:  0px 18px;  
            }
            svg.Edit:hover{
                color: #a7e245;
            }
            .Headers{
                text-align:center;
                font-size:230%;
            }

            #E {
                background-color:transparent;
                position:relative;
                padding:2%;
                width:150px;
                padding-bottom:12px;
                padding-top:12px;
                margin:5px;
                margin-left:85%;
            }

            #E:hover {
                transform:scale(1.1);
                transition: 0.2s;
                font-weight: 700px;

            }



            /*-----Drop button------*/


            .button {
                display: block;
                background-color: #c0392b;
                width: 250px;
                height: 83px;
                line-height: 100px;
                margin: auto;
                color: #fff;
                position: relative;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                cursor: pointer;
                overflow: hidden;
                border-radius: 5px;
                box-shadow: 0 0 20px 0 rgba(0, 0, 0, .3);
                transition: all 0.25s cubic-bezier(0.31, -0.105, 0.43, 1.4);
            }
            .button span, .button .icon-Delete {
                display: block;
                height: 100%;
                text-align: center;
                position: absolute;
            }
            .button span {
                width: 72%;
                line-height: inherit;
                font-size: 22px;
                text-transform: uppercase;
                left: 0;
                transition: all 0.25s cubic-bezier(0.31, -0.105, 0.43, 1.4);
            }
            .button span:after {
                content: '';
                background-color: #a53125;
                width: 2px;
                height: 70%;
                position: absolute;
                top: 15%;
                right: -1px;
            }
            .button .icon-Delete{
                width: 28%;
                right: 0;
                transition: all 0.25s cubic-bezier(0.31, -0.105, 0.43, 1.4);
            }
            .button .icon-Delete .fa {
                font-size: 30px;
                vertical-align: middle;
                transition: all 0.25s cubic-bezier(0.31, -0.105, 0.43, 1.4), height 0.25s ease;
            }
            .button .icon-Delete .fa-remove {
                height: 36px;
            }
            .button .icon-Delete .fa-check {
                display: none;
            }
            .button.success span, .button:hover span {
                left: -72%;
                opacity: 0;
            }
            .button.success .icon-Delete, .button:hover .icon-Delete {
                width: 100%;
            }
            .button.success .icon-Delete .fa, .button:hover .icon-Delete .fa {
                font-size: 45px;
            }
            .button.success {
                background-color: #27ae60;
            }
            .button.success .icon-Delete .fa-remove {
                display: none;
            }
            .button.success .icon-Delete .fa-check {
                display: inline-block;
            }
            .button:hover {
                opacity: 0.9;
            }
            .button:hover .icon-Delete .fa-remove {
                height: 46px;
            }
            .button:active {
                opacity: 1;
            }
            /*-----DESCRAPTION CARD-------*/
            .content {
                max-width: 1024px;
                width: 100%;
                padding: 0 4%;
                padding-top: 60px;
                margin: 0 auto;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .card {
                width: 100%;
                max-width: 300px;
                min-width: 200px;
                height: 250px;
                background-color: #3b4465;
                margin: 10px;
                border-radius: 10px;
                box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.24);
                border: 2px solid rgba(7, 7, 7, 0.12);
                font-size: 16px;
                transition: all 0.3s ease;
                position: relative;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                cursor: pointer;
                transition: all 0.3s ease;
            }
            .icon {
                margin: 0 auto;
                width: 100%;
                height: 80px;
                max-width: 80px;
                background: linear-gradient(90deg, #ff7e7e 0%, #ff4848 40%, rgba(0, 0, 0, 0.28) 60%); /* orange #ff9900*/
                border-radius: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                color: white;
                transition: all 0.8s ease;
                background-position: 0px;
                background-size: 200px;
            }
            .material-icons.md-18 {
                font-size: 18px;
            }
            .material-icons.md-24 {
                font-size: 24px;
            }
            .material-icons.md-36 {
                font-size: 36px;
            }
            .material-icons.md-48 {
                font-size: 48px;
            }
            .card .title {
                width: 100%;
                margin: 0;
                text-align: center;
                margin-top: 30px;
                color: white;
                font-weight: 600;
                text-transform: uppercase;
                letter-spacing: 4px;
            }
            .card .text {
                width: 80%;
                margin: 0 auto;
                font-size: 13px;
                text-align: center;
                margin-top: 20px;
                color: white;
                font-weight: 200;
                letter-spacing: 2px;
                opacity: 0;
                max-height: 0;
                transition: all 0.3s ease;
            }
            .card:hover {
                height: 270px;
            }
            .card:hover .info {
                height: 90%;
            }
            .card:hover .text {
                transition: all 0.3s ease;
                opacity: 1;
                max-height: 40px;
            }
            .card:hover .icon {
                background-position: -120px;
                transition: all 0.3s ease;
            }
            .card:hover .icon i {
                background: linear-gradient(90deg, #ff7e7e, #ff4848);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                opacity: 1;
                transition: all 0.3s ease;
            }

            /*----------------------- add/edit form---------------------- //*/
            #edit{
                color:#36304a;
            }

            .button_edit{
                background-color: #a7e245;
                border: 2px solid white;
                border-radius: 30px;
                text-decoration: none;
                padding: 10px 28px;
                color: white;
                margin-top: 10px;
                display: inline-block;
                &:hover {
                    background-color: white;
                    color: #a7e245;
                    border: 2px solid #a7e245;
                }
            }

            .bg-modal_edit , .bg-modal_drop{
                background-color: rgba(0, 0, 0, 0.8);
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
                display: none;
                justify-content: center;
                align-items: center;
            }

            .modal-contents {
                height: 400px;
                width: 500px;
                background-color: white;
                text-align: center;
                padding: 20px;
                position: relative;
                border-radius: 4px;
            }

            input,textarea {
                margin: 15px auto;
                display: block;
                width: 80%;
                padding: 8px;
                border: 1px solid gray;
            }

            .close_edit, .close_drop{
                position: absolute;
                top: 0;
                right: 10px;
                font-size: 42px;
                color: #333;
                transform: rotate(45deg);
                cursor: pointer;
                &:hover {
                    color: #666;
                }
            }

            .button_drop ,.button_no{
                border: 2px solid white;
                border-radius: 30px;
                text-decoration: none;
                padding: 10px 28px;
                color: #3b4465;
                margin-top: 10px;
                display: inline-block;
                &:hover {
                    background-color: white;
                    color: #a7e245;
                    border: 2px solid #a7e245;
                }
            }
            .button_drop{
                background-color: #a7e245;
            }
            .button_no{
                background-color: #FFC107;
            }


            .modal-contents_drop {
                height: 150px;
                width: 250px;
                background-color: white;
                text-align: center;
                padding: 20px;
                position: relative;
                border-radius: 4px;
            }

            /*---------some edited code for the img-----------*/
            header {
                overflow: hidden;
                padding-bottom: 0;
            }


        </style>
    </head>
    <body>
        <!--  class="zoom-me "--> 
        <header class="zoom-me" id="heder">
            <nav class="menu-container">
                <!-- logo -->
                <img src="image/Logo1.png" alt="logo" title="Fitness Logo" class="menu-logo" width="200">
                <!-- menu items -->
                <div class="menu">
                    <ul>
                        <li>
                            <!-- the user name by php  -->
                            <del> <strong >Welcome <?php echo $_SESSION['name']; ?> !</strong></del>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <!--sign out -->
                            <a href="SignOut.php">
                                <svg class="hvr-float" width="30" height="30" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 1C2.44771 1 2 1.44772 2 2V13C2 13.5523 2.44772 14 3 14H10.5C10.7761 14 11 13.7761 11 13.5C11 13.2239 10.7761 13 10.5 13H3V2L10.5 2C10.7761 2 11 1.77614 11 1.5C11 1.22386 10.7761 1 10.5 1H3ZM12.6036 4.89645C12.4083 4.70118 12.0917 4.70118 11.8964 4.89645C11.7012 5.09171 11.7012 5.40829 11.8964 5.60355L13.2929 7H6.5C6.22386 7 6 7.22386 6 7.5C6 7.77614 6.22386 8 6.5 8H13.2929L11.8964 9.39645C11.7012 9.59171 11.7012 9.90829 11.8964 10.1036C12.0917 10.2988 12.4083 10.2988 12.6036 10.1036L14.8536 7.85355C15.0488 7.65829 15.0488 7.34171 14.8536 7.14645L12.6036 4.89645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                                <title>sign out</title>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div id="video">
                <img class="class_image_" height="850" alt="class image" src="data:image;base64,<?php echo $row_class['class_image']; ?>" >
                <!--<img src='' alt="class image"/>-->
                <!--<video height="850"  autoplay  loop><source src="https://cdn.videvo.net/videvo_files/video/free/2019-03/small_watermarked/180419_Boxing_20_15_preview.webm" type="video/mp4"> </video>-->
                <!--<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/927610/pexels-photo-587409.jpeg">-->
            </div>
        </header>
        <!-- the content  -->
        <!-- you can use this class at css or you can change everthing here  -->
        <main>
            <!-- title and  Edite button-->
            <h3 class="Headers" >
                <del style = "--color: var(--del-color, #FFC107);">Fitness Class Information </del>  
                <!-- Edite button only for the coach-->
                <?php
                if ($_SESSION['type'] == 'coach') {
                    ?>
                    <a href="Fitness_class_information.php?ClassID=<?php echo $_GET['ClassID'] . "&Type_Of_Info=" . $_GET['Type_Of_Info']; ?>#" id="edit" >
                        <svg width="50" height="50" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="Edit">
                        <path d="M12.1464 1.14645C12.3417 0.951184 12.6583 0.951184 12.8535 1.14645L14.8535 3.14645C15.0488 3.34171 15.0488 3.65829 14.8535 3.85355L10.9109 7.79618C10.8349 7.87218 10.7471 7.93543 10.651 7.9835L6.72359 9.94721C6.53109 10.0435 6.29861 10.0057 6.14643 9.85355C5.99425 9.70137 5.95652 9.46889 6.05277 9.27639L8.01648 5.34897C8.06455 5.25283 8.1278 5.16507 8.2038 5.08907L12.1464 1.14645ZM12.5 2.20711L8.91091 5.79618L7.87266 7.87267L8.12731 8.12732L10.2038 7.08907L13.7929 3.5L12.5 2.20711ZM9.99998 2L8.99998 3H4.9C4.47171 3 4.18056 3.00039 3.95552 3.01877C3.73631 3.03668 3.62421 3.06915 3.54601 3.10899C3.35785 3.20487 3.20487 3.35785 3.10899 3.54601C3.06915 3.62421 3.03669 3.73631 3.01878 3.95552C3.00039 4.18056 3 4.47171 3 4.9V11.1C3 11.5283 3.00039 11.8194 3.01878 12.0445C3.03669 12.2637 3.06915 12.3758 3.10899 12.454C3.20487 12.6422 3.35785 12.7951 3.54601 12.891C3.62421 12.9309 3.73631 12.9633 3.95552 12.9812C4.18056 12.9996 4.47171 13 4.9 13H11.1C11.5283 13 11.8194 12.9996 12.0445 12.9812C12.2637 12.9633 12.3758 12.9309 12.454 12.891C12.6422 12.7951 12.7951 12.6422 12.891 12.454C12.9309 12.3758 12.9633 12.2637 12.9812 12.0445C12.9996 11.8194 13 11.5283 13 11.1V6.99998L14 5.99998V11.1V11.1207C14 11.5231 14 11.8553 13.9779 12.1259C13.9549 12.407 13.9057 12.6653 13.782 12.908C13.5903 13.2843 13.2843 13.5903 12.908 13.782C12.6653 13.9057 12.407 13.9549 12.1259 13.9779C11.8553 14 11.5231 14 11.1207 14H11.1H4.9H4.87934C4.47686 14 4.14468 14 3.87409 13.9779C3.59304 13.9549 3.33469 13.9057 3.09202 13.782C2.7157 13.5903 2.40973 13.2843 2.21799 12.908C2.09434 12.6653 2.04506 12.407 2.0221 12.1259C1.99999 11.8553 1.99999 11.5231 2 11.1207V11.1206V11.1V4.9V4.87935V4.87932V4.87931C1.99999 4.47685 1.99999 4.14468 2.0221 3.87409C2.04506 3.59304 2.09434 3.33469 2.21799 3.09202C2.40973 2.71569 2.7157 2.40973 3.09202 2.21799C3.33469 2.09434 3.59304 2.04506 3.87409 2.0221C4.14468 1.99999 4.47685 1.99999 4.87932 2H4.87935H4.9H9.99998Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                        <title>Edit</title>
                        </svg>
                    </a>
                    <!-- /Edite button -->
                </h3>

                <?php
            }
            if ($_GET['Type_Of_Info'] == 'info' || $_SESSION['type'] == 'trainee') {
                ?>
                <!-- Descraotion cards only by requst from the cotch and defult for the traineers -->
                <div class="content">
                    <!-- card 1-->
                    <div class="card">

                        <div class="icon"><i class="material-icons md-36">assistant</i></div>
                        <p class="title">Coach Name:</p>
                        <p class="text">
                            <?php
                            //to get the coach name by hes id that related to the class
                            $sql_coach_info = "SELECT * FROM `coach` WHERE id = (SELECT coach_id FROM class WHERE id ='" . $_GET['ClassID'] . "')";
                            $result_coach_info = mysqli_query($connection, $sql_coach_info);
                            if (!$result_coach_info) {
                                echo '<script type="text/JavaScript"> window.alert("Something want wrong!! \n' . mysql_error($connection) . '"); </script>';
                            } else {
                                $row_coach = mysqli_fetch_assoc($result_coach_info);
                                echo $row_coach['name'];
                            }
                            ?></p>

                    </div>
                    <!-- end card 1 -->
                    <!-- card 2 -->
                    <div class="card">

                        <div class="icon"><i class="material-icons md-36">equalizer</i></div>
                        <p class="title"> Level:</p>
                        <p class="text">
                            <?php
                            echo $row_class['level'];
                            ?>
                        </p>

                    </div>
                    <!-- end card 2 -->
                    <!-- card  3-->
                    <div class="card">

                        <div class="icon"><i class="material-icons md-36">chat</i></div>
                        <p class="title">Description:</p>
                        <p class="text"><?php
                            echo $row_class['description'];
                            ?>
                        </p>

                    </div>
                    <!-- end card 3 -->
                </div>
                <!-- /Descraotion cards -->
                <?php
            }
            ?>
            <!-- -----------------------------table only for the coach------------------------------------ -->

            <?php
            if ($_SESSION['type'] == 'coach' && $_GET['Type_Of_Info'] == 'trainees_list') {
                //the table head
                echo '<div class="contained">
                <div class="limiter">
                    <div class="container-table100">
                        <div class="wrap-table100">
                            <div class="table100">
                                <table>
                                    <thead>
                                        <tr class="table100-head">
                                            <th class="column1">Trainee Name</th>
                                            <th class="column2">Email</th>
                                        </tr>
                                    </thead>
                                     <tbody>';
                //the table content 
                if (mysqli_num_rows($result_trainees) == 0) {
                    echo '<tr><td class="column1"> No Trainers yet </td><td class="column2"></td></tr>';
                } else {
                    while ($row = mysqli_fetch_assoc($result_trainees)) {
                        echo
                        ' <tr>'
                        . '<td class="column1">' . $row['name'] . '</td>'
                        . '<td class="column2">' . $row['email'] . '</td>
                     </tr>';
                    }
                }
                //the table end 
                echo '             </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
            }
            //drop button for only the trineers that have enrolled the class
            if ($_SESSION['type'] == 'trainee') {

                $sql_isEnrol = "SELECT * FROM `enrolment` WHERE trainee_id = " . $_SESSION['id'] . ";";
                $result_isEnrol = mysqli_query($connection, $sql_isEnrol);

                if (!$result_isEnrol) {
                    echo '<script type="text/JavaScript"> window.alert("Something want wrong!! \n' . mysql_error($connection) . '"); </script>';
                }
                $row_isEnrol = mysqli_fetch_assoc($result_isEnrol);
                if (!empty($row_isEnrol)) {

                    if ($_GET['ClassID'] == $row_isEnrol['class_id']) {
                        ?>

                        <!------------ Drop button ------------->
                        <a class="button remoove"  id="remoove" role="button" title="Delete the class"  href="Fitness_class_information.php?ClassID=<?php echo $_GET['ClassID'] . "&drop=yes"; ?>" >
                            <span>Drop</span>
                            <div class="icon-Delete">
                                <i class="fa fa-remove"> </i>
                                <i class="fa fa-check"></i>	     
                            </div>
                        </a>
                        <!------------ /Drop button ------------->
                        <?php
                    }
                }
            }

            //drop class - execution 
            if ($_GET['drop'] == 'yes') {
                $ClassID = $_GET['ClassID'];
                $sql_Drop = "DELETE FROM `enrolment` WHERE trainee_id=" . $_SESSION["id"] . " AND class_id =" . $ClassID;
                $result_Drop = mysqli_query($connection, $sql_Drop);
                if ($result_Drop) {
                    header("Location:Trainee_home.php");
                    exit();
                } else {
                    echo '<script type="text/JavaScript"> window.alert("Something want wrong!! \n' . mysql_error($connection) . '"); </script>';
                }
            }
            ?>
            <!-- edit class form -->
            <?php ini_set('file_uploads', 'on') ?>
            <div class="bg-modal_edit"><!---->
                <div class="modal-contents"><!---->

                    <div class="close_edit">+</div><!---->
                    <form  method="POST">
                        <h2><del style = "--color: var(--del-color, #FFC107);">Edit Fitness Class</del></h2>
                        <input type="text" placeholder="Title" required id="title" name="title" value="<?PHP echo $row_class['name']; ?>">
                        <?PHP echo '<input type="number" placeholder="Level" required id="level" name="level" value="' . $row_class['level'] . '">'; ?>        
                        <input type="file" name="image">
                        <textarea id="description" name="description" placeholder="Description" rows="4" cols="50"><?PHP echo $row_class['description']; ?></textarea>
                        <a href="Fitness_class_information.php?ClassID=<?php echo $_GET['ClassID'] . "&Type_Of_Info=" . $_GET['Type_Of_Info']; ?>&edit=yes" class="button_edit">Submit</a>
                    </form>

                </div>
            </div>
            <?php
            //this form show only for the coach and execute onle if you heet the edit button
            //if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if ($_GET['edit'] == 'yes') {
                if (isset($_POST['title']) && isset($_POST['level']) && isset($_POST['description'])) {
                    $Title = $_POST['title'];
                    $Level = $_POST['level'];
                    $Description = $_POST['description'];
                    if ($_FILES['image']['name'] != null) {
                        $image = $_FILES['image']['tmp_name'];
                        $image = base64_encode(file_get_contents($image));
                        $sql_edit = "UPDATE `class` SET `name`='" . $Title . "',`level`=" . $Level . ",`description`='" . $Description . "',`class_image`='" . $image . "' WHERE id =" . $_GET['ClassID'];
                    } else {

                        $sql_edit = "UPDATE `class` SET `name`='" . $Title . "',`level`=" . $Level . ",`description`='" . $Description . "' WHERE id =" . $_GET['ClassID'];
                    }
                    $result_edit = mysqli_query($connection, $sql_edit);
                    echo '1';
                    if (mysqli_connect_errno()) {
                        echo '<script type="text/JavaScript"> window.alert("Something want wrong!! \n' . mysql_error($connection) . '"); </script>';
                    } else {
                        //header("Location:Coach_home.php");
                    }
                } else {
                    echo '2';    
                }
            }
            //  } 
            ?>
            <!-- drop class -->

            <!--<div class="bg-modal_drop">
                <div class="modal-contents_drop">

                    <div class="close_drop">+</div>

                    <form action="">
                        <h2 style ="color: #3b4465;"><del style = "--color: var(--del-color, #FFC107);">Are you sure</del></h2>
                        <a href="..html" class="button_drop">yes</a>
                        <a class="button_no">no</a>
                    </form>

                </div>
            </div>-->
        </main>
        <footer>
            <!-- logo -->
            <img src="image/Logo1.png" alt="logo" title="Fitness Logo" class="menu-logo" width="200">
            <p style="margin-left:20%; margin-left: 20%;font-family: 'Amatic SC', cursive;"><del id="inside-footer">"Fitness is not a destination it is a way of life"</del></p>
            <section class="social">
                <ul>
                    <li>
                        <a href="https://www.youtube.com/user/FitnessBlender" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/user/FitnessBlender" target="_blank">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/user/FitnessBlender" target="_blank">
                            <i class="fab fa-twitter"></i>                    </a>
                    </li>

                </ul>

            </section>


        </footer>
        <div id="copyright">
            &copy; &nbsp; KSU, IT Department.Razan,Lama,Shatha,Yara.
        </div>
        <script>
            /**/
            document.querySelector('#edit').addEventListener("click", function () {
                document.querySelector('.bg-modal_edit').style.display = "flex";
                document.querySelector('#video').style.display = "none";
                document.getElementById("heder").style.paddingBottom = "0%";
            });
//         --------------------show edit form--------------------------


            document.querySelector('.close_edit').addEventListener("click", function () {
                document.querySelector('.bg-modal_edit').style.display = "none";
                document.querySelector('#video').style.display = "flex";
                document.getElementById("heder").style.paddingBottom = "44%";
            });
            document.querySelector('.button_edit').addEventListener("click", function () {

                document.querySelector('.bg-modal_edit').style.display = "none";
                document.querySelector('#video').style.display = "flex";
                document.getElementById("heder").style.paddingBottom = "44%";
            });
///////////////
//drop
            var x = document.getElementById("remoove");

            x.addEventListener("click", function () {
                document.querySelector('.bg-modal_drop').style.display = "flex";
                document.querySelector('#video').style.display = "none";
                document.getElementById("heder").style.paddingBottom = "0%";

                // no
                document.querySelector('.button_no').addEventListener("click", function () {
                    document.querySelector('.bg-modal_drop').style.display = "none";
                    document.querySelector('#video').style.display = "flex";
                    document.getElementById("heder").style.paddingBottom = "44%";
                });
                //yes
                document.querySelector('.button_drop').addEventListener("click", function () {
                    document.querySelector('.bg-modal_drop').style.display = "none";
                    document.querySelector('#video').style.display = "flex";
                    document.getElementById("heder").style.paddingBottom = "44%";
                    //location.replace("Coach_home.html");
                });

                //x
                document.querySelector('.close_drop').addEventListener("click", function () {
                    document.querySelector('.bg-modal_drop').style.display = "none";
                    document.querySelector('#video').style.display = "flex";
                    document.getElementById("heder").style.paddingBottom = "44%";
                });

            });


//            var number = Math.floor(Math.random() * 4); // 0 - 3 
//            switch (number) {
//                case 0:
//                    document.getElementById("video").innerHTML = '<video height="850"  autoplay  loop><source src="https://cdn.videvo.net/videvo_files/video/free/2018-05/small_watermarked/180419_Boxing_13_14_preview.webm" type="video/mp4"> </video>';
//                    document.getElementById("inside-footer").innerHTML = "\" Fitness is not a destination it is a way of life\"";
//                    break;
//                case 1:
//                    document.getElementById("video").innerHTML = '<video height="850"  autoplay  loop><source src="https://cdn.videvo.net/videvo_files/video/free/2019-03/small_watermarked/180419_Boxing_17_10_preview.webm" type="video/mp4"> </video>';
//                    document.getElementById("inside-footer").innerHTML = "\" Push harder today if you want a different tomorrow\"";
//
//                    break;
//                case 2:
//                    document.getElementById("video").innerHTML = '<video height="850"  autoplay  loop><source src="https://cdn.videvo.net/videvo_files/video/free/2018-09/small_watermarked/180419_Boxing_06_01_preview.webm" type="video/mp4"> </video>';
//                    document.getElementById("inside-footer").innerHTML = "\" Push harder today if you want a different tomorrow\"";
//
//                    break;
//                case 3:
//                    document.getElementById("video").innerHTML = '<video height="850"  autoplay  loop><source src="https://cdn.videvo.net/videvo_files/video/free/2019-03/small_watermarked/180419_Boxing_20_15_preview.webm" type="video/mp4"> </video>';
//                    document.getElementById("inside-footer").innerHTML = "\" Fitness is not a destination it is a way of life\"";
//
//                    break;
//                default:
//                    document.getElementById("video").innerHTML = '<video height="850"  autoplay  loop><source src="https://cdn.videvo.net/videvo_files/video/free/2019-03/small_watermarked/180419_Boxing_20_15_preview.webm" type="video/mp4"> </video>';
//                    document.getElementById("inside-footer").innerHTML = "\" Fitness is not a destination it is a way of life\"";
//
//            }
            ;
            (function () {
                var removeSuccess;

                removeSuccess = function () {
                    return $('.button').removeClass('success');
                };

                $(document).ready(function () {
                    return $('.button').click(function () {
                        $(this).addClass('success');
                        return setTimeout(removeSuccess, 3000);
                    });
                });

            }).call(this);





        </script>
    </body>
</html>


