<?php

class calculation {
    public $x, $y, $z;
    
    function sum() {
        $this->x = $this->y + $this->z;
        return $this->x;
    }

    function sub() {
        $this->x = $this->y - $this->z;
        return $this->x;
    }

    function product() {
        $this->x = $this->y * $this->z;
        return $this->x;
    }
}

// Creating class objects
$obj_one = new calculation();
$obj_two = new calculation();

// Setting values of class properties for object one
$obj_one->y = 25;
$obj_one->z = 5;

// Printing results for object one
echo "Object One Results:<br>";
echo "Sum: " . $obj_one->sum() . '<br>';
echo "Subtraction: " . $obj_one->sub() . '<br>';
echo "Product: " . $obj_one->product() . '<br>';

echo '<br>';

// Setting values of class properties for object two
$obj_two->y = 500;
$obj_two->z = 250;

// Printing results for object two
echo "Object Two Results:<br>";
echo "Subtraction: " . $obj_two->sub() . '<br>';
echo "Sum: " . $obj_two->sum() . '<br>';
echo "Product: " . $obj_two->product() . '<br>';

?>
