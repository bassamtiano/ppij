<div class="modal fade " id="modal_event" tabindex="-1" role="dialog" aria-labelledby="add_gambar">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            
            
                <div class="modal-header">
                    <a type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                    <span style="font-size: 20px; margin: 0; padding: 0; text-align: center; width: calc(100% - 10px); float: left; ">
                        <?php echo $data->title ?> 
                    </span>
                </div>
                <div class="modal-body">
                    <img style="width: 100%;" src="<?php echo base_url() . '/files/events/img/' . $data->url ?>">
                </div>
                
            
            
        </div>
    </div>
</div>