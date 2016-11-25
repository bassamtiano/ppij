
        <div class="content-wrapper">

            <section class="content-header">
                <h1>
                    Dashboard
                    <small>Aktifitas Diaspora</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li><a href="#">Aktifitas Diaspora</a></li>
                </ol>
            </section>

            <?php $admin_url = base_url('index.php/admin'); ?>

            <section class="content">

                <div class="row">
                    
                    <div class="col-md-12">
                        

                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Jurnal</h3>
                            </div><!-- /.box-header -->
                            <!-- form start -->
                            <div class="box-body">
                                
                                <a data-toggle="modal" data-target="#modal_add" class="btn btn-primary" >Add Jurnal</a> 

                                <table id="table_aktifitas" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Content</th>
                                            <th>Status</th>
                                            <th>Tools</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php

                                            $dcount = 1;

                                            foreach ($data as $dkey => $dval) {
                                                echo '<tr>';
                                                    echo '<td>' . $dcount . '</td>';
                                                    echo '<td>' . $dval->title . '</td>';
                                                    echo '<td>' . $dval->url . '</td>';
                                                    echo '<td>' . $dval->status . '</td>';
                                                    echo '<td>';
                                                        
                                                        ?>
                                                            <a href="" data-toggle="modal" data-target="#modal_edit" class="btn btn-warning" onclick="modal_edit('<?php echo $dval->title ?>', '<?php echo $dval->id ?>', '<?php echo $dval->status ?>', '<?php echo $dval->url ?>')">Edit</a>
                                                            <a href="" data-toggle="modal" data-target="#modal_remove" class="btn btn-danger" onclick="modal_delete('<?php echo $dval->title ?>', '<?php echo $dval->id ?>', '<?php echo $dval->url ?>')">Delete</a>
                                                        <?php
                                                        
                                                    echo '</td>';
                                                echo '</tr>';

                                                $dcount += 1;
                                            }
                                        ?>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Content</th>
                                            <th>Status</th>
                                            <th>Tools</th>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>

                        </div><!-- /.box -->

                    </div>

                </div>

            </section>

        </div>

    </div><!-- ./wrapper -->

    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui.min.js'); ?>"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.dataTables.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/dataTables.bootstrap.js'); ?>"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/js/adminlte.min.js'); ?>"></script>

    <script type="text/javascript">
        $(function () {
            $('#table_aktifitas').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });

        function modal_edit(name, id, status, url) {
            $('#input-edit-id').val(id);
            $('#input-edit-title').val(name);

            $("input[name=edit_status][value=" + status + "]").prop('checked', true);

            $('#input-edit-gambar').val(url);
        }

        function modal_delete(name, id, url) {
            $('#modal-delete-title').html(name);
            $('#modal-delete-name').html(name);
            $('#modal-delete-id').val(id);
            $('#modal-delete-url').val(url);
        }

    </script>

    <style type="text/css">
        
    #table_aktifitas_filter label {
        float:right;
        margin-bottom: 10px;
    }

    </style>

    <?php echo $modal; ?>