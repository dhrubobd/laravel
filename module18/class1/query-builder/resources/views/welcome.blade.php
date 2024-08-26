<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Building Different Queries Using Eloquent</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
       
    </head>
    <body>
        <h2>Building Different Queries Using Eloquent</h2>
        <ul>
            <li><a href="/show-books">Show All Books</a></li>
            <li><a href="/count-authors">Count Author</a></li>
            <li><a href="/get-2-authors">Show 2 Author</a></li>
            <li><a href="/get-2-after3">Show 2 Author after first 3 author</a></li>
            <li><a href="/get-a-book">Searching a Particular Book</a></li>
            <li><a href="/get-first-5-books">Searching first 5 Books</a></li>
        </ul>
        <h2>Eloquent ORM Practice</h2>
        <ul>
            <li><a href="/orm/add-author">Add Author</a></li>
            <li><a href="/orm/update-book">Update Book</a></li>
            <li><a href="/orm/update-create-book">Update or Create Book</a></li>
            <li><a href="/orm/delete-book">Delete Book</a></li>
            <li><a href="/orm/increase-book-price">Increse Book Price</a></li>
            <li><a href="/orm/decrese-book-price">Decrese Book Price</a></li>
            <li><a href="/orm/count-book-price">Count Book Price</a></li>
            <li><a href="/orm/total-book-price">Total Price of Books</a></li>
            <li><a href="/orm/avg-book-price">Avarage Price of Books</a></li>
            <li><a href="/orm/max-book-price">Maximum Price of a Book</a></li>
            <li><a href="/orm/min-book-price">Minumum Price of a Book</a></li>
            <li><a href="/orm/show-book-titlenprice">Show/Select Book Title and Price From Books table</a></li>
            <li><a href="/orm/authors-with-books">Show Authors with all Books (relationship)</a></li>
        </ul>

    </body>
</html>
