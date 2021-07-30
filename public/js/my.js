$(document).ready(function () {
    let location = window.location.origin;
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
    function updateToCart(idFood) {
        let value = $(`#${idFood}`).val();
        if(value > 0){

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
                    $('#food-total-price-' + idFood).html(new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(response.foodUpdate.price));
                    $('#total-price-cart').html(new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(response.totalPriceCart));
                },

                error: function (error) {
                    console.log(error);
                }
            })
        }else{

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
                        $('#total-price-cart').html(new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(response.totalPriceCart));
                        $('#inner').html('<div id="alert-success" class="alert alert-success" role="alert">' + response.message + '</div>');
                        setTimeout(function(){
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

})



