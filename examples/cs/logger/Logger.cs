public abstract class Logger
{
    protected LogLevel _level;
    protected Logger _nextLogger;

    public Logger SetNext(Logger nextLogger)
    {
        _nextLogger = nextLogger;
        return nextLogger;
    }

    public void LogMessage(LogLevel level, string message)
    {
        if (level <= _level)
        {
            Write(message);
        }
        else if (_nextLogger != null)
        {
            _nextLogger.LogMessage(level, message);
        }
    }

    protected abstract void Write(string message);
}
