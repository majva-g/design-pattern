class User {
   getUserData():void{}

   renderProfile():void{}
}
//................................................
class UserService{
    getUserData():void{}
}
class UserProfileComponent{
    renderProfile():void{}
}
//................................................
function renderButton(type:'primary'|'secondary')
{
    if (type==='primary') {
        return '<button class="btn-primary">Click<\button>';
    }
    if (type==='secondary') {
        return '<button class="btn-secondary">Click<\button>';
    }
    if (type==='dark-primary') {
        return '<button class="btn-dark-primary">Click<\button>';
    }
   
}

interface IRenderButton{
    render():string;
}
class RenderPrimaryButton implements IRenderButton{
    render():string{
        return '<button class="btn-primary">Click<\button>';
    }
}
class RenderSecondaryButton implements IRenderButton{
    render():string{
        return '<button class="btn-secondary">Click<\button>';
    }
}

function ocRenderButton(renderer : IRenderButton)
{
    renderer.render();
}

class RenderDarkPrimaryButton implements IRenderButton{
    render():string{
        return '<button class="btn-dark-primary">Click<\button>';
    }
}
//........................................................
class Component{
    render():void{
        console.log('rendering ....');
        
    }
}

class Button extends Component{
    override render(): void {
        console.log('rendering button ....');
        
    }
}

class InvisibleComponent extends Component{
    override render(): void {
        throw new Error("can not render invisible component");
        
    }
}
const b:Component = new Button;
b.render();
const c:Component = new InvisibleComponent;
c.render();
//..................................................
// interface IComponent{
//     render():void;
//     click():void;
// }
// class ButtonB implements IComponent{
//     render():void{/** do something */};
//     click():void{/** do something */};
// }
// class Label implements IComponent{
//     render():void{/** do something */};
//     click():void{};
// }
interface clickable{
    click():void;
}

interface renderable{
    render():void;
}
class Label implements renderable{
    render():void{/** do something */};
}

class ButtonB implements clickable,renderable
{
         render():void{/** do something */};
         click():void{/** do something */};
}
//////////////////////////////////////
// class RestUserService{
//     getUserData():void{
//         // get user data from rest api
//     }
// }

// class GraphQLUserService{
//     getUserData():void{
//         // get user data from graphql api
//     }
// }
// class UserProfile {
//     constructor(private userService:RestUserService) {
        
//     }

// }
interface IUserService{
    getUserData():void;
}
class UserProfile {
    constructor(private userService:IUserService) {
        
    }
}

class RestUserService implements IUserService{
    getUserData():void{
        // get user data from rest api
    }
}

class GraphQLUserService implements IUserService{
    getUserData():void{
        // get user data from graphql api
    }
}

class SoapUserService implements IUserService{
    getUserData():void{
        // get user data from soap api
    }
}
