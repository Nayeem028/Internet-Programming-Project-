<!-- index.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Task Scheduler</title>
    <style> <?php  include"styles.css";
    ?></style>


    
    
</head>
<body>
    <h1>Task Scheduler</h1>



    <?php
    require("form.html");
    include 'db_connection.php';
    include 'task_functions.php';
  



    // Handle Task Completion
    if (isset($_GET['complete'])) {
        $task_id = $_GET['complete'];
        completeTask($task_id, $mysqli);
    }

    // Handle Task Deletion
    if (isset($_GET['delete'])) {
        $task_id = $_GET['delete'];
        deleteTask($task_id, $mysqli);
    }

    // Handle Task Insertion
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $task_name = $_POST['task_name'];
        $task_description = $_POST['task_description'];
        $due_date = $_POST['due_date'];
        addTask($task_name, $task_description, $due_date, $mysqli);
    }

    fetchTasks($mysqli);

    $mysqli->close(); // Close the database connection
    ?>
</body>
</html>
