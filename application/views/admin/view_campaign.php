<?php $this->load->view('admin/header');?>
<div class="row">
    <div class="col-lg-12" style="padding-top:20px">
        <p>
            <a href=" <?php echo base_url();?>campaign/addData ">
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
                Campaign       
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Target Donation</th>
                                <th>Image</th>
                                <th>Action</th>                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="gradeC">
                                <?php 
                                foreach ($data->result() as $row) {
                                ?>
                                <td><?php echo $row->title; ?></td>
                                <td><?php echo $row->description; ?></td>
                                <td><?php echo $row->start_date; ?></td>
                                <td><?php echo $row->end_date; ?></td>
                                <td><?php echo $row->target_donation; ?></td>
                                <td><?php echo $row->image; ?></td>
                                <td>
                                   <a href=" <?php echo base_url();?>campaign/edit/<?php echo $row->id;?>"><span class="label label-primary">Edit</span></a>
                                   <a href=" <?php echo base_url();?>Campaign/getDelete/<?php echo $row->id;?>"><span class="label label-primary">Delete</span></a>
                                   <a href=" <?php echo base_url();?>campaign/detail/<?php echo $row->id;?>"><span class="label label-primary">View</span></a>
                                   <a href=" <?php echo base_url();?>campaign_album"><span class="label label-primary">Campaign Album</span></a>
                                   <a href=" <?php echo base_url();?>campaign_update"><span class="label label-primary">Campaign Update</span></a>
                                   <a href=" <?php echo base_url();?>campaign_donations"><span class="label label-primary">Campaign Donations</span></a>
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


