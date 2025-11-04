# 🧾 User Registration System

A simple and responsive **User Registration System** built using **HTML**, **Tailwind CSS**, **PHP**, **JavaScript**, and **MySQL**.  
The system allows users to **sign up**, **upload a profile picture**, and stores the data in a MySQL database.  
It also provides a **Registered Users** table where all users are displayed with options to **Edit** or **Delete** their information.

---

## 🚀 Features

- 📝 **User Registration Form**
  - First Name, Last Name, Date of Birth, Gender  
  - Email, Password, Phone Number  
  - Profile Image Upload option  
- 📦 **Database Integration (MySQL)**
  - User details are securely stored in a MySQL database.
- 👥 **Registered Users Table**
  - Displays all registered users with their profile picture, name, and email.
  - Shows submission and last update timestamps.
  - Edit and Delete buttons for managing users.
- 🎨 **Modern UI**
  - Clean and responsive design built with **Tailwind CSS**.
- ⚙️ **Dynamic Interaction**
  - JavaScript used for form validation and interactive components.

---

## 🧩 Technologies Used

| Technology | Purpose |
|-------------|----------|
| **HTML5** | Structure of the web pages |
| **Tailwind CSS** | Styling and responsive design |
| **JavaScript** | Form validation and interactivity |
| **PHP** | Backend logic and database connection |
| **MySQL** | Database for storing user details |

---

## 🗄️ Database Structure

**Database Name:** `user_registration_db`

**Table Name:** `users`

| Field Name | Type | Description |
|-------------|------|-------------|
| `id` | INT (AUTO_INCREMENT) | Primary Key |
| `first_name` | VARCHAR(100) | User’s first name |
| `last_name` | VARCHAR(100) | User’s last name |
| `dob` | DATE | Date of birth |
| `gender` | VARCHAR(20) | Gender of the user |
| `email` | VARCHAR(150) | Email address |
| `password` | VARCHAR(255) | Hashed password |
| `phone` | VARCHAR(20) | Contact number |
| `image` | VARCHAR(255) | Profile image file path |
| `submitted_at` | DATETIME | Date and time when registered |
| `updated_at` | DATETIME | Last updated time |

---

## 🧰 Setup Instructions

### 1. Clone the Repository
```bash
git clone https://github.com/your-username/user-registration-system.git
