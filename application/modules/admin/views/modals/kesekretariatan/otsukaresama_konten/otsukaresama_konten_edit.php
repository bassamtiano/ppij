<div class="modal fade " id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="add_gambar">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                <h4 class="modal-title" >Edit Events</span></h4>
            </div>
            
            <form method="post" role="form" action="<?php echo base_url('index.php/admin/events_edit') ?>" enctype="multipart/form-data">

                <input type="text" name="id_otsukaresama" value="<?php echo $id_otsukaresama; ?>">
                <input type="text" name="id" id="input-edit-id" >

                <div class="modal-body">
                    

                    <div class="form-group">
                        <label for="exampleInputFile">
                            Gambar
                        </label>
                        <input name="url" type="file" id="exampleInputFile">
                        <input type="text" name="old_url" id="input-edit-url" >
                    </div>

                    

                </div>
                <div class="modal-footer">
                    <a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn btn-warning">Edit</button>
                </div>
            </form>
            
        </div>
    </div>
</div>