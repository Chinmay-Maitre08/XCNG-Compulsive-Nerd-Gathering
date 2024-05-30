var cardIsSelected = false;

function cardSelected() {
    cardIsSelected = true;
}

function validateShippingInfo() {
    var country, zipcode, name, address, cardNumber, cardExpiryDate;
    country = document.getElementById("country").value;
    name = document.getElementById("name").value;
    address = document.getElementById("address").value;
    zipcode = document.getElementById("zipCode").value;
    cardNumber = document.getElementById("cardNumber").value;
    cardExpiryDate = document.getElementById("expiryDate").value;
    if (country === '' || name === '' || address === '' || zipcode === '' || cardNumber === '' || cardExpiryDate === '' || cardIsSelected === false) {
        if (cardIsSelected) {
            alert("None of the field must be empty.");
            return;
        } else {
            alert("None of the field must be empty. Check your card type");
            return;
        }

    }

    alert("You have successfully purchased the items. Your books will be delivered to you soon. Thank you!");
    var answer = prompt("Do you want to continue shopping? Yes/No");
    if (answer === 'yes' || answer === 'Yes') {
        window.location.href = "allbooks.html";
    } else if (answer === 'No' || answer === 'no') {
        window.location.href = "../index.html";
    }
}