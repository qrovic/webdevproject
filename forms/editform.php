<?php
    include_once("../dbConnection/mysqlconfig_connection.php");
    $id=$get['id'];
    $result=mysqli_query($dbc,"SELECT * FROM tblsubject WHERE subject_id=$id");
    while($res=mysqli_fetch_array($result)){
        $code=$res['subject_code'];
        $name=$res['subject_name'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Subject</title>
</head>
<body>
    <h1>Edit Data</h1>
    <a href="../index.php">Home</a>
    <br/><br/>
    <form action="../functions/edit.php" method="post" name="form1">
        <table>
            <tr>
                <td>Subject Code</td>
                <td><input type="text" name="code" value="<?php echo $code;?>"></td>
            </tr>
            <tr>
                <td>Subject Name</td>
                <td><input type="text" name="name" value="<?php echo $name;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="name" value="<?php echo $_GET['id'];?>"></td>
                <td><input type="submit" name="submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>
</html>