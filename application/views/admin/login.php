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
        width: 350px;
        /* Lebar kartu login */
    }

    .card-title {
        margin-bottom: 1.5rem;
    }

    .alert {
        margin-top: 1rem;
    }
</style>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6"> <!-- Lebar kolom diperbesar menjadi 6 -->
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center">Login</h3>
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
                            } ?>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                    </div>
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