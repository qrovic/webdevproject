<?php
    include_once("../dbConnection/mysqlconfig_connection.php");
    $id=$_get['id'];

    mysqli_query($dbc,"DELETE FROM tblsubject WHERE subject_id='$id'");
    header("location:../index.php")