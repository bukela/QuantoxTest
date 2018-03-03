<?php
class Human {
    private $firstName;
    private $lastName;
    private $age;
    private $height;
    private $weight;

    public function __construct(string $firstName = null, string $lastName = null, int $age = null, float $height = null, float $weight = null) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function getFirstName(): string {
        return $this->firstName;
    }

    public function setFirstName(string $firstName){
        $this->firstName = $firstName;
    }

    public function getLastName(): string {
        return $this->lastName;
    }

    public function setLastName(string $lastName){
        $this->lastName = $lastName;
    }

    public function getFullName(): string {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getAge(): int {
        return $this->age;
    }

    public function setAge(int $age){
        $this->age = $age;
    }

    public function getHeight(): float {
        return $this->height;
    }

    public function setHeight(float $height){
        $this->height = $height;
    }

    public function getWeight(): float {
        return $this->weight;
    }

    public function setWeight(float $weight){
        $this->weight = $weight;
    }

    public function fullInfo(): string {
        return "Ime i prezime: {$this->firstName} {$this->lastName} <br>".
        "Starost: {$this->age} godina <br>".
        "Visina: {$this->height} m <br>".
        "Tezina: {$this->weight} kg <br><br>";
    }
}

?>