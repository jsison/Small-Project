<?php
$user = $_GET['user'];
include('create_table.php');
?>
<html>
    <head>
        <title>To-Do List</title>
        <link rel="stylesheet" href="../styles/styles.css">
    </head>
    <body>
        <!--START OF HEADER-->
        <div class="list-header">
            <h1><?php echo $user ?>'s Project List</h1>
        </div>
        <!--END OF HEADER-->
        
        <!--START OF BODY-->
        <div class="list-body">
            <table>
                <tr>
                    <th>Task</th>
                    <th>ASsigned To</th>
                    <th>Estimated Hours</th>
                </tr>
                <!--Creates table row based on user variable-->
                <?php //table script here ?>
            </table>
        </div>
        <!--END OF BODY-->
        
        <!--START OF FOOTER-->
        <!--END OF FOOTER-->
    </body>
</html>