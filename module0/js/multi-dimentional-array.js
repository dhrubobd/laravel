let bangladesh = ["Dhaka","Barishal","Rajshahi","Khulna","Chittagong"];
let usa =["Newyork","Washington DC","Nevada","Kentaky","Los Angels"];
let india =["Delhi","Kolkata","Chennai","Rajstan","Hariana"];

// Making Multi a Dimentional Array named countries
let countries = [bangladesh,usa,india];

console.log("The 2nd city of India is: ");
console.log(countries[2][1]); // 2 means india and 1 means Kolkata in countries array


console.log("=============================");
console.log("All Cities in Countries Array:");
console.log("=============================");

// Printing all cities in countries array
for(let i=0;i<countries.length;i++){
    for(let j=0; j<countries[i].length; j++){
        console.log(countries[i][j]);
    }
}


console.log("=============================");
console.log("All Cities in Countries Array: using forEach Loop");
console.log("=============================");

//Printing all cities in countries array using forEach Loop
countries.forEach(country => {
    country.forEach(city=>{
        console.log(city);
    });
});