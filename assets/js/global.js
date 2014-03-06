$(function() {
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });
    $('label.tree-toggler').click(function() {
        $(this).parent().children('ul.tree').toggle(300);
    });
});