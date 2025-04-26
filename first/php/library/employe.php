<?php
class Employe extends Person {
//ATRIBUTS
    private int $valueHours;
    private int $hours;
    private int $subsidy;
    private int  $calculate;
    private array $discounts = [];
    private float $totalDiscounts;
    private array $extras = [];
    private float $totalExtras = 0;

//METHOD CONSTRUCTOR
    public function __construct(int $valueHours, int $hours) {
        parent::__construct(1023, "Juan Esteban");
        $this->valueHours = $valueHours;
        $this->hours = $hours;
        $this->setSubsidy();
        $this->calculateSalary();
    }
//RETURN VALUE
    public function getValueHours(): int {
        return $this->valueHours;
    }

//GIVE A SUBSIDY VALUE
    public function setSubsidy(): void {
        if ($this->valueHours * $this->hours < 2000000) {
            $this->subsidy = 1000000;
        } else {
            $this->subsidy = 0;
        }
    }
    
//SAVE ALL DISCOUNTS IN AN ARRAY
    public function addDiscounts(Discounts $discounts): void {
        $this->discounts[] = $discounts;
    }

//SAVE ALL EXTRAS IN AN ARRAY
    public function addExtra(Extras $extra): void {
        $this->extras[] = $extra;
    }

//CALCULALTE TOTAL DISCOUNTS
    private function setTotalDiscounts(): void {
        $netSalary = ($this->valueHours * $this->hours) + $this->subsidy;
        $this->totalDiscounts = 0;
        foreach ($this->discounts as $discounts) {
            $this->totalDiscounts += $discounts->discounts($netSalary);
        }
    }

//CALCULATE TOTAL EXTRAS
    private function setTotalExtras(): void {
        $this->totalExtras = 0;
        foreach ($this->extras as $extra) {
            $this->totalExtras += $extra->extraPay($this->valueHours); 
        }
    }

//CALCULATE TOTAL SALARY WITH DISCOUNTS AND EXTRAS
    public function calculateSalary(): int {
        $this->setTotalDiscounts();
        $this->setTotalExtras();
        
        $netSalary = ($this->valueHours * $this->hours) + $this->subsidy;
        $this->calculate = $netSalary - $this->totalDiscounts + $this->totalExtras;

        return $this->calculate;
    }

//RETURN CALCULATE
    public function getCalculate(): int {
        return $this->calculate;
    }

//RETURN SUBSIDY
    public function getSubsidy(): int {
        return $this->subsidy;
    }

//RETURN TOTAL DISCOUNTS
    public function getTotalDiscounts(): float {
        return $this->totalDiscounts;
    }

//RETURN TOTAL EXTRAS
    public function getTotalExtras(): float {
        return $this->totalExtras;
    }
}
?>