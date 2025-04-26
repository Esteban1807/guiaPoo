<?php
class Person{
    private int $identification;
    private string $name;
    private string $lastName;
    private string $address;
    private int $telephone;
    private string $rh;
    private string $selection;
    public function __construct(int $identification, string $name, string $lastName, string $address, int $telephone, string $rh, string $selection) {
        $this->identification = $identification;
        $this->name = $name;
        $this->lastName = $lastName;
        $this->address = $address;
        $this->telephone = $telephone;
        $this->rh = $rh;
        $this->selection = $selection;
    }
    public function getIdentification(): int {
        return $this->identification;
    }
    public function getName(): string {
        return $this->name;
    }
    public function getLastName(): string {
        return $this->lastName;
    }
    public function getAddress(): string {
        return $this->address;
    }
    public function getTelephone(): int {
        return $this->telephone;
    }
    public function getRh(): string {
        return $this->rh;
    }
    public function getSelection(): string {
        return $this->selection;
    }
}
?>