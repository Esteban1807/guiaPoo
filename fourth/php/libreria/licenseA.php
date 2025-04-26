<?php
class LicenseA extends Licenses{
    public function __construct(int $cost, int $duration, string $description) {
        parent::__construct(10000, 50, "Motorcycles");
    }
    public function calculate(): float {
        return $this->getCost() * $this->getDuration();
    }
}
?>