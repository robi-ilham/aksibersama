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
                Edit campaign Update
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form method="post" action=" <?php echo base_url();?>campaign_update/updateToDatabase ">
                            <div class="form-group">
                                <input class="form-control" type="hidden" name="id" id="id" value="<?php if(isset($id)){ echo $id; } ?>">
                            </div>
                            <div class="form-group">
                                <label>Campaign</label>
                                <input class="form-control" type="text" name="id_campaign" id="id_campaign" value="<?php if(isset($id)){ echo $id_campaign; } ?>">
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" type="text" name="title" id="title" value="<?php if(isset($id)){ echo $title; } ?>">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="5" name="description" id="description" ><?php if(isset($id)){ echo $description; } ?></textarea>
                            </div> 
                            <div class="form-group">
                                <label>Creatod</label>
                                <input class="form-control" type="text" name="creator" id="creator" value="<?php if(isset($id)){ echo $creator; } ?>">
                            </div>                           
                            <button type="submit" class="btn btn-default">Simpan</button>
                            <a href=" <?php echo base_url();?>campaign_update"><button class="btn btn-default" type="submit">Cancel</button></a>     
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