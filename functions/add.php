<?php
    include_once("../dbConnections/mysqlconfig_connection.php");

    if(isset($_POST['submit'])){ 
        $code = $_POST['code']; 
        $name = $_POST['name'];

        if(empty($code) || empty($name)){
            if(empty($code)){
                echo "<font color='red'> Subject Code field is empty.</font><br/>";
            }
            if(empty($name)){
                echo "<font color='red'> Subject Name field is empty.</font><br/>";
            }
            
            echo "<br/><a href='javascript:self.history.back();'>Go back</a>";
            
        }
        else{
            $result = mysqli_query($dbc, "INSERT INTO tblsubjects(subject_code, subject_name) VALUES ('$code','$name')");
            if($result) {
                echo "<font color='green'> Data added successfully.</font>";
                echo "<br/><a href='../index.php'>View Results</a>";
            } else {
                echo "<font color='red'> Error: " . mysqli_error($dbc) . "</font>";
            }
    
        }
    }
?>
