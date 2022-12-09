
<?php

class OriginalLenguage  {

  public $english;
  public $italian;
  public $french;
  public $spanish;


  /**
   * @param String $english
   * @param String $italian
   * @param String $french;
   * @param String $spanish;
   */
  public function __construct($_english = null, $_italian = null, $_french = null, $_spanish = null)
  {
    $this->english = $_english;
    $this->italian = $_italian;
    $this->french = $_french;
    $this->spanish = $_spanish;
  }

}


