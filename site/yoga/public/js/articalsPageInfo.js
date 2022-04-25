function getInfo() {
    let id = window.location.search.replace('?', '').split('=')[1];

    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: {'id': id},
        url: '/articlePageInfo',
        success: function (data) {
            let viewDiv = document.querySelector('.mainBloc')
            while (viewDiv.firstChild) {
                viewDiv.removeChild(viewDiv.firstChild);
            }
            for (let i = 0; i < data.length; i++) {
                listPage(data[i].title, data[i].name, data[i].img, data[i].description, data[i].date)
            }
        },
        error: function (logError) {
            console.log(logError)
        }
    });
}

function listPage(title, name, img, description, date) {
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

getInfo()