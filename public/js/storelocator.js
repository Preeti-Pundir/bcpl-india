const store = () => {
    var hostname = $(location).attr('protocol');
    const StoreValue = $("#store").val();
    $(".appendcity").empty();
    $(".store").empty();
    var data = {
        store: StoreValue
    };
    $.ajax({
        url: hostname + "api/city",
        type: "post",
        data: data,
        success: function (res) {
            $(".store").empty();
            if (res.length == 0) {
                $(".store").append("<h1 style='font-family: montserrat, sans-serif;font-size:20px; font-weight:bold;' ><center>We are coming soon</center></h1>");
                return null
            }
            $(".store").append("<h1 style='font-family: montserrat, sans-serif;font-size:20px; font-weight:bold;' ><center>Please select your city</center></h1>");
            var html2 = "<option selected value='0' >City</option>"
            $(".appendcity").append(html2);
            for (var i = 0; i < res.city.length; i++) {
                var html = "<option value=" + res.city[i].id + " >" + res.city[i].name + "</option>"
                $(".appendcity").append(html);
            }
        },
    });
};



const storeCity = () => {
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
     });
    var hostname = $(location).attr('protocol');
    const StoreValue = $("#store").val();
    const CityValue = $("#storeCity").val();
    if (CityValue == 0) {
        $(".store").empty();
        $(".iframe").empty();
        $(".store").append("<h1 style='font-family: montserrat, sans-serif;font-size:20px; font-weight:bold;' ><center>Please select your city</center></h1>")
        return null
    }
    var data = {
        store: StoreValue,
        city: CityValue,
    };
    $.ajax({
        url: hostname + "api/store/",
        type: "get",
        data: data,

        success: function (res) {
            $(".store").empty();
            $(".iframe").empty();
            if (res.store.length == 0) {
                $(".store").append("<h1 style='font-family: montserrat, sans-serif;font-size:20px; font-weight:bold;' ><center>We are coming soon</center></h1>");
                $(".iframes").show();
                return null
            }
            const ifram = res.ifram[0].ifram
            $(".iframes").hide();
            for (var i = 0; i < res.store.length; i++) {
                var html =
                    '<p class="storehead">' +
                    res.store[i].storename +
                    '</p><p class="storedata">' +
                    res.store[i].storeaddress +
                    '</p>' +
                     '<p class="mt-3"><a class="getdirectionbtn" href="'+res.store[i].Direction+'" target="_blank" >Get direction</a></p>'
                    +  '<a data-bs-toggle="modal" data-bs-target="#examplal"  id="button_1" class="pt-1 d-block store_details button_1 store-link" href="javascript: void(0);">Store Details</a>'+ '<hr>';
                    


                $(".store").append(html);
                $("#imageResult").attr("");
            }
            $(".iframe").append(ifram);
        },
    });


    $(".button_1").click(function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "/pages/test/",
            data: {
                id: $(this).val(), // < note use of 'this' here
                access_token: $("#access_token").val(),
            },
            // success: function (result) {
            //     alert("ok");
            // },
            // error: function (result) {
            //     alert("error");
            // },
        });
    });
}
