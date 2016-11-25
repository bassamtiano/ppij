<div class="modal fade " id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="add_gambar">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                <h4 class="modal-title" >Edit Slideshow</span></h4>
            </div>
            
            <form method="post" role="form" action="<?php echo base_url('index.php/admin/slideshow_edit') ?>" enctype="multipart/form-data">

                <input type="hidden" name="id" id="input-edit-id" >

                <div class="modal-body">
                    <div class="form-group">
                        <label for="input-edit-kategori">Title</label>
                        <input type="text" name="title" class="form-control" id="input-edit-title" placeholder="Kategori">
                    </div>
                    <div class="form-group">
                        <label for="input-edit-kategori">Deskripsi</label>
                        <textarea name="description" class="form-control" id="input-edit-description" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">
                            Gambar
                        </label>
                        <input name="url" type="file" id="exampleInputFile">
                        <input type="hidden" name="old_url" id="input-edit-gambar" >
                    </div>

                    <div class="form-group">
                        <label for="input-edit-kategori">Status</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="edit_status" value="1" >
                                Aktif
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="edit_status" value="0" >
                                Non Aktif
                            </label>
                        </div>
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