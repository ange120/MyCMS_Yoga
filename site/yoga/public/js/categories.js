function getUpdateContentCategoriesPage() {
    imgageDefaultURL = 'public/img/defoltCategories.jpg'
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: '/categories',
        success: function (data) {
            let viewDiv = document.querySelector('.mainBloc')
            while (viewDiv.firstChild) {
                viewDiv.removeChild(viewDiv.firstChild);
            }
            for (let i = 0; i < data.length; i++) {
                categoriesPage(data[i].id, data[i].name,data[i].button, imgageDefaultURL)
            }
        },
        error: function (logError) {
            console.log(logError)
        }
    });
}
function categoriesPage(id, name, button,img) {
    let viewDiv = document.querySelector('.mainBloc')

    viewDiv.innerHTML += `<div class="blog-card">
        <div class="meta">
            <div class="photo" style="background-image: url(${img})"></div>

        </div>
        <div class="description">
            <h1><a href="/categoriesToArticle?id=${id}">${name}</a></h1>
            <p> <a href="/categoriesToArticle?id=${id}">${button}</a></p>
            
        </div>
    </div>`;
}

function back ()
{
    window.history.back()
}
getUpdateContentCategoriesPage()
