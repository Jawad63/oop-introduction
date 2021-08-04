<?php

   declare(strict_types=1);

   ini_set('display_errors', '1');
   ini_set('display_startup_errors', '1');
   error_reporting(E_ALL);

   require ('exercise_1_classes.php');
   class Beer extends Beverage {

      public string $name;
      public float $alcoholPercentage;

      public function __construct(string $color, float $price, string $name, float $alcoholPercentage)
      {
         parent::__construct($color, $price, $temperature = 'cold');
         $this -> name = $name;
         $this -> alcoholPercentage = $alcoholPercentage;

      }
      public function getAlcoholPercentage ()
      {
         echo "$this->name contains $this->alcoholPercentage % of alcohol";
         echo "<br>";
         return "$this->name contains $this->alcoholPercentage % of alcohol";
      }
   };

   $beer = new Beer('blond', 3.5, 'Duvel', 8.5);

   echo $beer->name;
   echo '<br>';
   echo $beer->getInfo();
   echo '<br>';
   echo $beer->getAlcoholPercentage();