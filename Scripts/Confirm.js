function validate1(){
        var upassword = document.getElementById("txtPassword").value;
        var cpassword = document.getElementById("txtPass").value;
        var bool;
        if(upassword == cpassword){
            document.getElementById("ed").innerText = "Same"
        }else{
            document.getElementById("ed").innerText = "Not same"
           
        }
}

function validate2(){
    var upassword = document.getElementById("txtPassword").value;
    var cpassword = document.getElementById("txtPass").value;
    var bool;
    if(upassword != cpassword){
        alert("Entered Passwords are mismatched");
    }
}
