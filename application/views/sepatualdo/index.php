<div class="container">

<?php if( $this->session->flashdata('flash') ) :
?>
<div class="row mt-3">
    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Data Sepatu
        <strong>berhasil</strong><?= $this->session->flashdata('flash'); ?>.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
    </div>
</div>
<?php endif;?>

<div class="row">
    <div class="col-md-6">
        
        <a href="<?= base_url();?>sepatualdo" class="btn btn-success mt-3">Refresh</a>
                    
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-6">
        
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-6">
    <h3>Daftar Sepatu</h3>
    <br>
    <?php if(empty($sepatu)) : ?>
        <div class="alert alert-danger" role="alert">
            Data Sepatu tidak ditemukan!
        </div>
    <?php endif;?>
        
        <table class="table table-bordered table-striped" id="example1">
        <tr style="background:gray;color:#fff; text-align:center;">
        <td>Merk Sepatu</td>
        <td>Aksi</td>
        </tr>
        <?php foreach( $sepatu as $plg) : ?>
        <tr>
        <td><?= $plg['Merk_Sepatu'];?></td>
        <td style="text-align: center;">
            <a href="<?= base_url();?>sepatualdo/detail/<?= $plg['id'];?>"> <button class="btn btn-primary btn-xs">Details</button></a>  
        </td>
        </tr>
        <?php endforeach;?>
        </table>

        
    </div>
</div>

</div>