<?php 
error_reporting(0);
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

?>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
          <h3> 
                Apakah Benar Kamu Merasakan :
          </h3>
          <br>

          <table class="table table-striped">
			  <thead>
			    <tr>
			      <th>tanda tanda</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
				  	$pecah = explode(",", implode(',',$_POST['tanda']));
			  	for($i = 0; $i < count($_POST['tanda']); $i++){?>
	          	    <tr>
	          	    	<td>
	          	    		<?php echo $pecah[$i]."<br>";
		          	    		$tandatanda = $this->TandaModel->getTanda("where nama_tanda = '$pecah[$i]'");
								$data[$i] = array(
									"kode_tanda" => $tandatanda[0]['kode_tanda'],
								);

								//likelihood with laplace	
								$countTandaK006[$i] = $this->UserModel->get_countTandaK006(implode($data[$i]));
								$tandak006[$i]=($countTandaK006[$i]+1)/($k006+$countPenyakit);
								$countTandaK011[$i] = $this->UserModel->get_countTandaK011(implode($data[$i]));
								$tandak011[$i]=($countTandaK011[$i]+1)/($k011+$countPenyakit);
								$countTandaK039[$i] = $this->UserModel->get_countTandaK039(implode($data[$i]));
								$tandak039[$i]=($countTandaK039[$i]+1)/($k039+$countPenyakit);
								$countTandaK040[$i] = $this->UserModel->get_countTandaK040(implode($data[$i]));
								$tandak040[$i]=($countTandaK040[$i]+1)/($k040+$countPenyakit);
								$countTandaK041[$i] = $this->UserModel->get_countTandaK041(implode($data[$i]));
								$tandak041[$i]=($countTandaK041[$i]+1)/($k041+$countPenyakit);
								$countTandaK044[$i] = $this->UserModel->get_countTandaK044(implode($data[$i]));
								$tandak044[$i]=($countTandaK044[$i]+1)/($k044+$countPenyakit);
								$countTandaK047[$i] = $this->UserModel->get_countTandaK047(implode($data[$i]));
								$tandak047[$i]=($countTandaK047[$i]+1)/($k047+$countPenyakit);
								$countTandaK050[$i] = $this->UserModel->get_countTandaK050(implode($data[$i]));
								$tandak050[$i]=($countTandaK050[$i]+1)/($k050+$countPenyakit);
								if ($i < 1) {
									 $tandak006[$i];
									 $tandak011[$i];
									 $tandak039[$i];
									 $tandak040[$i];
									 $tandak041[$i];
									 $tandak044[$i];
									 $tandak047[$i];
									 $tandak050[$i];
									 $data = array(
										'tanda006' => implode($tandak006),
										'tanda011' => implode($tandak011),
										'tanda039' => implode($tandak039),
										'tanda040' => implode($tandak040),
										'tanda041' => implode($tandak041),
										'tanda044' => implode($tandak044),
										'tanda047' => implode($tandak047),
										'tanda050' => implode($tandak050),
									);
									$where = array('id'=>1);
									$res = $this->db->update('likelihood',$data,$where);
								}else{
									$tandak006[$i]*=(float)$tandak006[$i];
									 $tandak011[$i]*=(float)$tandak011[$i];
									 $tandak039[$i]*=(float)$tandak039[$i];
									 $tandak040[$i]*=(float)$tandak040[$i];
									 $tandak041[$i]*=(float)$tandak041[$i];
									 $tandak044[$i]*=(float)$tandak044[$i];
									 $tandak047[$i]*=(float)$tandak047[$i];
									 $tandak050[$i]*=(float)$tandak050[$i];
									 $data = array(
										'tanda006' => implode($tandak006),
										'tanda011' => implode($tandak011),
										'tanda039' => implode($tandak039),
										'tanda040' => implode($tandak040),
										'tanda041' => implode($tandak041),
										'tanda044' => implode($tandak044),
										'tanda047' => implode($tandak047),
										'tanda050' => implode($tandak050),
									);
									$where = array('id'=>1);
									$res = $this->db->update('likelihood',$data,$where);
								}
							?>
					    </td>
	              	</tr>
	          	<?php }?>
			  </tbody>
			</table>
			<table class="table table-striped">
			  <thead>
			    <tr>
			      <th>Gejala</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
				  	$pecah2 = explode(",", implode(',',$_POST['gejala']));
			  	for($i = 0; $i < count($_POST['gejala']); $i++){?>
	          	    <tr>
	          	    	<td>
	          	    		<?php echo $pecah2[$i];
	          	    			$gejalagejala = $this->GejalaModel->getGejala("where nama_gejala = '$pecah2[$i]'");
								$data2[$i] = array(
									"kode_gejala" => $gejalagejala[0]['kode_gejala'],
								);

								$countgejalaK006[$i] = $this->UserModel->get_countgejalaK006(implode($data2[$i]));
								$gejalak006[$i] = ($countgejalaK006[$i]+1)/($k006+$countPenyakit);
								$countgejalaK011[$i] = $this->UserModel->get_countgejalaK011(implode($data2[$i]));
								$gejalak011[$i] = ($countgejalaK011[$i]+1)/($k011+$countPenyakit);
								$countgejalaK039[$i] = $this->UserModel->get_countgejalaK039(implode($data2[$i]));
								$gejalak039[$i] = ($countgejalaK039[$i]+1)/($k039+$countPenyakit);
								$countgejalaK040[$i] = $this->UserModel->get_countgejalaK040(implode($data2[$i]));
								$gejalak040[$i] = ($countgejalaK040[$i]+1)/($k040+$countPenyakit);
								$countgejalaK041[$i] = $this->UserModel->get_countgejalaK041(implode($data2[$i]));
								$gejalak041[$i] = ($countgejalaK041[$i]+1)/($k041+$countPenyakit);
								$countgejalaK044[$i] = $this->UserModel->get_countgejalaK044(implode($data2[$i]));
								$gejalak044[$i] = ($countgejalaK044[$i]+1)/($k044+$countPenyakit);
								$countgejalaK047[$i] = $this->UserModel->get_countgejalaK047(implode($data2[$i]));
								$gejalak047[$i] = ($countgejalaK047[$i]+1)/($k047+$countPenyakit);
								$countgejalaK050[$i] = $this->UserModel->get_countgejalaK050(implode($data2[$i]));
								$gejalak050[$i] = ($countgejalaK050[$i]+1)/($k050+$countPenyakit);


								if ($i<1) {
									 $gejalak006[$i];
									 $gejalak011[$i];
									 $gejalak039[$i];
									 $gejalak040[$i];
									 $gejalak041[$i];
									 $gejalak044[$i];
									 $gejalak047[$i];
									 $gejalak050[$i];

									$data = array(
										'gejala006' => implode($gejalak006),
										'gejala011' => implode($gejalak011),
										'gejala039' => implode($gejalak039),
										'gejala040' => implode($gejalak040),
										'gejala041' => implode($gejalak041),
										'gejala044' => implode($gejalak044),
										'gejala047' => implode($gejalak047),
										'gejala050' => implode($gejalak050),
									);
									$where = array('id'=>1);
									$res = $this->db->update('likelihood',$data,$where);
								}else{
									 $gejalak006[$i]*=(float)$gejalak006[$i];
									 $gejalak011[$i]*=(float)$gejalak011[$i];
									 $gejalak039[$i]*=(float)$gejalak039[$i];
									 $gejalak040[$i]*=(float)$gejalak040[$i];
									 $gejalak041[$i]*=(float)$gejalak041[$i];
									 $gejalak044[$i]*=(float)$gejalak044[$i];
									 $gejalak047[$i]*=(float)$gejalak047[$i];
									 $gejalak050[$i]*=(float)$gejalak050[$i];

									$data = array(
										'gejala006' => implode($gejalak006),
										'gejala011' => implode($gejalak011),
										'gejala039' => implode($gejalak039),
										'gejala040' => implode($gejalak040),
										'gejala041' => implode($gejalak041),
										'gejala044' => implode($gejalak044),
										'gejala047' => implode($gejalak047),
										'gejala050' => implode($gejalak050),
									);
									$where = array('id'=>1);
									$res = $this->db->update('likelihood',$data,$where);
								}
	          	    		?>
					    </td>
	              	</tr>
	          	<?php }?>
			  </tbody>
			</table>

			<a class="btn btn-primary mr-3"  href="<?php echo site_url('UserController/hasil'); ?>" role="button">Ya</a>
			
			<a class="btn btn-primary" href="<?php echo site_url('UserController'); ?>" role="button">Tidak</a>
			
        </div>
      </main>
  
<?php $this->load->view('reuse/footer'); ?>