<?php 

global $title; // Try to avoid globals,as they are harder to troubleshoot and track through your application.
$title = 'PHP API/AJAX Example'; // $GLOBALS]'title'] = 'PHP HomePage';
include 'templates/header.php'; 
?>

    <h1> <?php echo $title; ?></h1>

    <?php include 'templates/navigation.php'; ?>

    <h2>PHP API/AJAX Example</h2>
    <form id = "php-ajax-form" 
        action = "includes/" 
        methods = "GET">
        <label for ="search">
        Enter a Search Term:
        <input type = "search"
        placeholder="Please Enter a search item..."
        name="search"
        id="search"
        value="">
        </label>
        <input 
        type="submit"
        value="Search">
    </form>
    <ul id="results"></ul>

<?php include 'templates/footer.php'; 