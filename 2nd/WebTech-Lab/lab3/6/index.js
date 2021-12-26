function random() {
  document.getElementById("first").innerHTML = ("" + Math.random()).substring(
    2,
    8
  );
  document.getElementById("f3").innerHTML = ("" + Math.random()).substring(
    2,
    5
  );
  document.getElementById("l3").innerHTML = ("" + Math.random()).substring(
    2,
    5
  );
  document.getElementById("l2").innerHTML = ("" + Math.random()).substring(
    2,
    4
  );
}
