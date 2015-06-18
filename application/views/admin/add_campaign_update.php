<?php $this->load->view('admin/header');?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"></h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Add New campaign Update
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form method="post" action=" <?php echo base_url();?>campaign_update/insertToDatabase ">
                            <div class="form-group">
                                <label>Campaign</label>
                                <input class="form-control" type="text" name="campaignt" id="campaignt">
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" type="text" name="title" id="title">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="5" name="description" id="description"></textarea>
                            </div> 
                            <div class="form-group">
                                <label>Created</label>
                                <input class="form-control" type="text" name="creator" id="creator">
                            </div>                          
                            <button type="submit" class="btn btn-default">Simpan</button>  
                        </form>
                    </div>
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<?php $this->load->view('admin/footer');       