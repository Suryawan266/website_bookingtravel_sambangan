<section id="main-content">
      <section class="wrapper">
        <h4><i class=""></i>Data User</h4>
        <!-- BASIC FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <form role="form" class="form-horizontal style-form">
              <br>
        <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class=""></i> Data User</h4>
              <div class="row">
                <div class="col-md-6">
										
				</div>
									
			  </div>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Nama User</th>
                            <th>No Hp</th>
                            <th>Alamat</th>
                            <th>Email</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php
                      foreach($tb_user as $val){?>
                        <tr>
                          
                          <td><?=$val->nama;?></td>
                          <td><?=$val->password;?></td>
                          <td><?=$val->nama_lengkap;?></td>
                          <td><?=$val->no_hp;?></td>
                          <td><?=$val->alamat;?></td>
                          <td><?=$val->email;?></td>
                        </tr>
                      <?php } ?>
                </table>
              </section>
            </div>
            </div>
          <!-- /col-lg-12 -->
        </div>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
  </section>