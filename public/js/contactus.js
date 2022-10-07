function removedata() {
    $('#FullName').val("");
    $('#email').val("");
    $('#mobail').val("");
    $('#subject').val("Select Subject");
    $('#msg').val("");
 }
 function removerror() {
    $('.error').empty()
 }

$('#formSubmit').submit(function (e) {
    e.preventDefault();

   const name= $('#FullName').val();
   const email= $('#email').val();
   const mobail= $('#mobail').val();
   const subject= $('#subject').val();
   const msg= $('#msg').val();



async function callapi(){
    const data={
        name:name,
        email:email,
        phone:mobail,
        subject:subject,
        msg:msg
   }
    var url=$(location).attr('protocol')+"api/contactus";
        await $.ajax({
            url: url,
            type: "post",
            data: data,
         success:function (res) {

            if (res.errorcode==400) {
                removerror()
                if (res.error.name) {
                    const name='<span class="error text-danger">'+res.error.name+'</span>'
                    $('.name_error').append(name);
                }
                if (res.error.email) {
                    const email='<span class="error text-danger">'+res.error.email+'</span>'
                    $('.email_error').append(email);
                }
                if (res.error.phone) {
                    const phone='<span class="error text-danger">'+res.error.phone+'</span>'
                    $('.mobaile_error').append(phone);
                }
                if (res.error.subject) {
                    const subject='<option value="'+res.error.subject+'" selected>'+res.error.subject+'</option>'
                    $('.sub_error').append(subject);
                }
                if (res.error.msg) {
                    const msg='<span class="error text-danger">'+res.error.msg+'</span>'
                    $('.msg_error').append(msg);
            }
                return null
            }else{
                removerror()
                const msg='<div class="alert alert-success bg-transparent mt-4">'+res.msg+'</div>'
                $('.succeess').append(msg);
                removedata()
            }
         },
     });

    }
    callapi()
});
