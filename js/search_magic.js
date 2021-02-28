$(document).ready(function () {
  $.ajax({
    url: "default_search_magic.php",
    type: "post",
    data: { default_display: "accessing" },
    success: function (result) {
      $("#search_data_display").html(result);
    },
  });

  $("#search_magic").click(function () {
    var search_category = $("#search_category").val();
    var search_subcategory = $("#search_subcategory").val();
    var min_size = $("#min_size").val();
    var max_size = $("#max_size").val();
    var search_minValue = $("#min_value").val();
    var search_maxValue = $("#max_value").val();
    var search_productId = $("#product_id").val();

    var data = {
      search_category: search_category,
      search_subcategory: search_subcategory,
      min_size: min_size,
      max_size: max_size,
      search_minValue: search_minValue,
      search_maxValue: search_maxValue,
      search_productId: search_productId,
    };

    $.ajax({
      url: "search_magic.php",
      type: "post",
      data: data,
      success: function (result) {
        $("#search_data_display").html(result);
      },
    });
  });
});
