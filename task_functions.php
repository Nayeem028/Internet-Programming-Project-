<!-- task_functions.php -->
<?php

function completeTask($task_id, $mysqli) {
    $mysqli->query("UPDATE tasks SET completed = 1 WHERE id = $task_id");
}

function deleteTask($task_id, $mysqli) {
    $mysqli->query("DELETE FROM tasks WHERE id = $task_id");
}

function addTask($task_name, $task_description, $due_date, $mysqli) {
    $stmt = $mysqli->prepare("INSERT INTO tasks (task_name, task_description, due_date) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $task_name, $task_description, $due_date);

    if ($stmt->execute()) {
        // Task added successfully.
    } else {
        echo "Error: " . $stmt->error;
    }
}

function fetchTasks($mysqli) {
    $result = $mysqli->query("SELECT id, task_name, task_description, due_date, completed FROM tasks");

    if ($result->num_rows > 0) {
        echo "<h2>Task List</h2>";
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li";
            if ($row['completed'] == 1) {
                echo " class='completed-task'";
            }
            echo ">";
            echo " <strong>Task Name: </strong> " . $row['task_name'] . "<br>";
            echo "<strong>Description:</strong>" . $row['task_description'] . "<br>";
            echo "<strong>Due Date: </strong> " . $row['due_date'] . "<br>";

            if ($row['completed'] == 1) {
                echo "<strong>Status: Completed</strong><br>";
            } else {
                echo "<strong>Status:</strong>  Incomplete<br>";
                echo "<a class='complete-link' href='?complete=" . $row['id'] . "'>Mark as Complete</a>";
            }

            echo "<a class='delete-link' href='?delete=" . $row['id'] . "'>Delete Task</a><br>";
            echo "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p class='end'> NO Task Found </p>";
    }
}
