<?php 
session_start(); // Session_start() is required for us to access any values stored in this user's session.
//Note : We are not including calc-history.php , because we aren't using our "showCalHistory() function in this file.
global $title; // Try to avoid globals,as they are harder to troubleshoot and track through your application.
$title = 'PHP Calculator'; // $GLOBALS]'title'] = 'PHP HomePage';
include 'templates/header.php'; 
?>

    <h1> <?php echo $title; ?></h1>

    <?php include 'templates/navigation.php'; ?>
    <?php 
        // $_POST $_GET 
        echo '<pre>'; //pre is use for predefine style in html
        var_dump( $_GET ); // var_dump is our best friend, it outputs all the info for the variable and/or expression we pass it!
        echo '</pre>';

        //Prepare to store some warnings for the user...
        $warnings = array();

        // check if the form fields are all submitted...
        /**
         * isset() checks to see if a value is declared / defined at all.
         * empty() checks to see if a value is an empty string, zero, or the array has no elements.
         */
        if( isset( $_GET['num1'] ) && !empty( $_GET['num1'] ) ) 
        {
            $num1 = (integer) $_GET['num1']; // We can type-cast 
        }else
        {
            $warnings[] = 'First operand is missing'; //array_push($warnings, 'New warnings.')
        }
        if( isset( $_GET['operator'] ) )
        {
            $operator = (string) $_GET['operator'];
        }else
        {
            $warnings[] = 'Operator is missing';
        }
        if( isset( $_GET['num2'] ) && !empty( $_GET['num2'] ) )
        {
            $num2 =  (integer) $_GET['num2'];
        }else
        {
            $warnings[] = 'Second operand is missing';
        }
        
        // Make sure we have values we can use..
        if( isset( $num1 ) && isset( $operator ) && isset( $num2 ) )
        {
            switch ( $operator )
            {
                case 'add':
                    $result = $num1 + $num2;
                    break;
                case 'subtract':
                    $result = $num1 - $num2;
                    break;
                case 'multiply':
                    $result = $num1 * $num2;
                    break;
                case 'divide':
                    $result = $num1 / $num2;
                    break;
            }
            // Check if our result is available.
            if ( isset( $result ) ) {
                // If we want to push to an array... it needs to be an array! Let's make sure it is the proper data-type if it isn't already defined.
                if ( !isset( $_SESSION['calc-history'] ) || empty( $_SESSION['calc-history'] ) ) {
                $_SESSION['calc-history'] = array();
                }
                array_push( // Add this result to the 'calc-history' session array.
                $_SESSION['calc-history'],
                "$num1 $operator $num2 = $result"
                );
            }
        }
    ?>
    
  <h2>PHP Calculator Form</h2>
  <form action="calc.php" method="GET">
    <?php if(!empty( $warnings ) ) : ?>
        <ul>
            <?php foreach( $warnings as $warning ) : ?>
                <li>
                    <?php echo $warning; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <label for="num1">
      First Operand:
      <input type="number" name="num1" id="num1"/>
    </label>
    <label for="operator">
      Operator:
      <select name="operator" id="operator">
        <option value="add">+</option>
        <option value="subtract">-</option>
        <option value="multiply">&times;</option>
        <option value="divide">&divide;</option>
      </select>
    </label>
    <label for="num2">
      Second Operand:
      <input type="number" name="num2" id="num2"/>
    </label>
    <input type="submit" value="Get Result"/>
    <?php if( isset( $result )) : ?>
    <label for ="result">
        Result:
        <input type ="number" value ="<?php echo $result; ?>" disabled>
    </label>
    <?php endif; ?>
  </form>

<?php include 'templates/footer.php'; 