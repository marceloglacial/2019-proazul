// Calculate Image Height for card
function imageHeight() {
    $(".card-img").each(function () {
        var i = $(this).find(".card-img-top").height();
        return $(this).height(i)
    })
}

$(document).ready(function() {
    imageHeight();
});
$(window).resize(imageHeight);
