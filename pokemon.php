<?php 
include 'includes/Pokemon.Class.php';
global $title; // Try to avoid globals,as they are harder to troubleshoot and track through your application.
$title = 'PHP Classes (Pokemon)'; // $GLOBALS]'title'] = 'PHP HomePage';
include 'templates/header.php'; 
?>

    <h1> <?php echo $title; ?></h1>

    <?php include 'templates/navigation.php'; ?>

  <h2> Test Pokemon Output</h2>
  <?php 
    $pikachu = new Pokemon();
    // The "name Property is public- so we can read an write from anywhere!
    $pikachu->name = 'PikaPika';
    echo $pikachu->name;
    // The "level" Property is private - so we can ONLY read and write from within the class' logic.
    // $pikachu->level +=1;
    // echo  $pikachu->level;
    $pikachu->levelUp();
    echo $pikachu->getLevel();
  
  ?>

<?php include 'templates/footer.php'; 