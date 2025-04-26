<?php
class RegisterGym{
    private Person $person;
    private Plan $plan;

    public function setPerson(Person $person): void {
        $this->person = $person;
    }
    public function getPerson(): Person {
        return $this->person;
    }
    public function setPlan(Plan $plan): void {
        $this->plan = $plan;
    }
    public function getPlan(): Plan {
        if ($this->getPerson()->getSelection() == 1) {
            $this->plan = new Basic("", 0, "");
        } else
        if ($this->getPerson()->getSelection() == 2) {
            $this->plan = new Medium("", 0, "");
        } else
        if ($this->getPerson()->getSelection() == 3) {
            $this->plan = new Premium("", 0, "");
        }
        return $this->plan;
    }
}
?>