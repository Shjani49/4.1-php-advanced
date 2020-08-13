// Retrieve API form element.
const myApiForm = document.getElementById( 'php-ajax-form' );
// Check if the form was successfully found before proceeding.
if ( myApiForm )
{
  // Where is our API endpoint?
  const apiEndpoint = 'includes/ajax-api.php';
  // Let's make sure we have access to our "search" term field.
  const searchField = document.getElementById( 'search' );
  const resultsList = document.getElementById( 'results' );
  // Listen for a submission on the page's form.
  myApiForm.addEventListener( 'submit', event => {
    // Prevent the default submit action (loading the form's "action" URL.)
    event.preventDefault();
    // Empty the list to make way for new results.
    resultsList.innerHTML = '';
    // JavaScript "fetch" for a response.
    fetch ( `${apiEndpoint}?search=${searchField.value}` )
      // Grab the response.  
      .then ( response => {
        // Convert the JSON string to a JavaScript object.
        return response.json();
      } )
      // Let's work with that data in JS now!
      .then ( array => {
        // console.log( array ); // Looks like we're getting it as an array of objects!
        for ( const person of array )
        {
          const personLI = document.createElement( 'LI' );
          personLI.textContent = `${person.name}; ${person.age} years old.`;
          resultsList.appendChild( personLI );
        }
      } );
  } );
} 
