<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
    body {
        background-color: #f8f9fa;
    }

    .container {
        height: 100vh;
        display: flex;
        justify-content: center;
        /* Menggeser container ke tengah */
        align-items: center;
    }

    .card {
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        width: 400px;
        /* Lebar kartu login */
        padding: 30px;
        border-radius: 5px;
    }

    .card-title {
        margin-bottom: 1.5rem;
    }

    .alert {
        margin-top: 1rem;
    }

    /* Style for Google logo */
    .google-logo {
        margin-bottom: 20px;
        text-align: center;
    }

    .google-logo img {
        max-width: 150px;
    }

    /* Style for input boxes */
    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        font-weight: bold;
    }

    .form-control {
        height: 40px;
        font-size: 16px;
    }

    /* Style for the login button */
    .login-button {
        margin-top: 20px;
    }

    .login-button button {
        height: 40px;
        font-size: 16px;
    }

    /* Style for the link to create an account or forgot password */
    .link-section {
        text-align: center;
        margin-top: 20px;
    }

    .link-section a {
        color: #4285f4;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="google-logo">
                        <img src="<?php echo base_url() ?>assets/img/logo.png" alt=" Google Logo">
                    </div>
                    <h3 class="card-title text-center">Media Informasi<br>
                        <span>Tugas Akhir</span>
                    </h3>
                    <form id="loginForm" action="<?php echo base_url('admin/login'); ?>" method="post">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" name="username" id="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        <?php if (isset($error)) {
                            echo '<div class="alert alert-danger" role="alert">' . $error . '</div>';
                        } ?><br>
                        <div class="login-button">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // Prevent form submission when pressing "Enter" key
            $('#loginForm').on('keypress', function (e) {
                return e.which !== 13;
            });
        });
    </script> <!-- Custom JavaScript file -->
</body>

</html>