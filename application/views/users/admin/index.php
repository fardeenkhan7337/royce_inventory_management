
<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0">
  <div class="row">
      <div class="col-sm-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Users','url' => 'admins'],
          ['label'=>'Admins']
        ])
        ?>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">

                 <h4 class="card-title"><?= $page_head ?></h4>
               </div>
               <?=
               getHiddenField('ajax_url',$ajax_url);
               ?>

               <?php if (isUserAllow(2)): ?>

                 <a href="<?= site_url('add_admin') ?>" class="btn btn-sm btn-primary">Add Admin</a>

               <?php endif; ?>

            </div>
            <div class="card-body">
               <div class="table-responsive">
                 <table id="myDataTable" class="table">
                    <thead>
                       <tr>
                          <th>#</th>
                          <th class="dnr">Actions</th>
                          <th>Name</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>Contact #</th>
                          <th>Status</th>
                       </tr>
                    </thead>
                    <tbody></tbody>
                 </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<?php
include(APPPATH.'views/users/modals/status-modal.php');
include(APPPATH.'views/modals/delete-modal.php');
include(APPPATH.'views/modals/view-details-modal.php');
 ?>
