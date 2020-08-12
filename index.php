<?php 
global $title; // Try to avoid globals,as they are harder to troubleshoot and track through your application.
$title = 'PHP HomePage'; // $GLOBALS]'title'] = 'PHP HomePage';
include 'templates/header.php'; 
?>

    <h1> <?php echo $title; ?></h1>

<?php include 'templates/footer.php'; 