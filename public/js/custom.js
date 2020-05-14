$("#sideBtn").click(function()
{
slide();
});

$("#left").click(function()
{
slide();
});


function slide() {
    if($("#menuSVG").hasClass("rt90"))
    {
        $("#menuSVG").removeClass("rt90");
    }
    else
    {
        $("#menuSVG").addClass("rt90");
    }
    $("#left").toggleClass("opened");
}

// $(".myinput").click(function(){
//     var el = "#l" + $(this).attr("name");
//     $(el).addClass('hidden');
//   });
//   $(".myinput").blur(function(){
//     var el = "#l" + $(this).attr("name");
//     if($(this).val() === "")
//     $(el).removeClass('hidden');
//   });


  $.ajaxSetup({

    headers: {

        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

    }

});

$(document).ready(function() {
    $('#pdate').persianDatepicker({
        responsive:false,
        format:'YYYY/MM/DD HH:mm',
        toolbox:{
            calendarSwitch:{
                enabled: false
            }
        },
        navigator:{
            scroll:{
                enabled: false
            }
        },
        maxDate: new persianDate().add('day', 10).valueOf(),
        minDate: new persianDate().add('day', 1).valueOf(),
        timePicker: {
            enabled: true,
            hour: {
                enabled: true,
                step: null
              },
              minute: {
                enabled: true,
                step: 15
              },
              second: {
                enabled: false,
                meridian: {
                    enabled: false
                  },
    }
    }
})
  });
$("#sendReq").click(function(e){
    e.preventDefault();
sendy();

});

function sendy() {
    var fullname = $("input[name=fullname]").val();
    var contactType = document.querySelector('input[name="rb"]:checked').value;
    var email;
    var mobile;
    if(contactType == "Email")
    {email = $("input[name=email]").val();}
    else
    {email = "@";}
    if(contactType == "Call")
    {mobile = persianJs($("input[name=mobile]").val()).toEnglishNumber().toString();}
    else
    {mobile = "#";}
    var modelt = document.getElementsByName("dvt")[0];
    var modell = document.getElementsByName("dvl")[0];
    var model;
    try {
        if(!modelt)
        model = "NoModel";
        else
        model = modelt.options[modelt.selectedIndex].innerText + " - "+ modell.options[modell.selectedIndex].innerText;
    } catch (error) {
        document.getElementById("failM").style.display = "block";
 }

    var subject = $("select[name=subject]").val();
    var calldate = $("input[name=idate]").val();
        if(calldate === "")
        calldate = "OYC";
    var details = $("textarea[name=details]").val();

if(email)
         $.ajax({

       type:'POST',

       url:"/AjaxSend",

       data:{
            fullname:fullname,
            email:email,
            mobile:mobile,
            model:model,
            subject:subject,
            calldate:calldate,
            details:details,
            contactType:contactType
       },

       success:function(data){

          window.location.reload();
       },
            error:function(data)
            {
            console.log(data.responseJSON);
            }
    });

}
$("#reqStat").click(function (e) {
    e.preventDefault();
});

    function checkcode()
    {
        var ccode=Math.floor($("#requestcode").val());
        if (ccode==sentcode)
        {
        $("#checkmark").toggleClass("dspl-n");
        disableall();
        $("#requestcode").prop("disabled", true);
        $("#requestcode").addClass("dsbld");
        $("#sendReq").prop("disabled", false);
        $("#sendReq").removeClass("dsbld");
        }
    }
    function disableall()
    {
        $("#subjselBox").prop("disabled", true);
        $("#fulln").prop("disabled", true);
        $("#mobTextBox").prop("disabled", true);
        $("#emailTextBox").prop("disabled", true);
        $(".deviceList").prop("disabled", true);
        $("#callCheckBox").prop("disabled", true);
        $("#emailCheckBox").prop("disabled", true);
        $("#ticketCheckBox").prop("disabled", true);
        $('input[name ="idate"]').prop("disabled", true);
        $("#detTextBox").prop("disabled", true);
        $("#btnSMS").prop("disabled", true);


        $("#subjselBox").addClass("dsbld");
        $("#fulln").addClass("dsbld");
        $("#mobTextBox").addClass("dsbld");
        $("#emailTextBox").addClass("dsbld");
        $(".deviceList").addClass("dsbld");
        $('input[name ="idate"]').addClass("dsbld");
        $("#detTextBox").addClass("dsbld");
        $("#btnSMS").addClass("dsbld");
  }
        function enableall()
    {
        $("#subjselBox").prop("disabled", false);
        $("#fulln").prop("disabled", false);
        $("#mobTextBox").prop("disabled", false);
        $("#emailTextBox").prop("disabled", false);
        $(".deviceList").prop("disabled", false);
        $(".datettimeI").prop("disabled", false);
        $("#callCheckBox").prop("disabled", false);
        $("#emailCheckBox").prop("disabled", false);
        $("#ticketCheckBox").prop("disabled", false);
        $("idate").prop("disabled", false);
        $("#detTextBox").prop("disabled", false);
        $("#detTextBox").removeClass("dsbld");
    }
