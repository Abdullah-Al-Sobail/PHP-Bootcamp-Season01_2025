# **CRUD Application with PHP, MySQL, and Bootstrap**

This project demonstrates how to create a fully featured CRUD (Create, Read, Update, Delete) application using PHP, MySQL, and Bootstrap. The application allows users to create, edit, view, and delete posts in a simple blog-like system. The application includes user input validation, session handling, and structured file management to demonstrate real-world PHP development practices.

---

## **Features**

- **Create**: Add new posts with name, email, and description.
- **Read**: View posts with the ability to see more details for each post.
- **Update**: Edit posts and update them in the database.
- **Delete**: Delete posts from the database.

---

## **Technologies Used**

- **Frontend**: HTML, CSS, Bootstrap (for UI)
- **Backend**: PHP (for server-side logic)
- **Database**: MySQL (for data storage)
- **Session Handling**: PHP Sessions (for validation errors and success messages)

---

## **Project Structure**

- **index.php**: Home page where new posts are created.
- **navbar.php**: Navigation bar for navigating between different pages.
- **allPost.php**: Displays all the posts in a table.
- **editPost.php**: Allows users to edit an existing post.
- **post.php**: Displays a single post.
- **controllers**:
  - **post_validation.php**: Handles form validation for creating new posts.
  - **edit_validation.php**: Handles form validation for editing posts.
  - **deletePost.php**: Handles deletion of posts.
- **env.php**: Contains database connection settings.
  
---

## **Setup**

### Prerequisites

- PHP 7.0+ installed
- MySQL 5.7+ installed
- A web server (Apache/Nginx)
  
---

### Installation

1. **Clone the Repository**:
   Clone the project into your local machine using the following command:

   ```bash
   git clone <repository-url>
   ```

2. **Create Database**:
   Create a MySQL database and table for the application:

   ```sql
   CREATE DATABASE crud_project;
   ```

   Then, create a `posts` table:

   ```sql
   CREATE TABLE posts (
       id INT(11) AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(100) NOT NULL,
       email VARCHAR(100) NOT NULL,
       des TEXT NOT NULL
   );
   ```

3. **Configure Database Connection**:
   Edit the `env.php` file and set the correct database connection details:

   ```php
   $db_hostname = 'localhost';
   $db_username = 'root';  // Your MySQL username
   $db_password = '';      // Your MySQL password
   $db_name = 'crud_project';
   ```

4. **Run the Project**:
   Place the project files in your web server's root directory (e.g., `htdocs` for XAMPP). Start the server and navigate to `http://localhost/index.php` to begin using the CRUD application.

---

## **Usage**

1. **Add a New Post**:
   - Navigate to the home page (`index.php`).
   - Enter a name, email, and post description.
   - Click the "Submit" button to create a new post.

2. **View All Posts**:
   - Navigate to `allPost.php` to view a list of all the posts.
   - Each post shows the name, email, description, and options to **View**, **Edit**, or **Delete**.

3. **Edit a Post**:
   - Click the **Edit** button next to a post.
   - Modify the name, email, and description.
   - Click the "Update" button to save changes.

4. **Delete a Post**:
   - Click the **Delete** button next to a post.
   - The post will be deleted from the database.

---

## **Session Management**

- **Success Messages**: After adding, updating, or deleting posts, the application shows success messages.
- **Error Handling**: Form fields like name, email, and description are validated. If any field is incorrect or empty, an error message will be displayed.

---

## **Contributing**

Feel free to fork this repository, create a branch, and submit a pull request if you wish to contribute improvements, fixes, or new features.

---

## **License**

This project is licensed under the MIT License - see the [MIT License](LICENSE).file for details.


---

### **Contact**

For any queries, feel free to reach out to:

- **Email**: [abdullahalsobail78@gmail.com]

---
## 👨‍💻 Instructor  
**Abdullah Al Sobail**  
*Software Engineer*

**Enjoy building with PHP, MySQL, and Bootstrap!**

