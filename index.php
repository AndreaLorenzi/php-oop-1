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

    function getInformation()
    {
        return 'Titolo: ' . $this->getTitle() . '</br>' . 'Genere: ' . $this->getGenre() . '</br>' . 'Anno: ' . $this->getYear() . '</br>' . 'Regista: ' . $this->getProduction() . '</br>';
    }
}
