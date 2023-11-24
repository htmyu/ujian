<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            width: 300px;
            margin: 10px auto;
        }

        .custom-label {
            color: red;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: blue;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: blue;
        }

        #message {
            color: #f00;
        }

        img{
            width:100%;
            border-radius:4px;
        }
    </style>
</head>
<body>

    <form id="loginForm">
    <h2>My Product Login</h2>
     <img src="1.jpg" alt="">
        <label for="username" class="custom-label">Username:</label>
        <input type="text" id="username" name="username" placeholder="Username" required><br><br>
        
        <label for="password" class="custom-label">Password:</label>
        <input type="password" id="password" name="password" placeholder="Password" required><br><br>
        
        <input type="submit" value="Login">
    </form>

    <p id="message"></p>

    <script>
        document.getElementById("loginForm").addEventListener("submit", function(event) {
            event.preventDefault();

            const validUsername = "admin";
            const validPassword = "1234";

            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;

            if (username === validUsername && password === validPassword) {
                window.location.href = "utama.php";
            } else {
                document.getElementById("message").innerHTML = "Username atau password salah. Silakan coba lagi.";
            }
        });
    </script>
</body>
</html>