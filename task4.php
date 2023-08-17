<?php
//Task 4: Polymorphism. using oop
class Animal {
    public function makeSound() {
        return "Some generic sound";
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "Woof woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}

class Cow extends Animal {
    public function makeSound() {
        return "Moo!";
    }
}
class Tiger extends Animal {
    public function makeSound(){
        return 'Growl!';
    }
}

// Example 
$animals = [
    new Dog(),
    new Cat(),
    new Cow(),
    new Tiger()
];

foreach ($animals as $animal) {
    echo get_class($animal) . " says: " . $animal->makeSound() . "<br>";
}

//Task 4 complete.
?>
