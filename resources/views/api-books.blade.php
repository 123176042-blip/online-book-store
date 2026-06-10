<!DOCTYPE html>
<html>
<head>
    <title>API Books</title>

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <h2>External API Books</h2>

    <div class="row">

        @foreach($books['docs'] as $book)

        <div class="col-md-4 mb-3">

            <div class="card">

                <div class="card-body">

                    <h5>
                        {{ $book['title'] ?? 'No Title' }}
                    </h5>

                    <p>
                        Author:
                        {{ $book['author_name'][0] ?? 'Unknown' }}
                    </p>

                </div>

            </div>

        </div>

        @endforeach

    </div>

</div>

</body>
</html>