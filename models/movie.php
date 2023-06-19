<?php
class Movie
{
    public $title;
    public $genres;
    public $year;
    public $production;

    public function __construct($_title, $_genres, $_year, $_production)
    {
        $this->title = $_title;
        $this->genres = $_genres;
        $this->year = $_year;
        $this->production = $_production;
    }

    public function setTitle($_title)
    {
        $this->title = $_title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setGenres($_genres)
    {
        $this->genres = $_genres;
    }

    public function getGenres()
    {
        return $this->genres;
    }

    public function setYear($_year)
    {
        $this->year = $_year;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setProduction($_production)
    {
        $this->production = $_production;
    }

    public function getProduction()
    {
        return $this->production;
    }
}
