<?php
/*
You work for the SPA (Society for the Protection of Animals). As part of the redesign of the
site, you must create a class Cat () that will have the following private properties:
- First name (string of 3 to 20 characters)
- Age (int)
- Color (string of 3 to 10 characters)
- Sex (string: male or female)
- Race (string of 3 to 20 characters)
Make getters/setters to validate the data types above and the constructor to instantiate
the class.
Add a getInfo() method to return all of the properties as an array.
In a new file, instantiate the class so that you can display 3 different cats and display the
result using the previously created getInfo() method.
*/

namespace Model;

class Cat
{
  private $firstName;
  private $age;
  private $color;
  private $sex;
  private $race;


  /**
  * @return mixed
  */

  public function __construct($firstname = NULL, $age= NULL, $color= NULL, $sex= NULL, $race= NULL)
  {
    $this->setFirstName($firstname);
    $this->setAge($age);
    $this->setColor($color);
    $this->setSex($sex);
    $this->setRace($race);
    return $this;
  }


  /**
  * @return mixed
  */
  public function getFirstName()
  {
    return $this->firstName;
  }

  /**
  * @return mixed
  */
  public function getAge()
  {
    return $this->age;
  }

  /**
  * @return mixed
  */
  public function getColor()
  {
    return $this->color;
  }

  /**
  * @return mixed
  */
  public function getSex()
  {
    return $this->sex;
  }

  /**
  * @return mixed
  */
  public function getRace()
  {
    return $this->race;
  }

  /**
  * @param mixed $firstName
  */
  public function setFirstName($firstName)
  {
    if ($firstName && is_string($firstName) && strlen($firstName) >= 3 && strlen($firstName) <= 20){
      $this->firstName = $firstName;
      return $this;
    }
    throw new \Exception("Invalid Firstname");
  }

  /**
  * @param mixed $age
  */
  public function setAge($age)
  {
    if (is_int($age)){
      $this->age = $age;
      return $this;
    }
    throw new \Exception("Invalid Age");
  }

  /**
  * @param mixed $color
  */
  public function setColor($color)
  {
    if ($color && is_string($color) && strlen($color) >= 3 && strlen($color) <= 10){
      $this->color = $color;
      return $this;
    }
    throw new \Exception("Invalid Color");
  }

  /**
  * @param mixed $sex
  */
  public function setSex($sex)
  {
    if (($sex == 'male') || ($sex == 'female')){
      $this->sex = $sex;
      return $this;
    }
    throw new \Exception("Invalid Sex");
  }

  /**
  * @param mixed $race
  */
  public function setRace($race)
  {
    if ($race && is_string($race) && strlen($race) >= 3 && strlen($race) <= 20){
      $this->race = $race;
      return $this;
    }
    throw new \Exception("Invalid Race");
  }

  public function getInfo() {
    return [
      'firstName' => $this->getFirstName(),
      'age' => $this->getAge(),
      'color' => $this->getColor(),
      'sex' => $this->getSex(),
      'race' => $this->getRace()
    ];
  }
}
