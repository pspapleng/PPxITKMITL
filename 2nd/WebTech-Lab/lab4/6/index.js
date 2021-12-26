function reply() {
  let newans = document.createElement("div");
  let ansAtt = document.createAttribute("class");
  ansAtt.value = "text-left pl-4 mt-2";
  newans.setAttributeNode(ansAtt);

  if (count == 1) {
    newans.innerHTML = document.getElementById("reply").value;
    ans1.appendChild(newans);
  }
  if (count == 2) {
    newans.innerHTML = document.getElementById("reply").value;
    ans2.appendChild(newans);
  }
  if (count == 3) {
    newans.innerHTML = document.getElementById("reply").value;
    ans3.appendChild(newans);
  }
}

function choose1() {
  let q = document.getElementById("q1");
  q.style.color = "#FFCC00";
  let none1 = document.getElementById("q2");
  none1.style.color = "black";
  let none2 = document.getElementById("q3");
  none2.style.color = "black";
  count = 1;
}
function choose2() {
  let q = document.getElementById("q2");
  q.style.color = "#FFCC00";
  let none1 = document.getElementById("q1");
  none1.style.color = "black";
  let none2 = document.getElementById("q3");
  none2.style.color = "black";
  count = 2;
}
function choose3() {
  let q = document.getElementById("q3");
  q.style.color = "#FFCC00";
  let none1 = document.getElementById("q1");
  none1.style.color = "black";
  let none2 = document.getElementById("q2");
  none2.style.color = "black";
  count = 3;
}
