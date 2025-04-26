<?php
class Daytime extends Extras {
    
    private float $dayTime = 1.25;
    private int $factor;

    public function __construct(int $extraHours) {
        parent::__construct($extraHours);
        $this->factor = $extraHours; 
    }

    public function extraPay(int $valueHour): float {
        return ($valueHour * $this->dayTime) * $this->factor;
    }
}
    ?>

