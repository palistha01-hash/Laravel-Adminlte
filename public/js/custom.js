function initNepaliPicker(fld, disable, updateAD) {
    var currentDate = NepaliFunctions.GetCurrentBsDate('YYYY-MM-DD');
    let prop = {
        container: '#backendModal',
        ndpYear: true,
        ndpMonth: true
    };
    if (typeof disable !== 'undefined' && disable) {
        if (disable == 'beforeToday') {
            prop.disableBefore = currentDate;
        }
        else if (disable == 'afterToday') {
            prop.disableAfter = currentDate;
        }
    }
    //update in date(AD)
    if (typeof updateAD !== 'undefined' && updateAD) {
        prop.onChange = function (fld) {
            if (fld) {
                var ad = fld.ad;
                document.getElementById(updateAD).value = ad;
            }
        }
    }
    var modalInput = document.getElementById(fld);
    if (modalInput) {
        modalInput.nepaliDatePicker(prop);
    }

}
$('body').on('click', '.openFormModal', function (e) {
    e.preventDefault();  
    var m = $(this),
        id = m.attr('id'),
        route = m.data('url');
    form_code = m.data('formcode');
    $('#saveBtn').attr('disabled', false);


    $.ajax({
        method: "GET",
        context: m,
        url: route,
        beforeSend: function () {
            // Show loader or overlay if needed
            $('.page-wrapper').addClass('loading');
            $('.overlay').show();
        },
        success: function (response) {
            if (response.html) {
                $('.formContainer').html(response.html);
                $('.modal-title').text(response.title);            

                $('#backendModal').modal('show');
                initNepaliPicker('DateOfBirth', 'afterToday', 'DateOfBirthAd');
                }

            },      

        complete: function () {
            $('.page-wrapper').removeClass('loading');
            $('.overlay').hide();
        }
    })
});

$(document).on('click', '.openDeleteModal', function(e) {
    e.preventDefault();
    var url = $(this).data('url');  // Get the delete URL

    // Show the confirmation modal
    $('#deleteModal').modal('show');

    // Set the form's action URL to the delete URL
    $('#deleteForm').attr('action', url);
});

$('#deleteConfirmBtn').on('click', function(e) {
    e.preventDefault();

    // Submit the delete form via AJAX
    $.ajax({
        method: 'DELETE',
        url: $('#deleteForm').attr('action'),
        data: {
            _token: $('meta[name="csrf-token"]').attr('content') // CSRF token for security
        },
        success: function(response) {
            // Hide the modal
            $('#deleteModal').modal('hide');

            // Optionally, you can refresh the DataTable here
            $('#example').DataTable().ajax.reload();
        },
        error: function(xhr) {
            // Handle errors
            alert('Error deleting user');
        }
    });
});
