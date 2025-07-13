public class Directory : FileSystemItem
{
    private List<FileSystemItem> children = new List<FileSystemItem>();

    public Directory(string name) : base(name) { }

    public void add(FileSystemItem item)
    {
        children.Add(item);
    }

    public void remove(FileSystemItem item)
    {
        children.Remove(item);
    }
    public override long GetSize()
    {
        long total = 0;
        foreach (var child in children)
        {
            total += child.GetSize();
        }
        return total;
    }

    public override void Display(int indent = 0)
    {
        System.Console.WriteLine(new string(' ', indent) + $"+ {Name}");
        foreach (var child in children)
        {
            child.Display(indent + 2);
        }
    }
}