<?php
class LawThree extends Laws{
    public function __construct(string $name , float $force, string $description) {
        parent::__construct("Third law", $force , "To every action there is an equal and opposite reaction.");
    }
    public function calculate(): mixed{
        return $this->getForce() * -1;
    }
}
?>