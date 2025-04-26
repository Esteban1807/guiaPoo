<?php
    class Pension extends Discounts {
        private float $pension = 0.04;

        public function discounts(int $salary): float {
            return $salary * $this->pension;
        }
        
    }?>

