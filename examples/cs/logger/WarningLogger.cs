class WarningLogger : Logger
{
    public WarningLogger()
    {
        _level = LogLevel.Warning;
    }

    protected override void Write(string message)
    {
        System.Console.WriteLine("Warning Logger: "+message);
    }
}