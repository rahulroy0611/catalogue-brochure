$(document).ready(function () {
  $("#search_category").keyup(function () {
    $.ajax({
      url: "search.php",
      type: "post",
      data: { search_category: $(this).val() },
      success: function (result) {
        $("#category_result").html(result);
      },
    });
  });

  $("#search_subcategory").keyup(function () {
    $.ajax({
      url: "search.php",
      type: "post",
      data: { search_subcategory: $(this).val() },
      success: function (result) {
        $("#subcategory_result").html(result);
      },
    });
  });

  // $("#search_size").keyup(function () {
  //   $.ajax({
  //     url: "search.php",
  //     type: "post",
  //     data: { search_size: $(this).val() },
  //     success: function (result) {
  //       $("#size_result").html(result);
  //     },
  //   });
  // });

  $("#min_size").keyup(function () {
    $.ajax({
      url: "search.php",
      type: "post",
      data: { search_size: $(this).val() },
      success: function (result) {
        $("#size_result1").html(result);
      },
    });
  });

  $("#max_size").keyup(function () {
    $.ajax({
      url: "search.php",
      type: "post",
      data: { search_size: $(this).val() },
      success: function (result) {
        $("#size_result2").html(result);
      },
    });
  });
});
