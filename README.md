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

* Incorrect username and pass

  ![username and pass](https://github.com/user-attachments/assets/34c91ea6-03d5-4e88-9c48-4d52f2183d50)

* Username Required
 ![username_req](https://github.com/user-attachments/assets/20430cc1-1d8a-4e0e-bc99-897b6cee85c4)

* Password Required
  ![password_req](https://github.com/user-attachments/assets/18440219-ed1e-4812-90fc-2a5ee6b23826)

* Login Successful
![Welcome Page](https://github.com/user-attachments/assets/4975ba9a-1307-4b60-beef-81e19d7f76b6)






