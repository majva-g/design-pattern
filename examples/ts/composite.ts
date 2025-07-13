interface MenuItem{
    render(indent?:number):void
} 

class SimpleMenuItem implements MenuItem{

    constructor(private title:string , private link:string){}

    render(indent = 0): void {
        console.log(`${' '.repeat(indent)}- ${this.title} -> ${this.link}`);        
    }
}

class MenuGroup implements MenuItem{
    private children:MenuItem[] = [];

    constructor(private title:string){}

    add(item:MenuItem):void{
        this.children.push(item);
    }

    remove(item:MenuItem):void{
        this.children = this.children.filter(child=>child !== item);
    }

    render(indent=0): void {
        console.log(`${' '.repeat(indent)}+ ${this.title}`);
        this.children.forEach(child =>child.render(indent + 2));
    }
}

//
const mainMenu = new MenuGroup("Main Menu");

const home = new SimpleMenuItem("Home","/home");
const about = new SimpleMenuItem("About","/about");

const products = new MenuGroup("Products");
const electronic = new SimpleMenuItem("Electronic","/products/electronic");
const clothes = new SimpleMenuItem("Clothes","/products/clothes");

products.add(electronic);
products.add(clothes);

mainMenu.add(home);
mainMenu.add(about);
mainMenu.add(products);
///////////////////////////////////////////////////////

mainMenu.render();