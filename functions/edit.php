<?php
    include_once("../dbConnection/mysqlconfig_connection.php");
    if (isset($post['update'])){
        $id = $_POST['id'];
        $id = $_POST['code'];
        $id = $_POST['name'];

        if(empty($code) || empty($name)){
            if(empty($code)){
                echo "<font color='red'> Subject Code filed is empty.</font><br/>";
            }
            if(empty($name)){
                echo "<font color='red'> Subject Name filed is empty.</font><br/>";
            }
        }
        else{
            mysqli_query($dbc, "UPDATE tblsubject SET subject_code='$code, subject_name='$name' WHERE subject_id='$id'");
            header("Location: ../index.php");
        }
    }
?>
        