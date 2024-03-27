// Encapsulation Using Closures
console.log("::::::: Encapsulation Using Closures :::::::");

function userProfile(theName){
    let userName = theName;
    return{
        update:function(){
            console.log(userName+"'s profile has been updated");
        },
        addPhoto:function(){
            console.log(userName+"'s photo has been updated");
        },
        login:function(){
            console.log(userName+" has been logged in");
        },
        logout:function(){
            console.log(userName+" has been logged out");
        }
    }
}

const theUser = "Luke Sarker";

userProfile(theUser).login();
userProfile(theUser).addPhoto();
userProfile(theUser).update();
userProfile(theUser).logout();

// Using ES6 Class Method
console.log("::::::: Encapsulation Using ES6 Class Method :::::::");

class BankAccount{
    balance = 190090;
    deposit(amount){
        this.balance = this.balance+amount;
        console.log(amount+"Tk Deposited Successfully");
    };
    withdraw(amount){
        this.balance = this.balance-amount;
        console.log(amount+"Tk Withdrawn Successfully");
    };
    newBalance(){
        console.log("Now Your Account Banlance is :"+this.balance+"Tk");
    }
}

const bankAccountObj = new BankAccount();
bankAccountObj.deposit(10000);
bankAccountObj.newBalance();
bankAccountObj.withdraw(500);
bankAccountObj.newBalance();