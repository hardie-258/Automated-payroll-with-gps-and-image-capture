<?php
require_once 'db_connect.php';
require_once 'person.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userID = $_POST['id'];
    $password = $_POST['password'];
    $per = new PERSON();
    $per->login($userID, $password);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .container {
            background: rgba(0, 0, 0, 0.5) url(images/FreeVector-Global-Business-Background-1.jpg) no-repeat;
            background-position: center;
            background-size: cover;
            min-height: 100vh;

            overflow: hidden;
            background-blend-mode: overlay;
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 25px 80px;
            background: linear-gradient(to top, transparent, rgba(0, 0, 0, 0.6));
        }

        header .logo {
            font-size: 28px;
            font-weight: 700;
            color: #fff;
            float: left;
        }

        header .menu {
            float: right;
            margin-top: 5px;
        }

        header ul li {
            display: inline-block;
        }

        header ul li a {
            text-decoration: none;
            font-size: 16px;
            color: #fff;
            margin: 0 25px;
            font-weight: 300;
            letter-spacing: 1px;
        }

        .form-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            padding-bottom: 60px;

        }

        .form-container form {
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
            background: #fff;
            text-align: center;
            width: 500px;
        }

        .form-container form h3 {
            font-size: 30px;
            text-transform: uppercase;
            margin-bottom: 10px;
            color: #333;
        }

        .form-container form input {
            width: 100%;
            padding: 10px 15px;
            font-size: 17px;
            margin: 8px 0;
            background: #eee;
            border-radius: 5px;
        }

        .form-container form p {
            margin-top: 10px;
            font-size: 20px;
            color: #333;
        }

        .form-container form p a {
            color: crimson;
        }

        .form-container form .form-btn {
            background: crimson;
            color: #fff;
        }
    </style>


</head>

<body>
    <div class="container">
        <header>
            <div class="logo">LOGO</div>
            <div class="menu">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>

                </ul>
            </div>
        </header>
        <div class="form-container">
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                <h3>login now</h3>
                <input type="text" name="id" required placeholder="Enter your id">
                <input type="password" name="password" required placeholder="Enter your password">

                <input type="submit" name="submit" value="login now" class="form-btn">
                <p>don't have an account? <a href="signup.html">register now</a> </p>
            </form>
        </div>

    </div>
</body>

</html>