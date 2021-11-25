<div class="container pt-5">
    <div class="card">
        <div class="card-header bg-dark text-white">
            <h4 class="card-title" style="text-align: center;">Tambah Data</h4>
        </div>

        <div class="card-body">
            <form method="post" action="<?= base_url('datacontroller/create'); ?>">
                <div class="form-group">
                    <label for="nama" class="col-form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="no_rek" class="col-form-label">Nomor Rekening</label>
                    <input type="text" class="form-control" id="no_rekening" name="no_rekening">
                </div>
                <div class="form-group">
                    <label for="saldo" class="col-form-label">Nominal Uang</label>
                    <input type="text" class="form-control" id="nominal_uang" name="nominal_uang">
                </div>
        </div>

        <div class="card-footer">
            <p>
                <INPUT TYPE="button" class="btn btn-secondary" VALUE="Close" onClick="history.go(-1);">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </p>
    </div>
</div>
</div>
</div>