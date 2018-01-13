$("#search-product-btn").click(function(){
  $(".loader").show();
  var productId = parseInt($("#productId").val());
  $.ajax({
    url : '/includes/get_product.php',
    data: { productId : productId },
    type: 'GET',
    success: handleData
  })
})

$("#see-all-products").click(function(){
  $.ajax({
    url : '/includes/get_all_products.php',
    data: {},
    type: 'GET',
    success: jsonAllProducts
  })
})

function handleData(data) {
  $(".loader").hide();
  var obj = JSON.parse(data);
  $(".table").show();
  $("#result .table tbody").empty();
  if(obj.id !== undefined){
    $("#result .table tbody").append("<tr>");
    $("#result .table tbody tr").append("<td>" + obj.id + "</td>");
    $("#result .table tbody tr").append("<td>" + obj.name + "</td>");
    $("#result .table tbody tr").append("<td>" + obj.price + "</td>");
  } else {
    console.log("no hay objecto con este id");
    $("#result .table tbody").append("<tr>");
    $("#result .table tbody tr").append("<td>-</td>");
    $("#result .table tbody tr").append("<td>-</td>");
    $("#result .table tbody tr").append("<td>-</td>");
  }
}

function jsonAllProducts(data) {
  var obj = JSON.parse(data);
  $("#result .table tbody").empty();

  $.each(obj, function(i, val) {
    var html = '<tr>';
    // alert( "Key: " + i + ", Value: " + val );
    html += "<td>" + val.id + "</td>";
    html += "<td>" + val.name + "</td>";
    html += "<td>" + val.price + "</td>";
    html += "<td><button type='button' class='btn-delete btn btn-danger consult' onclick='deleteProduct("+parseInt(val.id)+")'>	<i class='fa fa-trash' aria-hidden='true'></i></button></td>";
    html += '</tr>';
    $("#result .table tbody").prepend(html);
  });
}

function deleteProduct(productId) {
  $.ajax({
    url : '/includes/delete_product.php',
    data: {productId : productId},
    type: 'POST',
    success: updateTable
  })
}

function updateTable(data) {
  alert("Producto eliminado");
  refreshTable();
}

function loadProducts(data) {
  $.ajax({
    url : '/includes/products_to_db.php',
    success: function(data){
      alert(data);
      refreshTable();
    }
  })
}

function refreshTable() {
  $("#see-all-products").trigger("click");
}

$(window).on("load", function() {
  refreshTable();
})
