<?php
    //Get Variables from Project List that display the data from Task List table here.
    session_start();
    $proj_name = $_SESSION['proj'];
    $est_hours = $_SESSION['hours'];
    $id = $_GET['id'];
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
            <h1><?php echo $proj_name[$id] ?></h1>
            <h1><?php echo $est_hours[$id] ?> hours</h1>
        </div>
        <!--END OF HEADER-->
        
        <!--START OF BODY-->
        <div class="list-body">
            <table>
                <tr>
                    <th>Task</th>
                    <th>Assigned To</th>
                    <th>Estimated Hours</th>
                </tr>
                <!--Creates table row based on user variable-->
                <?php createTasklist(); ?>
            </table>
        </div>
        <!--END OF BODY-->
        
        <!--START OF FOOTER-->
        <div class="list-footer">
            <button onclick="goBack()">Back</button>
        </div>
        <!--END OF FOOTER-->
    </body>
</html>

<script>
    //Go back to one page for button
    function goBack(){
        window.history.back();
    }
</script>