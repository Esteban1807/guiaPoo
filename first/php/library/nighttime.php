<?php
class Nighttime extends Extras {
    
    private float $nighttime = 1.75;
    private int $factor;

    public function __construct(int $extraHours) {
        parent::__construct($extraHours);
        $this->factor = $extraHours;
    }

    public function extraPay(int $valueHour): float {
        return ($valueHour * $this->nighttime) * $this->factor;
    }
}
?>