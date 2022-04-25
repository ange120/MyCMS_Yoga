function getContentToPage() {
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: '/textByContactUs',
        success: function (data) {
            mainPage(data.pageText.title, data.pageText.name, data.pageText.email,data.pageText.info,data.pageText.button)
        },
        error: function (logError) {
            console.log(logError)
        }
    });
}

function sendContact() {
    var form = $('#contactFormToSend');
    var msg = form.serialize();
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: '/contactUsForm',
        data: msg,
        success: function(data) {
            console.log(data)
            afterInfo(data.text)
        },
        error:  function(logError){
            console.log(logError)
        }
    });
}

function mainPage(title,name, email,info ,button) {
    let viewDiv = document.querySelector('.mainBloc')

    viewDiv.innerHTML = `
<h2 class="infoContactForm">${title}</h2>
    <form method="post"  onsubmit="return validContactForm();" name="contactForm" id="contactFormToSend">
        <input name="name" type="text" class="feedback-input" placeholder="${name}" />
        <input name="email" type="text" class="feedback-input" placeholder="${email}" />
        <textarea name="info" class="feedback-input" placeholder="${info}"></textarea>
        <input type="button" value="${button}" onclick="validContactForm()"/>
    </form>

`;
}

function validContactForm ( )
{

    let valid = true;

    if ( document.contactForm.name.value == "" ){
        valid = false;
    }
    if(document.contactForm.email.value == ""){
        valid = false;
    }
    if(document.contactForm.info.value == ""){
        valid = false;
    }
    if(valid === true){
        sendContact()
    }
    return valid
}
function afterInfo(text)
{
    let viewDiv = document.querySelector('.mainBloc')

    viewDiv.innerHTML = `
<h2 class="infoContactForm"> ${text} <h2>

`;
}

getContentToPage()