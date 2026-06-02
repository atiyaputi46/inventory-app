<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Inventory App</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="/">Inventory App</a>

            <div class="navbar-nav">
                <a class="nav-link text-white" href="/">Home</a>
                <a class="nav-link text-white" href="/products">Product</a>
                <a class="nav-link text-white" href="/categories">Category</a>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer class="bg-dark text-white text-center py-2 fixed-bottom">
        © 2026 Inventory App - Manajemen Informatika PNP
    </footer>

</body>
</html>