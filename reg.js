
// start of constant variables applicable to all element
const form = document.getElementById('theform');
const firstname = document.getElementById('fname');
const middlename = document.getElementById('mname');
const surname = document.getElementById('surname');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('passwords');



    form.addEventListener( 'submit', (e)=>{
        e.preventDefault();
        validateInput();
    });
    const setError=(element, message)=>{
        const inputcontrol= element.parentElement;
        const errorDisplay = inputcontrol.querySelector('.error');

        errorDisplay.innerText = message;
    inputcontrol.classList.add('error');
    inputcontrol.classList.remove('success')
}

const setSuccess = element => {
    const inputcontrol = element.parentElement;
    const errorDisplay = inputcontrol.querySelector('.error');

    errorDisplay.innerText = '';
    inputcontrol.classList.add('success');
    inputcontrol.classList.remove('error');
};
// end of constant variables applicable to all element



const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}


const isAlphanum = password => {
    const re = /^(?=.*\d)(?=.*[A-Z])(.{10,50})$/
    return re.test(password);
}

const validateInput = () => {
    const firstnameValue=firstname.value.trim();
    const middlenameValue= middlename.value.trim();
    const surnameValue= surname.value.trim();
    const usernameValue=username.value.trim();
    const passwordValue = password.value.trim();
    const emailValue= email.value.trim();
    

    
    if(firstnameValue === '') {
        setError(firstname, 'First name is required');
    } else {
        setSuccess(firstname);
    }

    if(middlenameValue === '') {
        setError(middlename, 'middle name is required');
    } else {
        setSuccess(middlename);
    }

    if(surnameValue === '') {
        setError(surname, 'surname is required');
    } else {
        setSuccess(surname);
    }

    if(usernameValue === '') {
        setError(username, 'Username is required');
    } else {
        setSuccess(username);
    }

     //this is email part
     if(emailValue === '') {
        setError(email, 'Email is required');
    } else if (!isValidEmail(emailValue)) {
            setError(email, 'Provide a valid email address');
        } else {
            setSuccess(email);
        }
         
    //this is password section
    if(passwordValue === '') {
        setError(password, 'Password is required');
    } else if (passwordValue.length < 10 ) {
        setError(password, 'Password must be at least ten character.')
    } else if (!isAlphanum(passwordValue)) {
            setError(password, 'Must contain Uppercase,Lowercase,Number and Special characters');
    } else {
        setSuccess(password);
    }


    //this is email part
    if(emailValue === '') {
        setError(email, 'Email is required');
    } else if (!isValidEmail(emailValue)) {
            setError(email, 'Provide a valid email address');
        } else {
            setSuccess(email);
        }
}