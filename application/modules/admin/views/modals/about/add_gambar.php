<div class="modal fade " id="add_gambar" tabindex="-1" role="dialog" aria-labelledby="add_gambar">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                <h4 class="modal-title" >Add Gambar <span id="modal-delete-title"></span></h4>
            </div>
            
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-9">
                            
                            <div class="row">
                                

                                <?php foreach ($data as $dkey => $dval) {
                                    
                                ?>
                                    <div class="col-md-4">
                                        <div class="gambar-container">
                                            <img class="gambar-content" onclick="gambar_info('<?php echo $dval->id; ?>', '<?php echo $dval->url; ?>')" style="max-width: 100%;" style="max-width: 100%;" src="<?php echo base_url('files/jurnal/img/') . $dval->url; ?>">                                        
                                        </div>
                                    </div>

                                <?php } ?>


                            </div>

                        </div>
                        <div class="col-md-3">
                            
                            <div class="form-group">
                                <label for="exampleInputFile">
                                    URL Gambar
                                </label>
                                <input type="text" id="copy-name-url">
                            </div class="form-group">

                            <form action=" <?php echo base_url() . 'index.php/admin/jurnal/tambah_gambar' ?> " role="form" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputFile">
                                        Tambah Gambar
                                    </label>
                                    <input name="add_galery" type="file" id="exampleInputFile">
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">Tambah Gambar</button>
                                </div>
                            </form>

                            <form action="<?php echo base_url() . 'index.php/admin/jurnal/hapus_gambar' ?>" role="form" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputFile">
                                        Remove  
                                    </label>
                                    <input type="hidden" id="remove-id-gambar" name="galery_id">
                                    <input type="hidden" id="remove-name-gambar" name="galery_name">
                                    <span style="" id="remove-gambar-name">Test</span>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-danger btn-sm">Remove Gambar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.min.js'; ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'assets/js/custom/modal.js'; ?>"></script>

<style type="text/css">
    .gambar-container.active {
        background: #468966;
        float: left;
        width: 100%;
        height: 100%;
        padding:10px;
        border-radius: 3px;
    }
</style>

<script type="text/javascript">

    $('.gambar-container').click(function() {
        $('.gambar-container').removeClass('active');
        $(this).addClass('active');
    })
    
    function gambar_info(id, url) {
        $('#remove-id-gambar').val(id);
        $('#remove-name-gambar').val(url);

        $('#remove-gambar-name').html(url)

        var fixed_url = "<?php echo base_url('files/jurnal/img/') ?>" + url;

        $('#copy-name-url').val( fixed_url );

        copyToClipboard(document.getElementById("copy-name-url"));
    }

    function copyToClipboard(elem) {
          // create hidden text element, if it doesn't already exist
        var targetId = "_hiddenCopyText_";
        var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
        var origSelectionStart, origSelectionEnd;
        if (isInput) {
            // can just use the original source element for the selection and copy
            target = elem;
            origSelectionStart = elem.selectionStart;
            origSelectionEnd = elem.selectionEnd;
        } else {
            // must use a temporary form element for the selection and copy
            target = document.getElementById(targetId);
            if (!target) {
                var target = document.createElement("textarea");
                target.style.position = "absolute";
                target.style.left = "-9999px";
                target.style.top = "0";
                target.id = targetId;
                document.body.appendChild(target);
            }
            target.textContent = elem.textContent;
        }
        // select the content
        var currentFocus = document.activeElement;
        target.focus();
        target.setSelectionRange(0, target.value.length);
        
        // copy the selection
        var succeed;
        try {
              succeed = document.execCommand("copy");
        } catch(e) {
            succeed = false;
        }
        // restore original focus
        if (currentFocus && typeof currentFocus.focus === "function") {
            currentFocus.focus();
        }
        
        if (isInput) {
            // restore prior selection
            elem.setSelectionRange(origSelectionStart, origSelectionEnd);
        } else {
            // clear temporary content
            target.textContent = "";
        }
        return succeed;
    }

</script>
