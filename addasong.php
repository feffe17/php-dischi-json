<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="./index.css" />
</head>

<body>
    <header class="py-2 px-4 d-flex justify-content-between align-items-center">
        <a href="./index.php" class="title">Sorryfy</a>
        <a href="" class="add-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
            </svg>
        </a>
    </header>

    <main class="mt-3 vh-100">
        <div class="container">
            <form action="./index.php" method="post" class="row g-3 text-light">
                <div class="col-md-6">
                    <label for="titolo" class="form-label ">Titolo</label>
                    <input type="text" class="form-control" id="titolo" name="titolo" required>
                </div>
                <div class="col-md-6">
                    <label for="artista" class="form-label">Artista</label>
                    <input type="text" class="form-control" id="artista" name="artista" required>
                </div>
                <div class="col-md-6">
                    <label for="anno_pubblicazione" class="form-label">Anno di pubblicazione</label>
                    <input type="number" class="form-control" id="anno_pubblicazione" name="anno_pubblicazione" required>
                </div>
                <div class="col-md-6">
                    <label for="genere" class="form-label">Genere</label>
                    <input type="text" class="form-control" id="genere" name="genere" required>
                </div>
                <div class="col-12">
                    <label for="url_cover" class="form-label">URL Cover</label>
                    <input type="url" class="form-control" id="url_cover" name="url_cover">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Aggiungi</button>
                </div>

            </form>
        </div>
    </main>

    <!-- Bootstrap JavaScript Libraries -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>