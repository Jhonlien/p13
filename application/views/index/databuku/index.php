<div class="container">
            <div class="row">
                    <div class="card white teal-text hoverable" style="margin-top: 5%;">
                        <div class="card-content">
                            <span class="card-title teal-text">Data Buku - PinjamBukuApp <i class="material-icons"> content_copy</i></span><br>
                            <a href="#modal-tambah-buku" class="btn modal-trigger">Tambah Data Buku <i class="material-icons right">add_to_queue
                                </i></a><br>
                            <table class="striped">
                                    <thead>
                                      <tr>
                                          <th>No</th>
                                          <th>Nama Buku</th>
                                          <th>Action</th>
                                      </tr>
                                    </thead>
                            
                                    <tbody>
                                    <?php
                                      $no = 1; 
                                      foreach($all_books as $key => $books): ?>
                                      <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $books['nama_buku']; ?></td>
                                        <td>
                                            <a href="<?= base_url('buku/edit/').$books['id'] ?>" class="btn tooltipped" data-position="top" data-tooltip="Edit"><i class="material-icons">border_color</i></a>
                                            <a href="<?= base_url('buku/delete/').$books['id'] ?>"class="btn tooltipped pink" data-position="top" data-tooltip="Hapus"><i class="material-icons">do_not_disturb_on</i></a>
                                        </td>
                                      </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                  </table>
                        </div>
                        <div class="card-content">
                                
                        </div> 
                
                    </div>
            </div>
        </div>

<!-- Modal Structure -->
<div id="modal-tambah-buku" class="modal">
  <div class="modal-content">
    <h4>Tambah Data Buku</h4>
    <form class="col s12" method="POST" action="<?= base_url('buku/'); ?>">
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Nama Buku" id="first_name" type="text" class="validate" name="nama_buku">
          <label for="first_name">Nama Buku</label>
        </div>
      </div>  
      <button class="btn waves-effect waves-light" type="submit" name="action">Submit
        <i class="material-icons right">send</i>
    </button>                                   
  </form>
</div>
</div>

<?= $this->session->flashdata('msg'); ?>