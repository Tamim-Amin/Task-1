# 🧾 User Registration & Management System

A modern **User Registration and Management System** built using **HTML**, **Tailwind CSS**, **PHP**, **JavaScript**, and **MySQL**.  
This system allows users to **register**, **upload a profile picture**, and **manage registered users** in a clean, responsive interface.

---

## 🌐 Overview

The project includes two main sections:
1. **Sign Up Page** – A form where new users can register with personal details and a profile image.
2. **Registered Users Page** – Displays a list of all users stored in the database, with options to **Edit** or **Delete** records.

This project demonstrates full-stack web development with seamless integration between the frontend and backend using PHP and MySQL.

---

## 🖼️ Screenshots

### 🧍‍♂️ Sign Up Page
The registration form collects user information and profile images.

![Sign Up Page](assets/signup.png)

### 👥 Registered Users Page
Displays a list of all registered users with edit and delete functionality.

![Registered Users Page](assets/registered_users.png)

---

## ✨ Features

✅ **User Registration Form**
- Collects first name, last name, date of birth, gender, email, password, phone number, and profile picture.  
- Validates input fields before submission using JavaScript.  
- Uploads images to the server and stores their paths in the database.

✅ **Database Integration (MySQL)**
- Stores user information securely in a MySQL database.  
- Automatically records submission and last update timestamps.

✅ **Registered Users Management**
- Displays all user records dynamically from the database.  
- Includes **Edit** and **Delete** options for managing users.  
- Displays each user’s profile photo, name, and email.

✅ **Responsive Design**
- Built with **Tailwind CSS** for a clean and mobile-friendly layout.

✅ **Dynamic Functionality**
- JavaScript enhances interactivity and client-side validation.

---

## 🧩 Technologies Used

| Technology | Description |
|-------------|-------------|
| **HTML5** | Provides the structure of the web pages |
| **Tailwind CSS** | For modern, responsive, and elegant UI design |
| **JavaScript (ES6)** | Handles front-end interactivity and validation |
| **PHP (Core PHP)** | Manages backend logic and database operations |
| **MySQL** | Stores and retrieves user data |

---

## 🗄️ Database Structure

**Database Name:** `user_registration_db`  
**Table Name:** `users`

| Field | Type | Description |
|--------|------|-------------|
| `id` | INT (AUTO_INCREMENT) | Primary Key |
| `first_name` | VARCHAR(100) | User’s first name |
| `last_name` | VARCHAR(100) | User’s last name |
| `dob` | DATE | Date of birth |
| `gender` | VARCHAR(20) | Gender |
| `email` | VARCHAR(150) | User email |
| `password` | VARCHAR(255) | User password (hashed recommended) |
| `phone` | VARCHAR(20) | Phone number |
| `image` | VARCHAR(255) | File path of uploaded image |
| `submitted_at` | DATETIME | Record creation timestamp |
| `updated_at` | DATETIME | Record update timestamp |

---


