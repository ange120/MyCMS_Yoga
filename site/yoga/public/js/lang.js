let lang = document.getElementById('lang');
lang.onchange = function(){
    let page = document.location.pathname;
    if(page === "/"){
        page = "info"
    }else {
        page = page.substr(1)
    }
    send_form(page,lang.options[lang.options.selectedIndex].value)
}

document.addEventListener('DOMContentLoaded', event => {
    let page = document.location.pathname;
    if(page === "/"){
        page = "info"
    }else {
        page = page.substr(1)
    }

    send_form(page, 'localEn')
})

function send_form(url, location) {
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: location,
        data: {"page": url},
        success: function(data) {
            console.log(data)
            pageContentLocal(data.page[0])
        },
        error:  function(logError){
            console.log(logError)
        }
    });
}

function pageContentLocal (page)
{
    let viewDiv = document.querySelector('.mainBloc')
    viewDiv.innerHTML = page;

}