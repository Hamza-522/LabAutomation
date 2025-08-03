# LABAUTOMATION  🧪 Product Testing Website

This is a **Laravel-based web application** where users can submit their products for testing, and testers/admins can manage, approve, or reject products.  
The platform provides **frontend for users** and **separate panels for testers and admins** to handle testing requests.

---

## 🌟 Features

### **For Users**
- 📝 Create an account and log in
- 📦 Submit products for testing
- 📄 View and edit submitted product details
- 📬 Contact and About pages

### **For Testers**
- 🔍 View products pending for testing
- ✅ Accept or ❌ reject products
- 📂 Manage categories
- 📝 Edit product information

### **For Admin**
- 👥 Manage users, testers, and admins
- 📂 Manage product categories
- 📦 Approve or reject products
- 📜 View messages and feedback

---

## 🗂 Folder Structure

```
Database/
 └── eproject.sql                  # Database dump

Document/
 └── LAB AUTOMATIONS.docx          # Project documentation

Project/
 ├── admin/                        # Admin panel
 │   ├── assets/                   # CSS, JS, images
 │   ├── uploads/                  # Uploaded product images/files
 │   ├── *.php                     # Admin PHP pages (add, edit, delete, show, filter)
 │
 ├── tester/                       # Tester panel
 │   ├── assets/
 │   ├── uploads/
 │   ├── *.php                     # Tester PHP pages
 │
 ├── user/                         # User frontend
 │   ├── assets/
 │   ├── *.php                     # User pages (home, about, contact, add product, login, register, etc.)
```

---

## 🛠 Technologies Used
- **Laravel** (PHP framework)
- **MySQL** (Database)
- **HTML5 / CSS3 / JavaScript**
- **Bootstrap** (Responsive UI)
- **jQuery** (Frontend interactivity)

---

---

## 🚀 Installation Guide

1. **Clone the repository**
```bash
git clone https://github.com/yourusername/eproject.git
cd eproject
```

2. **Import the database**
   - Open **phpMyAdmin**
   - Create a new database (e.g., `eproject`)
   - Import `Database/eproject.sql`

3. **Set up `.env` file**
   - Copy `.env.example` to `.env`
   - Update database credentials:
     ```
     DB_DATABASE=eproject
     DB_USERNAME=root
     DB_PASSWORD=
     ```

4. **Run Laravel setup**
```bash
composer install
php artisan key:generate
php artisan migrate
php artisan serve
```

5. **Access the project**
```
http://localhost:8000
```

---

## 👤 Author
**Hamza**  
📧 Email: `hkmoviestudio@gmail.com`

---
