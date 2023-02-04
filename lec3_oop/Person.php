<?php

class Person{
//properties 
    private $id;
    public $name;
    protected $age; 
    protected $gender;
    public $params =[];
    public static $title;
//Access Modigers :
/*
1- public : 
2- private : 
3- protected :
*/
/*
methods
*/
    public function __construct($name , $age , $gender = null)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }
    // public function __destruct()
    // {
    //     echo "object Delted!";
    // }
    // public function __toString()
    // {
    //     return "this is object";
    // }
    public function __set($name, $value)
    {
        $this->params[$name] = $value;
        return $this;
    }
    public function getAge(){
        return $this->age;
    }
    public function setAge($age){
        $this->age = $age;
        return $this;
    }
    public function getGender()
    {
        return $this->gender;
    }
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }
    public function getTilte(){
       return Person::$title ;
                self::$title ;
                static::$title;
    }

}

// $person = new Person('Ali','22');
// Assignment object :
// $person = new Person();
// $person->name = "yahya";
// $person->setAge('20')->setGender('Male');
// $person->text="aaaaaaaa";
// echo $person->text;
// $person->setGender('Male');
//call by refernce 
// $person2 = &$person ;
// $person2 = clone $person;
// $person2->name = "ALi";
var_dump($person) ;
// echo $person;





