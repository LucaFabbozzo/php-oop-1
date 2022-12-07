
<?php


class Movie 
{
  public $title;
  public $genre;
  public $year;
  public $rating;
  public $direction;

  /**
   * @param String $title
   * @param String $genre
   * @param String $year
   * @param String $rating
   * @param String $direction
   */
  public function __construct($_title, $_genre, $_year, $_rating, $_direction)
  {
    $this->title = $_title;
    $this->genre = $_genre;
    $this->year = $_year;
    $this->rating = $_rating;
    $this->direction = $_direction;
  }

  public function setImg($_img) {
    $this->img = $_img;
  }

  public function getImg() {
    $placeholder = 'https://t4.ftcdn.net/jpg/05/07/58/41/360_F_507584110_KNIfe7d3hUAEpraq10J7MCPmtny8EH7A.jpg';

    if($this->img) {
      return $this->img;
    }

    return $placeholder;
  }
}



