class Father{
    fName = "Luke";
    lName = "Sarker";
    constructor(){
        console.log("Father's Name is "+this.fName+" "+this.lName);
    }
}

class Son extends Father{
    constructor(sfName) {
        super();                // Take permission from Father class using super
        this.fName = sfName;  // Overriding First Name
        console.log("Son's Name is "+this.fName+" "+this.lName);
    }
}
// Creating Object with Passing parameter
let sonObj = new Son("Bless"); // constructor method will run automaticly