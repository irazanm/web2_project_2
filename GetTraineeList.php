<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'configration.php';
if (isset($_POST['Show'])) {
        $sql_trainees = "SELECT * FROM `trainee` WHERE id IN (SELECT trainee_id FROM enrolment WHERE class_id = " . $_POST['Show'] . ");";
        $result_trainees = mysqli_query($connection, $sql_trainees);
        if (!$result_trainees) {
            echo '<script type="text/JavaScript"> window.alert("Something want wrong!! \n' . mysql_error($connection) . '"); </script>';
        }
        $count = 0;
        while($row = mysqli_fetch_assoc($result_trainees)){
                $myObj[]=$row;
                $count++;
            }
        if($count == 0){
            print_r("0");
            header('Content-Type: text/plain');
        }else{
            print_r(json_encode($myObj));
            header('Content-Type: text/plain');
        }
    }
?>
