
function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

// Validate phone number
function validatePhone(phone) {
    const re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
    return re.test(String(phone).toLowerCase());
}

function validateForm(e) {
    let x = document.forms["contact-form"]["name"].value;
    let email = document.forms["contact-form"]["email"].value;
    let message = document.forms["contact-form"]["message"].value;
    let phone = document.forms["contact-form"]["phone"].value;
    let company = document.forms["contact-form"]["company"].value;
    if (x == "" || email == "" || message == "" || phone == "" || company == "") {
      alert("Name must be filled out");
      return false; 
    }
    if(!validateEmail(email)){
        alert("Email is not valid");
        return false;
    }

    if(!validatePhone(phone)) {
        alert("Phone is not valid");
        return false;
    }
    alert("Form submitted");
    return true;
  }

function validatePartner(e){
    const name = document.forms["contact-partner"]("name").value;
    const email = document.forms["contact-partner"]("email").value;
    const phone = document.forms["contact-partner"]("phone").value;
    const address = document.forms["contact-partner"]("address").value;
    const comments = document.forms["contact-partner"]("comments").value;

    if(name == "" || email == "" || address == "" ){
        alert("Name, email, and address must be filled out");
        return false;
    }

    if(!validateEmail(email)){
        alert("Email is not valid");
        return false;
    }

    if(!validatePhone(phone)){
        alert("Phone is not valid");
        return false;
    }

    alert("Form submitted");
    return true;

} 