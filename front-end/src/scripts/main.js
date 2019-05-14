// Calculate Image Height for card
function imageHeight() {
    $(".card-img").each(function () {
        var i = $(this).find(".card-img-top").height();
        return $(this).height(i)
    })
}

// Fix admin bar margin 
function loggedBar() {
    let adminBarHeight = $('#wpadminbar').height();
    $('body').css('padding-top', adminBarHeight);
}

$(document).ready(function() {
    imageHeight();
    loggedBar();
});
$(window).resize(imageHeight);
