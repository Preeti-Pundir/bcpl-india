function subscribe() {
    const email= $('#sub').val();
    async function callapi(){
        const data={
            email:email,
       }
        var url=$(location).attr('protocol')+"api/subscribe";
            await $.ajax({
                url: url,
                type: "post",
                data: data,
             success:function (res) {
                if (res.errorcode==400) {
                    $('.error').empty()
                    const email='<span class="error text-danger">'+res.error.email+'</span>'
                    $('.subscribemailerror').append(email);
                    // alert(res.error.email);
                }else{
                    $('.error').empty()
                    $('#sub').val("");
                    const email='<span class="error text-success">'+res.msg+'</span>'
                    $('.subscribemailerror').append(email);

                }
             },
         });

        }
        callapi()
}
