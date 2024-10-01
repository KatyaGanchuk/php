<?php

class Person {
    private $name;
    private $age;

    public function __get($property) {
        return $this->$property;
    }

    public function __set($property, $value) {

        if ($property == 'age') {
            if (is_numeric($value)) {
                $this->age = $value;
            } else {
                echo "Вік повинен бути числом!";
            }
        }

        if ($property == 'name') {
            $this->name = $value;
        }
    }
}

$person = new Person();
$person->name = "Katya"; 
$person->age = 30;      

echo "Name: " . $person->name; 
echo "Age: " . $person->age;   

?>