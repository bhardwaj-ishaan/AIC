$(document).ready(() => {
    $("ul").removeClass("oldclassfrom1997");
    $("#longsongs").addClass("songerrors");
    $("#irrationalsongs").addClass("songerrors");
    $("#futuremovies h4").remove();
    $("#futuremovies").append($("#futuremovies p"));
    //prepend is different from before because it inserts the element to the beginning of the element, while before insets it before each element
    $("body").prepend($("header"));
    $("#irrationalsongs ul li:last-child").addClass("meta-irony");
    $("form p label input[type=text]").prop('required', true);
    $("div#dogs ul li").eq(4).addClass("yesdog");
});