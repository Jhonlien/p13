<div class="container">
    <div class="row">
        <div class="card white teal-text hoverable" style="margin-top: 5%;">
            <div class="card-content">
            <a href="<?= base_url('peminjam/') ?>" class="btn">Back <i class="material-icons left">arrow_back</i></a><br><br>

                <span class="card-title teal-text"><?= $title ?>- PinjamBukuApp <i class="material-icons"> content_copy</i></span><br>
                <div class="row"> 
                    <form class="col s12" method="POST" action="<?= base_url('peminjam/add'); ?>">
                        <div class="row">
                            <div class="input-field col s12">
                                <select name="buku_id">
                                <option value="" disabled selected>Pilih Buku</option>
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
                            <input type="text" class="validate"  name="nama" required >
                            <label for="text">Nama</label>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="input-field col s12">
                            <input type="text" class="validate" name="no_hp" required>
                            <label for="text">No HP</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                            <input type="text" class="datepicker" placeholder="Tanggal Pinjaman" name="tgl_pinjam" required>  
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                            <input type="text" class="datepicker" placeholder="Tanggal Kembali" name="tgl_kembali" required>  
                            </div>
                        </div>

                        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                            <i class="material-icons right">send</i>
                        </button>

                        </form>


                </div>
            </div>
        </div>
    </div>
</div>