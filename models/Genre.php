<?php


class Genre {
  public $action;
  public $adventure;
  public $biography;
  public $comedy;
  public $crime;
  public $documentary;
  public $drama;
  public $fantasy;
  public $horror;
  public $thriller;

  /**
   * @param String $action
   * @param String $adventure
   * @param String $biography
   * @param String $comedy
   * @param String $crime
   * @param String $documentary
   * @param String $drama
   * @param String $fantasy
   * @param String $horror
   * @param String $thriller;
   */
  public function __construct($_action = null, $_adventure = null, $_biography = null, $_comedy = null, $_crime = null, $_documentary = null,$_drama = null, $_fantasy = null, $_horror = null, $_thriller = null)
  {
    $this->action = $_action;
    $this->adventure = $_adventure;
    $this->biography = $_biography;
    $this->comedy = $_comedy;
    $this->crime = $_crime;
    $this->documentary = $_documentary;
    $this->drama = $_drama;
    $this->fantasy = $_fantasy;
    $this->horror = $_horror;
    $this->thriller = $_thriller;
  }

}




