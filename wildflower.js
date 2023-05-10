
//shows popup for the mission statement when clicked on
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}

//displays ad about sale
setTimeout(function () {
    document.getElementById('popup').style.display = 'block';
}, 2000);

//disables ad about sale
setTimeout(function () {
    document.getElementById('popup').style.display = 'none';
}, 15000);

function myPhoneFunction() {
    var submitPhoneNumber = document.getElementById("submitPhoneNumber");
}
