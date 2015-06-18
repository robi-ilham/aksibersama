<?php $this->load->view('admin/header');?>
<div class="row">
    <div class="col-lg-12" style="padding-top:20px">
        <p>
            <a href=" <?php echo base_url();?>registers/addData ">
                <button class="btn btn-primary" type="submit">Add New</button>
            </a>            
        </p>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Registers       
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Register Date</th>  
                                <th>Action</th>                              
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="gradeC">
                            <tr></tr>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<?php $this->load->view('admin/footer');            