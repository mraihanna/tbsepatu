<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">


            <a href="<?= base_url();?>sepatualdo"> <button class="btn btn-primary">< Kembali</button></a> 
            <br> <br>
            <h3> Detail Data Sepatu</h3>
            <br>
            <table class="table table-striped">
								<tr>
									<td>Merk Sepatu</td>
									<td><?= $sepatu['Merk_Sepatu'];?></td>
								</tr>
								<tr>
									<td>Jenis Sepatu</td>
									<td><?= $sepatu['Jenis_Sepatu'];?></td>
								</tr>
								<tr>
									<td>Ukuran Sepatu</td>
									<td><?= $sepatu['Ukuran_Sepatu'];?></td>
								</tr>
								<tr>
									<td>Harga Sepatu</td>
									<td> Rp. <?= number_format($sepatu['Harga_Sepatu']);?>,-</td>
								</tr>
								<tr>
									<td>Stok Sepatu</td>
									<td><?= $sepatu['Stok_Sepatu'];?></td>
								</tr>
								<tr>
									<td>Tanggal Pemesanan</td>
									<td><?= $sepatu['Tanggal_Pesanan'];?></td>
								</tr>
								<tr>
									<td>Opsi Pengiriman</td>
									<td><?= $sepatu['Opsi_Pengiriman'];?></td>
								</tr>
            </table>
            <!-- <div class="card-body">
                <h5 class="card-title">Merk Sepatu : <?= $sepatu['Merk_Sepatu'];?></h5>
                <h6 class="card-subtitle mb-2">Jenis Sepatu : <?= $sepatu['Jenis_Sepatu'];?></h6>
                <p class="card-subtitle mb-4">Ukuran Sepatu : <?= $sepatu['Ukuran_Sepatu'];?></p>
                <p class="card-subtitle mb-2">Harga Beli : Rp. <?= number_format($sepatu['Harga_Sepatu']);?>,-</p>
                <p class="card-subtitle mb-2">Ukuran : <?= $sepatu['Stok_Sepatu'];?></p>
                <p class="card-subtitle mb-2">Tanggal Pesanan : <?= $sepatu['Tanggal_Pesanan'];?></p>
                <p class="card-subtitle mb-2">Pengiriman : <?= $sepatu['Opsi_Pengiriman'];?></p>
            </div> -->
            
        
        </div>
    </div>
</div>