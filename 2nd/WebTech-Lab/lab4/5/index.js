function add(count) {
  let add = document.getElementById("order");
  let neworder = document.createElement("div");
  let order = document.createAttribute("class");
  order.value = "border text-wrap text-left p-3 bg-white";
  neworder.setAttributeNode(order);

  if (count == 1) {
    neworder.innerHTML = "ขนมจีบ(นานแล้วเมื่อไหร่จะติด?) x1";
    add.appendChild(neworder);
  } else if (count == 2) {
    neworder.innerHTML = "ซาลาเปาบุ้นจิ้นชอบกินไข่เต่า x1";
    add.appendChild(neworder);
  } else if (count == 3) {
    neworder.innerHTML = "เก๊กฮวยถ้วยใหญ่ๆ x1";
    add.appendChild(neworder);
  }
}
