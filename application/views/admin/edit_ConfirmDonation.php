<?php $this->load->view('admin/header');?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"></h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<script type="text/javascript">
    function cekForm() {
        if (!$("#name").val()) {
            alert('nama tidak boleh kosong');
            $("#name").focus()
            return false;
        }
    }
</script>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit data Confirm Donations
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form method="post" action=" <?php echo base_url();?>confirmDonation/updateToDatabase" onSubmit="return cekForm();">
                            <div class="form-group">                  
                                <input class="form-control" type="hidden" name="id" id="id" value="<?php if(isset($id)){ echo $id; } ?>">
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" type="text" name="name" id="name" placeholder="Nama" value="<?php if(isset($id)){ echo $name;}?>">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="text" name="email" id="email" placeholder="Email" value="<?php if(isset($id)){ echo $email;} ?>" >
                            </div>
                            <div class="form-group">
                                <label>Account Number</label>
                                <input class="form-control" type="text" name="accountNumber" id="accountNumber" placeholder="Account Number" value="<?php if(isset($id)){ echo $accountNumber;} ?>">
                            </div>
                            <div class="form-group">
                                <label>Date</label>
                                <input class="form-control" type="text" name="date" id="date" placeholder="Date" value="<?php if(isset($id)){ echo $date; } ?>">
                            </div>
                            <div class="form-group">
                                <label>Donation</label>
                                <input class="form-control" type="text" name="donation" id="donation" placeholder="Donation" value="<?php if(isset($id)){ echo $donation; } ?>">
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
      