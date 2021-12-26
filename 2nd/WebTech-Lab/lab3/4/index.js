var count = 0;

function changesrc() {
  count += 1;
  if (count == 1) {
    document.getElementById("image1").src =
      "http://10.0.15.12/lab3s1/images/3.png";
    document.getElementById("image2").src =
      "http://10.0.15.12/lab3s1/images/1.png";
    document.getElementById("image3").src =
      "http://10.0.15.12/lab3s1/images/4.png";
    document.getElementById("image4").src =
      "http://10.0.15.12/lab3s1/images/2.png";
  }
  if (count == 2) {
    document.getElementById("image1").src =
      "http://10.0.15.12/lab3s1/images/4.png";
    document.getElementById("image2").src =
      "http://10.0.15.12/lab3s1/images/3.png";
    document.getElementById("image3").src =
      "http://10.0.15.12/lab3s1/images/2.png";
    document.getElementById("image4").src =
      "http://10.0.15.12/lab3s1/images/1.png";
  }
  if (count == 3) {
    document.getElementById("image1").src =
      "http://10.0.15.12/lab3s1/images/2.png";
    document.getElementById("image2").src =
      "http://10.0.15.12/lab3s1/images/4.png";
    document.getElementById("image3").src =
      "http://10.0.15.12/lab3s1/images/1.png";
    document.getElementById("image4").src =
      "http://10.0.15.12/lab3s1/images/3.png";
  }
  if (count == 4) {
    count = 0;
    document.getElementById("image1").src =
      "http://10.0.15.12/lab3s1/images/1.png";
    document.getElementById("image2").src =
      "http://10.0.15.12/lab3s1/images/2.png";
    document.getElementById("image3").src =
      "http://10.0.15.12/lab3s1/images/3.png";
    document.getElementById("image4").src =
      "http://10.0.15.12/lab3s1/images/4.png";
  }
}
