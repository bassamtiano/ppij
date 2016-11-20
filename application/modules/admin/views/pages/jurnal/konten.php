

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
                    <form role="form" method="post" action="<?php echo $admin_url . '/aktifitas_add' ?>" enctype="multipart/form-data">
                        <div class="box-body">
                        	<div class="form-group">
                                <label for="exampleInputFile">Judul Jurnal</label>
                                <input name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Aktifitas">
                            </div>

                            <div class="form-group">
                                <label>Kategori Jurnal</label>
                                <select name="overview_2" class="form-control select2" style="width: 100%;">
                                    
                                    <?php
                                        
                                        foreach ($kategori as $akey => $aval) {
                                            

                                            echo '<option value="' . $aval->id . '">' . $aval->kategori . '</option>';
                                        }


                                    ?> 

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">
                                    Thumbnail
                                </label>
                                <input name="banner" type="file" id="exampleInputFile">
                                <p class="help-block">Example block-level help text here.</p>
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

