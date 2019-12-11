<div class="container">
    <div class="row">
            <div class="card white teal-text hoverable" style="margin-top: 5%;">
                <div class="card-content">
                    <a href="<?= base_url('buku/')?>" class="btn">Back <i class="material-icons right">arrow_back</i></a><br>
                    <h4><?= $title ?></h4> 
                    <div class="row">
                    <?php foreach($edit_books as $edit) :?>
                    <form class="col s12" method="POST" action="<?= base_url('buku/edit/').$edit['id']?>">
                        <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="Nama Buku" id="first_name" type="text" class="validate" name="nama_buku" value="<?= $edit['nama_buku'] ?>">
                                <label for="first_name">Nama Buku</label>
                            </div>
                        </div>  
                        <button class="btn waves-effect waves-light" type="submit" name="action">Save
                            <i class="material-icons right">save</i>
                        </button>                              
                    </form>
                    <?php endforeach; ?>  
                    </div>
                </div>
            </div>
    </div>
</div>