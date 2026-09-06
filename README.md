# SQL Injection Attack Logic Using Query Transformation

## Overview

This project demonstrates the working logic of SQL Injection using a locally developed PHP and MySQL application.

The application is deployed using Docker and is designed for educational and laboratory purposes. The experiment shows how different user inputs can change the SQL query and affect the application response.

## Objective

To understand how SQL Injection works by observing how user input transforms a normal SQL query and changes the resulting database response.

## Technologies Used

- HTML
- PHP
- Apache
- MySQL
- Docker
- Docker Compose

## Project Structure

```text
SQL_Injection_sqli/
├── web/
│   ├── Dockerfile
│   ├── login.php
│   ├── vulnerable_login.php
│   ├── sql_frontend.html
│   └── vulnerable_frontend.html
├── sqli_db.sql
├── docker-compose.yml
└── README.md
