const form = document.getElementById('form');
const username = document.getElementById('username');
const phone = document.getElementById('phone');
const email = document.getElementById('email');
const password = document.getElementById('password');
const cpassword = document.getElementById('cpassword');

form.addEventListener('submit', (e) => {
    e.preventDefault();

    checkInputs();
});
function checkInputs(){
    //get values from inputs
    const formValue = username.values.trim();
    const phoneValue = phone.values.trim();
    const emailValue = email.values.trim();
    const passwordValue = password.values.trim();
    const cpasswordValue = cpassword.values.trim();
    
    if(usernameValue === ''){
        //show error message
        setErrorrFor(username, 'Username cannot be blank');
    }else{
        //add success class
        setSuccessFor(username );
    }

}

function setErrorrFor(input, message){
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');

    small.innerText = message;

    //add error class
    formControl.className = "form-control error";
}