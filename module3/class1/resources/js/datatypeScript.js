// Numbers
document.write("<h2>Numbers Data Type</h2>");

const x = 10;
document.write("<p>" + x + " is a Number Value </p>");

const y = 4.99;
document.write("<p>" + y + " is also a Number Value </p>");

// String
document.write("<h2>String Data Type</h2>");

const myName = "Luke K. B. Sarker";
document.write("<p>"+ myName + " is a String value<p>");

// Undefined
document.write("<h2>Undefiened Data Type</h2>");
document.write("<p>If a variable type is not defiened through 'Undefiened variable' error message in console </p>");

// Boolean
document.write("<h2>Boolean Data Type</h2>");

const okay = true;
document.write("<p>okay is a boolean variable contains "+ okay + " value<p>");

// Null
document.write("<h2>Null Data Type</h2>");

const nothing = null;
document.write("<p>Value of nothing = "+ nothing + "<p>");

// Object
document.write("<h2>Object Data Type</h2>");

const person = {              // this is an Object
    pName:"Luke Sarker",
    pAge: 40,
    pAddress:{                 // Object can be a data type inside an Object
        holdingNumber: "141",
        street:"Beside a beautiful street",
        city:"Barishal",
        zip: 8200
    }
}

document.write("<p>Person Name: "+person.pName+" <br>"+
               "Age: "+person.pAge+" <br>" +
               "Address: "+person.pAddress.holdingNumber+" " + person.pAddress.street + "<br>"+
                           person.pAddress.city + ", "+person.pAddress.zip+"</p>"
    );

//Array
document.write("<h2>Array Data Type</h2>");

const fruits = ["Apple","Orange","Banana"];

document.write("<p>These are the value of an Array with same string data types: "+fruits[0]+", "+fruits[1]+", "+fruits[2]+"</p>");

const address =[141,"Some Street","Borishal",8200];

document.write("<p>These are the value of another Array with different data types: "+address[0]+", "+address[1]+", "+address[2]+", "+address[3]+"</p>");

// Date object:
document.write("<h2>Date Data Type</h2>");

const date = new Date("2022-03-25");
document.write("<p>The Date was "+ date+ "<p>");

