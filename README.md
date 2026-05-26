# Local Development Environment

Docker setup for:
- Apache
- PHP 8.3
- MySQL 8.4
- phpMyAdmin

---

# Requirements

Install Docker before starting.

## Windows / Mac

Install Docker Desktop:

:contentReference[oaicite:0]{index=0}

## Ubuntu / Linux

Install Docker Engine + Docker Compose:

:contentReference[oaicite:1]{index=1}

---

# Start Project

From the project folder:

```bash
docker compose up -d --build
```

Linux users may need:

```bash
sudo docker compose up -d --build
```

---

# Open Project

## Website

```text
http://localhost:8080
```

## phpMyAdmin

```text
http://localhost:8081
```

---

# Database Login

## Standard User

```text
Server: db
Username: myuser
Password: mypassword
```

## Root User

```text
Server: db
Username: root
Password: rootpassword
```

---

# Project Structure

```text
mydockerapp/
├── Dockerfile
├── docker-compose.yml
├── mysql-init/
│   └── init.sql
└── src/
    └── index.php
```

---

# Docker Commands

## Start Containers

```bash
docker compose up -d
```

Rebuild containers:

```bash
docker compose up -d --build
```

---

## Stop Containers

```bash
docker compose down
```

Stop and remove database data:

```bash
docker compose down -v
```

WARNING:
This deletes all MySQL data.

---

## Restart Containers

```bash
docker compose restart
```

Restart Apache/PHP only:

```bash
docker compose restart web
```

Restart MySQL only:

```bash
docker compose restart db
```

---

## View Logs

All logs:

```bash
docker compose logs -f
```

Apache/PHP logs:

```bash
docker compose logs -f web
```

MySQL logs:

```bash
docker compose logs -f db
```

---

## View Running Containers

```bash
docker ps
```

---

# Database Reset

If SQL scripts are updated:

```bash
docker compose down -v
docker compose up -d --build
```

This will:

- recreate MySQL
- rerun SQL scripts
- rebuild containers

---

# Update Docker Images

Pull latest versions:

```bash
docker compose pull
```

Rebuild with latest images:

```bash
docker compose up -d --build
```

---

# Useful URLs

## Website

```text
http://localhost:8080
```

## phpMyAdmin

```text
http://localhost:8081
```

---

# Notes

- SQL scripts inside `mysql-init/` auto-run on first database creation.
- Database hostname inside PHP must remain:

```php
$host = "db";
```

- Intended for local development/testing only.