interface Image{
    display(): void;
}
class RealImage implements Image {
    private fileName:string;
    constructor(fileName:string) {
        this.fileName = fileName;
        this.loadImageFromNetwork();
    }

    display(): void {
        console.log(`Displaying ${this.fileName}`);
    }
    private loadImageFromNetwork(): void {
        console.log(`Loading ${this.fileName} from network`);
    }

}

class ProxyImage implements Image
{
    private fileName:string;
    private realImage:RealImage | null=null;

    constructor(fileName:string)
    {
        this.fileName = fileName;
    }
    public display(): void {
        if (! this.realImage) {
            this.realImage = new RealImage(this.fileName)
        }
        this.realImage.display();
    }
}
//////////////////////////////////////////
const image = new ProxyImage('cat.png');

image.display(); // load and display

image.display(); // display