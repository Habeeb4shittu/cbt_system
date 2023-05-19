let count = 1;
$(".toggler").click(function ()
{
    count++
    $("aside").toggleClass("show")
    if (count % 2 == 0)
    {
        $(".angle").animate({
            rotate: '180deg'
        }, "fast")
    } else
    {
        $(".angle").animate({
            rotate: '0deg'
        }, "fast")
    }
})
$(".close").click(() =>
{
    $("aside").toggleClass("show")
    $(".angle").animate({
        rotate: '0deg'
    }, "fast")
})
$(".menu-toggler").click(function ()
{
    let mHeight = $(this).siblings(".links-wrapper").find(".menu-links")[0].clientHeight
    if ($(this).siblings(".links-wrapper").height() == 0)
    {
        $(this).siblings(".links-wrapper").height(mHeight)
        $(this).siblings(".links-wrapper").css({ "overflow-y": "auto" })
        $(this).find("span").empty().append(`<i class="fa fa-minus" aria-hidden="true"></i>`)
    } else
    {
        $(this).siblings(".links-wrapper").height(0)
        $(this).find("span").empty().append(`<i class="fa fa-plus" aria-hidden="true"></i>`)
    }
})
$(".logout").click(function ()
{
    location.href = "../../src/logout.php"
})
// $("input[type='range']").on('input', function ()
// {
//     let r = $(".r").val()
//     let g = $(".g").val()
//     let b = $(".b").val()
//     $("main").css({
//         background: `rgb(${r}, ${g}, ${b})`
//     })
// })