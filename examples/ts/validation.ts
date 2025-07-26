interface IValidator{
    validate (value :string):string[]; // errors list
}

class RequiredValidator implements IValidator{

    validate (value :string):string[]{
        return value.trim() === "" ? ["Field is required"] : [];
    }
}

class ProxyValidator implements IValidator{

    validate (value :string):string[]{
        return value.trim() === "" ? ["Field is required"] : [];
    }
}
//////////////////////////////////////////////////////////////////////

abstract class ValidatorDecorator implements IValidator
{
    constructor(protected validator : IValidator){}

    validate (value :string):string[]{
        return this.validator.validate(value);
    }
}

class EmailFormatValidator extends ValidatorDecorator{

    validate(value: string): string[] {
        const errors = super.validate(value);

        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!regex.test(value)) {
            errors.push("Invalid email format");
        }

        return errors;
    }

}

class BlockSpamDomainValidator extends ValidatorDecorator{

    validate(value: string): string[] {
        const errors = super.validate(value);

        if (value.endsWith("@spam.com")) {
            errors.push("Emails from spam.com are not allowed");
        }
        return errors;
    }

}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////


const validator : IValidator = new BlockSpamDomainValidator(new EmailFormatValidator(new RequiredValidator()));

//const email = "someone@spam.com";
const email = "";
//const email = "someone@havij.com";

const result =validator.validate(email);

if(result.length>0){
    console.log("Validation errors :",result);
    
}
else{
    console.log("All good!");
    
} 'Emails from spam.com are not allowed' 