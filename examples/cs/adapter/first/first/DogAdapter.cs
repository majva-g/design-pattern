public class DogAdapter : IAnimal
{
    private Dog _dog;

    public DogAdapter(Dog dog)
    {
        _dog = dog;
    }

    public void makeSound()
    {
        _dog.Bark();
    }
}