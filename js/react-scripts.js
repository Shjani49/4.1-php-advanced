const reactRoot = document.getElementById( 'root' );

// Search form component.
const SearchForm = props =>
{
  // Manage "search" term in state.
  const [search, setSearch] = React.useState( '' );
  const [results, setResults] = React.useState( [] );

  // Handle form submission.
  const submitSearch = event => {
    event.preventDefault();
    // console.log( "Attempted to submit!" ); // Tested and working!
    // Make a request to the expected URL (API endpoint.)
    fetch ( `includes/ajax-api.php?search=${search}` )
      // Convert the response from a JSON string to a JavaScript object / array. 
      .then( response => response.json() )
      // Deal with the data.
      .then( data => {
        // console.log( data ); // Looks like we're getting results!
        // Capture our results in the component state.
        setResults( data );
      } )
      // If an error is encountered, notify us (check the browser console.)
      .catch( error => {
        throw error;
      } );
  }

  // Return the JSX (render the component.)
  return (
    <section>
      <h2>Search Form</h2>
      <form onSubmit={submitSearch}>
        <label htmlFor="search">
          Search People:
          <input
          required
            type="search"
            name="search"
            id="search"
            placeholder="Enter term(s)..."
            value={search}
            onChange={event => { setSearch( event.target.value ) }} />
        </label>
        <input type="submit" value="Submit Search" />
      </form>
      <h3>Search Results</h3>
      <ul id="results">
        {results.map( person => (
          <li key={person.name}>
            Hi! I am {person.name}. I am {person.age} years old!
          </li>
        ) )}
      </ul>
    </section>
  );
};

ReactDOM.render( <SearchForm />, reactRoot );
