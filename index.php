<?php 
ob_start();

session_start();

?>   
   

<!DOCTYPE html>
    <html>
    <head>
        <title>Library Management System</title>
        <meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
        <link rel="icon" type="image/x-icon" href="VcmLogo.png">


        <style>
            body {
                background: linear-gradient(to right, #c8c6ba 50%, #880707 50%);
                margin: 0;
                display: flex;
                padding: auto;
            }

            .container {
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
                width: 100%;
            }

            .square {
                min-width: 100%;
                max-width: 1000px;
                height: 90vh;
                background-color: #eceaeb;
                border-radius: 20px;
                position: relative;
                padding: 20px;
                box-sizing: border-box;
            }

            .vcmc img {
                width: 350px;
                padding: auto;
                position: absolute;
                top: -20px;
                left: 20px;
                height: auto;
            }

            .square-inside {
                display: flex;
                align-items: center;
                justify-content: center;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 80%;
                max-width: 40%;
                height: 60%;
                background-color: #d9d6cd;
                border-radius: 40px;
                box-sizing: border-box;
                padding: 20px;
                flex-direction: column;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                background-color: #fff;
            }

            img[src="logo.png"] {
                position: absolute;
                top: 10px;
                left: 50%;
                transform: translateX(-50%);
                width: 130px;
                z-index: 1;
            }

            /* sana gumana sa media hahdhasdasd */
            @media (max-width: 768px) {
                .square {
                    width: 90%;
                }

                .square-inside {
                    width: 90%;
                }

                .vcmc img {
                    max-width: 200px;
                }

                img[src="logo.png"] {
                    width: 120px;
                }
            }

            @media (max-width: 480px) {
                .vcmc img {
                    max-width: 150px;
                }

                img[src="logo.png"] {
                    width: 100px;
                }

                .square-inside {
                    width: 80%;
                    height: auto;
                }
            }

            .input-group-text {
                background-color: #880707;
                color: #fff;
                border-top-left-radius: 10px;
                border-bottom-left-radius: 10px;
                border: none;
            }

            .form-control {
                border-top-right-radius: 10px;
                border-bottom-right-radius: 10px;
                border: 1px solid #880707;
                margin-bottom: 20px;
            }

            .btn-login {
                width: 100%;
                background-color: #880707;
                color: #fff;
                border-radius: 30px;
            }

            .form-check-label,
            .forgot-password, .signup {
                color: #880707;
            }

            .forgot-password {
                text-align: right;
            }
            .signup {
                text-align: left;
            }

           .signup::after  {
            content: '';
            position: absolute;
            width: 16%;
            transform: scaleX(0);
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #880707;
            transition: transform 0.25s ease-out;
           }    

           .forgot-password::after  {
            content: '';
            position: absolute;
            width: 38%;
            transform: scaleX(0);
            height: 2px;
            bottom: 0;
            left: 155px;
            background-color: #880707;
            transition: transform 0.25s ease-out;
            }          

            a.signup:hover::after, a.forgot-password:hover::after {
                transform: scaleX(1);
            }
            
            a.signup::after, a.forgot-password:hover::after {
                transform-origin: bottom right;
            }

            a.signup:hover, a.forgot-password:hover{
                color: #880707;
                text-decoration:none;
            }
            
            a.signup:hover::after, a.forgot-password::after {
                transform-origin: bottom left;
            }

            select.form-control {
                background-color: transparent;
                color: #880707;
                font-weight: bold;
                border-radius: 20px;
                border-color: transparent;
                padding: 5px;
                width: auto;
                font-size: 0.9rem;
                position: absolute;
                top: 10px;
                left: 10px;
            }

            select.form-control:hover {
                background-color: #F3F3E0;
            }       
            .d-flex {
                display: inline-block;
                position: relative;
                font-size: 12px;
            }     

            .btn:hover{
                color: #ffffff;         
            }   

            .login-button {
                background-color: #880707; 
                color: white;
                border: none;
                padding: 10px 0;
                font-size: 18px;
                width: 100%;
                border-radius: 8px;
                cursor: pointer;
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
                transition: transform 0.2s ease;
                margin-top: 20px;
            }

            .login-button:hover {
                transform: translateY(-3px);
                background-color: #6e1214; 
            }

            .login-button:focus {
                outline: none;
                box-shadow: 0 0 5px #ffcccc;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="square">
                <div class="vcmc">
                    <img src="vcmc.png" alt="VCMC Logo">
                </div>

                <img src="logo.png" alt="Logo">
                <div class="square-inside">
                <form method="POST">
                    <select name="role" class="form-control" required>
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        </div>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    
                    <div class="d-flex justify-content-between mt-2">
                        
                        <a href="signup.php" class="signup">Sign Up</a>

                        <a href="#" class="forgot-password">Forgot Password?</a>

                    </div>
                    <button type="submit" name="login" class="login-button">LOGIN</button>

                </form>
                <?php
            if (isset($_POST['login'])) {
                $connection = mysqli_connect("localhost", "root", "");

                if (!$connection) {
                    echo("Database connection failed: " . mysqli_connect_error());
                }

                $db = mysqli_select_db($connection, "lms");
                if (!$db) {
                    echo("Database selection failed: " . mysqli_error($connection));
                }

                $role = $_POST['role'];
                $username = mysqli_real_escape_string($connection, $_POST['username']);
                $password = mysqli_real_escape_string($connection, $_POST['password']);
                
                $query = ($role === 'user') 
                    ? "SELECT * FROM users WHERE username = '$username'" 
                    : "SELECT * FROM admins WHERE username = '$username'";
                
                $query_run = mysqli_query($connection, $query);
                $login_success = false;

                while ($row = mysqli_fetch_assoc($query_run)) {
                    if ($row['username'] == $username && $row['password'] == $password) {
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['id'] = $row['id'];
                        $login_success = true;
                        
                        header("Location: " . ($role === 'user' ? "user_dashboard.php" : "admin_dashboard.php"));
                        exit();
                    }
                }

                if (!$login_success) {
                    echo "<script>alert('Invalid username or password');</script>";
                }

                mysqli_close($connection);
            }
            ?>
        </div>
    </div>
</body>
</html>

<?php ob_end_flush(); ?>
