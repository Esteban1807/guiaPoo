<?php
class LawOne extends Laws{
    public function __construct(string $name , float $force, string $description) {
        parent::__construct("First law", $force , "If force = zero, the object maintains its state.");
    }
    public function calculate(): mixed{
        if ($this->getForce() == 0) {
            return "The object maintains its state.";
        } else {
            return "The object does not maintain its state.";
        }
    }
}
?>