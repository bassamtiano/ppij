<div class="modal fade" id="modal_remove" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" >Delete <span id="modal-delete-title"></span></h4>
            </div>
            <form method="post" action="<?php echo $admin_url . '/aktifitas_delete' ?>">
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

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui.min.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/adminlte.min.js'); ?>"></script>

<script type="text/javascript">
    $(function () {
        CKEDITOR.replace('editor1');
    });
</script>