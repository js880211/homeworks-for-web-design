class Car{
    constructor(type, color, year, gas, distance, id){
        this.type = type;
        this.color = color;
        this.year = year;
        this.gas = gas;
        this.distance = distance;
        this.id = id;
    }
    showCar(){
        return `Type:${this.type} 
        Color:${this.color}
        Year:${this.year}
        Gas:${this.gas}
        Distance:${this.distance}
        ID:${this.id}
        `
    }
}
class Ford extends Car{
    constructor(type, color, year, gas, distance, id,price){
        super(type, color, year, gas, distance, id);
        this.price=price;
    }
    showPrice(){
        return `Price:${this.price}`
    }
}
class Toyota extends Car{
    constructor(type, color, year, gas, distance, id,price){
        super(type, color, year, gas, distance, id);
        this.price=price;
    }
    showPrice(){
        return `Price:${this.price}`
    }
}
class Honda extends Car{
    constructor(type, color, year, gas, distance, id,price){
        super(type, color, year, gas, distance, id);
        this.price=price;
    }
    showPrice(){
        return `Price:${this.price}`
    }
}
function start(){
    var Car1= new Ford("EcoSport", "White", "2015", "52L", "78k KM", "1","339K");
    var Car2= new Honda("Honda Fit", "White", "2013", "42L", "94k KM", "2","255K");
    var Car3= new Toyota("Toyota Vios", "White", "2008", "42L", "175k KM", "3","168K");
    document.getElementById("car").innerHTML=`<H1 id="Ford">Ford: ${Car1.showCar()}</H1><br>
    <H1 id="Honda">Honda: ${Car2.showCar()}</H1><br>
    <H1 id="Toyota">Toyota: ${Car3.showCar()}</H1>`;
}
window.addEventListener("load",start,false)
