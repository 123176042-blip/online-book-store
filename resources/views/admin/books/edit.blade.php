<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <div class="row justify-content-center">

        <div class="col-12 col-md-8 col-lg-6">

            <h2 class="mb-4">Edit Book</h2>

            <form action="/admin/books/update/{{ $book->id }}" method="POST">

                @csrf

                <div class="mb-3">
                    <label class="form-label">Title</label>

                    <input type="text"
                           name="title"
                           class="form-control"
                           value="{{ $book->title }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Author</label>

                    <input type="text"
                           name="author"
                           class="form-control"
                           value="{{ $book->author }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Price</label>

                    <input type="number"
                           step="0.01"
                           name="price"
                           class="form-control"
                           value="{{ $book->price }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Stock</label>

                    <input type="number"
                           name="stock"
                           class="form-control"
                           value="{{ $book->stock }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>

                    <textarea name="description"
                              class="form-control"
                              rows="5">{{ $book->description }}</textarea>
                </div>

                <button type="submit"
                        class="btn btn-primary">
                    Update Book
                </button>

                <a href="/admin/books"
                   class="btn btn-secondary">
                    Back
                </a>

            </form>

        </div>

    </div>

</div>

</body>
</html>