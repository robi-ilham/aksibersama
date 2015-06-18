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
                Add New campaign Album
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form method="post" action=" <?php echo base_url();?>campaign_album/insertToDatabase ">
                            <div class="form-group">
                                <label>Campaign</label>
                                <input class="form-control" type="text" name="campaignt" id="campaignt">
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input class="form-control" type="text" name="image" id="image">
                            </div>
                            <div class="form-group">
                                <label>Caption</label>
                                <textarea class="form-control" rows="5" name="camption" id="camption"></textarea>
                            </div>                           
                            <button type="submit" class="btn btn-default">Simpan</button>
                            <a href=" <?php echo base_url();?>campaign_album"><button type="submit" class="btn btn-default">adas</button></a>   
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