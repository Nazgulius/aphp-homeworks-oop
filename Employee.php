<?php 
declare(strict_types=1);

abstract class Employee 
{
  public string $name;
  public string $subname;
  public int $price = 10;
  public string $features = "Выполняет работу для компании."; // особенности работы

  public function __construct(string $name, string $subname, int $price)
  {
    $this->name = $name;
    $this->subname = $subname;
    $this->price = $price;
  }

  public function YouFeatures(): string
  {
    return "Мои обязанности.";
  }
}