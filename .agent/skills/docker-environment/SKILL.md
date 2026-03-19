---
name: Docker Environment
description: Skills for managing and developing WordPress themes within a Dockerized environment.
---

# Docker Environment

This skill focuses on using Docker to create a consistent and portable development environment for the `oscss-wp-maruplus3` theme.

## Core Concepts

### 1. WordPress Dockerization
Understanding how to use standard WordPress and DB (MySQL/MariaDB) images:
- Using `docker-compose.yml` to orchestrate services.
- Mapping theme files into the container's `themes/` directory for live development.

### 2. Container Management
- Starting and stopping services with `docker-compose up` and `docker-compose down`.
- Accessing container shells for troubleshooting (`docker exec`).
- Managing persistent data using volumes.

### 3. Environment Parity
Ensuring development, staging, and production environments are as identical as possible through containerized configurations.

## Best Practices
- **Persistence**: Ensure WordPress uploads and databases are persisted via volumes.
- **Isolation**: Keep the theme development isolated from other services to prevent dependency conflicts.
- **Configuration**: Use environment variables for sensitive data like DB credentials.
