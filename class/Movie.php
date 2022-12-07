
<?php


class Movie 
{
  public $title;
  public $original_title;
  public $genre;
  public $year;
  public $rating;
  public $direction;

  /**
   * @param String $title
   * @param String $original_title
   * @param String $genre
   * @param String $year
   * @param String $rating
   * @param String $direction
   */
  public function __construct($_title, $_original_title, $_genre, $_year, $_rating, $_direction)
  {
    $this->title = $_title;
    $this->original_title = $_original_title;
    $this->genre = $_genre;
    $this->year = $_year;
    $this->rating = $_rating;
    $this->direction = $_direction;
  }
}


