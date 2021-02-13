<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <a href="<?= base_url();?>sepatu"> <button class="btn btn-primary">< Kembali</button></a> 
            <br> <br>
        <div class="card">
            <div class="card-header">
               Form Ubah Data Sepatu 
            </div>
            <div class="card-body">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $sepatu['id'];?>">
                <div class="form-group">
                    <label for="Merk_Sepatu">Merk Sepatu</label>
                    <input type="text" class="form-control" autofocus id="Merk_Sepatu" name="Merk_Sepatu" value="<?= $sepatu['Merk_Sepatu'];?>">
                    <small class="form-text text-danger"><?= form_error('Merk_Sepatu'); ?></small>
                </div>
                <div class="form-group">
                    <label for="Jenis_Sepatu">Jenis Sepatu</label>
                    <input type="text" class="form-control" id="Jenis_Sepatu" name="Jenis_Sepatu" value="<?= $sepatu['Jenis_Sepatu'];?>">
                    <small class="form-text text-danger"><?= form_error('Jenis_Sepatu'); ?></small>
                </div>
                <div class="form-group">
                    <label for="Ukuran_Sepatu">Ukuran Sepatu</label>
                    <input type="text" class="form-control" id="Ukuran_Sepatu" name="Ukuran_Sepatu" value="<?= $sepatu['Ukuran_Sepatu'];?>">
                    <small class="form-text text-danger"><?= form_error('Ukuran_Sepatu'); ?></small>
                </div>
                <div class="form-group">
                    <label for="Harga_Sepatu">Harga Sepatu</label>
                    <input type="number" class="form-control" id="Harga_Sepatu" name="Harga_Sepatu" value="<?= $sepatu['Harga_Sepatu'];?>">
                    <small class="form-text text-danger"><?= form_error('Harga_Sepatu'); ?></small>
                </div>
                <div class="form-group">
                    <label for="Stok_Sepatu">Stok Sepatu</label>
                    <input type="number" class="form-control" id="Stok_Sepatu" name="Stok_Sepatu" value="<?= $sepatu['Stok_Sepatu'];?>">
                    <small class="form-text text-danger"><?= form_error('Stok_Sepatu'); ?></small>
                </div>
                <div class="form-group">
                    <label for="Tanggal_Pesanan">Tanggal Pesanan</label>
                    <input type="text" readonly="readonly" class="form-control" id="Tanggal_Pesanan" name="Tanggal_Pesanan" value="<?= $sepatu['Tanggal_Pesanan'];?>">
                    <small class="form-text text-danger"><?= form_error('Tanggal_Pesanan'); ?></small>
                </div>
                <div class="form-group">
                <label for="Opsi_Pengiriman">Opsi Pengiriman</label>
                <select class="form-control" id="Opsi_Pengiriman" name="Opsi_Pengiriman">
                <?php foreach($opsi_pengiriman as $opsi) : ?>
                <?php if($opsi == $sepatu['Opsi_Pengiriman']) : ?>
                <option value="<?= $opsi; ?>" selected><?= $opsi; ?></option>
                <?php else :?>
                <option value="<?= $opsi; ?>"><?= $opsi; ?></option>
                <?php endif;?>
                <?php endforeach;?>
                </select>
            </div>
            <button type="submit" name="tambah" id="tambah" class="btn btn-primary float-right">Ubah Data Sepatu</button>
            </form>
             </div>
            <div class="card-footer text-muted">
            &copy; ThirtyOne Sepatu
        </div>
        </div>

        
        </div>
    
    </div>

</div>