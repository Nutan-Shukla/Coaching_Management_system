function validate() {

    var moblietxt = document.getElementById("Phone No.").value;

    var moblieexp = /^\d{10}$/;

    if (moblietxt.match(moblieexp)) {
        return true;
    } else {
        alert("Invalid moblie number");
        return false;
    }
}