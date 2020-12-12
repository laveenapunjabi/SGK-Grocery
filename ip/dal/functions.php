<?php
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'remotemysql.com';
    $DATABASE_USER = 'yL8dDuN9Va';
    $DATABASE_PASS = 'wwOjztezvD';
    $DATABASE_NAME = 'yL8dDuN9Va';
    try {
        return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
        // If there is an error with the connection, stop the script and display the error.
        exit('Failed to connect to database!');
    }
}
// Template header, feel free to customize this
function template_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>$title</title>
        <link href="categories.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    </head>
    <body>
        <header>
            <div class="content-wrapper">
                <h1>SGK</h1>
                <nav>
                    <a href = "http://localhost/sample/index.php"><h1 style="text-decoration: none; color: white; font-size: 25px;">Home</h1></a>
                    <a href="index1.php">Categories</a>
                    
                </nav>
                <div class="link-icons">
                    <a href="index1.php?page=cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </div>
            </div>
        </header>
        <main>
EOT;
}
// Template footer
function template_footer() {
$year = date('Y');
echo <<<EOT
        </main>
        <footer>
            <div class="content-wrapper">
                <p>&copy; $year, SGK</p>
            </div>
        </footer>
        <script src="script.js"></script>
    </body>
</html>
EOT;
}
?>