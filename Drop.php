<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'configration.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
            //drop class
            if (isset($_POST['Drop']) && isset($_POST['ID'])) {
                $ClassID = $_POST['Drop'];
                $TraineeID = $_POST['ID'];
                $sqlC = "DELETE FROM `enrolment` WHERE trainee_id=" . $TraineeID . " AND class_id =" . $ClassID;
                $resultDelete = mysqli_query($connection, $sqlC);
            }
}
?>