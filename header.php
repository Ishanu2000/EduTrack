<!-- Navigation Bar -->
<nav class="navbar">
    <div class="logo-container">
        <img src="images/logo.png" alt="Student Management System Logo" class="logo">
    </div>
    <div class="nav-links">
        <a href="index.html" class="home-btn">Home Page</a>
        <a href="student-list.php" class="view-student-btn">View Students</a>
    </div>
</nav>


<!-- Add CSS Styles here or in your external stylesheet -->
<style>
/* Navbar Styles */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #ffffff;
    padding: 10px 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px; /* Space between navbar and content */
}

.logo-container {
    display: flex;
    align-items: center;
}

.logo {
    width: 300px;
    height: 100px;
    object-fit: contain;
}

.nav-links {
    display: flex;
    justify-content: flex-end;
    align-items: center;
}

.view-student-btn {
    background-color: #4CAF50;
    color: #ffffff;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 16px;
    margin-left: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.view-student-btn:hover {
    background-color: #45a049;
    color: white;
}

.view-student-btn:active {
    background-color: #3e8e41;
}

@media screen and (max-width: 768px) {
    .navbar {
        flex-direction: column;
        align-items: center;
    }

    .nav-links {
        margin-top: 10px;
    }

    .view-student-btn {
        margin-left: 0;
    }
}

/* Home Button Styles */
.home-btn {
    background-color: #4CAF50; /* Blue background */
    color: #ffffff; /* White text */
    padding: 10px 20px; /* Add spacing inside the button */
    text-decoration: none; /* Remove underline */
    border-radius: 5px; /* Rounded corners */
    font-size: 16px; /* Font size */
    margin-left: 20px; /* Space between buttons */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    transition: background-color 0.3s ease; /* Smooth color change on hover */
}

.home-btn:hover {
    background-color: #45a049; /* Darker blue on hover */
    color: white;
}

.home-btn:active {
    background-color: #45a049; /* Even darker blue when clicked */
}

</style>