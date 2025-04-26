<?php
     abstract class Extras {
        protected int $extraHours;

        public function __construct(int $extraHours) {
            $this->extraHours = $extraHours;
        }

        abstract public function extraPay(int $valueHour) : float;
        
    }?>

