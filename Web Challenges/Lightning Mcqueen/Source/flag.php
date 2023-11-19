<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flag Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        nav {
            background-color: #007bff;
            color: #fff;
            text-align: center;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            padding: 10px 20px;
            display: inline-block;
        }

        nav a:hover {
            background-color: #0056b3;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <header>
        <h1>Flag Page</h1>
    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="login.php">Login</a>
    </nav>

    <main>
        <h2>Flag Content</h2>
        <p>ROK{1_4m_Sp33d_K4ch0w}</p>
    </main>

    <script>
        // Redirect to "about.php" after 0.3 seconds
        setTimeout(function () {
            window.location.href = "about.php";
        }, 10);
    </script>
</body>
</html>
