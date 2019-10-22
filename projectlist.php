<?php
$user = $_GET['user'];
include('src/php/create_table.php');
?>
<html>
    <head>
        <title>To-Do List</title>
        <link rel="stylesheet" href="src/styles/styles.css">
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
                    <th>Project</th>
                    <th>Members</th>
                    <th>Estimated Hours</th>
                    <th>Actions</th>
                </tr>
                <?php createProjectTable(); ?>
            </table>
        </div>
        <!--END OF BODY-->
        
        <!--START OF FOOTER-->
        <!--END OF FOOTER-->
    </body>
</html>
