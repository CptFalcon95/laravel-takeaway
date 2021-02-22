$(function() {
    var $formNewCat = $("#form-new-category");
    var $menuRender = $(".menu-render-content");


    $formNewCat.on('submit', function(e) {
        e.preventDefault();

        var formData = {
            'name'  : $('input[name=name]').val(),
            'desc'  : $('textarea[name=desc]').val(),
            // 'image' : $('input[name=image]').val()
            'image' : 'https://via.placeholder.com/1000x300'
        };

        console.log(formData);
    });

    function createCategoryElement(data) {

    }
});