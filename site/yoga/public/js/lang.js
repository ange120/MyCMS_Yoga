let lang = document.getElementById('lang');
lang.onchange = function(){
    let url = document.URL;
    let new_url = url.split("_")
    console.log(new_url[0])
    if(new_url[0] === 'http://hello.loc:8085/'){
         window.location = new_url[0]+"info_"+lang.options[lang.options.selectedIndex].value
    }else {
        window.location = new_url[0]+"_"+lang.options[lang.options.selectedIndex].value
    }
}