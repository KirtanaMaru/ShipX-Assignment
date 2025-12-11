

# 🚢 ShipX – Landing Page + CRUD Dashboard

A responsive landing page built from a **Figma design** with a **Contact Form** and a **CRUD Dashboard**.  
Includes **REST API endpoints** for Create, Read, Update, and Delete operations.

---

## 🧠 About the Project

**User Persona:**  
👤 *Business Owner* — wants a simple landing page to showcase their services and a dashboard to manage contact messages efficiently.  

The app allows users to:  
- Submit inquiries via a contact form.  
- Store contact information in a MySQL database.  
- View, update, and delete records from a dashboard.  
- Interact with REST API endpoints for CRUD operations.

---

## 🛠️ Tech Stack

- **Backend:** Laravel  
- **Frontend:** Blade templates, Bootstrap  
- **Database:** MySQL  
- **API:** RESTful CRUD endpoints  
- **Deployment:** Localhost / Server  

---

## ⚙️ Features

✅ Responsive landing page from Figma design  
✅ Hero section, testimonials, and contact form  
✅ Form validation with success/error messages  
✅ CRUD dashboard for managing contact entries  
✅ REST API: GET, POST, PUT, DELETE  

---

## 📡 API Endpoints

| Method | Endpoint | Description |
|--------|---------|------------|
| GET    | /api/contacts | List all contact records |
| POST   | /api/contacts | Create a new contact entry |
| PUT    | /api/contacts/{id} | Update an existing contact |
| DELETE | /api/contacts/{id} | Delete a contact entry |

---

## 🗂 Database Structure

| Column      | Type      |
|------------|-----------|
| id         | int (PK) |
| name       | varchar  |
| email      | varchar  |
| bussiness    | text     |
| mobilr    | text     |
| upload_file    | text     |
| message    | text     |
| created_at | timestamp|
| updated_at | timestamp|

---

## 📁 Folder Structure

- app/Http/Controllers/  
- resources/views/  
- routes/web.php  
- routes/api.php  
- public/  
- database/  

---

## 👩‍💻 Developer

Kirtana Maru

---

## 📝 License

This project is for **assignment purposes only**.

---

## ⚙️ Installation

1. **Clone the repository:**  
```bash
git clone https://github.com/KirtanaMaru/ShipX.git
cd ShipX

2.Install dependencies:

```bash
Copy code
composer install
npm install
Create environment file:

bash
Copy code
cp .env.example .env
Generate application key:

bash
Copy code
php artisan key:generate
Configure database:
Update .env with your MySQL credentials:

makefile
Copy code
DB_DATABASE=shipx
DB_USERNAME=root
DB_PASSWORD=
Run migrations:

bash
Copy code
php artisan migrate
Start the project:

bash
Copy code
php artisan serve
Open http://localhost:8000 in your browser.
