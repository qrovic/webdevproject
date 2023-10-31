<?php
    include_once("../dbConnections/mysqlconfig_connection.php");
    $id=$_GET['id'];

    mysqli_query($dbc,"DELETE FROM tblsubjects WHERE subject_id='$id'");
    header("location:../index.php")
?>