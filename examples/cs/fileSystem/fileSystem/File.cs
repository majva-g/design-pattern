public class File : FileSystemItem
{
    private long Size;

    public File(string name, long size) : base(name)
    {
        Size = size;
    }
    public override long GetSize()
    {
        return Size;
    }

    public override void Display(int indent =0)
    {
        System.Console.WriteLine(new string(' ',indent) + $"- {Name} ({Size} bytes)");
    }
}