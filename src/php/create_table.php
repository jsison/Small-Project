<?php
    //Project list table creation
    function createProjectTable(){
        include('connectDB.php');
        session_start();
        $user = $_GET['user'];

        //Add form to pass project name and variable
        while($row = $result->fetch_assoc()){
            //Turns users into array for in_array
            $userCheck = explode(", ",$row['users']);

            //Creates table based on user passed
            if(in_array($user,$userCheck)){
                $proj[] = $row['proj_name'];
                $est_hours[] = $row['est_hours'];
                echo "<tr>";
                echo "<td>". $row['proj_name'] . "</td>";
                echo "<td>". $row['users'] ."</td>";
                echo "<td>". $row['est_hours'] ."</td>";
                echo '<td> <a href="tasklist.php?est_hours='.$row['est_hours'].'>View</td>';
                echo "</tr>";         
            }
        }
        $_SESSION['proj'] = $proj;
        $_SESSION['hours'] = $est_hours;
    }
    //Create table for Task list
?>