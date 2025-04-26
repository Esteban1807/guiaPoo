<?php
class Holiday extends Extras {
    
    private float $holiday = 2.0;
    private int $factor;

    public function __construct(int $extraHours) {
        parent::__construct($extraHours);
        $this->factor = $extraHours;
    }

    public function extraPay(int $valueHour): float {
        return ($valueHour * $this->holiday) * $this->factor;
    }
}
?>