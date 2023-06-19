<?php include __DIR__ . '/db.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Informazioni sui film</title>
    <!-- Includi i file CSS di Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Informazioni sui film</h1>

        <?php foreach ($movies as $movie) : ?>
            <?php include __DIR__ . '/partials/movie_card.php'; ?>
        <?php endforeach; ?>
    </div>

    <!-- Includi i file JavaScript di Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>