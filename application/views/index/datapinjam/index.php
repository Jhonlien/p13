
            <div class="row">
                    <div class="card white teal-text hoverable" style="margin-top: 5%; margin-left:5%; margin-right:5%;">
                        <div class="card-content">
                            <span class="card-title teal-text"><?= $title ?> - PinjamBukuApp <i class="material-icons"> content_copy</i></span><br>
                            <form action="<?= base_url('peminjam/')?>" method="GET">
                                    <div class="row">
                                    <div class="col s2"> 
                                    <label>Status</label>
                                        <select name="status">
                                            <option value="" disabled selected>Semua</option>
                                            <option value="Y">Sudah dikembalikan</option>
                                            <option value="N">Belum dikembalikan</option>
                                        </select>
                                    </div>
                                    <div class="col s2" style="margin-top:25px;">
                                        <button class="btn waves-effect waves-light" type="submit" name="filter" value="true">Filter
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>  
                                    </div>


                            </form>
                            <a href="<?= base_url('peminjam/add') ?>" class="btn">Tambah Data Peminjam <i class="material-icons right">add_to_queue
                                </i></a><br>
                            <table class="striped">
                                    <thead>
                                      <tr>
                                          <th>No</th>
                                          <th>Buku</th>
                                          <th>Nama</th>
                                          <th>No Hp</th>
                                          <th>Tgl. Pinjam</th>
                                          <th>Tgl. Kembali</th>
                                          <th>Status</th>
                                          <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $no = 1;
                                    foreach($users as $user): 
                                    ?>
                                      <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= substr($user['nama_buku'],0,21)."..."; ?></td>
                                        <td><?= $user['nama']; ?></td>
                                        
                                        <td><?= $user['no_hp']; ?></td>
                                        <td><?= $user['tgl_pinjam']; ?></td>
                                        <td><?= $user['tgl_kembali']; ?></td>
                                        <td><?php 
                                                if($user['status'] == 'N'){
                                                    echo "<span class=\"badge red white-text\">Belum Dikembalikan</span>";
                                                }
                                                else{
                                                    echo "<span class=\"badge green white-text\">Sudah Dikembalikan</span>";
                                                }?>
                                        </td>
                                        <td>
                                            <?php if($user['status'] == 'N'){ ?>
                                            <a href="<?= base_url('peminjam/confirm/').$user['id'] ?>" class="btn tooltipped green" data-position="top" data-tooltip="Konfirmasi Pengembalian"><i class="material-icons">check</i></a>
                                            <?php } else {  ?>
                                            <a href="<?= base_url('peminjam/confirm/').$user['id'] ?>" class="btn red tooltipped disabled" data-position="top" data-tooltip="Konfirmasi Pengembalian"><i class="material-icons">check</i></a>

                                            <?php } ?>

                                            <a href="<?= base_url('peminjam/edit/').$user['id'] ?>" class="btn tooltipped" data-position="top" data-tooltip="Edit"><i class="material-icons">border_color</i></a>

                                            <a href="<?= base_url('peminjam/delete/').$user['id'] ?>"class="btn tooltipped pink" data-position="top" data-tooltip="Hapus"><i class="material-icons">do_not_disturb_on</i></a>
                                        </td>
                                      </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                  </table>
                        </div>
                    </div>
            </div>

<?= $this->session->flashdata('msg'); ?>
