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
                Edit campaign
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form method="post" action=" <?php echo base_url();?>campaign/updateToDatabase ">
                            <div class="form-group">
                                <input class="form-control" type="hidden" name="id" id="id" value="<?php if(isset($id)){ echo $id; } ?>">
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
                                <label>Start Date</label>
                                <input class="form-control" type="text" name="start_date" id="start_date" value="<?php if(isset($id)){ echo $start_date; } ?>">
                            </div>
                            <div class="form-group">
                                <label>End Date</label>
                                <input class="form-control" type="text" name="end_date" id="end_date" value="<?php if(isset($id)){ echo $end_date; } ?>">
                            </div>
                            <div class="form-group">
                                <label>Target Donation</label>
                                <input class="form-control" type="text" name="target_donation" id="target_donation" value="<?php if(isset($id)){ echo $target_donation; } ?>">
                            </div>
                            <div class="form-group">
                                <label>Craetor</label>
                                <input class="form-control" type="text" name="creator" id="creator" value="<?php if(isset($id)){ echo $creator; } ?>">
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input class="form-control" type="text" name="image" id="image" value="<?php if(isset($id)){ echo $image; } ?>">
                            </div>
                            <button type="submit" class="btn btn-default">Simpan</button>
                            <button type="reset" class="btn btn-default">Reset</button>
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