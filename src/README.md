# Movie API Endpoints

This table outlines the endpoints available for interacting with the Movie resource in the API.


| Action                       | Method | URL                   | Description                                                |
|------------------------------|--------|-----------------------|------------------------------------------------------------|
| Create a movie               | POST   | /movies               | Create a new movie in the database.                        |
| Get a list of movies         | GET    | /movies               | Get a list of all movies.                                  |
| Get information about a movie by ID | GET | /movies/{id}      | Get information about a specific movie by its identifier.  |
| Update information about a movie by ID | PUT or PATCH | /movies/{id} | Update information about an existing movie by its identifier. |
| Delete a movie by ID         | DELETE | /movies/{id}          | Delete a movie from the database by its identifier.        |
| Search for movies by criteria| GET    | /movies/search        | Search for movies based on specified criteria passed in the request parameters. |
| Filter movies                | GET    | /movies               | Filter the list of movies based on specified criteria passed in the request parameters. |

### Examples:
- Searching for movies by title: `/movies/search?title=The%20Matrix`
- Filtering movies by genre: `/movies?genre=action`
- Filtering movies by year and rating: `/movies?year=2022&rating=8.0`
