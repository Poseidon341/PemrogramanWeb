<?php

namespace Animal;

// Abstract class sebagai kelas dasar
abstract class Animal {
    // Property untuk menyimpan atribut
    protected $name;
    protected $age;

    // Abstract method yang harus diimplementasikan oleh subclass
    abstract public function speak();

    // Magic method untuk mengeset property secara otomatis
    public function __set($name, $value) {
        $this->$name = $value;
    }

    // Magic method untuk mengambil property secara otomatis
    public function __get($name) {
        return $this->$name;
    }
}

// Trait untuk mendefinisikan fungsi tambahan
trait Eatable {
    public function eat($food) {
        echo $this->name . " is eating " . $food . ".\n";
    }
}

// Kelas turunan Dog dari Animal
class Dog extends Animal {
    use Eatable; // Menggunakan trait

    // Metode untuk mendefinisikan perilaku
    public function speak() {
        echo $this->name . " says woof!\n";
    }
}

// Kelas turunan Cat dari Animal
class Cat extends Animal {
    use Eatable; // Menggunakan trait

    // Metode untuk mendefinisikan perilaku
    public function speak() {
        echo $this->name . " says meow!\n";
    }
}

// Membuat objek dari kelas Dog
$dog = new Dog();
$dog->name = "Spot";
$dog->age = 3;

// Membuat objek dari kelas Cat
$cat = new Cat();
$cat->name = "Fluffy";
$cat->age = 2;

// Memanggil metode dari objek
$dog->speak();
$dog->eat("bone");
$cat->speak();
$cat->eat("fish");

?>
