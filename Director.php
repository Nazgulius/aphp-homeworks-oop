<?php 
declare(strict_types=1);

class Director extends Manager implements WebinarSpeakerInterface, LeadInterface
{
  public string $name;
  public string $subname;
  public int $price = 10;
  public string $prof = "директор";

  public function __construct(string $name, string $subname, int $price)
  {
    parent::__construct($name, $subname, $price);
    $this->features[] = "может вести вебинар для коллег, может руководить"; 
  }

  public function Manage() :string
  {
    return "СУПЕР управляет и СУПЕР руководит";
  }

  public function Webinar(): string
  {
    return "рассказывает СУПЕР сказки в МЕГА вебку";
  }
}