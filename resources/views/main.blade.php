<!DOCTYPE html>



<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Basic styles for body */
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
}

/* Navbar container */
.navbar {
    background-color: #333;
    color: #fff;
    padding: 15px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* Brand/logo on the left */
.navbar-brand {
    font-size: 1.5rem;
    font-weight: bold;
}

/* Navbar menu (ul element) */
.navbar-menu {
    list-style-type: none;
    display: flex;
}

/* Individual links inside the navbar */
.navbar-menu li {
    margin: 0 10px;
}

/* Links styling */
.navbar-menu a {
    text-decoration: none;
    color: #fff;
    padding: 8px 12px;
    transition: background-color 0.3s ease;
}

/* Hover effect for links */
.navbar-menu a:hover {
    background-color: #575757;
    border-radius: 4px;
}

/* Responsive design for smaller screens */
@media (max-width: 768px) {
    .navbar {
        flex-direction: column;
        align-items: flex-start;
    }

    .navbar-menu {
        flex-direction: column;
        width: 100%;
    }

    .navbar-menu li {
        margin: 5px 0;
    }
}

/* Reset margin and padding */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body styling */
body {
    font-family: Arial, sans-serif;
}

/* Sidebar styling */
.sidebar {
    width: 250px;
    height: 100vh; /* Full viewport height */
    background-color: #333;
    color: white;
    padding: 20px;
    position: fixed; /* Stays fixed when scrolling */
    top: 0;
    left: 0;
}

/* Sidebar header */
.sidebar h2 {
    margin-bottom: 20px;
}

/* Sidebar links */
.sidebar ul {
    list-style-type: none;
}

.sidebar ul li {
    margin: 15px 0;
}

.sidebar ul li a {
    text-decoration: none;
    color: white;
    font-size: 1.2rem;
    display: block;
    padding: 10px;
    transition: background-color 0.3s ease;
}

.sidebar ul li a:hover {
    background-color: #575757;
    border-radius: 5px;
}

/* Main content styling */
.main-content {
    margin-left: 270px; /* Leave space for sidebar */
    padding: 20px;
}

.main-content h1 {
    font-size: 2.5rem;
    color: #333;
}

.main-content p {
    font-size: 1.2rem;
    color: #666;
}

/* Responsive Sidebar */
@media (max-width: 768px) {
    .sidebar {
        width: 200px;
    }

    .main-content {
        margin-left: 220px;
    }
}

@media (max-width: 480px) {
    .sidebar {
        width: 180px;
    }

    .main-content {
        margin-left: 200px;
    }
}




</style>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <nav class="navbar">
        <div class="navbar-brand">MyWebsite</div>
        <ul class="navbar-menu">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

     <!-- Left Sidebar -->
     <div class="sidebar">
        <h2>My Sidebar</h2>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </div>

</body>
</html>