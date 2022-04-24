function getContentToPage() {
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: '/textByNeedToLogin',
        success: function (data) {
            mainPage(data.pageText.head, data.pageText.text, data.pageText.button)
        },
        error: function (logError) {
            console.log(logError)
        }
    });
}
function mainPage(head, text, button) {
    let viewDiv = document.querySelector('.mainBloc')

    viewDiv.innerHTML = `<div id="background"></div>
    <div class="top">
        <h1>${head}</h1>
        <h3>${text}</h3>
    </div>
    <div class="container">
        <div class="ghost-copy">
            <div class="one"></div>
            <div class="two"></div>
            <div class="three"></div>
            <div class="four"></div>
        </div>
        <div class="ghost">
            <div class="face">
                <div class="eye"></div>
                <div class="eye-right"></div>
                <div class="mouth"></div>
            </div>
        </div>
        <div class="shadow"></div>
    </div>
    <div class="bottom">
        <div class="buttons">
            <button class="textButtonLogin" id="back" onclick="back()">${button}</button>
        </div>
    </div>`;
}
function back ()
{
    window.history.back()
}
getContentToPage()