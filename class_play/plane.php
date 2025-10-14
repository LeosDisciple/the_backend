<?php
class Plane {
    private string $model;
    private int $speed;
    private int $passengers;

    private function fly_message() {
        echo "Plane $this->model is transporting $this->passengers people at $this->speed km/h speed<br>"; // Practical for simple concat
    }

    public function fly() {
        $this->fly_message();
    }

    public function land() {
        echo "Plane ".$this->model." has landed!<br>"; // Practical for more complicated concat (for e.g. with functions)
    }

    public function __construct(string $model, int $speed, int $passengers) {
        $this->model = $model;
        $this->speed = $speed;
        $this->passengers = $passengers;        
    }

    public function change_speed(int $delta) {
        $this->speed += $delta;
        $this->fly_message();
    }
}

$my_jet = new Plane("LearJet", 800, 10);
$commercial_plane = new Plane("Airbus", 1200, 120);

print "Let's go!<br>";
$my_jet->fly();
$commercial_plane->fly();
$commercial_plane->change_speed(100);
$commercial_plane->change_speed(-300);
$commercial_plane->land();
$my_jet->land();
print "Simulation finished";

?>
