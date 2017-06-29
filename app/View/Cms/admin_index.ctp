
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Content
  
      </h1>

    </section>

    <!-- Main content -->
    <section class="content"><?php echo $this->Session->flash(); ?>
      <div class="row">
        <div class="col-xs-12">
         

          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 
               
			<th>page_name</th>
			<th>url_key</th>
			<th>created</th>
			<th>Link</th>
			<th>Action</th>
                </tr>
                </thead>
                <tbody>
                 <?php		
		
	  $i=1;
	  foreach($cms as $single)
	  {
	  ?>
		 <tr>
			
			<td><span class="blue"><?php echo $single['Cms']['page_name']; ?></span></td>
			<td><?php echo $single['Cms']['url_key']; ?></td>
			<td><?php echo $single['Cms']['created']; ?></td>
			<td><?php echo $single['Cms']['status']; ?></td>
			<td> <a href="<?php echo $this->webroot; ?>admin/cms/edit/<?php echo $single['Cms']['id']; ?>">
                        <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" ><span class="glyphicon glyphicon-pencil"></span></button></a></td>
		  </tr>
	 <?php
	 }
	 ?>
               
                </tbody>
                <tfoot>
                  <tr>
                 
               
			<th>page_name</th>
			<th>url_key</th>
			<th>created</th>
			<th>Link</th>
			<th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

  <!-- /.content-wrapper -->
<script>
  $(function () {
    $("#example1").DataTable();

  });
</script>



