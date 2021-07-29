$(document).ready(function () {
    $('.button-plus').click(function () {
        let idFood = $(this).attr('data-id');
        $('#' + idFood).val(parseInt($('#' + idFood).val()) + 1);
        updateToCart(idFood);
    })
    $('.button-minus').click(function () {
        let idFood = $(this).attr('data-id');
        $('#' + idFood).val(parseInt($('#' + idFood).val()) - 1);
        updateToCart(idFood);
    })
    function updateToCart(id) {
        let value = $(`#${id}`).val();
        let idFood = $(`#${id}`).attr('data-id');
        let location = window.location.origin;

        // su ly ajax
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: location + '/customer/' + idFood + '/update-to-cart',
            method: 'POST',
            data: {
                newQuantity: value
            },
            success: function (response) {
                // su ly du lieu tra ve
                $('#product-total-price-' + idFood).html(new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(response.foodUpdate.price));
                $('#total-price-cart').html(new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(response.totalPriceCart));
            },

            error: function (error) {
                console.log(error);
            }
        })
    }

    $('.delete-product').click(function () {
        let idProduct = $(this).attr('data-id');
        let location = window.location.origin;

        // su ly ajax
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: location + '/cart/' + idProduct + '/delete-to-cart',
            method: 'GET',
            success: function (response) {
                // su ly du lieu tra ve
                $('#product-' + idProduct).remove();
            },

            error: function (error) {
                console.log(error);
            }
        })
    })

})
