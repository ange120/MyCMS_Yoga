function send_form() {
    var form = $('#formUser');
    var msg = form.serialize();
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: 'http://hello.loc:8085/registrationUser',
        data: msg,
        success: function(data) {
            if(data.status !== 400){
                window.location.href = 'activity'
            }else {
                var modal = $modal({
                    title: 'Information',
                    content: '<strong style="color: red">'+data.messages+'</strong>',
                });
                modal.show();
            }
        },
        error:  function(logError){
            console.log(logError)
            var modal = $modal({
                title: 'Information',
                content: 'An error has occurred, please try again later',
            });
            modal.show();
        }
    });

}
function validate_form ( )
{

    let valid = true;

    if ( document.contact_form.name.value == "" ){
        valid = false;
    }
    if ( document.contact_form.userName.value == "" ){
        valid = false;
    }
    if(document.contact_form.age.value == ""){
        valid = false;
    }
    if(document.contact_form.email.value == ""){
        valid = false;
    }
    if(document.contact_form.password.value == ""){
        valid = false;
    }
    if(valid === false){
        ModalError()
    }
    if(valid === true){
        send_form()
    }
    return valid
}
function ModalError()
{
    var modal = $modal({
        title: 'Information',
        content: '<strong style="color: red">Please</strong>  fill in the fields or enter correct data.',
    });
    modal.show();
}
