# Laravel 12 - CRUD API using Repository and Service Pattern

## 📌 Project Overview

This project demonstrates how to implement a clean and scalable **CRUD API** for a simple `Post` model in Laravel 12 using the **Repository** and **Service Layer** design patterns.

The `Post` model contains basic fields (`title`, `content`) and does not have any relationships.

---

## 🎯 Purpose of Using Repository and Service Pattern

Using the Repository and Service Layer pattern helps in:

### 🔹 Separation of Concerns
- **Controller** → handles HTTP request/response.
- **Service** → contains the business logic.
- **Repository** → handles direct interaction with the database (Eloquent).

### 🔹 Code Reusability
- The service layer can be reused in other layers like Jobs, Commands, Listeners, etc.

### 🔹 Testability
- Easier to write unit tests for services and repositories in isolation.

### 🔹 Scalability
- As the application grows, responsibilities remain separated and easier to maintain.

---

## 📂 Folder Structure

```bash
app/
├── Http/
│   └── Controllers/Api/PostController.php
│   └── Requests/PostRequest.php
│
├── Models/Post.php
│
├── Services/PostService.php
│
├── Repositories/
│   ├── Interfaces/PostRepositoryInterface.php
│   └── PostRepository.php
│
├── Providers/RepositoryServiceProvider.php
```


### Ads System 

**👉 [Postman Collection Link](https://www.postman.com/payload-cosmologist-54490583/workspace/my-workspace/collection/38817975-74e3f3cc-d4b0-4129-bce5-965ac036f4cd?action=share&creator=38817975)**




