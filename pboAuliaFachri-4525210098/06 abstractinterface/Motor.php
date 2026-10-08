<?php
require_once 'Vehicle.php';
require_once 'Movable.php';
require_once 'Fuelable.php';

class Motor extends Vehicle implements Movable {
    use Fuelable; // refuel() memakai versi default dari Fuelable

    public function __construct($name) {
        parent::__construct($name);
    }

    // Implementasi method move() dari Movable
    public function move() {
        echo $this->name . " bergerak di tanah gravel." . PHP_EOL;
    }
}
