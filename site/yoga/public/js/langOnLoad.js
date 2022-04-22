document.addEventListener('DOMContentLoaded', event => {
    let page = document.location.pathname;
    if (page === "/") {
        page = "info"
    } else {
        page = page.substr(1)
    }

    send_form(page, 'localOnload')
})

function send_form(url, location) {
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: location,
        data: {"page": url},
        success: function (data) {
            console.log(data)
            pageHeader(data.header)
            pageContentLocal(data.page)
            pageFooter(data.footer)
            include("public/js/tet.js");
        },
        error: function (logError) {
            console.log(logError)
        }
    });
}

function pageContentLocal(page) {
    let viewDiv = document.querySelector('.mainBloc')
    viewDiv.innerHTML = page;

}

function pageHeader(header) {
    let viewDiv = document.querySelector('.head')
    viewDiv.innerHTML = header;
}
function pageFooter(footer) {
    let viewDiv = document.querySelector('.footerOnLoad')
    viewDiv.innerHTML = footer;
}

function include(url) {
    var script = document.createElement('script');
    script.src = url;
    document.getElementsByTagName('head')[0].appendChild(script);
}

