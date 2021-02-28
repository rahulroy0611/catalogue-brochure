$(document).ready(function () {
  $("#v_product_id1").keyup(function () {
    $.ajax({
      url: "record_backend.php",
      type: "post",
      data: { v_product_id: $(this).val() },
      success: function (result) {
        $("#product_list1").html(result);
      },
    });
  });
  $("#v_product_id2").keyup(function () {
    $.ajax({
      url: "record_backend.php",
      type: "post",
      data: { v_product_id: $(this).val() },
      success: function (result) {
        $("#product_list2").html(result);
      },
    });
  });
  $("#v_product_id3").keyup(function () {
    $.ajax({
      url: "record_backend.php",
      type: "post",
      data: { v_product_id: $(this).val() },
      success: function (result) {
        $("#product_list3").html(result);
      },
    });
  });
  $("#v_product_id4").keyup(function () {
    $.ajax({
      url: "record_backend.php",
      type: "post",
      data: { v_product_id: $(this).val() },
      success: function (result) {
        $("#product_list4").html(result);
      },
    });
  });
  $("#v_product_id5").keyup(function () {
    $.ajax({
      url: "record_backend.php",
      type: "post",
      data: { v_product_id: $(this).val() },
      success: function (result) {
        $("#product_list5").html(result);
      },
    });
  });
  $("#v_product_id6").keyup(function () {
    $.ajax({
      url: "record_backend.php",
      type: "post",
      data: { v_product_id: $(this).val() },
      success: function (result) {
        $("#product_list6").html(result);
      },
    });
  });
  $("#v_product_id7").keyup(function () {
    $.ajax({
      url: "record_backend.php",
      type: "post",
      data: { v_product_id: $(this).val() },
      success: function (result) {
        $("#product_list7").html(result);
      },
    });
  });
  $("#v_product_id8").keyup(function () {
    $.ajax({
      url: "record_backend.php",
      type: "post",
      data: { v_product_id: $(this).val() },
      success: function (result) {
        $("#product_list8").html(result);
      },
    });
  });
  $("#v_product_id9").keyup(function () {
    $.ajax({
      url: "record_backend.php",
      type: "post",
      data: { v_product_id: $(this).val() },
      success: function (result) {
        $("#product_list9").html(result);
      },
    });
  });
  $("#v_product_id10").keyup(function () {
    $.ajax({
      url: "record_backend.php",
      type: "post",
      data: { v_product_id: $(this).val() },
      success: function (result) {
        $("#product_list10").html(result);
      },
    });
  });
});
