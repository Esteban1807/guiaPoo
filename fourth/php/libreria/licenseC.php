<?php
class LicenseC extends Licenses{
    public function __construct(int $cost, int $duration, string $description) {
        parent::__construct(50000, 150, "Public service vehicles");
    }
    public function calculate(): float {
        return $this->getCost() * $this->getDuration();
    }
}
?>