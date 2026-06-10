<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>Books</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container">

        <a class="navbar-brand" href="/">
            Online Book Store
        </a>

    </div>

</nav>

<div class="container mt-5">

    <h1 class="mb-4">
        Book Collection
    </h1>

    <form method="GET" action="/books">

        <div class="row mb-4">

            <div class="col-md-10">

                <input type="text"
                       name="search"
                       class="form-control"
                       placeholder="Search by title or author"
                       value="{{ $search ?? '' }}">

            </div>

            <div class="col-md-2">

                <button type="submit"
                        class="btn btn-primary w-100">

                    Search

                </button>

            </div>

        </div>

    </form>

    <div class="row">

        @forelse($books as $book)

            <div class="col-md-4 mb-4">

                <div class="card h-100">

                    <div class="card-body">

    <h5>
        {{ $book->title }}
    </h5>

    <p>
        Author:
        {{ $book->author }}
    </p>

    <p>
        Price:
        ₹{{ $book->price }}
    </p>

    <p>
        Stock:
        {{ $book->stock }}
    </p>

    <a href="/books/{{ $book->id }}"
       class="btn btn-primary">

        View Details

    </a>

</div>

                </div>

            </div>

        @empty

            <div class="alert alert-warning">
                No books found
            </div>

        @endforelse

    </div>

</div>

</body>
</html>