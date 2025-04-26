<?php
    class Arl extends Discounts {
        private int $level;
        private float $arl;

        public function __construct(int $level) {
            $this->level = $level;
            if ($level>5 || $level<1){
                echo 'Risk Level non-existent<hr>';
                $this->arl = 0;
            }else{
                $this->setArl();
            }
        }
        
        private function setArl(): void {
            switch ($this->level) {
                case 1:
                    $this->arl = 0.005;
                    break;
                case 2:
                    $this->arl = 0.01;
                    break;
                case 3:
                    $this->arl = 0.02; 
                    break;
                case 4:
                    $this->arl = 0.04;
                    break;
                case 5:
                    $this->arl = 0.06;
                    break;
            }
        }
    
        public function discounts(int $salary): float {
            return $salary * $this->arl;
        }
        
    }?>

