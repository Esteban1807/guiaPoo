<?php
    class Health extends Discounts {
        private float $health = 0.04;

        public function discounts(int $salary): float {
            return $salary * $this->health;
        }
        
    }?>

