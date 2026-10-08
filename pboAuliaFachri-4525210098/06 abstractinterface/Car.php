<?php
require_once 'Vehicle.php';
require_once 'Movable.php';
require_once 'Fuelable.php';

// Subclass dari Vehicle yang mengimplementasikan Movable dan Fuelable
class Car extends Vehicle implements Movable {
    use Fuelable;

    public function __construct($name) {
        parent::__construct($name);
    }

    // Implementasi method move() dari Movable
    public function move() {
        echo $this->name . " bergerak di jalan." . PHP_EOL;
    }

    // Override refuel() dari Fuelable
    public function refuel() {
        echo $this->name . "Isi bahan bakar mobil" . PHP_EOL;
    }
}
