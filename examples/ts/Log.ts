
class LogStyle {
    constructor(
        public readonly prefix:string,
        public readonly colorCode:string,
    ) {
        
    }

    formatMessage(message :string):string{
        return `${this.colorCode}[${this.prefix}] ${message}\x1b[0m`;
    }
}

class LogStyleFactory {
private static styles:Map<string,LogStyle> = new Map()

static getStyle(type:string):LogStyle{
    if (!this.styles.has(type)) {
        switch (type) {
            case 'INFO':
                this.styles.set(type, new LogStyle("INFO",'\x1b[34m'));
                break;
            case 'WARN':
                this.styles.set(type, new LogStyle("WARN",'\x1b[33m'));
                break;
            case 'ERROR':
                this.styles.set(type, new LogStyle("ERROR",'\x1b[31m'));
                break;
        
            default:
                this.styles.set(type, new LogStyle("INFO",'\x1b[37m'));
                break;
        }
    }
    return this.styles.get(type)!;
}
}

class LogEntry {
    constructor(
        public readonly timestamp:Date,
        public readonly message:string,
        public readonly style:LogStyle

    ) {
        
    }
    print():void{
        console.log(this.style.formatMessage(`${this.timestamp.toISOString()} - ${this.message}`));
 
    }
}

////////////////////////////////////////////////////////////////

function run(){
    const logs :LogEntry[]=[];

    logs.push(new LogEntry(new Date(),'System booting ...',LogStyleFactory.getStyle('INFO')));
    logs.push(new LogEntry(new Date(),'Cache not found!',LogStyleFactory.getStyle('WARN')));
    logs.push(new LogEntry(new Date(),'User login successfully',LogStyleFactory.getStyle('INFO')));
    logs.push(new LogEntry(new Date(),'Disk space low',LogStyleFactory.getStyle('WARN')));
    logs.push(new LogEntry(new Date(),'Unable to connect to DB',LogStyleFactory.getStyle('ERROR')));
    logs.push(new LogEntry(new Date(),'Shutting down ...',LogStyleFactory.getStyle('INFO')));


    for (const log of logs) {
      log.print()
        
    }
}

run();
