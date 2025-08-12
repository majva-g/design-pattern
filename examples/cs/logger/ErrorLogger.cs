class ErrorLogger : Logger
{
    public ErrorLogger()
    {
        _level = LogLevel.Error;
    }

    protected override void Write(string message)
    {
        System.Console.WriteLine("Error Logger: "+message);
    }
}