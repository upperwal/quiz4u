
$(window).scroll(function() {

if ($(window).scrollTop()==0) {
	 	//$("#eee").animate({height:'0px'},3000);
        $("#anything").show(300);       
    }
	 else if ($(window).scrollTop()> 110){
	 	//$("#eee").animate({height:'0px'},3000);
        $("#anything").hide(300);    
                      
    }
    
    });
             
/*
             $(window).scroll(function () {
                 if ($(window).scrollTop() == 0) {
                     $("#eee").animate({height:'0px'},3000);
                     alert('Scrolled to Page Bottom');
                 }
                 else if ($(window).scrollTop() > 30) {
                     $("#eee").animate({height:'130px'},3000);

                     
                     //alert('Scrolled to Page Bottom');
                 }
             });
  */
 $("#home-link").mouseover(function() {
    $("#home-link").animate({paddingBottom: '15px'},200);
    $("#home-link").css('border-bottom-color','#7f9b61');
 });
  $("#home-link").mouseout(function() {
    $("#home-link").animate({paddingBottom: '10px'},100);
    $("#home-link").css('border-bottom-color','white');
 });


$("#services-link").mouseover(function() {
    var rr = $("#services-link").offset();
    $(".services-content").show(300);
    $(".services-content").css({'top': rr.top+20+'px','left': rr.left + 'px'});
    //alert(rr.top+" "+rr.left);
});

$(".services-content").mouseout(function() {
    $(".services-content").hide();
});


//Form Validation




function validateForm()
{
//var x=document.forms["booking"]["fname"].value;
var title=document.getElementById("inputTitle").value;
var author=document.getElementById("inputAuthorName").value;
var address=document.getElementById("inputAddress").value;
var sex=document.getElementById("yyy").value;
var mobile=document.getElementById("inputMobileNumber").value;
var email=document.getElementById("inputEmail").value;
var file=document.getElementById("file").value;

if(file == "" || file==null) {
            $("#inputUploadError").show();
            return false;
        }
else {
    //var value = document.form.file.value;
    $("#inputUploadError").hide();
    var format = file.substring(file.lastIndexOf(".")+1,file.length);
    if(format=="pdf" || format=="doc" || format=="docx") {
      $("#inputUploadTypeError").hide();
    }
    else {
      $("#inputUploadTypeError").show();
      return false;
    }
  }
    

if (title==null || title=="")
  {
  //alert("First name must be filled out");
  $("#inputTitleError").show();
  return false;
  }
else {
  $("#inputTitleError").hide();
  }
if (author==null || author=="")
  {
  //alert("First name must be filled out");
  $("#inputAuthorError").show();
  return false;
  }
else {
    $("#inputAuthorError").hide();
}

if (address==null || address=="")
  {
  //alert("First name must be filled out");
  $("#inputAddressError").show();
  return false;
  }
else {
    $("#inputAddressError").hide();
    }

if (mobile == "") {
  $("#inputNanMobileError").hide();
  $("#inputDigMobileError").hide();
    $("#inputMobileError").show();
    return false;
    } else if (isNaN(parseInt(mobile))) {
      $("#inputMobileError").hide();
      $("#inputDigMobileError").hide();
      $("#inputNanMobileError").show();
    return false;
        
    } else if (!(mobile.length == 10)) {
      $("#inputNanMobileError").hide();
      $("#inputMobileError").hide();
        $("#inputDigMobileError").show();
    return false;
    } 
    else {
      $("#inputNanMobileError").hide();
      $("#inputMobileError").hide();
        $("#inputDigMobileError").hide();
      }

if (email==null || email=="")
  {
  //alert("First name must be filled out");
  $("#inputEmailError").show();
  return false;
  }
else {
    $("#inputEmailError").hide();
    var atpos=email.indexOf("@");
    var dotpos=email.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=mail.length)
      {
      $("#inputEmailAddError").show();
      return false;
      }
    else {
        $("#inputEmailAddError").hide();

       }
    }








}

$('#slide_text').list_ticker({
      speed:2500,
      effect:'slide'
    }); 




//End Validation



$('.add-btn-tooltip').tooltip({
  placement: 'top'
  });


$('#noapp').click(function() {
  $('#noapp').hide();
  $('#app').show();
});

$(function(){
   $('.select-all').click(function(event) {   
        if(this.checked) {
            // Iterate each checkbox
            $(':checkbox').each(function() {
                this.checked = true;                        
            });
        }
        if(!this.checked) {
            // Iterate each checkbox
            $(':checkbox').each(function() {
                this.checked = false;                        
            });
        }
    });
});
/*$(window).scroll(function() {
  if($('#uns-header').offset().top-$(window).scrollTop()<0) {
    $('#uns-header').addClass("hd-fx");
  }
  if($('#uns-header').offset().top-$(window).scrollTop()>0) {
    $('#uns-header').removeClass("hd-fx");
  }
});
*/




