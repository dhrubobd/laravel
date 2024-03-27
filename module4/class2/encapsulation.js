// Encaptulation Using Closures
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