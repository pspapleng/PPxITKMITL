function madeBox() {
  var num = document.getElementById("num").value;
  var box = 1;
  var count = 0;
  document.getElementById("box").innerHTML = " ";
  var add = document.getElementById("box");
  for (let i = 0; i < num; i++) {
    if (box % 2 == 1) {
      var newBox = document.createElement("div");
      newBox.setAttribute("class", "odd");
      add.appendChild(newBox);
      box = 0;
      count++;
    } else if (box % 2 == 0) {
      var newBox = document.createElement("div");
      newBox.setAttribute("class", "even");
      add.appendChild(newBox);
      box = 1;
      count++;
    }

    if (count == 8) {
      var end = document.createElement("div");
      end.setAttribute("class", "end");
      add.appendChild(end);
      box += 1;
      count = 0;
    }
  }
}
