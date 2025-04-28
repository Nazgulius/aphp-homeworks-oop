<?php 
declare(strict_types=1);

class Tester extends Employee implements WebinarSpeakerInterface, ApplicationCreatorInterface
{
  public string $name;
  public string $subname;
  public int $price = 10;
  public string $prof = "тестировщик";

  public function __construct(string $name, string $subname, int $price)
  {
    parent::__construct($name, $subname, $price);
    $this->features[] = "может заниматься тестировкий и проверкой приложения"; 
  }

  public function Webinar():string
  {
    return "тестит приложение";
  }

  public function Develop(): string
  {
    return "тестит приложение";
  }
}