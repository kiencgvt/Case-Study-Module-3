$(document).ready(function () {
    let location = window.location.origin;
    $(document).on("click", ".button-minus", function () {
        let idFood = $(this).attr('data-id');
        console.log(idFood)
        $('#' + idFood).val(parseInt($('#' + idFood).val()) - 1);
        updateToCart(idFood);
    })
    $(document).on("click", ".button-plus", function () {
        let idFood = $(this).attr('data-id');
        $('#' + idFood).val(parseInt($('#' + idFood).val()) + 1);
        updateToCart(idFood);
    })

    function updateToCart(idFood) {
        let value = $(`#${idFood}`).val();
        if (value > 0) {

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
                    //  displayCart(response)
                    $('#total-quantity-cart').html(response.totalQuantity);
                    $('#food-total-price-' + idFood).html(new Intl.NumberFormat('vi-VN', {
                        style: 'currency',
                        currency: 'VND'
                    }).format(response.foodUpdate.price));
                    $('#total-price-cart').html(new Intl.NumberFormat('vi-VN', {
                        style: 'currency',
                        currency: 'VND'
                    }).format(response.totalPriceCart));
                },

                error: function (error) {
                    console.log(error);
                }
            })
        } else {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: location + '/customer/' + idFood + '/delete',
                method: 'GET',
                success: function (response) {
                    $('#food-' + idFood).remove();
                    $('#total-quantity-cart').html(response.totalQuantity);
                    $('#total-price-cart').html(new Intl.NumberFormat('vi-VN', {
                        style: 'currency',
                        currency: 'VND'
                    }).format(response.totalPriceCart));
                    $('#inner').html('<div id="alert-success" class="alert alert-success" role="alert">' + response.message + '</div>');
                    setTimeout(function () {
                        if ($('#alert-success').length > 0) {
                            $('#alert-success').remove();
                        }
                    }, 2000)
                },

                error: function (error) {
                    console.log(error);
                },
                timeout: 3000

            })

        }
    }

    $('.addToCart').click(function () {
        let idFood = $(this).attr('data-id');
        $.ajax({
            url: location + '/customer/' + idFood + '/addToCart',
            method: 'GET',
            type: 'json',
            success: function (res) {
                displayCart(res);
            }
        })
    })

    function displayCart(res) {
        let str = "";
        let cart = res.items;
        for (let foodId in cart) {
            str += ` <div id="food-${foodId}" class="bg-white border-bottom py-2">
                                <div
                                    class="gold-members d-flex align-items-center justify-content-between px-3 py-2 border-bottom">
                                    <div class="media align-items-center">
                                        <div class="mr-2 text-danger">&middot;</div>
                                        <div class="media-body">
                                            <p class="m-0 foodName">${cart[foodId].item.name}</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="count-number float-right">
                                            <button type="button"
                                                    class="btn-sm left dec btn btn-outline-secondary button-minus"
                                                    data-id="${foodId}">
                                                <i class="feather-minus"></i> </button>
                                            <input
                                                class="count-number-input quantity-food" type="text"
                                                data-id="${foodId}" readonly=""
                                                id="${foodId}"
                                                value="${cart[foodId].quantity}">
                                            <button type="button"
                                                    class="btn-sm right inc btn btn-outline-secondary button-plus"
                                                    data-id="${foodId}">
                                                <i class="feather-plus"></i>
                                            </button>
                                        </span>
                                        <p class="text-gray mb-0 float-right ml-2 text-muted small"
                                           id="food-total-price-${foodId}" > ${new Intl.NumberFormat('vi-VN', {style: 'currency', currency: 'VND'}).format(cart[foodId].price)}
                                            </p>
                                    </div>
                                </div>
                            </div>`
        }
        $("#cart").html(str)
        $('#total-price-cart').html(new Intl.NumberFormat('vi-VN', {
            style: 'currency',
            currency: 'VND'
        }).format(res.totalPrice));
    }

    function showCart() {
        $.ajax({
            url: location + '/customer/getAll',
            method: 'GET',
            type: 'json',
            success: function (res) {
                displayCart(res)
            }
        })
    }

    showCart();
})



