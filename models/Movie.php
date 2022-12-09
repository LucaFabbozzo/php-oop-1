
<?php


class Movie 
{
  public $title;
  public $genre;
  public $originalLenguage;
  public $year;
  public $rating;
  public $direction;
  public $actors;
  public static $company = "Fabbflix";

  /**
   * @param String $title
   * @param String $genre
   * @param String $originalLenguage;
   * @param String $year
   * @param String $rating
   * @param String $direction
   * @param String $actors
   */
  public function __construct($_title, Genre $_genre, OriginalLenguage $_originalLenguage, $_year, $_rating, $_direction, $_actors)
  {
    $this->title = $_title;
    $this->genre = $_genre;
    $this->originalLenguage = $_originalLenguage;
    $this->year = $_year;
    $this->rating = $_rating;
    $this->direction = $_direction;
    $this->actors = $_actors;
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

  public static function getCompany($string) {
    return $string . self::$company;
  }
  
}



