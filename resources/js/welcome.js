$(function () {

    $('div.products-count a').click(function (event) {
        event.preventDefault();
        $('a.products-actual-count').text($(this).text());
        getProducts($(this).text());
    });

    $('#filter_button').click(function (event) {
        event.preventDefault();
        getProducts($('a.products-actual-count').text($(this).text()));
    });


    function getProducts(paginate) {

        const form = $('form.sidebar-filter').serialize();
        $.ajax({
            method: 'GET',
            url: "/",
            data: form + "&" + $.param({paginate: paginate})
        })
            .done(function (response) {
                $('div#products-wrapper').empty();
                $.each(response.data, function (index, product) {


                    const html = '<div class="col-6 col-md-6 col-lg-4 mb-3">\n' +
                        '                                <div class="card h-100 border-0">\n' +
                        '                                    <div class="card-img-top">\n' +
                        '                                            <img src=" ' + storagePath + product.image_path + '"' +
                        '                                                class="img-fluid mx-auto d-block" alt="Zdjęcie produktu">\n' +
                        '                                    </div>\n' +
                        '                                    <div class="card-body text-center">\n' +
                        '                                        <h4 class="card-title">\n' +
                        '                                            <a href="product.html"\n' +
                        '                                               class=" font-weight-bold text-dark text-uppercase small">\n' +
                        product.name +
                        '                                        </h4>\n' +
                        '                                        <h5 class="card-price small">\n' +
                        '                                            <i>\n' +
                        '                                                PLN ' + product.price + '</i>\n' +
                        '                                        </h5>\n' +
                        '                                    </div>\n' +
                        '                                </div>\n' +
                        '                            </div>'
                    $('div#products-wrapper').append(html);
                });
            });
    }
});
