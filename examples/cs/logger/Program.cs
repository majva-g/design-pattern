Logger infoLogger = new InfoLogger();
Logger warningLogger = new WarningLogger();
Logger errorLogger = new ErrorLogger();

infoLogger.SetNext(warningLogger).SetNext(errorLogger);

///////////////////////
infoLogger.LogMessage(LogLevel.Info, "This is an info message");
infoLogger.LogMessage(LogLevel.Warning, "This is an warning message");
infoLogger.LogMessage(LogLevel.Error, "This is an error message");