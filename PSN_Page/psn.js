// $(document).ready(function () {
    $('.form-btn').on('click', function () {
        // e.preventDefault();
        var name = $('#inputName').val();
        console.log( name);
        var email = $('#inputEmail4').val();
        var num = parseInt($('#inputNum').val());
        var compName = $('#inputComp').val();
        var business = $('#inputBuss').val();
        var add = $('#inputAddress').val();
        var city = $('#inputCity').val();
        var country = $('#inputCountry').val();
        var zip = $('#inputZip').val();
        var date = $('#inputDate').val();
        // var date = $('#inputDate').val(); 
        var info = $('#inputBrief').val();
        var business_int = $("input[name='gridRadios']:checked").val();
        console.log(business_int);
        


        $.ajax({
            url: "form.php",
            type: "POST",
            data: {
                cusName: name, cusEmail: email, cusNum: num, cusCompName: compName, cusBusiness: business, cusAdd: add, cusCity: city, cusCountry: country,
                cusZip: zip, cusDate: date, cusInfo: info, 
                person_interest:business_int
            },
            // the info comming from form.php will be in data parameter
            success: function (data) {
                if (data) {
                    alert("Sucessfully Saved!")

                }
                else {
                    alert("cant save recoed");
                }

            }

        });
    });
// });




