Registration & Login System

A simple file-based user registration and login system built using PHP, with a frontend developed using React (Vite) and TailwindCSS.
The system validates user input, stores user data in a text file, and provides authentication through a login page.

Features
Task 1 — Registration

Username + Password form.

Input validation:

Username must contain only alphabets.

Password must contain letters and numbers.

Checks if the username already exists.

Saves new users to users.txt inside the backend directory.

Task 2 — Login

Login form for existing users.

Verifies stored credentials from users.txt.

Displays a styled welcome page on successful login.

Technologies Used

Frontend: React + Vite, JavaScript, TailwindCSS

Backend: PHP

Storage: Text file (users.txt)

Project Structure
project/
│
├── backend/
│   ├── register.php
│   ├── login.php
│   └── users.txt
│
└── frontend/
    ├── index.html
    ├── vite.config.js
    └── src/
        ├── App.jsx
        └── main.jsx

Setup Instructions
1. Start the PHP Local Server

Open a terminal inside the backend folder:

php -S localhost:8000


The backend will now be available at:

http://localhost:8000/

2. Start the React Frontend

Inside the frontend folder:

npm install
npm run dev


Vite will start a dev server, usually at:

http://localhost:5173/

Fixing CORS (Important)

To allow requests from the frontend to the backend, include this line at the top of every PHP file:

header("Access-Control-Allow-Origin: *");


If using POST with form data, also include:

header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");

How to Test the Registration

Start both the PHP server and the Vite server.

Go to the registration page.

Enter a valid username, for example:

Username: Ayesha

Password: abc123

Click Register.

Open backend/users.txt and confirm the entry is saved.

How to Test Login

Use the same credentials you registered.

Submit the login form.

You should be redirected to a welcome page.

Common Issues
CORS Error

Occurs when PHP does not include the proper CORS headers.
Fix shown above.

Undefined index error in PHP

Happens when frontend is not sending form data correctly.
Make sure you're using:

const form = new FormData();
form.append("username", username);
form.append("password", password);

License

This project is for educational use.

If you want, I can also create the users.txt, the PHP scripts, or a full working folder structure.
