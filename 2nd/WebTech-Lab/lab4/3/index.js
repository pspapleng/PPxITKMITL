var count = 0;
function register() {
  count += 1;
  let id = document.getElementById("numid").value;
  let first = document.getElementById("fname").value;
  let last = document.getElementById("lname").value;
  let table = document.getElementById("table0");
  let row = table.insertRow(-1);

  let newr1 = row.insertCell(0);
  let newr2 = row.insertCell(1);
  let newr3 = row.insertCell(2);
  let newr4 = row.insertCell(3);
  newr1.innerText = count;
  newr2.innerHTML = id;
  newr3.innerHTML = first;
  newr4.innerHTML = last;
}
