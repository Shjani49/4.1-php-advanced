const reactRoot = document.getElementById( 'root' );

// Search form component.
const SearchForm = props => {
  
  // Return the JSX (render the component.)
  return (
    <section>
      <h2>Search Form</h2>
      <form>
        <label htmlFor="search">
          Search People:
          <input
            type="search"
            name="search"
            id="search"
            placeholder="Enter term(s)..." />
        </label>
        <input type="submit" value="Submit Search" />
      </form>
      <h3>Search Results</h3>
      <ul id="results"></ul>
    </section>
  );
};

ReactDOM.render( <SearchForm />, reactRoot );
