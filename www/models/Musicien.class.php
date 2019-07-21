<?php
declare(strict_types = 1);

namespace models;
use Instrument;

class Musicien
{

  public $id = null;
  public $name;
  public $group;
  public $instrument;

  public function __construct() {
		parent::__construct();
	}

  public function setName(string $name) {
    $this->name = $name;
  }

  public function setGroup(string $group) {
    $this->group = $group;
  }

  public function setInstrument(string $instrument): {
    $this->instrument = $instrument;
  }

}
