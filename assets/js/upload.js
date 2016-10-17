// $(document).ready(function (e) {
//     $(document).on('submit', '#cvform', function (e) {
//
//         var data = $(this).serialize();
//         var formData = new FormData($(this)[0]);
//
//         console.log(formData)
//         $.ajax({
//             type: 'POST',
//             url: 'store.php',
//             data: formData,
//             async: false,
//             cache: false,
//             contentType: false,
//             enctype: 'multipart/form-data',
//             processData: false,
//             success: function (response) {
//                 //$('.alert.alert-success').removeClass('hide').addClass('show').html(response);
//
//                 // $('.modal-body').html(response);
//                 // $("#message").modal('show');
//                 // $(this).find('#cvform').trigger('reset');
//                 // // $("#cvform")[0].reset();
//
//             }
//         });
//         e.preventDefault();
//     });
//
//     $('#message').on('hide.bs.modal', function () {
//         window.location.reload();
//         $(this).find('#cvform').trigger('reset');
//         // $("#cvform")[0].reset();
//     })
// });