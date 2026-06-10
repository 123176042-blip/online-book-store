<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Books</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid mt-4">

    <div class="row">

        <div class="col-12">

            <h2 class="mb-3">Manage Books</h2>

            <a href="/admin/books/create"
               class="btn btn-primary mb-3">
                Add Book
            </a>

            <div class="table-responsive">

                <table class="table table-bordered table-striped table-hover">

                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th width="150">Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($books as $book)

                        <tr>

                            <td>{{ $book->id }}</td>

                            <td>{{ $book->title }}</td>

                            <td>{{ $book->author }}</td>

                            <td>₹{{ $book->price }}</td>

                            <td>{{ $book->stock }}</td>

                            <td>

                                <a href="/admin/books/edit/{{ $book->id }}"
                                   class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <a href="/admin/books/delete/{{ $book->id }}"
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('Are you sure?')">
                                    Delete
                                </a>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td colspan="6" class="text-center">
                                No Books Found
                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

</body>
</html>