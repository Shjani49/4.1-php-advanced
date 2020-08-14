const reactRoot = document.getElementById( 'root' );
// Search form Component
const searchForm = props =>{
// Return the JSX (render the component)
    return(
        <>
        <h2>Search form</h2>
        <form onSubmit ={}>
            <label htmlFor = "search">
                Search People:
                <input type = "search" 
                name ="search" 
                id ="search" 
                placeholder = "Enter term(s)..."/>
            </label>
            <input type ="submit" value ="submit Search" />
        </form>
        <h3>Search Results</h3>
        <ul id ="results"></ul>
        </>
    );
};

ReactDOM.render( );