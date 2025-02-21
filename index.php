<?php
$cds_list = file_get_contents("./cds.json");
$cds_list = json_decode($cds_list, true);
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="./index.css" />
</head>

<body>
    <header>
        <h1 class="text-center m-0">Titolo</h1>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <?php foreach ($cds_list as $cd): ?>
                    <div class="col-12 col-sm-6 col-md-4 p-3 d-flex">
                        <div class="card h-auto w-100">

                            <div class="album-cover" style="background-image: url('<?= !empty($cd['url_cover']) ? $cd['url_cover'] : 'https://placehold.co/400x400' ?>')">
                                <div class="play-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60%" height="60%" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                                        <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393" />
                                    </svg>
                                </div>
                            </div>
                            <div class="card_body h-25 text-center text-secondary">
                                <h3><?= htmlspecialchars($cd['titolo']) ?></h3>
                                <p><?= htmlspecialchars($cd['artista']) ?></p>
                                <p><?= htmlspecialchars($cd['anno_pubblicazione']) ?></p>
                                <p><?= htmlspecialchars($cd['genere']) ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>