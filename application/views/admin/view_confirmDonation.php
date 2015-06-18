<?php $this->load->view('admin/header');?>
<div class="row">
    <div class="col-lg-12" style="padding-top: 20px">
        <p>
            <a href=" <?php echo base_url();?>confirmDonation/addData ">
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
                Confirm Donation       
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>account_number</th>
                                <th>Date</th>
                                <th>Donation</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="gradeC">
                                <?php 
                                foreach ($data->result() as $row) {
                                ?>
                                <td><?php echo $row->name; ?></td>
                                <td><?php echo $row->email; ?></td>
                                <td><?php echo $row->account_number; ?></td>
                                <td><?php echo $row->date; ?></td>
                                <td><?php echo $row->donation; ?></td>
                                <td>
                                    <a href=" <?php echo base_url();?>confirmDonation/edit/<?php echo $row->id;?>"><span class="label label-primary">Edit</span></a>
                                   <a href=" <?php echo base_url();?>confirmDonation/getDelete/<?php echo $row->id;?>"><span class="label label-primary">Delete</span></a>
                                </td>
                            </tr>
                            <?php }?>
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