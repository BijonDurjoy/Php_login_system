# PHP Login System

A simple and secure PHP login system.

## Project Information

This project was developed as part of an internship at RiseUp Labs.

## Features


- User login
- Password validation
- Session management
- Desplay error messages

## Requirements

- PHP 7.0 or higher
- MySQL
- Apache or Nginx server

## Installation

1. Clone the repository:
    ```sh
    git clone https://github.com/BijonDurjoy/Php_login_system.git
    ```
2. Navigate to the project directory:
    ```sh
    cd Php_login_system
    ```
3. Make a MYSQL database and add username and password data manually.
    ```sql
    // Create database
    create database php_test;

    // Table Create
    create table users(
    id int primary key auto_increment,
    user_name varchar(100),
    password varchar(100),
  
    )

    // Insert Data
    insert into users
    values('Bijon', '1234');
    values('Riseup', '12345');
    ```

5. Run the application on your server.

## Samples of the project
* Required username and pass


