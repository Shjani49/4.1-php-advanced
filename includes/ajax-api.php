<?php
if( isset( $_GET['search'] ) && !empty( $_GET['search'] ) )
{
    //Retrieve the people data
    $peopleString = file_get_contents('../data/people.json');
    //If successful,proceed
    if( $peopleString !== FALSE )
    {
        // Attempt to convert JSON from a string to aPHP array / object 
        if( ( $peopleArray = json_decode( $peopleString) ) !== NULL )
        {
           // var_dump( $peopleArray ); good to test and make sure we're getting the data!
           // We can setup an array to store matches in...
        }
    
    }
    else{
        echo 'Unable to retrieve "People" data.';
    }
}
else{
    echo 'Invalid / no search term provided.';
}