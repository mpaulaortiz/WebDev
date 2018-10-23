$(".item-menu").click(function(){
	var producto = ".productos-" + $(this).attr("id");
	$(".productos").find(producto).slideToggle();
});