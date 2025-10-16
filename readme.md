# 🗓️ Task Scheduler (Internet Programming Lab Project)
**Course:** CSE 208 — Internet Programming Lab  
**Semester:** Autumn 2023  
**Department:** Computer Science and Engineering  
**University:** University of Information Technology and Sciences (UITS)  
**Project Type:** PHP Web Application  

---

The **Task Scheduler** is a simple PHP-based web application developed as part of the Internet Programming Lab (CSE 208).  
It allows users to manage daily tasks efficiently by performing the following operations:

- ✅ Add new tasks with name, description, and due date  
- 🕒 View all existing tasks  
- ✔️ Mark tasks as completed  
- ❌ Delete tasks from the list  

This project demonstrates practical knowledge of **HTML forms, PHP scripting, MySQL database handling**, and **basic CRUD (Create, Read, Update, Delete)** operations.

---

## Project Structure
```
TaskScheduler/
│
├── index.php            # Main file for displaying and managing tasks
├── form.php             # Contains the task entry HTML form
├── db_connection.php    # Establishes database connection
├── task_functions.php   # Contains PHP functions for CRUD operations
├── styles.css           # (Optional) Custom CSS for UI styling
└── README.md            # Project documentation
```

---

## How It Works
Users can enter a new task using the form in `form.php`.  
The form collects:
- Task Name  
- Task Description  
- Due Date  

Upon submission, the data is sent to `index.php` using the **POST** method.  
In `index.php`, PHP scripts handle:
- Adding new tasks to the database  
- Marking tasks as complete (`?complete=id`)  
- Deleting tasks (`?delete=id`)  
- Displaying all tasks using the `fetchTasks()` function.

---

## Database Setup
Before running the project, create a MySQL database and table.

**Database Name:**
```
Final_db
```

**Table Structure:**
```sql
CREATE TABLE tasks (
  id INT AUTO_INCREMENT PRIMARY KEY,
  task_name VARCHAR(100) NOT NULL,
  task_description TEXT,
  due_date DATE,
  is_completed BOOLEAN DEFAULT 0
);
```

---

## How to Run the Project
1. Install **XAMPP** or any local PHP server.  
2. Move the project folder (`TaskScheduler/`) to the `htdocs` directory.  
3. Create the database and table in **phpMyAdmin**.  
4. Update database credentials in `db_connection.php`.  
5. Start **Apache** and **MySQL** from XAMPP Control Panel.  
6. Open your browser and go to:
   ```
   http://localhost/TaskScheduler/index.php
   ```

---

## Author
**Name:** Nayeem Islam 
**Student ID:** 2215151028  
**Section:** 4A2  
**Course Code:** CSE 208  
**Semester:** Autumn 2023  
**University:** University of Information Technology and Sciences (UITS)
