<?php

class Person
{
   private string $lastname;
   private string $firstname;
   private string $address;
   public DateTime $birtday;

   public function __construct(string $lastname, string $firstname, string $address, DateTime $birtday)
   {
      $this->lastname = $lastname;
      $this->firstname = $firstname;
      $this->address = $address;
      $this->birtday = $birtday;
   }

   public function setAddress($address)
   {
      $this->address = $address;

      return $this;
   }

   public function showPerson()
   {
      echo sprintf("Je m'appelle %s %s", $this->firstname, $this->lastname) . "<br>";
      echo sprintf("Mon adresse est %s", $this->address) . "<br>";
      echo sprintf("Ma date de naissance est %s", $this->birtday->format('d/m/Y')) . "<br>";
   }

   // format('m/d/Y')
   public function calculateAge(): int
   {
      $birthDate = $this->birtday->format('m/d/Y');
      $birthDate = explode("/", $birthDate);
      $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
         ? ((date("Y") - $birthDate[2]) - 1)
         : (date("Y") - $birthDate[2]));
         
      return $age;
   }
}
