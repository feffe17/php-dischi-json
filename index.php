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
</head>

<body>
    <header>
        <h1 class="text-center">Titolo</h1>
    </header>

    <div class="container">
        <div class="row">
            <?php foreach ($cds_list as $cd): ?>
                <div class="col-xs-12 col-sm-6 col-md-4 p-3">
                    <div class="card h-100">
                        <img src="<?= !empty($cd['url_cover']) ? $cd['url_cover'] : 'https://placehold.co/400x400' ?>" class="w-100 rounded-top" alt="cover">
                        <div class="card-body text-center">
                            <h2><?= htmlspecialchars($cd['titolo']) ?></h2>
                            <h3><?= htmlspecialchars($cd['artista']) ?></h3>
                            <h3><?= htmlspecialchars($cd['anno_pubblicazione']) ?></h3>
                            <h3><?= htmlspecialchars($cd['genere']) ?></h3>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>