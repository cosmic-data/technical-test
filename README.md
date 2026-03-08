# Cosmic DATA Test

## Setup

```bash
# buid docker environment
$ make up
# ssh to docker container
$ make cli
# install dependencies
$ make install
```
You can now access the API on **http://localhost:8888/api**

# 🧪 Technical Test – API Platform: Task Management Extension

## ⏱ Duration: 1 Hour
## 👩‍💻 Level: Intermediate Symfony / API Platform Developer

You're working on a task management application built with **Symfony** and **API Platform**. Two entities exist: `User` and `Task`.

Your goal is to expose and enhance APIs around these entities using API Platform best practices, REST principles, and serialization logic.

---

## 🧩 Entities Provided

- `User`
- `Task`
## 🧩 Provided Credentials

- `login : user1@site.com / pass : user1`
- `login : user2@site.com / pass : user2`

---

## ✅ Objectives

### Part 1: Expose and Enhance the Task API (30 minutes)

1. **Expose the `Task` entity** as an API resource with the following operations:
  - `GET` (collection + item)
  - `POST`
  - `PUT`
  - `DELETE`

2. **Security**:
  - Only allow authenticated users to perform any operation.
  - A user should **only see and modify his own tasks**.

3. **Serialization logic**:
  - Default output: `id`, `title`, `dueDate`
  - On `GET` item only: include `createdBy` (just show the user's full name)

4. **Assign `createdBy` automatically** on task creation (in `POST`)

---

### Part 2: Filtering & Ordering (15 minutes)

1. **Enable filters**:
    - `dueDate` (exact and range)
    - `createdBy.email`

2. **Enable ordering**:
    - Allow ordering by `dueDate` only.

3. **Secure filtering**:
    - Ensure filtering by email doesn't expose other users' tasks.
    - Restrict filters so users can't query others' data.
---

### Part 3: Custom Operation – Upcoming Tasks (15 minutes)

1. Create a **custom collection operation**:
  - **Route**: `/tasks/upcoming`
  - **Method**: `GET`
  - **Logic**: Return user's tasks where `dueDate` is within the next 7 days
  - **Return Format**: Same as default task collection

---

## 📦 Deliverables

- Modified `Task.php` and/or `User.php`
- Any new controllers, DTOs, or configuration classes
- Clear code structure following Symfony + API Platform conventions

---

Good luck! 🚀

