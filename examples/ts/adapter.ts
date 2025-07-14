interface User{
    id:string;
    fullName:string;
    email:string;
}

interface LegacyUser{
    uid:number;
    name : {
        first:string;
        last:string;
    }
    mail:string
}

class LegacyUserAdapter{
    private legacyUser:LegacyUser;

    constructor(legacyUser:LegacyUser)
    {
        this.legacyUser = legacyUser;
    }

    toUser():User{
        return {
            id: this.legacyUser.uid.toString(),
            fullName: `${this.legacyUser.name.first} ${this.legacyUser.name.last}`,
            email: this.legacyUser.mail
        }
    }
}
//////////////////////////////////////////////

async function fetchLegacyUser() : Promise<LegacyUser>{
    //
    return {
        uid:42,
        name:{ first:"Mostafa" , last:"Sharami"},
        mail : "m.sharami@gmail.com"
    };
}

async function getUser():Promise<User> {
    const legacy = await fetchLegacyUser();
    const adapter = new LegacyUserAdapter(legacy);
    return adapter.toUser();
}
/////////////////////////////
getUser().then(user =>
{
    console.log("Adapted user :",user);
    
}
);