<div class="modal fade " id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="add_gambar">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                <h4 class="modal-title" >Edit <span id="modal-edit-title"></span></h4>
            </div>
            
            <form method="post" action="<?php echo base_url('index.php/admin/jurnal_kategori_edit') ?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="input-kategori">Kategori</label>
                        <input type="hidden" id="modal-edit-id" name="id">
                        <input type="text" id="modal-edit-kategori" name="kategori" class="form-control" placeholder="Kategori">
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