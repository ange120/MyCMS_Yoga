let langOnLoad = document.getElementById('langOnLoad');
langOnLoad.onchange = function () {
    let page = document.location.pathname;
    if (page === "/") {
        page = "info"
    } else {
        page = page.substr(1)
    }
    console.log(langOnLoad.options[langOnLoad.options.selectedIndex].value)
    console.log(page)
    send_form(page, langOnLoad.options[langOnLoad.options.selectedIndex].value)
}