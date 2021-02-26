$(function() {
    let $formNewCat = $("#form-new-category");
    let $formNewProduct = $('#form-new-product');
    let $menuRender = $(".menu-render-content");
    let $categorySelect = $('select[name=category]');


    $formNewCat.on('submit', function(e) {
        e.preventDefault();

        var formData = {
            'name'  : $('input[name=catName]').val(),
            'desc'  : $('textarea[name=catDesc]').val(),
            'image' : 'https://via.placeholder.com/1000x200',
            'csrf'  : $('#form-new-category input[name=_token]').val()
        };

        console.log(formData);
        createCategoryElement(formData)
    });

    $formNewProduct.on('submit', function(e) {
        e.preventDefault();

        var formData = {
            'name' : $('input[name=productName]').val(),
            'desc' : $('textarea[name=productDesc]').val(),
            'image' : 'https://via.placeholder.com/200x200',
            'csrf' : $('#form-new-product > input[name=_token]').val(),
            'cat' : $categorySelect.val()
        }

        createProductElement(formData);
    });

    function createCategoryElement(data) {
        let $wrapper = $('<div />').addClass('category-wrapper').attr('data-name', data.name);
        let $card = $('<div />').addClass('card mb-3');
        let $cardImg = $('<img />').addClass('card-image-top').attr('src', data.image);
        let $cardBody = $('<div />').addClass('card-body');
        let $cardTitle = $('<h5 />').addClass('card-title').html(data.name);
        let $cardDesc = $('<p />').addClass('card-text').html(data.desc);

        $cardImg.appendTo($card);
        $cardBody.append($cardTitle).append($cardDesc).appendTo($card);
        
        $card.appendTo($wrapper);
        $wrapper.appendTo($menuRender);

        addCategoryOption(data.name);
        saveCategory(data);
    }

    function createProductElement(data) {
        let $wrapper = $(`div[data-name=${data.cat}]`);
        let $catProducts = $('<div />').addClass('category-products');
        let $card = $('<div />').addClass('card mb-3');
        let $cardRow = $('<div />').addClass('row no-gutters');
        let $leftCol = $('<div />').addClass('col-md-2 py-0');
        let $productImg = $('<img />').addClass('card-img').attr('src', 'https://via.placeholder.com/400x400');
        let $rightCol = $('<div />').addClass('col-md-10');
        let $cardBody = $('<div />').addClass('card-body');
        let $cardTitle = $('<h5 />').addClass('card-title').html(data.name);
        let $cardText = $('<p />').addClass('card-text').html(data.desc);

        $catProducts.append($card);
        $card.append($cardRow);        
        $cardRow.append($leftCol).append($rightCol);

        $rightCol.append($cardBody);
        $cardBody.append($cardTitle).append($cardText);

        $leftCol.append($productImg);

        $catProducts.appendTo($wrapper);
    }

    function addCategoryOption(name) {
        let $option = $('<option />').attr('value', name).html(name);
        $categorySelect.append($option);
    }

    function saveCategory(data) {
        fetch('builder/add-category', { 
            method: 'POST',
            headers: { 
                "Content-Type": "application/json; charset=utf-8",
                'X-CSRF-TOKEN': $('input[name="_token"]').val() 
            },
            body: JSON.stringify(data)
        })
        .then(res => res.json()) // parse response as JSON (can be res.text() for plain response)
        .then(response => {
            console.log('WORKING');
            console.log(response);
        })
        .catch(err => {
            console.log("u")
            alert("sorry, there are no results for your search")
        });
    }

    function saveProduct(data) {

    }
});