<?php
class Screen{
    private Laws $laws;
    public function setLaws(laws $laws): void {
        $this->laws = $laws;
    }
    public function getLaws(): Laws {
        if ($this->laws->getName() == "First law") {
            $this->laws = new LawOne("", $this->laws->getForce(), "");
        } else
        if ($this->laws->getName() == "Second law") {
            $this->laws = new LawTwo("", $this->laws->getForce(), "", 16, 20);
        } else
        if ($this->laws->getName() == "Third law") {
            $this->laws = new LawThree("", $this->laws->getForce(), "");
        }
        return $this->laws;
    }
}
?>