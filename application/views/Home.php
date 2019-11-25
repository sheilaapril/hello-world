<?php 
$this->load->view('reuse/header'); 
		$data1= $this->TandaModel->getTanda();
		$data2= $this->GejalaModel->getGejala();
		$data3= $this->PenyakitModel->getPenyakit();
?>

      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
          
		<div class="card col-lg-10 col-10 mt-5 ml-5 mr-5">
		  <div class="card-body">
		    <h5 class="text-center">Sebelum Sistem Mendiagnosa Penyakit, Masukan Tanda - tanda dan gejala yang Anda rasakan</h5>
		    <form action="<?php echo site_url('UserController/diag'); ?>" method="POST">
		    	<table class="table table-striped">
				  <thead>
				    <tr>
				      <th>pilih tanda tanda</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php foreach($data1 as $d1){?>
                  	    <tr>
                  	    	<td>
	                  	    	<span class="button-checkbox">
							        <button type="button" class="btn" data-color="primary">
		                        		<?php echo $d1['nama_tanda'];?>
							    	</button>
							        <input type="checkbox" name="tanda[]" class="hidden" value="<?php echo $d1['nama_tanda'] ?>" />
						    	</span>
						    </td>
                      	</tr>
                  	<?php }?>
				  </tbody>
				</table>
				<table class="table table-striped">
				  <thead>
				    <tr>
				      <th>pilih Gejala</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php foreach($data2 as $d2){?>
                  	    <tr>
                  	    	<td>
	                  	    	<span class="button-checkbox">
							        <button type="button" class="btn" data-color="primary">
		                        		<?php echo $d2['nama_gejala'];?>
							    	</button>
							        <input type="checkbox" name="gejala[]" class="hidden" value="<?php echo $d2['nama_gejala'] ?>" />
						    	</span>
						    </td>
                      	</tr>
                  	<?php }?>
				  </tbody>
				</table>
			  <input type="submit" name="kirim" value="submit">
              <input type="reset" name="reset" value="reset">
              <!--<button type="submit" class="btn btn-primary">Submit</button>-->
			</form>
		  </div>
		</div>

<script type="text/javascript">
	$(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
            }
        }
        init();
    });
});
</script>

        </div>
      </main>
  
<?php $this->load->view('reuse/footer'); ?>