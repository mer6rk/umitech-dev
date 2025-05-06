<?php 

if (!defined('ACCESS_ALLOWED')) {
    header("HTTP/1.1 403 Forbidden");
    exit('<h1>403 Forbidden</h1>' . '<hr>');
};

?>

<!DOCTYPE html>
<html lang="en">

<?php include 'partials/header.php'; ?>

<body>
    
    <?php include 'partials/sidebar/side_panel.php'; ?>

</body>

</html>