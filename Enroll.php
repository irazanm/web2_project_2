<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    require 'configration.php';
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        //insert new enrollment row
        if (isset($_POST['Enroll'])&& isset($_POST['ID'])) {
            $classid = $_POST['Enroll'];
            $TraineeID = $_POST['ID'];
            $sql = "SELECT * FROM `enrolment`";
            $r = mysqli_num_rows(mysqli_query($connection, $sql));
            if($r == 0){
                $sql = "INSERT INTO `enrolment`(`id`,`trainee_id`, `class_id`) VALUES (1," . $TraineeID . "," . $classid . ")";
                $result = mysqli_query($connection, $sql);
            }
            else{
                $sql = "SELECT * FROM `enrolment` WHERE trainee_id=" . $TraineeID . " AND class_id=" . $classid;
                $result = mysqli_query($connection, $sql);
                $sql1 = "SELECT id + 1 AS gap FROM `enrolment` mo WHERE NOT EXISTS(SELECT NULL FROM `enrolment` mi WHERE mi.id = mo.id + 1)ORDER BY id";
                $result1 = mysqli_query($connection, $sql1);
                $row = mysqli_fetch_assoc($result1);
                //check if already enrolled or not
                $exist = mysqli_num_rows($result);
                if ($exist == 0) {
                    $sql = "INSERT INTO `enrolment`(`id`,`trainee_id`, `class_id`) VALUES (" . $row["gap"] . "," . $TraineeID . "," . $classid . ")";
                    $result = mysqli_query($connection, $sql);
                }
            }
        }
    }
?>
