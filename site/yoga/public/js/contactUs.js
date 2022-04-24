function getContentToPage() {
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: '/textByContactUs',
        success: function (data) {
            mainPage(data.pageText.head, data.pageText.text, data.pageText.name,data.pageText.email,data.pageText.button,data.pageText.info)
        },
        error: function (logError) {
            console.log(logError)
        }
    });
}
function mainPage(head, text,  name, email, button, info) {
    let viewDiv = document.querySelector('.mainBloc')

    viewDiv.innerHTML = `
<form>
<div class="wrapper centered">
        <article class="letter">
            <div class="side">
                <h1>${head}</h1>
                <p>
                    <textarea placeholder="${text}"></textarea>
                </p>
            </div>
            <div class="side">
                <p>
                    <input type="text" placeholder="${name}" >
                </p>
                <p>
                    <input type="email" placeholder="${email}" >
                </p>
                <p>
                    <button id="sendLetter" onclick="Send()">${button}</button>
                </p>
            </div>
        </article>
        <div class="envelope front"></div>
        <div class="envelope back"></div>
    </div>
    <p class="result-message centered">${info}</p>
    </form>

`;
}
function addClass() {
    document.body.classList.add("sent");
}
function Send ()
{
    sendLetter.addEventListener("click", addClass);
}


getContentToPage()