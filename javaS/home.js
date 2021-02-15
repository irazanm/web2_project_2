/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function Redirect_Login() {
    var TypeOfUser = document.querySelector('input[name="Type"]:checked').value;
    if (TypeOfUser == "Coach") {
        location.replace("Coach_home.html");
    } else {
        location.replace("Trainee_home.html");
    }
}
function Redirect_Signup() {
    location.replace("Trainee_home.html");
}