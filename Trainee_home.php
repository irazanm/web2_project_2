<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title>Trainee</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="image/Logo1.png" type="image/gif" sizes="16x16">
        <link rel="stylesheet" href="home.css">
        <script src="https://kit.fontawesome.com/48735e6971.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <style>
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

            /*-----------------------------------Table--------------------------------------*/

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
                background: white;
                border-radius: 10px;
                overflow: hidden;
                width: 100%;
                height: 300px;
                margin: 0 auto;
                position: relative;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            }

            table * {
                position: relative;
            }

            table td,
            table th {
                padding-left: 8px;
            }

            table thead tr {
                height: 60px;
                background: #36304a;
            }

            table tbody tr {
                height: 50px;
            }

            table tbody tr:last-child {
                border: 0;
            }

            table td,
            table th {
                text-align: left;
            }

            table td.l,
            table th.l {
                text-align: right;
            }

            table td.c,
            table th.c {
                text-align: center;
            }

            table td.r,
            table th.r {
                text-align: center;
            }

            .table100-head th {
                font-family: Roboto, -apple-system, 'Helvetica Neue', 'Segoe UI', Arial, sans-serif;
                font-size: 24px;
                color: #fff;
                line-height: 1.2;
                font-weight: unset;
            }

            tbody tr:nth-child(even) {
                background-color: #f5f5f5;
            }

            tbody tr {
                font-family: Roboto, -apple-system, 'Helvetica Neue', 'Segoe UI', Arial, sans-serif;
                font-size: 18px;
                color: #808080;
                line-height: 1.2;
                font-weight: unset;
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

            /*            @media screen and (max-width: 992px) {
                            table {
                                display: block;
                            }
                            table>*,
                            table tr,
                            table td,
                            table th {
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
                        }*/

            @media (max-width: 576px) {
                .container-table100 {
                    padding-left: 15px;
                    padding-right: 15px;
                }
            }
            /*--Drop button--*/
            .outer {
                position: relative;
                margin: auto;
                width: 25px;
                margin-top: 0px;
                cursor: pointer;
            }

            .inner  {
                width: inherit;
                text-align: right;
            }

            label { 
                font-size: .7em; 
                line-height: 4em;
                color: #fff;
                transition: all .3s ease-in;
                opacity: 0;
                cursor: pointer;
            }

            .inner:before, .inner:after {
                position: absolute;
                content: '';
                height: 1.5px;
                width: inherit;
                background: #FFC107;
                left: 0;
                transition: all .3s ease-in;
            }

            .inner:before {
                top: 50%; 
                transform: rotate(45deg);  
            }

            .inner:after {  
                bottom: 50%;
                transform: rotate(-45deg);  
            }

            .outer:hover label {
                opacity: 1;
            }

            .outer:hover .inner:before,
            .outer:hover .inner:after {
                transform: rotate(0);
            }

            .outer:hover .inner:before {
                top: 0;
            }

            .outer:hover .inner:after {
                bottom: 0;
            }
            input{
                font-size:18px;
                background-color:transparent ;
                color:#FFC107;
                border:none;
            }

            h3{
                font-size: 24px;
            }
            /*-------------------------------*/
            table tbody tr:last-of-type{
                border-bottom: 2px solid #3b4465;
            }
            /*-------------------------------*/

            /*----class link----*/

            .link {
                position: relative;
                transition: clip-path 275ms ease;
            }
            .link:hover span::before, 
            .link:focus span::before {
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
            }
            span {
                position: relative;
                display: inline-block;
                color: #999999;
            }
            span::before {
                position: absolute;
                content: attr(data-content);
                text-decoration: underline;
                text-decoration-color: #FFC107;
                clip-path: polygon(0 0, 0 0, 0% 100%, 0 100%);
                transition: clip-path 275ms ease;
            }
            /*----------------------- add/edit form---------------------- //*/

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

            .bg-modal_drop{
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
                height: 150px;
                width: 250px;
                background-color: white;
                text-align: center;
                padding: 20px;
                position: relative;
                border-radius: 4px;
            }


            .close_drop{
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
        </style>
    </head>
    <body>
        <?php
        //from the ssesion you can get information about the user
        session_start();
        if (!isset($_SESSION['id'])) {
            //if the user delete the ssesion it will redirect the user to the login again 
            header("Location:index.html");
            exit();
        }
        //connection 
        require 'configration.php';

        //Trainee edits
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            //drop class
            if (isset($_GET['Drop'])) {
                $ClassID = $_GET['Drop'];
                $sqlC = "DELETE FROM `enrolment` WHERE trainee_id=" . $_SESSION["id"] . " AND class_id =" . $ClassID;
                $resultDelete = mysqli_query($connection, $sqlC);
            }
            //insert new enrollment row
            if (isset($_GET['Enroll'])) {
                $sql = "SELECT * FROM `enrolment` WHERE trainee_id=" . $_SESSION["id"] . " AND class_id=" . $_GET['Enroll'];
                $result = mysqli_query($connection, $sql);
                $sql1 = "SELECT id + 1 AS gap FROM `enrolment` mo WHERE NOT EXISTS(SELECT NULL FROM `enrolment` mi WHERE mi.id = mo.id + 1)ORDER BY id";
                $result1 = mysqli_query($connection, $sql1);
                $row = mysqli_fetch_assoc($result1);
                //check if already enrolled or not
                $exist = mysqli_num_rows($result);
                if ($exist == 0) {
                    $classid = $_GET['Enroll'];
                    $sql = "INSERT INTO `enrolment`(`id`,`trainee_id`, `class_id`) VALUES (" . $row["gap"] . "," . $_SESSION["id"] . "," . $classid . ")";
                    $result = mysqli_query($connection, $sql);
                }
            }
        }
        ?>
        <header class="zoom-me" id ="heder">
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
                                <svg class="hvr-float" width="80" height="30" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 1C2.44771 1 2 1.44772 2 2V13C2 13.5523 2.44772 14 3 14H10.5C10.7761 14 11 13.7761 11 13.5C11 13.2239 10.7761 13 10.5 13H3V2L10.5 2C10.7761 2 11 1.77614 11 1.5C11 1.22386 10.7761 1 10.5 1H3ZM12.6036 4.89645C12.4083 4.70118 12.0917 4.70118 11.8964 4.89645C11.7012 5.09171 11.7012 5.40829 11.8964 5.60355L13.2929 7H6.5C6.22386 7 6 7.22386 6 7.5C6 7.77614 6.22386 8 6.5 8H13.2929L11.8964 9.39645C11.7012 9.59171 11.7012 9.90829 11.8964 10.1036C12.0917 10.2988 12.4083 10.2988 12.6036 10.1036L14.8536 7.85355C15.0488 7.65829 15.0488 7.34171 14.8536 7.14645L12.6036 4.89645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                                <title>sign out</title>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div id="video">

            </div>
        </header>
        <!-- the content  -->
        <!-- you can use this class at css or you can change everthing here  -->
        <main>
            <div class="contained">
                <!-- Descraotion cards -->
                <div class="content">
                    <!-- card 1-->
                    <div class="card">
                        <div class="icon"><i class="material-icons md-36">account_circle</i></div>
                        <p class="title">UserName:</p>
                        <p class="text"><?php echo $_SESSION['username']; ?></p>
                    </div>
                    <!-- end card 1 -->
                    <!-- card 2 -->
                    <div class="card">
                        <div class="icon"><i class="material-icons md-36">alternate_email</i></div>
                        <p class="title"> email:</p>
                        <p class="text"><?php echo $_SESSION['email']; ?> </p>
                    </div>
                    <!-- end card 2 -->
                    <!-- card  3-->
                    <div class="card">
                        <div class="icon"><i class="material-icons md-36">run_circle</i></div>
                        <p class="title">How many classes available:</p>
                        <p class="text">
                            <?php
                            //you have to send qury to get the num of the coureses 
                            //i think it will use count(*) at the qeury
                            $result = mysqli_query($connection, "SELECT * FROM class");
                            $row = mysqli_num_rows($result);
                            echo $row;
                            ?></p>
                    </div>
                    <!-- end card 3 -->
                </div>
                <!-- /Descraotion cards -->
                <h3><del style = "--color: var(--del-color, #FFC107);">Available Fitness Classes</del></h3>
                <div class="limiter">
                    <div class="container-table100">
                        <div class="wrap-table100">
                            <div class="table100">
                                <table id="table">
                                    <thead>
                                        <tr class="table100-head">
                                            <th class="column1">Course</th>
                                            <th class="column2">Status</th>
                                            <th class="column3"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        //Display Enrolled First
                                        $sql = "SELECT * FROM `class` WHERE id IN (SELECT class_id FROM `enrolment` WHERE trainee_id =" . $_SESSION['id'] . ")";
                                        $resultclass = mysqli_query($connection, $sql);
                                        while ($row = mysqli_fetch_assoc($resultclass)) {
                                            echo "<tr>
                                                <td class='column1'>
                                                    <a class='link' href='Fitness_class_information.php?ClassID=" . $row["id"] . "'>
                                                        <span data-content='" . $row["name"] . "'>" .
                                            $row["name"]
                                            . "</span>
                                                    </a>
                                                </td>
                                                <td class='column2'>
                                                    Enrolled
                                                </td>
                                                <td class='column3'>
                                                    <!-- Drop button -->
                                                    <div class='outer'>
                                                        <div class='inner'>
                                                            <form method='GET' action='Trainee_home.php'>
                                                            <label>
                                                                <input type='submit' value ='Drop' class='drop'>
                                                                <input type='hidden' value ='" . $row["id"] . "' name='Drop'>
                                                            </label>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!-- /Drop button -->
                                                </td>
                                                </tr>";
                                        }
                                        //Display Enroll
                                        $sqlc = "SELECT * FROM `class` WHERE id NOT IN (SELECT class_id FROM `enrolment` WHERE trainee_id =" . $_SESSION['id'] . ")";
                                        $classresult = mysqli_query($connection, $sqlc);
                                        While ($Crow = mysqli_fetch_assoc($classresult)) {
                                            echo "<tr>
                                                <td class='column1'>
                                                    <a class='link' href='Fitness_class_information.php?ClassID=" . $Crow["id"] . "'>
                                                        <span data-content='" . $Crow["name"] . "'>" .
                                            $Crow["name"]
                                            . "</span>
                                                    </a>
                                                </td>
                                                <td class='column2'>
                                                    <a class='link' href='Trainee_home.php?Enroll=" . $Crow["id"] . "'> 
                                                        <span data-content='Enroll'> 
                                                            Enroll
                                                        </span>
                                                    </a>
                                                </td>
                                                <td class='column3'>
                                                </td>
                                                </tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                            <i class="fab fa-twitter"></i>    
                        </a>
                    </li>
                </ul>
            </section>
        </footer>
        <div id="copyright">
            &copy; &nbsp; KSU, IT Department.Razan,Lama,Shatha,Yara.
        </div>
        <script>
            //it simple keep it. 
            //unless you will add an extra code , add this to an external file with your code and save it at javaS folder
            var number = Math.floor(Math.random() * 4); // 0 - 3 
            switch (number) {
                case 0:
                    document.getElementById("video").innerHTML = '<video height="850"  autoplay  loop><source src="https://cdn.videvo.net/videvo_files/video/free/2018-05/small_watermarked/180419_Boxing_13_14_preview.webm" type="video/mp4"> </video>';
                    document.getElementById("inside-footer").innerHTML = "\" Fitness is not a destination it is a way of life\"";
                    break;
                case 1:
                    document.getElementById("video").innerHTML = '<video height="850"  autoplay  loop><source src="https://cdn.videvo.net/videvo_files/video/free/2019-03/small_watermarked/180419_Boxing_17_10_preview.webm" type="video/mp4"> </video>';
                    document.getElementById("inside-footer").innerHTML = "\" Push harder today if you want a different tomorrow\"";

                    break;
                case 2:
                    document.getElementById("video").innerHTML = '<video height="850"  autoplay  loop><source src="https://cdn.videvo.net/videvo_files/video/free/2018-09/small_watermarked/180419_Boxing_06_01_preview.webm" type="video/mp4"> </video>';
                    document.getElementById("inside-footer").innerHTML = "\" Push harder today if you want a different tomorrow\"";

                    break;
                case 3:
                    document.getElementById("video").innerHTML = '<video height="850"  autoplay  loop><source src="https://cdn.videvo.net/videvo_files/video/free/2019-03/small_watermarked/180419_Boxing_20_15_preview.webm" type="video/mp4"> </video>';
                    document.getElementById("inside-footer").innerHTML = "\" Fitness is not a destination it is a way of life\"";

                    break;
                default:
                    document.getElementById("video").innerHTML = '<video height="850"  autoplay  loop><source src="https://cdn.videvo.net/videvo_files/video/free/2019-03/small_watermarked/180419_Boxing_20_15_preview.webm" type="video/mp4"> </video>';
                    document.getElementById("inside-footer").innerHTML = "\" Fitness is not a destination it is a way of life\"";

            }
        </script>
    </body>
</html>