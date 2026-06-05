<?php
include_once 'config/database.php';
include_once 'classes/Student.php';
include_once 'classes/Result.php';

$database = new Database();
$db = $database->getConnection();

$page_title = "Result Management System";
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $page_title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        .main-buttons {
            margin-top: 100px;
        }
        .btn-lg {
            padding: 15px 30px;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-end mb-4">
            <div class="col-auto">
                <a href="admin/login.php" class="btn btn-outline-primary">
                    <i class="fa fa-lock"></i> Admin Login
                </a>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-12">
                <h1 class="display-4 mb-4"><?php echo $page_title; ?></h1>
            </div>
        </div>
        
        <div class="row main-buttons">
            <div class="col-md-6 offset-md-3 text-center">
                <a href="student/view_result.php" class="btn btn-lg btn-primary mb-3 w-100">
                    <i class="fa fa-search"></i> View Your Result
                </a>
                <p class="text-muted">Enter your roll number to check your results</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 