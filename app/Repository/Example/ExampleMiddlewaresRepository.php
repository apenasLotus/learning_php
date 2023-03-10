<?php

namespace App\Repository\Example;

use App\Databases\Database;
use App\Databases\enumPrefix;
use App\Databases\LearningAuth;

class ExampleMiddlewaresRepository
{
  private Database $database;
  public function __construct()
  {
    $this->database = new Database(LearningAuth::getInstance(), enumPrefix::firebird);
  }

  public function getCacheData()
  {
    $sql = "SELECT * FROM AUTH";
    $data = $this->database->executeQuery($sql);

    return $data[array_key_first($data)];
  }
}
