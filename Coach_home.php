<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>

    <head>
        <title>Coach</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="image/Logo1.png" type="image/gif" sizes="16x16">
        <script src="https://kit.fontawesome.com/48735e6971.js" crossorigin="anonymous"></script>
        <script src="javaS/home.js"></script>
        <link rel="stylesheet" href="home.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <style>
            /*--after we finsh we can put this code at an external css file--*/

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


            /*/-------------add class row------------------/*/
            .add_class{
                font-weight: bold;
                border-bottom: 2px solid #3b4465;
            }
            table tbody tr a:hover{
                color: #3b4465;
            }
            table tbody tr a{
                color: #6e6e6e;
            }
            /*            /-------------------------------/*/

            /*----------------------- add/edit form---------------------- //*/

            .add_button, .button_edit{
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

            .bg-modal, .bg-modal_edit{
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

            .close, .close_edit{
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
            /*-----------------------------------edit button-------------------------------------*/



            .edit {
                position: absolute;
                top: 50%;
                left: 80%;
                transform: translate(-50%, -50%);
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
        ?>
        <header class="zoom-me" id="heder">
            <nav class="menu-container">
                <!-- logo -->
                <img src="image/Logo1.png" alt="logo" title="Fitness Logo" class="menu-logo" width="200">
                <!-- menu items -->
                <div class="menu">
                    <ul>
                        <li>
                            <!-- the user name by java  -->
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

                        <div class="icon"><i class="material-icons md-36">star</i></div>
                        <p class="title">Specialty:</p>
                        <p class="text"><?php echo $_SESSION['speciality'] ?></p>

                    </div>
                    <!-- end card 3 -->
                </div>
                <!-- title -->
                <h3 class="Headers" ><del style = "--color: var(--del-color, #FFC107);">Available Fitness Classes </del></h3>
                <!-- /Descraotion cards -->

                <div class="limiter">
                    <div class="container-table100">
                        <div class="wrap-table100">
                            <div class="table100">
                                <table>
                                    <thead>
                                        <tr class="table100-head">
                                            <th class="column1" colspan="3">Course</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if ($_SERVER['REQUEST_METHOD'] == "GET") {
                                            if (isset($_GET['add']) && isset($_GET['title']) && isset($_GET['level']) && isset($_GET['description']) && isset($_GET['image'])) {
                                                $Result = mysqli_query($connection, "SELECT * FROM `class`");
                                                $IDno = mysqli_num_rows($Result);
                                                $IDno++;
                                                $Title = $_GET['title'];
                                                $Level = $_GET['level'];
                                                $Description = $_GET['description'];
                                                $image = $_GET['image'];
                                                $sql = "INSERT INTO `class`(`id`, `coach_id`, `name`, `level`, `description`, `class_image`) VALUES ( $IDno ," . $_SESSION['id'] . " , '" . $Title . "' , $Level , '" . $Description . "' , '" . $image . "' )";
                                                //$result = mysqli_query($connection, $sql);
                                                $result = mysqli_query($connection, $sql);
                                            }
                                            if (isset($_GET['edit']) && isset($_GET['title']) && isset($_GET['level']) && isset($_GET['description']) && isset($_GET['image'])) {

                                                $Title = $_GET['title'];
                                                $Level = $_GET['level'];
                                                $Description = $_GET['description'];
                                                $image = $_FILES['image']['name'];
                                                $sql = "UPDATE INTO `class`(`id`, `coach_id`, `name`, `level`, `description`, `class_image`) VALUES ( $IDno ," . $_SESSION['id'] . " , '" . $Title . "' , $Level , '" . $Description . "' , '" . $image . "' )";
                                                //$result = mysqli_query($connection, $sql);
                                                $result = mysqli_query($connection, $sql);
                                            }
                                        }
                                        $resultclass = mysqli_query($connection, "SELECT * FROM `class`");
                                        while ($row = mysqli_fetch_assoc($resultclass)) {
                                            echo '<tr>
                                        <td class="column1">
                                            <a class="link" href="Fitness_class_information.php?ClassID=' . $row["id"] . '&Type_Of_Info=info">
                                                <span data-content="' . $row["name"] . '"> 
                                                    ' . $row["name"] . '
                                                </span>
                                            </a>
                                        </td>
                                        <td class="column2">
                                            <a  class="link" href="Fitness_class_information.php?ClassID=' . $row["id"] . '&Type_Of_Info=trainees_list">
                                                <span data-content="Display Trainees list"> 
                                                    Display Trainees list
                                                </span>
                                            </a>
                                        </td>
                                        <td class="column3">
                                            <!-- Edite button -->
                                            <a  class="edit" >
                                                <svg width="35" height="35" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="Edit">
                                                <path d="M12.1464 1.14645C12.3417 0.951184 12.6583 0.951184 12.8535 1.14645L14.8535 3.14645C15.0488 3.34171 15.0488 3.65829 14.8535 3.85355L10.9109 7.79618C10.8349 7.87218 10.7471 7.93543 10.651 7.9835L6.72359 9.94721C6.53109 10.0435 6.29861 10.0057 6.14643 9.85355C5.99425 9.70137 5.95652 9.46889 6.05277 9.27639L8.01648 5.34897C8.06455 5.25283 8.1278 5.16507 8.2038 5.08907L12.1464 1.14645ZM12.5 2.20711L8.91091 5.79618L7.87266 7.87267L8.12731 8.12732L10.2038 7.08907L13.7929 3.5L12.5 2.20711ZM9.99998 2L8.99998 3H4.9C4.47171 3 4.18056 3.00039 3.95552 3.01877C3.73631 3.03668 3.62421 3.06915 3.54601 3.10899C3.35785 3.20487 3.20487 3.35785 3.10899 3.54601C3.06915 3.62421 3.03669 3.73631 3.01878 3.95552C3.00039 4.18056 3 4.47171 3 4.9V11.1C3 11.5283 3.00039 11.8194 3.01878 12.0445C3.03669 12.2637 3.06915 12.3758 3.10899 12.454C3.20487 12.6422 3.35785 12.7951 3.54601 12.891C3.62421 12.9309 3.73631 12.9633 3.95552 12.9812C4.18056 12.9996 4.47171 13 4.9 13H11.1C11.5283 13 11.8194 12.9996 12.0445 12.9812C12.2637 12.9633 12.3758 12.9309 12.454 12.891C12.6422 12.7951 12.7951 12.6422 12.891 12.454C12.9309 12.3758 12.9633 12.2637 12.9812 12.0445C12.9996 11.8194 13 11.5283 13 11.1V6.99998L14 5.99998V11.1V11.1207C14 11.5231 14 11.8553 13.9779 12.1259C13.9549 12.407 13.9057 12.6653 13.782 12.908C13.5903 13.2843 13.2843 13.5903 12.908 13.782C12.6653 13.9057 12.407 13.9549 12.1259 13.9779C11.8553 14 11.5231 14 11.1207 14H11.1H4.9H4.87934C4.47686 14 4.14468 14 3.87409 13.9779C3.59304 13.9549 3.33469 13.9057 3.09202 13.782C2.7157 13.5903 2.40973 13.2843 2.21799 12.908C2.09434 12.6653 2.04506 12.407 2.0221 12.1259C1.99999 11.8553 1.99999 11.5231 2 11.1207V11.1206V11.1V4.9V4.87935V4.87932V4.87931C1.99999 4.47685 1.99999 4.14468 2.0221 3.87409C2.04506 3.59304 2.09434 3.33469 2.21799 3.09202C2.40973 2.71569 2.7157 2.40973 3.09202 2.21799C3.33469 2.09434 3.59304 2.04506 3.87409 2.0221C4.14468 1.99999 4.47685 1.99999 4.87932 2H4.87935H4.9H9.99998Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                                                <title>Edit</title>
                                                </svg></a>
                                            <!-- /Edite button -->
                                        </td>
                                    </tr>';
                                        }
                                        ?>
                                        <tr>
                                            <td class="column1" colspan="3">
                                                <a  id="button" class="add_class" >+ Add fitness class</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--add class-->
            <div class="bg-modal">
                <div class="modal-contents">

                    <div class="close">+</div>

                    <form action="Coach_home.php" method="GET">
                        <h2><del style = "--color: var(--del-color, #FFC107);">Add Fitness Class</del></h2>
                        <input type="text" placeholder="Title" required id="title" name="title">
                        <input type="number" placeholder="Level" required id="level" name="level">
                        <input type="file" name="image">
                        <textarea id="description" name="description" placeholder="Description" rows="4" cols="50"></textarea>
                        <input  type="submit" value="Submit" class="add_button">
                        <input type="hidden" value ="add" name="add">
                    </form>
                </div>
            </div>
            <!--/  add class-->
            <!-- edit class -->

            <div class="bg-modal_edit">
                <div class="modal-contents">

                    <div class="close_edit">+</div>
                    <?php ini_set('file_uploads', 'on') ?>
                    <form action="Coach_home.php" method="GET">
                        <h2><del style = "--color: var(--del-color, #FFC107);">Edit Fitness Class</del></h2>
                        <input type="text" placeholder="Title" required id="title" name="title">
                        <input type="number" placeholder="Level" required id="level" name="level">
                        <input type="file" name="image" >
                        <textarea id="description" name="description" placeholder="Description" rows="4" cols="50"></textarea>
                        <input  type="submit" value="Submit" class="button_edit">
                        <input type="hidden" value ="edit" name="edit">
                    </form>

                </div>
            </div>

            <!--/edit class-->
        </main>
        <footer>
            <!-- logo -->
            <img src="image/Logo1.png" alt="logo" title="Fitness Logo" class="menu-logo" width="200">
            <p style="margin-left:20%; margin-left: 20%;font-family: 'Amatic SC', cursive;"><del id="inside-footer"></del></p>

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
            }


            /*
             $(window).scroll(function () {
             var scroll = $(window).scrollTop();
             $(".zoom-me div video").css({
             width: (100 + scroll / 5) + "%",
             top: -(scroll / 10) + "%",
             "-webkit-filter": "blur(" + (scroll / 200) + "px)",
             filter: "blur(" + (scroll / 200) + "px)"
             });
             });
             */
            //           -----------------------------add button form------------------------------------
            document.getElementById('button').addEventListener("click", function () {
                document.querySelector('.bg-modal').style.display = "flex";
                document.querySelector('#video').style.display = "none";
                document.getElementById("heder").style.paddingBottom = "0%";
            });
            //           -----------------------------close the add form------------------------------------
            document.querySelector('.close').addEventListener("click", function () {
                document.querySelector('.bg-modal').style.display = "none";
                document.querySelector('#video').style.display = "flex";
                document.getElementById("heder").style.paddingBottom = "44%";
            });
            //           -----------------------------add class button ------------------------------------     
            //        document.querySelector('.add_button').addEventListener("click", function () {
            ////                take info from form
            //            var t = document.getElementById("title").value;
            //            var l = document.getElementById("level").value;
            //            var d = document.getElementById("description").value;
            //            var tt = document.querySelector('table');
            ////                creat row
            //            var rowCount = tt.rows.length;
            //            var newRow = tt.insertRow(rowCount - 1);
            //            var c1 = newRow.insertCell(0);
            //            var c2 = newRow.insertCell(1);
            //            var c3 = newRow.insertCell(2);
            ////               full the row    
            //            c1.innerHTML = "<span style='color:#fff;'>........</span>" + '<a class="link" href="Fitness_class_information.html"><span data-content="' + t + '">' + t + "</span></a>";
            //            c2.innerHTML = '<a class="link" href="Fitness_class_information.html"><span data-content="Display Trainees list">Display Trainees list</span></a>';
            //            c3.innerHTML = '<a href="#" class="edit" style="left:80%" ><svg width="35" height="35" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="Edit"><path d="M12.1464 1.14645C12.3417 0.951184 12.6583 0.951184 12.8535 1.14645L14.8535 3.14645C15.0488 3.34171 15.0488 3.65829 14.8535 3.85355L10.9109 7.79618C10.8349 7.87218 10.7471 7.93543 10.651 7.9835L6.72359 9.94721C6.53109 10.0435 6.29861 10.0057 6.14643 9.85355C5.99425 9.70137 5.95652 9.46889 6.05277 9.27639L8.01648 5.34897C8.06455 5.25283 8.1278 5.16507 8.2038 5.08907L12.1464 1.14645ZM12.5 2.20711L8.91091 5.79618L7.87266 7.87267L8.12731 8.12732L10.2038 7.08907L13.7929 3.5L12.5 2.20711ZM9.99998 2L8.99998 3H4.9C4.47171 3 4.18056 3.00039 3.95552 3.01877C3.73631 3.03668 3.62421 3.06915 3.54601 3.10899C3.35785 3.20487 3.20487 3.35785 3.10899 3.54601C3.06915 3.62421 3.03669 3.73631 3.01878 3.95552C3.00039 4.18056 3 4.47171 3 4.9V11.1C3 11.5283 3.00039 11.8194 3.01878 12.0445C3.03669 12.2637 3.06915 12.3758 3.10899 12.454C3.20487 12.6422 3.35785 12.7951 3.54601 12.891C3.62421 12.9309 3.73631 12.9633 3.95552 12.9812C4.18056 12.9996 4.47171 13 4.9 13H11.1C11.5283 13 11.8194 12.9996 12.0445 12.9812C12.2637 12.9633 12.3758 12.9309 12.454 12.891C12.6422 12.7951 12.7951 12.6422 12.891 12.454C12.9309 12.3758 12.9633 12.2637 12.9812 12.0445C12.9996 11.8194 13 11.5283 13 11.1V6.99998L14 5.99998V11.1V11.1207C14 11.5231 14 11.8553 13.9779 12.1259C13.9549 12.407 13.9057 12.6653 13.782 12.908C13.5903 13.2843 13.2843 13.5903 12.908 13.782C12.6653 13.9057 12.407 13.9549 12.1259 13.9779C11.8553 14 11.5231 14 11.1207 14H11.1H4.9H4.87934C4.47686 14 4.14468 14 3.87409 13.9779C3.59304 13.9549 3.33469 13.9057 3.09202 13.782C2.7157 13.5903 2.40973 13.2843 2.21799 12.908C2.09434 12.6653 2.04506 12.407 2.0221 12.1259C1.99999 11.8553 1.99999 11.5231 2 11.1207V11.1206V11.1V4.9V4.87935V4.87932V4.87931C1.99999 4.47685 1.99999 4.14468 2.0221 3.87409C2.04506 3.59304 2.09434 3.33469 2.21799 3.09202C2.40973 2.71569 2.7157 2.40973 3.09202 2.21799C3.33469 2.09434 3.59304 2.04506 3.87409 2.0221C4.14468 1.99999 4.47685 1.99999 4.87932 2H4.87935H4.9H9.99998Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path><title>Edit</title></svg></a>';
            ////                close tha add form
            //            document.querySelector('.bg-modal').style.display = "none";
            //            document.querySelector('#video').style.display = "flex";
            //            document.getElementById("heder").style.paddingBottom = "44%";
            //
            //        });//end add class button

            //         --------------------show edit form--------------------------
            var x = document.getElementsByClassName("edit");
            var i;
            for (i = 0; i < x.length; i++) {
                x[i].addEventListener("click", function () {
                    document.querySelector('.bg-modal_edit').style.display = "flex";
                    document.querySelector('#video').style.display = "none";
                    document.getElementById("heder").style.paddingBottom = "0%";
                });
            }
            //            -------------------------close edit form------------------------------
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


        </script>
    </body>
</html>
