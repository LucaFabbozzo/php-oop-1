<?php


class Genre {
  public $drama;
  public $thriller;
  public $comedy;
  public $documentary;

  /**
   * @param String $drama
   * @param String $thriller
   * @param String $comedy
   * @param String $documentary
   */
  public function __construct($_drama = null, $_thriller = null, $_comedy = null, $_documentary = null)
  {
    $this->drama = $_drama;
    $this->thriller = $_thriller;
    $this->comedy = $_comedy;
    $this->documentary = $_documentary;
  }
}



