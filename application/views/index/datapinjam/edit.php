<div class="container">
    <div class="row">
        <div class="card white teal-text hoverable" style="margin-top: 5%;">
            <div class="card-content">
            <a href="<?= base_url('peminjam/') ?>" class="btn">Back <i class="material-icons left">arrow_back</i></a><br><br>

                <span class="card-title teal-text"><?= $title ?>- PinjamBukuApp <i class="material-icons"> content_copy</i></span><br>
                <div class="row">

                <?php foreach($users_edit as $users) : ?> 
                    <form class="col s12" method="POST" action="<?= base_url('peminjam/edit/').$users['id']; ?>">
                        <div class="row">
                            <div class="input-field col s12">
                                <select name="buku_id" required>
                                <option value="<?= $users['id'] ?>" selected><?= $users['nama_buku'] ?></option>
                                <?php 
                                    $query = $this->db->query("SELECT * FROM tb_buku")->result_array();
                                    foreach($query as $q):
                                ?>
                                    <option value="<?= $q['id'];?>"><?= $q['nama_buku'] ?></option>
                                <?php endforeach; ?>
                                </select>
                                <label>Nama Buku</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                            <input type="text" class="validate"  name="nama" value="<?= $users['nama']?>" required >
                            <label for="text">Nama</label>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="input-field col s12">
                            <input type="text" class="validate" name="no_hp" value="<?= $users['no_hp']?>" required>
                            <label for="text">No HP</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                            <input type="text" class="datepicker" placeholder="Tanggal Pinjaman" name="tgl_pinjam" value="<?= $users['tgl_pinjam']?>" required>  
                            </div>
                        </div>



                        <div class="row">
                            <div class="input-field col s12">
                            <input type="text" class="datepicker" placeholder="Tanggal Kembali" name="tgl_kembali" value="<?= $users['tgl_kembali']?>" required>  
                            </div>
                        </div>

                        <div class="row">
                        <div class="input-field col s12">
                        <label>Status</label>
                            <select name="status" required>
                                <option value="Y">Sudah dikembalikan</option>
                                <option value="N">Belum dikembalikan</option>
                            </select>
                        </div>
                        </div>

                        <button class="btn waves-effect waves-light" type="submit">Save
                            <i class="material-icons right">save</i>
                        </button>

                        </form>

                    <?php endforeach; ?>


                </div>
            </div>
        </div>
    </div>
</div>