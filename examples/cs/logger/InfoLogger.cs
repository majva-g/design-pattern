class InfoLogger : Logger
{
    public InfoLogger()
    {
        _level = LogLevel.Info;
    }

    protected override void Write(string message)
    {
        System.Console.WriteLine("Info Logger: "+message);
    }
}