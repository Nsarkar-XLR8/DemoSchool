<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My School Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        nav {
            background-color: #4CAF50;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            font-weight: bold;
        }

        section {
            padding: 20px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .course-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .course {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            margin: 15px;
            width: 300px;
        }

        h2 {
            color: #333;
        }

        p {
            color: #555;
        }

    </style>
</head>

<body>

    <header>
        <h1>Welcome to My School</h1>
    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="aboutus.php">About Us</a>
        <a href="#">Courses</a>
        <a href="admission.php">Admissions</a>
        <a href="contactus.php">Contact Us</a>
    </nav>

    <section class="course-container">
        <div class="course">
            <h2>Mathematics</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod justo et felis tristique.</p>
        </div>

        <div class="course">
            <h2>Science</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod justo et felis tristique.</p>
        </div>

        <div class="course">
            <h2>History</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod justo et felis tristique.</p>
        </div>

        <!-- Add more courses as needed -->

    </section>

    <footer>
        <p>&copy; 2024 My School. All rights reserved.</p>
    </footer>

</body>

</html>
