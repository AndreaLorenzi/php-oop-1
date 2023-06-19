<?php
class movies
{
    public $title;
    public $genre;
    public $year;
    public $production;


    // contruct
    function __construct($_title, $_genre, $_year, $_production)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
        $this->production = $_production;
    }


    function setTitle($_title)
    {
        $this->title;
    }
    function getTitle()
    {
        return $this->title;
    }

    function setGenre($_genre)
    {
        $this->genre;
    }
    function getGenre()
    {
        return $this->genre;
    }

    function setYear($_year)
    {
        $this->year;
    }
    function getYear()
    {
        return $this->year;
    }

    function setProduction($_production)
    {
        $this->production;
    }
    function getProduction()
    {
        return $this->production;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Informazioni sul film</title>
    <!-- Includi i file CSS di Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Informazioni sul film</h1>

        <?php
        // Creazione di un nuovo oggetto di film
        $movie = new movies('Avatar', 'Fantasy', 2021, 'James Cameron');
        ?>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title"> Titolo: <?php echo $movie->getTitle(); ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"> Genere:<?php echo $movie->getGenre(); ?></h6>
                <p class="card-text">
                    Anno: <?php echo $movie->getYear(); ?><br>
                    Regista: <?php echo $movie->getProduction(); ?>
                </p>
            </div>
        </div>
        <?php
        // Creazione di un nuovo oggetto di film
        $movie = new movies('Forrest Gump', 'Drammatico, storico', 1994, 'Robert Zemeckis');
        ?>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title"> Titolo: <?php echo $movie->getTitle(); ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"> Genere:<?php echo $movie->getGenre(); ?></h6>
                <p class="card-text">
                    Anno: <?php echo $movie->getYear(); ?><br>
                    Regista: <?php echo $movie->getProduction(); ?>
                </p>
            </div>
        </div>

        <?php
        // Creazione di un nuovo oggetto di film
        $movie = new movies('Endgame', 'Fantasy', 2019, 'Anthony & Joe Russo');
        ?>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title"> Titolo: <?php echo $movie->getTitle(); ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"> Genere:<?php echo $movie->getGenre(); ?></h6>
                <p class="card-text">
                    Anno: <?php echo $movie->getYear(); ?><br>
                    Regista: <?php echo $movie->getProduction(); ?>
                </p>
            </div>
        </div>
    </div>




    <!-- Includi i file JavaScript di Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>