<?php 
$this->load->view('reuse/header'); 

$countPenyakit = $this->UserModel->get_jumlahPenyakit();
$semuaPenyakit = $this->UserModel->get_countPenyakit();
$k006 = $this->UserModel->get_countK006();
$k011 = $this->UserModel->get_countK011();
$k039 = $this->UserModel->get_countK039();
$k040 = $this->UserModel->get_countK040();
$k041 = $this->UserModel->get_countK041();
$k044 = $this->UserModel->get_countK044();
$k047 = $this->UserModel->get_countK047();
$k050 = $this->UserModel->get_countK050();

//Prior Prior

$pk006 = $k006/$semuaPenyakit;
$pk011 = $k011/$semuaPenyakit;
$pk039 = $k039/$semuaPenyakit;
$pk040 = $k040/$semuaPenyakit;
$pk041 = $k041/$semuaPenyakit;
$pk044 = $k044/$semuaPenyakit;
$pk047 = $k047/$semuaPenyakit;
$pk050 = $k050/$semuaPenyakit;

?>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
			<?php
				$hasil006 =  $tanda006*$gejala006*$pk006;
				$hasil011 =  $tanda011*$gejala011*$pk011;
				$hasil039 =  $tanda039*$gejala039*$pk039;
				$hasil040 =  $tanda040*$gejala040*$pk040;
				$hasil041 =  $tanda041*$gejala041*$pk041;
				$hasil044 =  $tanda044*$gejala044*$pk044;
				$hasil047 =  $tanda047*$gejala047*$pk047;
				$hasil050 =  $tanda050*$gejala050*$pk050;
			?>

			<div class="card ml-5 col-lg-10 col-10">
			  <div class="card-header">
			    <h5 class="text-danger">Hasil Diagnosa</h5>
			  </div>
			<?php	
				$max = max($hasil006,$hasil011,$hasil039,$hasil040,$hasil041,$hasil044,$hasil047,$hasil050);
				switch($max){
					case $hasil006 :
						echo '
							<img class="card-img-top" src="'.base_url().'/assets/img/persistensi.jpg" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title">terkena penyakit Persistensi</h5>
						    	<p class="card-text">Persistensi adalah suatu keadaan gigi susu/kecil yang tidak tanggal walaupungigi permanent/dewasa sebagai gantinya sudah mulai tumbuhKeadaan ini sering diumpai pada anak usia 6 – 12 tahun.</p>
						    	<p class="card-text"><small class="text-muted">Segera ke dokter gigi terdekat</small></p>
						 	</div>
						';
						break;
					case $hasil011 :
						echo '
							<img class="card-img-top" src="'.base_url().'/assets/img/impaksi.jpg" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title">terkena penyakit Impaksi</h5>
						    	<p class="card-text">Impaksi gigi adalah gigi yang tidak bisa tumbuh dengan sempurna. Biasanya karena tidak punya ruang yang cukup.</p>
						    	<p class="card-text"><small class="text-muted">Segera ke dokter gigi terdekat</small></p>
						 	</div>
						';
						break;
					case $hasil039 :
						echo '
							<img class="card-img-top" src="'.base_url().'/assets/img/pulpitis_rever.jpg" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title">terkena penyakit Pulpitis Reversible</h5>
						    	<p class="card-text">Sakit gigi karena gigi lubang yang apabila penyebabnya dihilangkan maka pulpa akan kembali normal </p>
						    	<p class="card-text"><small class="text-muted">Segera ke dokter gigi terdekat</small></p>
						 	</div>
						';
						break;
					case $hasil040 :
					    echo '
							<img class="card-img-top" src="'.base_url().'/assets/img/pulpitis_irre.jpg" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title">terkena penyakit Pulpitis Irreversible</h5>
						    	<p class="card-text">Sakit gigi karena gigi lubang yang tidak akan pulih walaupun  penyebabnya dihilangkan dan pulpa akan nekrosis.</p>
						    	<p class="card-text"><small class="text-muted">Segera ke dokter gigi terdekat</small></p>
						 	</div>
						';
						break;
					case $hasil041 :
						echo '
							<img class="card-img-top" src="'.base_url().'/assets/img/nekrosispulpa.jpg" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title">terkena penyakit Nekrisis Pulpa</h5>
						    	<p class="card-text">yaitu Matinya pulpa</p>
						    	<p class="card-text"><small class="text-muted">Segera ke dokter gigi terdekat</small></p>
						 	</div>
						';
						break;
					case $hasil044 :
						echo '
							<img class="card-img-top w-50 rounded mx-auto d-block" src="'.base_url().'/assets/img/periodontitis.jpg" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title">terkena penyakit Periodontitis Apicalis</h5>
						    	<p class="card-text">Periodontitis adalah infeksi gusi yang merusak jaringan lunak dan tulang penyangga gigi. Kondisi ini perlu segera diobati karena dapat menyebabkan gigi tanggal</p>
						    	<p class="card-text"><small class="text-muted">Segera ke dokter gigi terdekat</small></p>
						 	</div>
						';
						break;
					case $hasil047 :
						echo '
							<img class="card-img-top" src="'.base_url().'/assets/img/perapical.jpg" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title">terkena penyakit Abses Periapical</h5>
						    	<p class="card-text">Abses gigi adalah terbentuknya kantung atau benjolan berisi nanah pada gigi yang disebabkan oleh infeksi bakteri</p>
						    	<p class="card-text"><small class="text-muted">Segera ke dokter gigi terdekat</small></p>
						 	</div>
						';
						break;
					case $hasil050 :
						echo '
							<img class="card-img-top" src="'.base_url().'/assets/img/gingivitis.jpg" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title">terkena penyakit Gingivitis</h5>
						    	<p class="card-text">Radang gusi atau gingivitis adalah inflamasi atau peradangan yang terjadi pada gusi</p>
						    	<p class="card-text"><small class="text-muted">Segera ke dokter gigi terdekat</small></p>
						 	</div>
						';
						break;
				}
			?>
			  
			</div>

        </div>
      </main>
  
<?php $this->load->view('reuse/footer'); ?>