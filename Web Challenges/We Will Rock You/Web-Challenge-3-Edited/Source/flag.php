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

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Add specific styles for the content of flag.php */
        #flag-content {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            color: #007bff;
        }

        /* Styles for the PHP output */
        #php-content {
            font-size: 18px;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Flag Page</h1>
    </header>

    <main>
        <div id="flag-content">
            Log-In Success!
        </div>

        <div id="php-content">
            <?php
            session_start();
            if (isset($_SESSION["authSuccess"]) && $_SESSION["authSuccess"] == true) {
                echo "Congrats! Here is your flag: ROK{Bru7e_F0rc3_Att4ck!}"; # Edit here, put your flag or something
                session_destroy();
            } else {
                echo "Wait, you cannot directly get the flag like that.. we will we will rock you"; # maybe you could put hints here..
            }
            ?>
        </div>
    </main>
</body>
</html>
