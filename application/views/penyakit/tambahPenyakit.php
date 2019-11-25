<?php $this->load->view('reuse/header'); ?>

<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-grid demo-content">

<div class="card col-lg-10 col-10 mt-5 ml-5 mr-5">
      <div class="card-body">
       
        <form method="POST" action="<?php echo site_url('PenyakitController/tambahPenyakit')?>">
          <table class="table table-striped">
          <thead>
            <tr>
              <th>Masukkan penyakit baru</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="form-group">
                  <label for="kodepenyakit">Kode penyakit</label>
                  <input name="kode_penyakit" type="text" class="form-control" id="kodepenyakit" placeholder="Masukkan kode penyakit" required="true">
                </div>
              </td>
              <td>
                <div class="form-group">
                  <label for="namapenyakit">Nama penyakit</label>
                  <input name="nama_penyakit" type="text" class="form-control" id="namapenyakit" placeholder="Masukkan nama tanda" required="true">
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