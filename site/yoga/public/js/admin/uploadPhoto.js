function AddNew() {
    let viewDiv = document.querySelector('.bodyTable')
    while (viewDiv.firstChild) {
        viewDiv.removeChild(viewDiv.firstChild);
    }
    viewDiv.innerHTML = `
<h2>Upload new Photo</h2>
<form method="post"  onsubmit="return validFormUpload();" name="formUpload" id="formUpload">
  <h1>Select a photo to upload</h1>
  <h5 class="labelUpdateForm">Name Photo<input name="name" type="text" class="feedback-input" placeholder="My_Photo" /></h5>
  
   <div class="PhotoInfo">
                <div>
                    <img id="myimage" src=""/>
                </div>
                <div class="uploadPhoto">
                    <input type="file" id="UploadPhoto" name="photoForm" onchange="onFileSelected(event)" accept="image/jpeg,image/png,image/jpg,image/webp,image/svg">
                    <input type="text" id="UploadPhotoForm" name="photo" hidden>
                </div>
            </div>
  <input type="button" value="Upload" onclick="validFormUpload()"/>
  <input type="button" value="Back" onclick="back()"/>
 </form>
`;
}

function back() {
    location.reload()
}

function onFileSelected(event) {
    let selectedFile = event.target.files[0];
    let reader = new FileReader();
    let alert = document.querySelector(".alert");
    let inputImage = document.querySelector("#UploadPhotoForm");

    let imgtag = document.getElementById("myimage");
    imgtag.title = selectedFile.name;

    reader.onload = function (event) {
        imgtag.src = event.target.result;
        inputImage.value = event.target.result;

    };
    if (selectedFile.type === 'image/png' || selectedFile.type === 'image/jpeg') {
        reader.readAsDataURL(selectedFile);
        if (alert != null) {
            document.body.removeChild(alert);
        }
    } else {
        var modal = $modal({
            title: 'Information',
            content: '<strong style="color: red">Please choose the correct photo format</strong>',
        });
        modal.show();
        document.getElementById("UploadPhoto").value = "";
    }
}

function validFormUpload() {
    let valid = true;

    if (document.formUpload.photo.value == "") {
        valid = false;
    }
    if (document.formUpload.name.value == "") {
        valid = false;
    }

    if (valid == true) {

        var form = $('#formUpload');
        var msg = form.serialize();
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: '/adminAddNewPhoto',
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
}