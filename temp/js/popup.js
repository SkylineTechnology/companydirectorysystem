const form = document.getElementById('decrypt');
const password = document.getElementById('pass');
const confirmpassword = document.getElementById('cpass');

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success');
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
}



const validateInputs = () => {
    ;
    const passwordValue = password.value.trim();
    const confirmpasswordValue = confirmpassword.value.trim();


    

    if(confirmpasswordValue === ''){
        setError(confirmpassword, 'Decryption key required')
    }else if(confirmpasswordValue !== passwordValue){
        setError(confirmpassword, 'Password doesnt match');
    }else{
        setSuccess(confirmpassword);
    }
};


let popup = document.getElementById("popup");

function openPopup(){
    popup.classList.add("open-popup");
}

function closePopup(){
    popup.classList.remove("open-popup");
}