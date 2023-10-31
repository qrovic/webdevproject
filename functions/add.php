<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
</head>
<body>
    <?php
        include_once("../dbConnection/mysqliconfig_connection.php");

        if(isset($POST['Submit'])){
            $code=$_POST['code']
            $name=$_POST['name']
        
            if(empty($code) || empty($name)){
                if(empty($code)){
                    echo "<font color='red'> Subject Code filed is empty.</font><br/>";
                }
                if(empty($name)){
                    echo "<font color='red'> Subject Name filed is empty.</font><br/>";
                }
                
                echo "<br/><a href='javascript:self.history.back();'>Go back</a>";
                
            }
            else{
                $result=mysqli_query($dbc, "INSERT INTO tblsubject(subject_code, subject_name) VALUES ('$code','$name')");
                echo "<font color='green'> Data added successfully.";
                echo "<br/><a href='../index.php'>View Result</a>";
            }
        }
    ?>
</body>
</html>