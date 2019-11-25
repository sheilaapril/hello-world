<?php $this->load->view('reuse/header'); ?>

<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-grid demo-content">

<div class="container mt-5">
    <div class="row">
    
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Daftar Penyakit-Penyakit</h3>
                  </div>
                </div>
              </div>
              <div class="panel-body table-responsive">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th>Kode Penyakit</th>
                        <th>Nama Penyakit</th>
                    </tr> 
                  </thead>
                  <tbody id="myTable">
                  	<?php foreach($data as $d){?>
                  	    <tr>
	                        <td><?php echo $d['kode_penyakit'];?></td>
	                        <td><?php echo $d['nama_penyakit'];?></td>
                      	</tr>
                  	<?php }?>
                  </tbody>
                </table>
            
              </div>
              <div class="panel-footer">
                <div class="row">
                  <div class="col col-xs-8">
                    <ul class="pagination hidden-xs pull-right" id="myPager">
                    </ul>
                    <ul class="pagination visible-xs pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

</div></div></div>
        

        </div>
      </main>
  
<?php $this->load->view('reuse/footer'); ?>