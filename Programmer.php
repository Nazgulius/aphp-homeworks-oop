<?php 
declare(strict_types=1);

// include 'Employee.php';
// include 'ApplicationCreatorInterface.php';

class Programmer extends Employee implements ApplicationCreatorInterface, WebinarSpeakerInterface
{
  public string $name;
  public string $subname;
  public int $price = 10;
  
  public string $prof = "программист";

  public function __construct(string $name, string $subname, int $price)
  {
    parent::__construct($name, $subname, $price);
    $this->features[] = "может заниматься разработкой приложения, может вести вебинар для коллег"; 
  }

  public function Develop(): string {
    return "пишет код";
  }

  public function Webinar(): string
  {
    return "рассказывает сказки в вебку";
  }
}