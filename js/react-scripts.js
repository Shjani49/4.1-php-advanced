const reactRoot = document.getElementById( 'root' );

// Search form component.
const SearchForm = props => 
{
    // Mange "search" term in state
    const[search, setSearch] = React.useState('');
    // Handle form submission.
    const submitSearch = event =>{
        event.preventDefault();
        //console.log( "Attempt to submit!"); //Tested and working!
    }
  
  // Return the JSX (render the component.)
  return (
    <section>
      <h2>Search Form</h2>
      <form onSubmit= {submitSearch}>
        <label htmlFor="search">
          Search People:
          <input
            type="search"
            name="search"
            id="search"
            placeholder="Enter term(s)..." 
            value ={search}
            onChange={ event => { setSearch( event.target.value) } } />
        </label>
        <input type="submit" value="Submit Search" />
      </form>
      <h3>Search Results</h3>
      <ul id="results"></ul>
    </section>
  );
};

ReactDOM.render( <SearchForm />, reactRoot );
