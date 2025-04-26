<?php
class Register{
    private Person $person;
    private Licenses $licenses;
    public function setPerson(Person $person) {
        $this->person = $person;
    }
    public function getPerson(): Person {
        return $this->person;
    }
    public function setLicenses(Licenses $licenses) {
        $this->licenses = $licenses;
    }
    public function getLicenses(): Licenses {
        if ($this->getPerson()->getSelection() == "A") {
            $this->licenses = new LicenseA(0, 0, "");
        } else
        if ($this->getPerson()->getSelection() == "B") {
            $this->licenses = new LicenseB(0, 0, "");
        } else
        if ($this->getPerson()->getSelection() == "C") {
            $this->licenses = new LicenseC(0, 0, "");
        }
        return $this->licenses;
    }
}
?>