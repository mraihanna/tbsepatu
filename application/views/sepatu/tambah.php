<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
               Form Tambah Data Sepatu
            </div>
            <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="Merk_Sepatu">Merk Sepatu</label>
                    <input type="text" class="form-control" autofocus id="Merk_Sepatu" name="Merk_Sepatu">
                    <small class="form-text text-danger"><?= form_error('Merk_Sepatu'); ?></small>
                </div>
                <div class="form-group">
                    <label for="Jenis_Sepatu">Jenis Sepatu</label>
                    <input type="text" class="form-control" id="Jenis_Sepatu" name="Jenis_Sepatu">
                    <small class="form-text text-danger"><?= form_error('Jenis_Sepatu'); ?></small>
                </div>
                <div class="form-group">
                    <label for="Ukuran_Sepatu">Ukuran Sepatu</label>
                    <input type="text" class="form-control" id="Ukuran_Sepatu" name="Ukuran_Sepatu">
                    <small class="form-text text-danger"><?= form_error('Ukuran_Sepatu'); ?></small>
                </div>
                <div class="form-group">
                    <label for="Harga_Sepatu">Harga Sepatu</label>
                    <input type="number" class="form-control" id="Harga_Sepatu" name="Harga_Sepatu">
                    <small class="form-text text-danger"><?= form_error('Harga_Sepatu'); ?></small>
                </div>
                <div class="form-group">
                    <label for="Stok_Sepatu">Stok Sepatu</label>
                    <input type="number" class="form-control" id="Stok_Sepatu" name="Stok_Sepatu">
                    <small class="form-text text-danger"><?= form_error('Stok_Sepatu'); ?></small>
                </div>
                <div class="form-group">
                    <label for="Tanggal_Pesanan">Tanggal Pesanan</label>
                    <input type="text" readonly="readonly" class="form-control" id="Tanggal_Pesanan" name="Tanggal_Pesanan" value="<?php echo date("j F Y");?>">
                    <small class="form-text text-danger"><?= form_error('Tanggal_Pesanan'); ?></small>
                </div>
                <div class="form-group">
                <label for="Opsi_Pengiriman">Opsi Pengiriman</label>
                <select class="form-control" id="Opsi_Pengiriman" name="Opsi_Pengiriman">
                <option value="JNE">JNE</option>
                <option value="J&T">J&T</option>
                <option value="Pos Indonesia">Pos Indonesia</option>
                <option value="Si Cepat">Si Cepat</option>
                <option value="Ninja Express">Ninja Express</option>
                </select>
            </div>
            <button type="submit" name="tambah" id="tambah" class="btn btn-primary float-right">Tambah Data Sepatu</button>
            </form>
             </div>
            <div class="card-footer text-muted">
            &copy; ThirtyOne Sepatu
        </div>
        </div>

        
        </div>
    
    </div>

</div>