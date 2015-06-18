<?php $this->load->view('admin/header');?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"></h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<!--<script type="text/javascript">
    function cekForm() {
        if (!$("#name").val()) {
            alert('nama tidak boleh kosong');
            $("#name").focus()
            return false;
        }
    }
</script>-->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Add Data Confirm Dotantsion
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form method="post" action=" <?php echo base_url();?>confirmDonation/insertToDatabase" >
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" type="text" name="name" id="name" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>Account Number</label>
                                <input class="form-control" type="text" name="accountNumber" id="accountNumber" placeholder="Account Number">
                            </div>
                            <div class="form-group">
                                <label>Date</label>
                                <input class="form-control" type="text" name="date" id="date" placeholder="Date">
                            </div>
                            <div class="form-group">
                                <label>Donation</label>
                                <input class="form-control" type="text" name="donation" id="donation" placeholder="Donation">
                            </div>
                            <?php if($this->input->post('submit')){ 
                                      echo $error;  // bagian untuk menampilkan message
                                  }

                            ?>
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
      