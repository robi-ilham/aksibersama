<?php $this->load->view('admin/header');?>
<div class="row">
    <div class="col-lg-12" style="padding-top:20px">
        <p>
            <a href=" <?php echo base_url();?>campaign_donations/addData ">
                <button class="btn btn-primary" type="submit">Add New</button>
            </a>            
             <a href=" <?php echo base_url();?>campaign ">
                <button class="btn btn-primary" type="submit">Back to Campaign</button>
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
                Campaign Donation  
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Campaign</th>
                                <th>name</th>
                                <th>Account Number</th>
                                <th>Donation Date</th>  
                                <th>donation</th>
                                <th>user</th>
                                <th>email</th>
                                <th>Phone Number</th>      
                                <td>Action</td>                                                 
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="gradec">
                                <?php 
                                foreach ($data->result() as $row) {
                                ?>
                                <td><?php echo $row->id_campaign; ?></td>
                                <td><?php echo $row->name; ?></td>
                                <td><?php echo $row->account_number; ?></td>
                                <td><?php echo $row->donation_date; ?></td>
                                <td><?php echo $row->donation; ?></td>
                                <td><?php echo $row->user_id; ?></td>
                                <td><?php echo $row->email; ?></td>
                                <td><?php echo $row->phone_number; ?></td>
                                <td>
                                   <a href=" <?php echo base_url();?>campaign_donations/edit/<?php echo $row->id;?>"><span class="label label-primary">Edit</span></a>
                                   <a href=" <?php echo base_url();?>campaign_donations/getDelete/<?php echo $row->id;?>"><span class="label label-primary">Delete</span></a>
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


