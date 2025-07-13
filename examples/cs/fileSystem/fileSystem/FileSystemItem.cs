public abstract class FileSystemItem
{
    protected string Name;

    public FileSystemItem(string name)
    {
        Name = name;
    }

    public abstract long GetSize(); // Byte
    public abstract void Display(int indent=0);
}