

<div class="content-wrapper">
			
	<section class="content-header">
        <h1>
            Jurnal
            <small>Tambah Konten</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-pencil-square"></i> Jurnal</a></li>
            <li><a href="#">Tambah Konten</a></li>
        </ol>
    </section>

    <?php $admin_url = base_url('index.php/admin'); ?>

    <section class="content">

        <div class="row">
            
            <div class="col-md-12">
                

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tambah Konten</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="<?php echo $admin_url . '/jurnal_edit' ?>" enctype="multipart/form-data">
                        <div class="box-body">
                        	<div class="form-group">

                                <input type="hidden" name="id" value="<?php echo $jurnal_data->id; ?>">

                                <label for="exampleInputFile">Judul Jurnal</label>
                                <input name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Aktifitas" value="<?php echo $jurnal_data->jurnal_title ?>">
                            </div>

                            <div class="form-group">
                                <label>Kategori Jurnal</label>
                                <select name="id_jurnal_kategori" class="form-control select2" style="width: 100%;">
                                    
                                    <?php
                                        
                                        foreach ($kategori as $akey => $aval) {
                                            echo '<option value="' . $aval->id . '" ';
                                            if ($aval->id == $jurnal_data->id_jurnal_kategori)
                                                echo 'selected';
                                            echo ' >' . $aval->kategori . '</option>';
                                        }


                                    ?> 

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">
                                    Gambar
                                </label>
                                <label style="float: left;width: 100%;">
                                    <a class="btn btn-primary" data-toggle="modal" data-target="#add_gambar">
                                        <i class="fa fa-picture-o" style="margin-right: 10px;"></i>Ambil Gambar Galery
                                    </a>

                                </label>
                                
                            </div>

                            

                            <div class="form-group">
                                <label for="exampleInputFile">
                                    Thumbnail
                                </label>
                                <input name="thumbnail" type="file" id="exampleInputFile">
                                <p class="help-block">
                                    Current Thumbnail : <?php echo $jurnal_data->thumbnail; ?>
                                </p>
                                <input type="hidden" name="old_thumbnail" value="<?php echo $jurnal_data->thumbnail; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">
                                    
                                </label>
                                <textarea id="editor1" name="content" rows="10" cols="80">
                                    <?php echo $jurnal_data->content; ?>
                                </textarea>
                            </div>


                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div><!-- /.box -->

            </div>

        </div>


    </section>

</div>

<?php
    echo $modal;
?>
