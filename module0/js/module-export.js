const mobilePhone = ["Samsung","Oppo","Xiomi"];

function purchaseMobile(mobileName, quantity, mobileModel){
    console.log(quantity+" piece "+mobileName+" "+mobileModel+" mobile phone is purchased");
}

// Exporting mobilePhone variable and purchaseMobile function as module
export {mobilePhone,purchaseMobile} 