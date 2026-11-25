
<?php
include 'database.php';

if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];

    $sql = "INSERT INTO students (name, email, phone, course)
            VALUES ('$name', '$email', '$phone', '$course')";

    if(mysqli_query($conn, $sql)) {
        echo "<script>alert('Registration Successful');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>ABC College</title>

    <style>
        body {
            margin: 0;
            font-family: Arial;
            background: #f2f2f2;
        }

        header {
            background: navy;
            color: white;
            text-align: center;
            padding: 20px;
        }

        nav {
            background: black;
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 20px;
        }

        .main {
            text-align: center;
            padding: 40px;
            background: lightblue;
        }

        .form {
            background: white;
            width: 350px;
            margin: 30px auto;
            padding: 20px;
            border-radius: 10px;
        }

        input, select {
            width: 95%;
            padding: 10px;
            margin: 10px 0;
        }

        button {
            background: navy;
            color: white;
            padding: 10px;
            width: 100%;
            border: none;
        }

        footer {
            background: black;
            color: white;
            text-align: center;
            padding: 15px;
        }
    </style>
</head>

<body>

<header>
    <h1>ABC College</h1>
    <p>Welcome to Our College</p>
</header>

<nav>
    <a href="#">Home</a>
    <a href="#about">About</a>
    <a href="#courses">Courses</a>
    <a href="#contact">Admission</a>
</nav>

<div class="main">
    <h2>Build Your Bright Future</h2>
    <p>Welcome to ABC College</p>
</div>

<div id="about" style="text-align:center;">
    <h2>About Us</h2>
    <p>ABC College provides quality education to students.</p>
</div>

<div id="courses" style="text-align:center;">
    <h2>Our Courses</h2>
    <p>BCA | BBA | BCOM | BSC</p>
</div>

<div class="form" id="contact">

    <h2 align="center">Admission Form</h2>

    <form method="POST" action="">

        <input type="text" name="name"
        placeholder="Enter Name" required>

        <input type="email" name="email"
        placeholder="Enter Email" required>

        <input type="text" name="phone"
        placeholder="Enter Phone" required>

        <select name="course" required>
            <option value="">Select Course</option>
            <option value="BCA">BCA</option>
            <option value="BBA">BBA</option>
            <option value="BCOM">BCOM</option>
            <option value="BSC">BSC</option>
        </select>

        <button type="submit" name="submit">
            Submit
        </button>

    </form>

</div>

<footer>
    <p>© 2026 ABC College | All Rights Reserved</p>
</footer>

</body>
</html>
