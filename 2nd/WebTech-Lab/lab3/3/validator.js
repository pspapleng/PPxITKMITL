function validateForm() {
  let numid = document.forms["myForm"]["numid"].value;
  if (numid.length != 13) {
    alert("ID must be 13 characters");
    return false;
  }

  let nametitle = document.forms["myForm"]["nametitle"].value;
  if (nametitle == "000") {
    alert("Nametitle must be selected");
    return false;
  }

  let fname = document.forms["myForm"]["fname"].value;
  if (fname.length < 2 || fname.length > 20) {
    alert("First Name must be filled out or First Name is too long.");
    return false;
  }

  let lname = document.forms["myForm"]["lname"].value;
  if (lname.length < 2 || lname.length > 30) {
    alert("Last Name  must be filled out or Last Name  is too long.");
    return false;
  }

  let address = document.forms["myForm"]["address"].value;
  if (address.length < 5) {
    alert("Address must be filled out");
    return false;
  }

  let add = document.forms["myForm"]["add"].value;
  if (add.length < 2) {
    alert("District must be filled out");
    return false;
  }

  let dress = document.forms["myForm"]["dress"].value;
  if (dress.length < 2) {
    alert("Canton must be character");
    return false;
  }

  let province = document.forms["myForm"]["province"].value;
  if (province == "000") {
    alert("Province must be selected");
    return false;
  }

  let code = document.forms["myForm"]["code"].value;
  if (code.length != 5) {
    alert("Postcode must be 5 characters");
    return false;
  }

  let tel = document.forms["myForm"]["tel"].value;
  if (tel.length < 9 || tel.length > 10) {
    alert("Phonenumber must be 9-10 characters");
    return false;
  }
}
