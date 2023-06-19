<div class="card">
    <div class="card-body">
        <h5 class="card-title">Titolo: <?php echo $movie->getTitle(); ?></h5>
        <h6 class="card-subtitle mb-2 text-muted">Genere: <?php echo implode(', ', $movie->getGenres()); ?></h6>
        <p class="card-text">
            Anno: <?php echo $movie->getYear(); ?><br>
            Regista: <?php echo $movie->getProduction(); ?>
        </p>
    </div>
</div>