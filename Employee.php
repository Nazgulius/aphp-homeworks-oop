<?php 
declare(strict_types=1);

abstract class Employee 
{
  public string $name;
  public string $subname;
  public int $price = 10;
  public string $prof = "сотрудник";
  // особенности работы
  public array $features = array("выполняет работу для компании"); 
  private static int $count = 0;  

  public function __construct(string $name, string $subname, int $price)
  {
    $this->name = $name;
    $this->subname = $subname;
    $this->price = $price;

    // Увеличиваем счетчик при создании нового объекта  
    self::$count++;  
  }

  public function YouFeatures(): string
  {
    return implode(", ", $this->features);
  }

  // полученаем количество созданных объектов  
  public static function getCount(): int  
  {  
      return self::$count;  
  } 
}