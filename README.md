# PHP Login System

Welcome to the PHP Secure Login System! This project showcases a robust, secure user authentication system developed during an internship at RiseUp Labs.

## Project Information

This project features a basic yet secure user authentication system using PHP and MySQL. It's packed with everything you need to manage user sessions securely.

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
<!-- 3. Make a MYSQL database and add username and password data manually.
    ```sql
    --Create database
    CREATE DATABASE php_test;

    --Table Create
    CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCRIMENT,
    user_name VARCHAR(100),
    password VARCHAR(100),
  
    )

    -- Insert Data
    INSERT INTO users
    VALUES('Bijon', '1234');
    VALUES('Riseup', '12345'); -->
    

3. Run the application on your server by using XAMPP 

**Prerequisites**

- Ensure you have [XAMPP](https://www.apachefriends.org/index.html) installed on your system.
- Download and extract the project files to your local machine.

**Steps to Run the PHP File**

1. **Start XAMPP**: Open the XAMPP Control Panel and start the `Apache` and `MySQL` modules.

2. **Copy Project Files**: Copy the project folder into the `htdocs` directory of your XAMPP installation. The default location is usually:
   - Windows: `C:\xampp\htdocs\`
   - macOS: `/Applications/XAMPP/htdocs/`
   - Linux: `/opt/lampp/htdocs/`

3. **Configure Database**: This project requires a database:
   - Open your web browser and navigate to `http://localhost/phpmyadmin`.
   - Create a new database and insert all data manually.
  
  ```sql
    --Create database
    CREATE DATABASE php_test;

    --Table Create
    CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCRIMENT,
    user_name VARCHAR(100),
    password VARCHAR(100),
  
    )

    -- Insert Data
    INSERT INTO users
    VALUES('Bijon', '1234');
    VALUES('Riseup', '12345');
   ```

4. **Access the Project in Browser**: Open your web browser and go to `http://localhost/your_project_folder_name`. Replace `your_project_folder_name` with the actual name of your project folder.

5. **Run the PHP File**: Navigate to the specific PHP file you want to run by appending its name to the URL. For example, to run `index.php`, go to `http://localhost/your_project_folder_name/index.php`.

## Example

If your project folder is named `my_php_project` and you want to run `index.php`, the URL will be:


## Samples of the project

* Incorrect username and pass

  ![username and pass](https://github.com/user-attachments/assets/34c91ea6-03d5-4e88-9c48-4d52f2183d50)

* Username Required
 ![username_req](https://github.com/user-attachments/assets/20430cc1-1d8a-4e0e-bc99-897b6cee85c4)

* Password Required
  ![password_req](https://github.com/user-attachments/assets/18440219-ed1e-4812-90fc-2a5ee6b23826)

* Login Successful
![Welcome Page](https://github.com/user-attachments/assets/4975ba9a-1307-4b60-beef-81e19d7f76b6)






