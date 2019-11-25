<?php $this->load->view('reuse/header'); ?>

<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-grid demo-content">

<div class="card col-lg-10 col-10 mt-5 ml-5 mr-5">
      <div class="card-body">
       
        <form method="POST" action="<?php echo site_url('PenyakitController/updatePenyakit')?>">
          <table class="table table-striped">
          <thead>
            <tr>
              <th>Update penyakit</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="form-group">
                  <label for="kodeTanda">Kode penyakit</label>
                  <input name="kode_penyakit" type="text" class="form-control" id="kodeTanda" value="<?php echo $kode_penyakit;?>" readonly required="true">
                </div>
              </td>
              <td>
                <div class="form-group">
                  <label for="namaTanda">Nama penyakit</label>
                  <input name="nama_penyakit" type="text" class="form-control" id="namaTanda" value="<?php echo $nama_penyakit;?>" required="true">
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