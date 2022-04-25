function updateNewsPage(id) {
    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: {'id': id},
        url: '/getNewsToUpdate',
        success: function (data) {
            let viewDiv = document.querySelector('.bodyTable')
            while (viewDiv.firstChild) {
                viewDiv.removeChild(viewDiv.firstChild);
            }
            mainPage('Update',data.title_ru, data.title_en, data.img, data.description_ru, data.description_en, data.date, data.author, data.id)
        },
        error: function (logError) {
            console.log(logError)
        }
    });
}

function sendFormUpdate() {
    var form = $('#contactFormUpdate');
    var msg = form.serialize();
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: '/updateNews',
        data: msg,
        success: function (data) {

            if (data.status === 200) {
                back();
            }
        },
        error: function (logError) {
            console.log(logError)
        }
    });
}

function back() {
    location.reload()
}

function validForm() {

    let valid = true;

    if (document.formUpdate.title_ru.value == "") {
        valid = false;
    }
    if (document.formUpdate.title_en.value == "") {
        valid = false;
    }
    if (document.formUpdate.description_ru.value == "") {
        valid = false;
    }
    if (document.formUpdate.description_en.value == "") {
        valid = false;
    }
    if (document.formUpdate.date.value == "") {
        valid = false;
    }
    if (document.formUpdate.author.value == "") {
        valid = false;
    }
    if (valid === true) {
        if (document.formUpdate.id.value == 0) {
             sendFormAdd()
        }else {
            sendFormUpdate()
        }
    }
    return valid
}

function mainPage(button,title_ru = '', title_en = '', img = '', description_ru = '', description_en = '', date = '', author = 1, id = 0) {
    let viewDiv = document.querySelector('.bodyTable')

    viewDiv.innerHTML = `
<h2>Update News</h2>
    <form method="post"  onsubmit="return validContactForm();" name="formUpdate" id="contactFormUpdate">
       <h5 class="labelUpdateForm">id<input name="id" type="text" class="feedback-input" value="${id}" readonly/></h5>
         <h5 class="labelUpdateForm">title_ru<input name="title_ru" type="text" class="feedback-input" value="${title_ru}" /></h5>
         <h5 class="labelUpdateForm">title_en<input name="title_en" type="text" class="feedback-input" value="${title_en}" /></h5>
         <h5 class="labelUpdateForm">description_ru<textarea name="description_ru" class="feedback-input">${description_ru}</textarea></h5>
         <h5 class="labelUpdateForm">description_en<textarea name="description_en" class="feedback-input"> ${description_en}</textarea></h5>
         <h5 class="labelUpdateForm">date<input name="date" type="date" class="feedback-input" value="${date}" /></h5>
         <h5 class="labelUpdateForm">id author<input name="author" type="number" class="feedback-input" value="${author}" /></h5>
         <h5 class="labelUpdateForm">URL to img<input name="img" type="text" class="feedback-input" value="${img}" /></h5>
        <input type="button" value="${button}" onclick="validForm()"/>
        <input type="button" value="Back" onclick="back()"/>
    </form>
`;
}

function requestToDelete(id) {
    let viewDiv = document.querySelector('.bodyTable')
    while (viewDiv.firstChild) {
        viewDiv.removeChild(viewDiv.firstChild);
    }
    viewDiv.innerHTML = `
<h2>Delete News</h2>
<form method="post"  onsubmit="return validContactForm();" name="formDelete" id="formDelete">
  <h1>Are you sure you want to delete the entry #${id}</h1>
  <input type="button" value="Delete" onclick="deleteNews(id)"/>
  <input type="text" name="id" value="${id}" style="display: none"/>
  <input type="button" value="Back" onclick="back()"/>
  </form>
`;
}

function deleteNews(id) {
    var form = $('#formDelete');
    var msg = form.serialize();
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: '/deleteArticleNews',
        data: msg,
        success: function (data) {
            if (data.status === 200) {
                back();
            }
        },
        error: function (logError) {
            console.log(logError)
        }
    });
}

function AddNew() {
    let viewDiv = document.querySelector('.bodyTable')
    while (viewDiv.firstChild) {
        viewDiv.removeChild(viewDiv.firstChild);
    }
    mainPage('Create')
}

function sendFormAdd (){
    var form = $('#contactFormUpdate');
    var msg = form.serialize();
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: '/AddNews',
        data: msg,
        success: function (data) {
            if (data.status === 200) {
                back();
            }
        },
        error: function (logError) {
            console.log(logError)
        }
    });
}

