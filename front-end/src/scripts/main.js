function imageHeight() {
    $('.card-img').each(function() {
        let imageHeight = $(this).find('.card-img-top').height();
        return $(this).height(imageHeight) ;
    });
}

$(document).ready(imageHeight); 
$(window).resize(imageHeight); 