$(function() {
    let $formNewCat = $("#form-new-category");
    let $menuRender = $(".menu-render-content");
    let $categorySelect = $('select[name=categories]');


    $formNewCat.on('submit', function(e) {
        e.preventDefault();

        var formData = {
            'name'  : $('input[name=name]').val(),
            'desc'  : $('textarea[name=desc]').val(),
            // 'image' : $('input[name=image]').val()
            'image' : 'https://via.placeholder.com/1000x200',
            'csrf'  : $('input[name=_token]').val()
        };

        console.log(formData);
        createCategoryElement(formData)
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
    }

    function createCategoryProduct(data) {

    }
});