<?php
    //Project list table creation
    function createProjectTable(){
        include('connectDB.php');
        $conn = connectDB();
        $sql = "SELECT proj_name, users, est_hours FROM project_list";
        $result = $conn->query($sql);

        session_start();
        $user = $_GET['user'];

        //iterator for loop for button
        $i = 0;

        //grab table contents from project_list
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
                echo '<td> <a href="tasklist.php?id=' . $i . '">View</a></td>';
                echo "</tr>";
                $i++;       
            }
        }
        $_SESSION['proj'] = $proj;
        $_SESSION['hours'] = $est_hours;
        $conn->close();
    }

    //Create table for Task list
    function createTasklist(){
        include('connectDB.php');
        $conn = connectDB();
        
        $proj = $_SESSION['proj'];
        $id = $_GET['id'];
        
        //Pulls data from tasklist.php's session in order to fetch table results from that certain button pressed
        $sql = "SELECT task_name,assigned,est_hours FROM `". $proj[$id] ."`";
        $result = $conn->query($sql);

        if(!$result){
            trigger_error("ERROR ALERT" . $conn->error);
        }
        
        while($row = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>". $row['task_name'] . "</td>";
            echo "<td>". $row['assigned'] ."</td>";
            echo "<td>". $row['est_hours'] ."</td>";
            echo "</tr>";
        }
        $conn->close();
    }
?>