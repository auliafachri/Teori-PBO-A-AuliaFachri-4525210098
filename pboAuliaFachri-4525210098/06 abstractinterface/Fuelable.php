<?php
// PHP interface tidak bisa punya default method, jadi Fuelable dibuat
// sebagai trait supaya method refuel() tetap punya isi default.
trait Fuelable {
    public function refuel() {
        echo "Mengisi bahan bakar umum." . PHP_EOL;
    }
}
