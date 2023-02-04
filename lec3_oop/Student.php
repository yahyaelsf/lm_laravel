<?php 
include __DIR__ .'./Person.php';
class Student extends Person
{
    protected $cources = [];
    public function __construct($cources,$name,$age,$gender)
    {
        parent::__construct($name,$age,$gender);
        $this->cources = $cources;
    }
    public function setCources($cource){
        $this->cources[] = $cource;
    }
    public function getCources(){
        return $this->cources;
    }
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

}
$student = new Student('laravel' , 'Ali' ,'18' ,'Male');
// $student->name = "yahya";
// $student->setAge('20')->setGender('Male');

var_dump($student);