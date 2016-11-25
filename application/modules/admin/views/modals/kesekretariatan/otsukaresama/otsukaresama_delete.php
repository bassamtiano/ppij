<div class="modal fade " id="modal_remove" tabindex="-1" role="dialog" aria-labelledby="add_gambar">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                <h4 class="modal-title" >Delete <span id="modal-delete-title"></span></h4>
            </div>
            
            <form method="post" action="<?php echo base_url('index.php/admin/otsukaresama_remove') ?>">
                <div class="modal-body">
                    Do you want to remove <span id="modal-delete-name"></span>
                    <input id="modal-delete-id" type="hidden" name="id">
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
            
        </div>
    </div>
</div>