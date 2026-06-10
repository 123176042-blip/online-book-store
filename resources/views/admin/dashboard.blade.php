<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2>Welcome {{ session('admin_name') }}</h2>

    <hr>

    <a href="/admin/books" class="btn btn-success">
        Manage Books
    </a>

   <a href="/api-books"
   class="btn btn-info">
   API Integration
</a>

</div>

</body>
</html>