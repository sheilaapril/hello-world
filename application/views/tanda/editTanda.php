<?php $this->load->view('reuse/header'); ?>

<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-grid demo-content">

<div class="card col-lg-10 col-10 mt-5 ml-5 mr-5">
      <div class="card-body">
       
        <form method="POST" action="<?php echo site_url('TandaController/updateTanda')?>">
          <table class="table table-striped">
          <thead>
            <tr>
              <th>Update tanda - tanda</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="form-group">
                  <label for="kodeTanda">Kode Tanda</label>
                  <input name="kode_tanda" type="text" class="form-control" id="kodeTanda" value="<?php echo $kode_tanda;?>" readonly required="true">
                </div>
              </td>
              <td>
                <div class="form-group">
                  <label for="namaTanda">Nama Tanda</label>
                  <input name="nama_tanda" type="text" class="form-control" id="namaTanda" value="<?php echo $nama_tanda;?>" required="true">
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>

      </div>
    </div>
        

        </div>
      </main>
  
<?php $this->load->view('reuse/footer'); ?>