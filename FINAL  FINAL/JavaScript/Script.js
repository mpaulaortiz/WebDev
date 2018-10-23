$(".nav-item").click(function(){
	var productoid = ".productos-" + $(this).attr("id");
	console.log(productoid);
	var producto = $(".Tienda").find(productoid);
	producto.parent().show();
	producto.slideToggle();
	/*producto.css("display","flex");*/
	producto.siblings().slideUp();
});


