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

        .admission-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .admission-info {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 20px;
        }

        h2 {
            color: #333;
        }

        p {
            color: #555;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
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
        <a href="courses.php">Courses</a>
        <a href="#">Admissions</a>
        <a href="contactus.php">Contact Us</a>
    </nav>

    <section class="admission-container">
        <h2>Admissions</h2>

        <div class="admission-info">
            <h3>How to Apply</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod justo et felis tristique.</p>
        </div>

        <div class="admission-info">
            <h3>Admission Requirements</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod justo et felis tristique.</p>
        </div>

        <div class="admission-info">
            <h3>Important Dates</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod justo et felis tristique.</p>
        </div>

        <h3>Contact Us for More Information</h3>
        <form>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="comments">Comments:</label>
            <textarea id="comments" name="comments" rows="4"></textarea>

            <button type="submit">Submit</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 My School. All rights reserved.</p>
    </footer>

</body>

</html>
