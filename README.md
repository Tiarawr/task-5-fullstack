# Task 5 - Fullstack

## Restful API using Laravel Passport

### 📌 Objective
Building a REST API and OAuth token using the Laravel framework and Laravel Passport.

### 🔹 Features
- **JWT Authentication using Laravel Passport**
- **RESTful API for Posts**:
  - ✅ Create
  - ✅ List all
  - ✅ Show detail
  - ✅ Update
  - ✅ Delete
- **Middleware Authentication**:
  - 🔒 Implementing middleware `auth:api` on the Posts endpoint.
- **API Versioning Prefix**:
  - 📌 API uses version prefix (e.g., `api/v1`).
- **Eloquent Relationships**:
  - 🔗 Establishing relationships between `posts` and `categories` tables using Eloquent.
- **Pagination**:
  - 📜 Implementing pagination in the `list all posts` API.
- **Unit Testing**:
  - 🧪 Unit testing for each Posts API.
- **Table Reference**:
  - 📄 [Table Reference](https://docs.google.com/document/d/18vr7dMZNmxeiT_CS6ofRTik8YygBraRvl0vscNXpRbQ/edit?usp=sharing)

---

## 🖥️ Building a Simple Blog Using Laravel Blade and Laravel UI

### 📌 Objective
Applying Blade features and Laravel UI in the project.

### 🔹 Features
- **Authentication Feature**
  - 🔐 Using Laravel UI for authentication.
- **CRUD for Articles and Categories**
  - 📝 Create, Read, Update, Delete operations for Articles and Categories.
- **Templating with Laravel Blade**
  - 🎨 Using Laravel Blade for frontend views.
- **Eloquent Relationships**
  - 🔗 Establishing relationships between tables using Laravel Eloquent.
- **Seeder for Sample Users**
  - 🌱 Using seeders to create sample users.
- **Unit Testing**
  - 🧪 Unit testing for each CRUD page and authentication feature.

## 🚀 How to Run the Project

### 1️⃣ Clone Repository
```sh
git clone https://github.com/Tiarawr/task-5-fullstack.git
cd task-5-fullstack
```

### 2️⃣ Install Dependencies
```sh
composer install
npm install && npm run dev
```

### 3️⃣ Create Environment File
```sh
cp .env.example .env
```
> Configure the database settings in the `.env` file.

### 4️⃣ Generate Application Key
```sh
php artisan key:generate
```

### 5️⃣ Run Migrations and Seeders
```sh
php artisan migrate --seed
```

### 6️⃣ Generate Passport Keys
```sh
php artisan passport:install
```

### 7️⃣ Start the Server
```sh
php artisan serve
```
> Access the application at `http://127.0.0.1:8000`.

### 8️⃣ Run Unit Tests
```sh
php artisan test
```

## 🔗 API Endpoints

| Method | Endpoint | Description |
|--------|---------|-------------|
| **POST** | `/api/v1/login` | 🔑 User login |
| **POST** | `/api/v1/register` | 📝 User registration |
| **GET** | `/api/v1/posts` | 📜 List all posts (with pagination) |
| **GET** | `/api/v1/posts/{id}` | 🔍 Get post details |
| **POST** | `/api/v1/posts` | ✍️ Create a new post (authenticated) |
| **PUT** | `/api/v1/posts/{id}` | 📝 Update a post (authenticated) |
| **DELETE** | `/api/v1/posts/{id}` | 🗑️ Delete a post (authenticated) |

## 👥 Contributors
- **[Tiarawr](https://github.com/Tiarawr)**

---
