<?php
require_once 'Vehicle.php';
require_once 'Movable.php';
require_once 'Fuelable.php';

// Subclass lain dari Vehicle yang mengimplementasikan Movable dan Fuelable
class Boat extends Vehicle implements Movable {
    use Fuelable;

    public function __construct($name) {
        parent::__construct($name);
    }

    // Implementasi method move() dari Movable
    public function move() {
        echo $this->name . " bergerak di air." . PHP_EOL;
    }

    // Override refuel() dari Fuelable
    public function refuel() {
        echo $this->name . " mengisi bahan bakar solar khusus kapal." . PHP_EOL;
    }
}
