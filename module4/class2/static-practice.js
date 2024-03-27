class Father{
    static fatherName="Luke Sarker";
    age= 40;
    static msg(){
        return "Best wishes to my Son";
    }
}

class Son extends Father{

}
//static methods or properties of Parent class can be accessed by child class without forming any object
console.log("Father "+Son.fatherName+" left a message to his son=>\n"+Son.msg()+"");