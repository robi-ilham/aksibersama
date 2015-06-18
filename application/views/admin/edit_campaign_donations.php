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
                Edit campaign Donations
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form method="post" action=" <?php echo base_url();?>campaign_donations/updateToDatabase ">
                            <div class="form-group">
                                <input class="form-control" type="hidden" name="id" id="id" value="<?php if(isset($id)){ echo $id; } ?>">
                            </div>
                             <div class="form-group">
                                <label>Campaign</label>
                                <input class="form-control" type="text" name="id_campaign" id="id_campaign" value="<?php if(isset($id)){ echo $id_campaign; } ?>" >
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" type="text" name="name" id="name" value="<?php if(isset($id)){ echo $name; } ?>">
                            </div>
                            <div class="form-group">
                                <label>Account Number</label>
                                <input class="form-control" type="text" name="account_number" id="account_number" value="<?php if(isset($id)){ echo $account_number; } ?>" >
                            </div> 
                            <div class="form-group">
                                <label>Donation Date</label>
                                <input class="form-control" type="text" name="donation_date" id="donation_date" value="<?php if(isset($id)){ echo $donation_date; } ?>">
                            </div>                
                             <div class="form-group">
                                <label>Donation</label>
                                <input class="form-control" type="text" name="donation" id="donation" value="<?php if(isset($id)){ echo $donation; } ?>" >
                            </div>
                            <div class="form-group">
                                <label>User Id</label>
                                <input class="form-control" type="text" name="user_id" id="user_id" value="<?php if(isset($id)){ echo $user_id; } ?>" >
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email" id="email" value="<?php if(isset($id)){ echo $email; } ?>" >
                            </div> 
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input class="form-control" type="text" name="phone_number" id="phone_number" value="<?php if(isset($id)){ echo $phone_number; } ?>" >
                            </div>                          
                            <button type="submit" class="btn btn-default">Simpan</button>
                            <a href=" <?php echo base_url();?>campaign_album"><button class="btn btn-default" type="submit">Cancel</button></a>     
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