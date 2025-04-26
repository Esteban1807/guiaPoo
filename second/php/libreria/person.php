<?php
class Person{
    private int $id;
    private string $names;
    private string $lastNames;
    private int $weight;
    private int $stature;
    private int $selection;

    public function __construct(int $id, string $names, string $lastNames, int $weight, int $stature, int $selection) {
        $this->id = $id;
        $this->names = $names;
        $this->lastNames = $lastNames;
        $this->weight = $weight;
        $this->stature = $stature;
        $this->selection = $selection;
    }
    public function getId(): int{
        return $this->id;
    }
    public function getNames(): string{
        return $this->names;
    }
    public function getLastNames() : string {
        return $this->lastNames;
    }
    public function getWeight(): int{
        return $this->weight;
    }
    public function getStature(): int{
        return $this->stature;
    }
    public function getSelection(): int{
        return $this->selection;
    }
}
?>