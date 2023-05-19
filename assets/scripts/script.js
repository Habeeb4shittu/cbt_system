$(".inputs input").on('focusin', function ()
{
    $(this).siblings("label").addClass("shift")
})
$(".inputs input").on('focusout', function ()
{
    if ($(this).val() == "")
    {
        $(this).siblings("label").removeClass("shift")
    }
})
$(".inputs label").on('click', function ()
{
    $(this).addClass("shift")
})

$(".show").click(function ()
{
    let input = $(this).siblings("input")
    if (input.prop("type") == "password")
    {
        input.prop({ "type": "text" })
        $(this).empty().append(`
            <i class="fa fa-eye-slash ico" aria-hidden="true"></i>
        `)
    } else
    {
        input.prop({ "type": "password" })
        $(this).empty().append(`
            <i class="fa fa-eye ico" aria-hidden="true"></i>
        `)
    }
})
setTimeout(() =>
{
    $(".err").fadeOut(500)
}, 2000);