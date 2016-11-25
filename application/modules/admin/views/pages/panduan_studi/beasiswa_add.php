

<div class="content-wrapper">
			
	<section class="content-header">
        <h1>
            Beasiswa
            <small>Tambah Beasiswa</small>
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
                        <h3 class="box-title">Tambah Beasiswa</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="<?php echo $admin_url . '/beasiswa_add' ?>" enctype="multipart/form-data">
                        <div class="box-body">
                        	<div class="form-group">
                                <label for="exampleInputFile">Nama</label>
                                <input name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Beasiswa" value="">
                            </div>

                            <div class="form-group">

                                <input type="hidden" name="id" value="">

                                <label for="exampleInputFile">Deadline</label>
                                <input name="deadline" type="text" class="form-control tanggal-datepicker" id="exampleInputEmail1" placeholder="Deadline" value="">
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
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">
                                    
                                </label>
                                <textarea id="editor1" name="content" rows="10" cols="80">
                                    
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
