<?php 
declare(strict_types=1);

class Manager extends Employee implements LeadInterface, WebinarSpeakerInterface 
{
  public string $prof = "менеджер";

  public function __construct(string $name, string $subname, int $price)
  {
    parent::__construct($name, $subname, $price);
    $this->features[] = "может управлять или руководить"; 
  }

  public function Manage() :string
  {
    return "управляет и руководит";
  }

  public function Webinar(): string
  {
    return "рассказывает сказки в вебку";
  }
}