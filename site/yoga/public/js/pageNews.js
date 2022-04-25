function getContentToPage() {
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: '/pageNewsContent',
        success: function (data) {
            let viewDiv = document.querySelector('.mainBloc')
            while (viewDiv.firstChild) {
                viewDiv.removeChild(viewDiv.firstChild);
            }
            for (let i = 0; i < data.length; i++) {
                mainPage(data[i].date, data[i].description, data[i].img, data[i].name,data[i].title)
            }
        },
        error: function (logError) {
            console.log(logError)
        }
    });
}
function mainPage(date, description, img, name, title) {
    let viewDiv = document.querySelector('.mainBloc')

    viewDiv.innerHTML += `<div class="blog-card">
        <div class="meta">
            <div class="photo" style="background-image: url(${img})"></div>
            <ul class="details">
                <li class="author">${name}</li>
                <li class="date">${date}</li>
            </ul>
        </div>
        <div class="description">
            <h1>${title}</h1>
            <p>${description}</p>
        </div>
    </div>`;
}

getContentToPage()




