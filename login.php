<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('beach.jpg'); /* Set the background image here */
            background-size: cover; /* Make sure the background image covers the whole screen */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Prevent repeating the image */
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            background: rgba(255, 255, 255, 0.8); /* Slight opacity to allow background image to be visible */
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .textbox {
            margin-bottom: 20px;
        }

        .textbox input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            outline: none;
        }

        .textbox input:focus {
            border-color: #4CAF50;
        }

        .button button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 4px;
            background-color: #4CAF50;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button button:hover {
            background-color: #45a049;
        }

        .footer {
            margin-top: 10px;
            font-size: 14px;
        }

        .footer a {
            color: #4CAF50;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">

        <div class="login.php">

            <h2>Login</h2>
            <form action="#" method="POST">
                <div class="textbox">
                    <input type="text" placeholder="Username" name="username" required>
                </div>
                <div class="textbox">
                    <input type="password" placeholder="Password" name="password" required>
                </div>
                <div class="button">
                    <button type="submit">Login</button>
                </div>
                <div class="footer">
                    <p>Don't have an account? <a href="registration.html">Sign Up</a></p>
                
                    <p><a href="index.php">Home</a></p> <!-- Home link added -->
                </div>
            </form>
        </div>
    </div>
</body>
</html>