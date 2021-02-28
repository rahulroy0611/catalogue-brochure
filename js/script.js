function readURL1(input) {
  document.getElementById("front_pic").style.visibility = "visible";
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $("#front_pic").attr("src", e.target.result).width(150).height(200);
    };

    reader.readAsDataURL(input.files[0]);
  }
}

function readURL2(input) {
  document.getElementById("back_pic").style.visibility = "visible";
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $("#back_pic").attr("src", e.target.result).width(150).height(200);
    };

    reader.readAsDataURL(input.files[0]);
  }
}
