<?php
    function createProjectTable(){
    include('connectDB.php');
    $user = $_GET['user'];
    while($row = $result->fetch_assoc()){
        //Turns users into array for in_array
        $userCheck = explode(", ",$row['users']);

        //Creates table based on user passed
        if(in_array($user,$userCheck)){
            echo "<tr>";
            echo "<td>". $row['proj_name'] . "</td>";
            echo "<td>". $row['users'] ."</td>";
            echo "<td>". $row['est_hours'] ."</td>";
            echo '<td> <button type="button">View</button> </td>';
            echo "</tr>";            
            }
        }
    }
?>