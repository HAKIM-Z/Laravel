$(".add_cart").click(function (e) {
    let product_id = $(this).attr("id_pro");

    $.ajax({
        url: "cart",
        method: "post",
        data: {
            product_id: product_id,
            _token: _token,
        },
        success: function (s) {
            console.log(s);
        },
        error: function (error) {
            console.log(error);
        },
    });
});
