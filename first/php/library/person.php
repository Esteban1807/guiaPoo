<?php
     abstract class Person {
        private int $identification; 
        private ?string $name;

        public function __construct(int $identification, ?string $name) {
            $this->name = $name;
            $this->identification = $identification;
        }
        public function  getName(){
            return $this->name;
        } 
        public function  getIdentification(){
            return $this->identification;
        } 
        abstract public function calculateSalary() : int;
        
    }?>

