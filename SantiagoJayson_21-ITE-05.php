<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>

    <?php
class Person {
    public $firstName;
    public $lastName;
    private $age;

    public function __construct($firstName, $lastName, $age) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function getFullName() {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }
}

class Car {
    public $make;
    public $model;
    protected $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function getCarInfo() {
        return $this->make . ' ' . $this->model . ' (' . $this->year . ')';
    }
}

$person = new Person('Jayson', 'Santiago', 19);
echo 'Full Name: ' . $person->getFullName() . '<br>';
echo 'Age: ' . $person->getAge() . '<br>';

$person->setAge(19);
echo 'Updated Age: ' . $person->getAge() . '<br>';

$car = new Car('Toyota', 'Camry', 2020);
echo 'Car Info: ' . $car->getCarInfo() . '<br>';
?>


        </h1>
    </body>
</html>




