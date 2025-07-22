class WeatherApi{
    async fetch(city : string):Promise<any>{
        // شبیه سازی دریافت اطلاعات از api

        return new Promise((resolve)=>
            setTimeout(() => resolve({
                temp : 23.5,
                city : city,
                condition : "Sunny",
                humidity : 40
            }), 500)
        );
    }
}

class WeatherFormatter{
    format(rawData:any) :string{
        return `${rawData.city}: ${rawData.temp}^c, ${rawData.condition}, Humidity: ${rawData.humidity}%`
    }
}

class LoadingIndicator{
    show(){
        console.log("Loading...");
    }

    hide(){
        console.log("Done loading.");
        
    }
}

class ErrorHandler{
    handle(e:unknown){
        console.error("Something went wrong...",e);
    }
}
///////////////////////////////////////////////////////

class WeatherFacade{
    private api = new WeatherApi();
    private formatter = new WeatherFormatter();
    private loader = new LoadingIndicator();
    private errorHandler = new ErrorHandler();


    async getWeather(city : string):Promise<string|null>{
        try {
            this.loader.show();

            const rawData = await this.api.fetch(city);
            const formatted = this.formatter.format(rawData);

            return formatted;
            
        } catch (error) {
            this.errorHandler.handle(error);
            return null;
        }
        finally{
            this.loader.hide();
        }
    }
}

//////////////////////////////////////////////////////////////

const weather = new WeatherFacade();

weather.getWeather("yasooj").then((info)=>{
    if (info) {
        console.log("Current weather : ",info);
        
    }
    else{
        console.log("Could not load weather data");
    }
});


