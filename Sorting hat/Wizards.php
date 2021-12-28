<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.cdnfonts.com/css/harry-potter" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css"/>
    <title>SortingHat</title>
</head>
<body>

    <?php
        include 'connect.php';   
        ?>


        <table class="datestable">
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Preferred House</th>
                <th>Description</th>
            </tr>
                        
            <?php
                $sql = "SELECT * FROM Users;"; 
                $result = mysqli_query($conn, $sql);  
                $Users = $result->fetch_all(MYSQLI_ASSOC);   
                foreach ($Users as $user)  
                {                     
                    echo "<tr><td>" . $user["User_name"] . "</td><td>" . $user["Age"] . "</td><td>" 
                    . $user["gender"] . "</td><td>" .  $user["pref_house"] . "</td></tr>" .  $user["description"] . "</td></tr>";           
                }        
            ?>        
        <table>      
    </div>
</body>
</html>