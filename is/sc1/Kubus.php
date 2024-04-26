<?php
include_once 'Shape3Dimension.php';
include_once 'Shape2Dimension.php';

class Kubus implements Shape3Dimension, Shape2Dimension {
    public function calculateArea(): void {
        // Calculate area of kubus (assuming all sides are equal)
        // Formula: 6 * s^2, where s is the length of one side
        echo "Area of Kubus calculated.\n";
    }

    public function calculateVolume(): void {
        // Calculate volume of kubus (assuming all sides are equal)
        // Formula: s^3, where s is the length of one side
        echo "Volume of Kubus calculated.\n";
    }
}
?>
