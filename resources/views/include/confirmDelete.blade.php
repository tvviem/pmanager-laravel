<!-- Modal -->
<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form method="post" id="deleteForm">
            @method('DELETE')
            @csrf
            <div class="modal-body">
                    <p class="text-center">
                        Are you sure you want to delete this?
                    </p>
                    <input type="hidden" name="id" id="_id" value="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
                <button type="submit" class="btn btn-warning">Yes, Delete</button>
            </div>
        </form>
        </div>
    </div>
</div>
<script>
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
            console.log($object)
            // Set URI string for destroy an object 
            let uriString = $object+'/'+_id
            $('deleteForm').attr('action', uriString)    
        });
    });
    
    /* $('#confirmDelete').find('.modal-footer #confirm').on('click', function(){
        $(this).data('form').submit();
    }); */
    
</script>