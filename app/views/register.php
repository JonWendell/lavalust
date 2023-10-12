<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .register-container {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .register-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .register-container form {
            display: flex;
            flex-direction: column;
        }
        .register-container form input {
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .register-container form input[type="text"],
        .register-container form input[type="password"] {
            width: 100%;
        }
        .register-container form input[type="submit"] {
            background: #007BFF;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .register-container form input[type="submit"]:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <form>
            <input type="text" placeholder="Username" required>
            <input type="password" placeholder="Password" required>
            <input type="password" placeholder="Confirm Password" required>
            <input type="text" placeholder="Email" required>
            <input type="text" placeholder="Full Name" required>
            <input type="submit" value="Register">
            <a href="/login">Login</a>
        </form>
    </div>
</body>
</html>
