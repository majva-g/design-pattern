interface Button{
    render():void
}

interface CheckBox{
    check():void
}

interface Label {
    text():void
}

class DarkButton implements Button{
    render(): void {
        console.log('rendering dark button');
        
    }
}

class LightButton implements Button{
    render(): void {
        console.log('rendering light button');
        
    }
}

class DarkCheckBox implements CheckBox{
    check(): void {
        console.log('rendering dark checkbox');
        
    }
}

class LightCheckBox implements CheckBox{
    check(): void {
        console.log('rendering light check');
        
    }
}

class DarkLabel implements Label{
    text(): void {
        console.log('rendering dark label');
        
    }
}

class LightLabel implements Label{
    text(): void {
        console.log('rendering light label');
        
    }
}
////////////////////////////////////////////////////
interface ButtonFactory{
    create():Button
}

class DarkButtonFactory implements ButtonFactory {
    create(): Button {
        return new DarkButton();
    }
}

class LightButtonFactory implements ButtonFactory {
    create(): Button {
        return new LightButton();
    }
}

///////////////////////////////////////////////////////////////

interface GUIFactory{
    createButton():Button;
    createCheckBox():CheckBox;
    createLabel():Label;
}

class DarkTheme implements GUIFactory{
    createButton(): Button {
        return new DarkButton;
    }

    createCheckBox(): CheckBox {
        return new DarkCheckBox;
    }

    createLabel(): Label {
        return new DarkLabel;
    }
}

class LightTheme implements GUIFactory{
    createButton(): Button {
        return new LightButton;
    }

    createCheckBox(): CheckBox {
        return new LightCheckBox;
    }

    createLabel(): Label {
        return new LightLabel;
    }
}

//....................................................
const theme = 'dark';
let button;
if (theme=='dark') {
      button = new DarkButton();
}
else if (theme=='light') {
    button = new LightButton();
}
//.....................................
let factory;
if (theme=='dark') {
    factory = new DarkButtonFactory();
}
else if (theme=='light') {
  factory = new LightButtonFactory();
}

button = factory.create();
//................................................

if (theme=='dark') {
    factory = new DarkTheme();
}
else if (theme=='light') {
  factory = new LightTheme();
}

button = factory.createButton();
let checkbox =factory.createCheckBox();