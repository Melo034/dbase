# dbase

**dbase** dbase is an easy-to-use form interface for data collection (name, gender, profession) and a dashboard to display analytic results from the form. The dashboard includes pie charts, bar charts, and a table that displays people's names, genders, and professions. Additionally, there is a quick summary section where the available count for each profession is displayed.

## Table of Contents

1. [Website Screenshots](#website-screenshots)
2. [Features](#features)
3. [Technology Overview](#technology-overview)
   - [Front End](#front-end)
   - [Back End](#back-end)
4. [Installation Requirements](#installation-requirements)
5. [Installation Steps](#installation-steps)
6. [Usage](#usage)

## Website Screenshots

## Form
![Screenshot 2024-08-31 143048](https://github.com/user-attachments/assets/2e14751d-7432-487c-bf3b-3f1c295be770)

## Dashboard 1
![Screenshot 2024-08-31 143133](https://github.com/user-attachments/assets/c4f96709-b696-4afe-8968-d29b47c760ba)

## Dashboard 2
![Screenshot 2024-08-31 143159](https://github.com/user-attachments/assets/8147bda1-5d01-42cb-a439-fd0c4badfc08)

## Features

- **Form Interface**: Collects data including name, gender, and profession.
- **Dashboard**: Displays analytic results with:
  - Pie charts
  - Bar charts
  - Table with names, genders, and professions
- **Quick Summary**: Shows the count of each profession.

  
## Technology Overview

### Front End

- **HTML:** Used for structuring the content on the web. The pages are created and saved as web documents.
- **Tailwind CSS:** A utility-first CSS framework that allows for rapid UI development with predefined classes.
- **JavaScript:** A programming language used to make web pages interactive. It is commonly used with web browsers to create dynamic and interactive experiences.

### Back End

- **PHP (Hypertext Preprocessor):** A server-side scripting language used to create dynamic and interactive web pages. PHP processes the server-side logic, interacts with the database, and renders the necessary content to the client.
- **MySQL:** An open-source relational database management system used to store and manage the data for the application.

### Chart
- **HighCharts

## Installation Requirements

Before installing and running the project locally, ensure that you have the following software installed on your machine:

- PHP (latest version)
- MySQL (latest version)
- A local server environment such as:
  - WAMP Server (Windows)
  - XAMPP Server (Cross-platform)
  - MAMP Server (MacOS)
  - LAMP Server (Linux)
  - Laragon (Windows)

## Installation Steps

To set up idea pulse on your local machine, follow these steps:

1. **Clone the repository:**
   ```sh
   git clone https://github.com/yourusername/dbase.git

2. **Navigate to the project directory:**
   ```bash
   cd dbase

3. **Set up your local server:**
   - If using Laragon or Xampp, place the project folder in the www/htdocs directory.
     - For XAMPP: `c:/xampp/htdocs`
     - For Laragon: `c:/laragon/www`
   - Start the server.
   - Navigate to your local server directory. This is typically:
   ```bash
   http://localhost/

4. **Set Up the Database:**
   - Open your web browser (Google Chrome or Mozilla Firefox recommended).
   - Go to
   ```bash
   http://localhost/phpmyadmin

 - Import the .sql file into your database system (MySQL). 
 
## Usage
1. **Navigate to the project directory:**
   ```bash
   http://localhost/dbase
  

## Live Demo

You can also explore a live version of the project here: [dbase Live Demo](https://dbase.ingmelo.com/)
