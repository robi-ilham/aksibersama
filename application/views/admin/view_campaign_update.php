<?php $this->load->view('admin/header');?>
<div class="row">
    <div class="col-lg-12" style="padding-top:20px">
        <p>
            <a href=" <?php echo base_url();?>campaign_update/addData ">
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
                Campaign Update
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Campaign</th>
                                <th>Title</th>
                                <th>Deskription</th>
                                <th>Created</th>   
                                <th>Action</th>                                                    
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="gradec">
                                <?php 
                                foreach ($data->result() as $row) {
                                ?>
                                <td><?php echo $row->id_campaign; ?></td>
                                <td><?php echo $row->title; ?></td>
                                <td><?php echo $row->description; ?></td>
                             	<td><?php echo $row->creator; ?></td>
                                <td>
                                   <a href=" <?php echo base_url();?>campaign_update/edit/<?php echo $row->id;?>"><span class="label label-primary">Edit</span></a>
                                   <a href=" <?php echo base_url();?>campaign_update/getDelete/<?php echo $row->id;?>"><span class="label label-primary">Delete</span></a>
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


