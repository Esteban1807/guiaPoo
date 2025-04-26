<?php
class LicenseB extends Licenses{
    public function __construct(int $cost, int $duration, string $description) {
        parent::__construct(20000, 80, "Private vehicles");
    }
    public function calculate(): float {
        return $this->getCost() * $this->getDuration();
    }
}
?>