window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 4000);

$(document).ready(function () {
    $('#delete').on('show.bs.modal', function (event) {
        $message = $(event.relatedTarget).attr('data-message');
        $(this).find('.modal-body p').text($message);
        $title = $(event.relatedTarget).attr('data-title');
        $(this).find('.modal-title').text($title);
        
        var button = $(event.relatedTarget) 
        var _id = button.data('id')
        console.log(_id)
        var modal = $(this)
        modal.find('.modal-body #_id').val(_id);

        $object = $(event.relatedTarget).attr('data-object')
        // Set URI string for destroy an object 
        let uriString = $object+'/'+_id
        $('deleteForm').attr('action', uriString)    
    });
});