<div class="content-wrapper">
			
	<section class="content-header">
        <h1>
            Kalender Kegiatan
            <small>Tambah Kalender</small>
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
                        <h3 class="box-title">Tambah Kalender</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="<?php echo $admin_url . '/kalender_edit' ?>" enctype="multipart/form-data">

                        <input name="id" type="hidden" value="<?php echo $data->id ?>">

                        <div class="box-body">
                        	<div class="form-group">
                                <label for="exampleInputFile">Nama</label>
                                <input name="nama" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Kegiatan" value="<?php echo $data->nama ?>">

                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Tempat</label>
                                <input name="tempat" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Beasiswa" value="<?php echo $data->tempat ?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Tanggal</label>
                                <input name="tanggal" type="text" class="form-control tanggal-datepicker" id="" placeholder="Nama Beasiswa" value="<?php echo $data->tanggal ?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Waktu Mulai</label>
                                <input name="waktu_mulai" type="text" class="form-control waktu-datepicker" id="exampleInputEmail1" placeholder="Deadline" value="<?php echo $data->waktu_mulai ?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Waktu Selesai</label>
                                <input name="waktu_selesai" type="hidden" class="form-control waktu-datepicker" id="exampleInputEmail1" placeholder="Deadline" value="<?php echo $data->waktu_selesai ?>">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputFile">
                                    Thumbnail
                                </label>
                                <input name="thumbnail" type="file" id="exampleInputFile">
                                <input name="old_thumbnail" type="hidden" id="exampleInputFile" value="<?php echo $data->thumbnail; ?>">
                                <p class="help-block">
                                    Current Thumbnail : <?php echo $data->thumbnail; ?>
                                </p>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">
                                    Poster
                                </label>
                                <input name="poster" type="file" id="exampleInputFile">
                                <input name="old_poster" type="hidden" id="exampleInputFile" value="<?php echo $data->poster; ?>">
                                <p class="help-block">
                                    Current Thumbnail : <?php echo $data->poster; ?>
                                </p>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Content</label>
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
