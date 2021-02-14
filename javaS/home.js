/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class user {

    constructor(email = "", password = "", TypeOfUser = "") {
        this.email = email;
        this.password = password;
        this.TypeOfUser = TypeOfUser;
    }
    getTypeOfUser() {
        return this.TypeOfUser;
    }

}

function Redirect_Login() {
    var email = document.getElementById("login-email").value + "";
    var password = document.getElementById("login-password").value + "";
    var TypeOfUser = document.querySelector('input[name="Type"]:checked').value + "";

    var person = new user(email, password, TypeOfUser);

    if (person.getTypeOfUser() == "Coach") {
        location.replace("Coach_home.html");
    } else {
        Redirect_Signup();
    }
}
function Redirect_Signup() {
   
    location.replace("Trainee_home.html");
}