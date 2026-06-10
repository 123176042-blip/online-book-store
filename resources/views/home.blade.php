<!DOCTYPE html>

<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Online Book Store</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
     <div class="container">

        <a class="navbar-brand" href="/">
            Online Book Store
        </a>

        <div>
            <a href="/books" class="btn btn-light">
                Books
            </a>
        </div>

     </div>
   </nav>

   <div class="container mt-5">

    <div class="bg-light p-5 rounded text-center">

        <h1>Welcome to Online Book Store</h1>

        <p class="lead">
            Discover your favorite books.
        </p>

        <a href="/books" class="btn btn-primary">
            Browse Books
        </a>

    </div>

</div>

<div class="container mt-5">

    <h2 class="mb-4">
        Latest Books
    </h2>

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

                    </div>

                </div>

            </div>

        @empty

            <div class="alert alert-info">
                No books available
            </div>

        @endforelse

    </div>

</div>
</body>
</html>