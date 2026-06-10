<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>{{ $book->title }}</title>

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

    <div class="card shadow">

        <div class="card-header">

            <h2>
                {{ $book->title }}
            </h2>

        </div>

        <div class="card-body">

            <p>
                <strong>Author:</strong>
                {{ $book->author }}
            </p>

            <p>
                <strong>Price:</strong>
                ₹{{ number_format($book->price, 2) }}
            </p>

            <p>
                <strong>Stock:</strong>
                {{ $book->stock }}
            </p>

            <p>
                <strong>Description:</strong>
            </p>

            <p>
                {{ $book->description }}
            </p>

            <a href="/books"
               class="btn btn-secondary">

                Back to Books

            </a>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>