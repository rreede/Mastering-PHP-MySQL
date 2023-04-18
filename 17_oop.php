<?php

class User {
    // Properties are attributes that belong to a class
    public $name;
    public $email;
    public $password;

// A Constructor is a method that runs when an object is created


public function __construct($name,$email,$password) {
    echo "constructor ran";

    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
}



function set_name($name) {
    $this->name = $name;
}

function get_name() {
    return $this->name;
}


}


// Acess Modifiers: public, private, protected

// public - can be accessed from anywhere

// private - can only be accessed from inside the class

// protected - can only be accessed from inside the class and by inheriting classes

// Instantiate user object

$user1 = new User();
$user2 = new User();




$user1->name = "Rene";

$user1->set_name("Greta");





echo $user1->name;

$user2->set_name("Markus");

var_dump($user2);



echo $user1->get_name();
echo $user1->get_name();

echo $user1->email;

// Inheritance

class Employee extends User {
public function __construct($name,$email, $password, $title) {

    parent::__construct($name,$email, $password);

    $this->title = $title;

}

public function get_title() {
  return $this->title;  
}

}

$employee1 = new Employee("Sarah", "cat", "dog", "Hi");

echo $employee1->get_title();


?>
