$(document).ready(function (e) {
    //var loc = window.location.pathname;
    //var currentDir = loc.substring(0, loc.lastIndexOf('/'));
     //console.log(currentDir + "/check-email.php");
    $("#cvform").validate({
        //debug: true,
        rules: {
            name: {
                required: true,
            },
            mobile: {
                required: true,
                minlength: 11,
                maxlength: 11,
                number: true,
            },
            email: {
                required: true,
                email: true,
                // remote: currentDir + "check-email.php",
                remote: {
                    //url: "check-email.php",
                    url:'check-email.php',
                    type: "post",
                    data:{
                       // email: function() {
                           //return $(':input[name="name"]').val();
						    //return $('#cvform :input[name="email"]').val();
                       //}
                    }

                }
            },
            "interest[]": {
                require_from_group: [1, ".interest-group"]
            },
            "nature[]": {
                require_from_group: [1, ".nature-group"]
            },
            "cvFile": {
                required: false,
                extension: 'docx|doc|pdf'
            }
        },
        messages: {
            mobile: 'Please enter valid mobile no',
            // "cvFile":{
            //     required: 'upload pdf, docx or doc file only'
            // },
            "interest[]": 'Please choose at least one area of interest',
            "nature[]": 'Please choose at least one job nature',
            email: {
                remote: "This email already exist"
            }
        },
        errorPlacement: function (error, element) {
            if (element.attr("name") == "interest[]") {
                error.insertBefore("#interest_error");
            }
            else if (element.attr("name") == "nature[]") {
                error.insertBefore("#nature_error");
            } else {
                error.insertAfter(element);
            }
        }
    });

    // if (window.File && window.FileList && window.FileReader) {
    //     $("#cvFile").on("change", function (e) {
    //         var files = e.target.files,
    //             filesLength = files.length;
    //         for (var i = 0; i < filesLength; i++) {
    //             var f = files[i]
    //             var fileReader = new FileReader();
    //             fileReader.onload = (function (e) {
    //                 var file = e.target;
    //                 $("<span class=\"pip\">" +
    //                     "<br/><span class=\"remove\">Remove File</span>" +
    //                     "</span>").insertAfter("#cvFile");
    //                 $(".remove").click(function () {
    //                     $(this).parent(".pip").remove();
    //                 });
    //
    //                 // Old code here
    //                 /*$("<img></img>", {
    //                  class: "imageThumb",
    //                  src: e.target.result,
    //                  title: file.name + " | Click to remove"
    //                  }).insertAfter("#files").click(function(){$(this).remove();});*/
    //
    //             });
    //             fileReader.readAsDataURL(f);
    //         }
    //     });
    // } else {
    //     alert("Your browser doesn't support to File API")
    // }

});