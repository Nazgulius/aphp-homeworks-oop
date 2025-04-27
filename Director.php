<?php 
declare(strict_types=1);

include 'Manager.php';

class Director extends Manager 
{
  abstract public string $name;
  abstract public string $subname;
  abstract public int $price = 10;
  abstract public string $features = "может управлять или руководить"; // особенности работы
}