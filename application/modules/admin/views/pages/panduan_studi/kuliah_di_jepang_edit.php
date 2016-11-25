<div class="content-wrapper">
			
	<section class="content-header">
        <h1>
            Panduan Studi
            <small>Edit Panduan Studi</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-pencil-square"></i> Panduan Studi</a></li>
            <li><a href="#">Tambah Panduan Studi</a></li>
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
                    <form role="form" method="post" action="<?php echo $admin_url . '/kuliahdijepang_edit' ?>" enctype="multipart/form-data">
                        <div class="box-body">
                        	<div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $data->id ?>">
                                <label for="exampleInputFile">Judul Panduan Studi</label>
                                <input name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Panduan Studi" value="<?php echo $data->title; ?>" >
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Step Panduan Studi</label>
                                <select name="step" class="form-control select2" style="width: 100%;">
                                    
                                    <?php
                                        for ($i = 1; $i <= 10; $i++) {
                                            echo '<option value="' . $i . '" ';
                                            if ($i == $data->step)
                                                echo 'selected';
                                            echo ' >' . $i . '</option>';
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
                                    
                                </label>
                                <textarea id="editor1" name="content" rows="10" cols="80">
                                    <?php echo $data->content; ?>
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
