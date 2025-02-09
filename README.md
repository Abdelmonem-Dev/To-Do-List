<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


# 📝 To-Do List App

## 📌 Project Overview
This is a **To-Do List** application built using **Laravel (PHP), JavaScript, HTML, and CSS**. It allows users to add, mark as completed, and delete tasks while persisting data in a database.

## 🚀 Features
- ✅ Add, edit, and delete tasks  
- ✅ Mark tasks as completed  
- ✅ Store tasks in the database using Laravel  
- ✅ Fetch tasks dynamically using AJAX  
- ✅ Responsive UI with dark/light mode  

## 🛠️ Technologies Used
- **Laravel** (Backend)
- **MySQL** (Database)
- **JavaScript (Fetch API/AJAX)** (Frontend interaction)
- **HTML & CSS** (UI Design)


## ⚙️ Installation Guide
### 1️⃣ Clone the Repository
```sh
git clone https://github.com/your-username/your-repo.git
cd your-repo
```
2️⃣ Install Dependencies
```
composer install
npm install
```
3️⃣ Setup the Database
```
Create a database in MySQL (e.g., todo_list_db).
Configure the .env file with database details:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=todo_list_db
DB_USERNAME=root
DB_PASSWORD=yourpassword

Run migrations:
php artisan migrate
```
4️⃣ Run the Application
```
php artisan serve
```
Now open http://127.0.0.1:8000 in your browser.

🖥️ API Endpoints
```
Method	    Endpoint	    Description
GET	        /todos	        Fetch all tasks
POST	    /todos	        Add a new task
PUT	        /todos/{id}	    Update a task
DELETE	    /todos/{id}	    Delete a task
```
🎨 Customization
Modify resources/views/todo.blade.php for UI changes.
Edit resources/css/style.css for theme customization.

🛠️ Future Improvements
User authentication for personal task lists
Drag-and-drop task sorting
Notifications and reminders

📜 License
This project is open-source under the MIT License.
