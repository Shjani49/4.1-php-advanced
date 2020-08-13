<?php
// Retrieve list of Pokemon from API.
function retrievePokemon($limit = 100, $offset = 200)
{
  // Retrieve response string from API endpoint.
  $responseString = file_get_contents("https://pokeapi.co/api/v2/pokemon?limit={$limit}&offset={$offset}");
  //var_dump( $responseString ); // AWESOME! We're getting a result!
  // Convert response JSON string into a PHP array / object.
  if ($responseString !== FALSE) {
    // Convert the JSON string into a valid PHP object using json_decode().
    if (($responseObj = json_decode($responseString)) !== NULL) {
      // var_dump( $responseObj );
      // Collect the array of results from the response object's "results" property.
      $results = $responseObj->results;
      // var_dump( $results );
      return $results;
    } else { // Could not convert string to object (json_decode().)
      echo 'Could not interpret API response.';
    }
  } else { // Unable to get a response at all from our API endpoint.
    echo 'Unable to connect / retrieve data from API.';
  }
  return FALSE;
}
