// See https://aka.ms/new-console-template for more information

IAnimal dog = new DogAdapter(new Dog());
IAnimal cat = new Cat();

cat.makeSound();
dog.makeSound();
