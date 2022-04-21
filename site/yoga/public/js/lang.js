let lang = document.getElementById('lang');
lang.onchange = function(){
    let url = document.URL;
    let new_url = url.split("_")
    window.location = new_url[0]+"_"+lang.options[lang.options.selectedIndex].value
}