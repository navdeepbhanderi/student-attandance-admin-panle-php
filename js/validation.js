function clearErrors(){
    errors = document.getElementsByClassName('formerror');
    for(let item of errors)
    {
        item.innerHTML = "";
    }    
}

function seterror(id, error){
    element = document.getElementById(id);
    element.getElementsByClassName('formerror')[0].innerHTML = error;
}
    
function validateform(){
    let returnval = true
    clearErrors();

    let email = document.getElementById('email').value;
    console.log(email)
    let emaiPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!email.match(emaiPattern)){
        seterror("emailfield", "Please enter valid email address.");
        returnval = false;
    }
    let passPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    let password = document.getElementById('password')
    if (!password.value.match(passPattern)){
        seterror("passfield", "Please enter atleast 8 charatcer with number, symbol, small and capital letter.");
        returnval = false;
    }
    return returnval;
}

function validateform2(){
    let returnval = true
    clearErrors();

    let email = document.getElementById('email').value;
    console.log(email)
    let emaiPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!email.match(emaiPattern)){
        seterror("emailfield", "Please enter valid email address.");
        returnval = false;
    }
    return returnval;
}

function validateform3(){
    let returnval = true
    clearErrors();

    let passPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    let password = document.getElementById('pass')
    if (!password.value.match(passPattern)){
        seterror("passfield", "Please enter atleast 8 charatcer with number, symbol, small and capital letter.");
        returnval = false;
    }
    let cpasword = document.getElementById('cpass')
    if (password.value != cpasword.value){
        seterror("cpassfield", "Please match the password");
        returnval = false;
    }
    return returnval;
}

const eyeIcons = document.querySelectorAll(".show-hide");
eyeIcons.forEach((eyeIcon) => {
  eyeIcon.addEventListener("click", () => {
    const pInput = eyeIcon.parentElement.querySelector("input"); //getting parent element of eye icon and selecting the password input
    if (pInput.type === "password") {
      eyeIcon.classList.replace("fa-eye", "fa-eye-slash");
      return (pInput.type = "text");
    }
    eyeIcon.classList.replace("fa-eye-slash", "fa-eye");
    pInput.type = "password";
  });
});