<?php
class LawTwo extends Laws{
    private float $bulk;
    private float $acceleration;
    public function __construct(string $name , float $force, string $description, float $bulk, float $acceleration) {
        parent::__construct("Second law", $bulk*$acceleration , "Force = Bulk * Acceleration");
        $this->bulk = $bulk;
        $this->acceleration = $acceleration;
    }
    public function getBulk() : float {
        return $this->bulk;
    }
    public function getAcceleration(): float {
        return $this->acceleration;
    }
    public function calculate(): mixed{
        return $this->getForce() . " = " . $this->getBulk() . " * " . $this->getAcceleration();
    }
}
?>