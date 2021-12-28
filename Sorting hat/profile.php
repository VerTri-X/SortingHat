<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>SortingHat</title>
    </head>
    <body>       

    <?php
         include 'connect.php';     

            $first_name = mysqli_real_escape_string($conn, $_POST['firstname']);
            $last_name = mysqli_real_escape_string($conn, $_POST['lastname']);
            $age = mysqli_real_escape_string($conn, $_POST['age']);
            $gender = mysqli_real_escape_string($conn, $_POST['gender']);
            $preferredhouse = mysqli_real_escape_string($conn, $_POST['pref_house']);
            $description = mysqli_real_escape_string($conn, $_POST['description']);

            $sql = "INSERT INTO Users (Name, Age, gender, pref_house, description) VALUES ('$first_name $last_name','$age','$gender', '$preferredhouse','$description')";    
            if(mysqli_query($conn, $sql)){
                echo " ";
            } else{
                echo "✖" . mysqli_error($conn);
            }   
        ?>
    </body>
</html>