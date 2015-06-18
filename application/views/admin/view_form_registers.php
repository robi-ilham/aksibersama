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
                Add New Data Registers
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form method="post">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" type="text" name="name" id="name">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="text" name="email" id="email">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <input class="form-control" type="text" name="jenisK" id="jenisK">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input class="form-control" type="text" name="TanggalL" id="TanggalL">
                            </div>
                            <div class="form-group">
                                <label>ALamat</label>
                                <input class="form-control" type="text" name="alamat" id="alamat">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Registrasi</label>
                                <input class="form-control" type="text" name="registerDate" id="registerDate">
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