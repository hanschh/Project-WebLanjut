<div class="container pt-5">
    <div class="card">
        <div class="card-header bg-dark text-white">
            <h4 class="card-title" style="text-align: center;">Update Data</h4>
        </div>

        <div class="card-body">
            <form method="post" action="<?= base_url('datacontroller/update/' . $data->id) ?>">
                <div class="form-group">
                    <label for="nama" class="col-form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?= $data->nama ?>">
                </div>
                <div class="form-group">
                    <label for="no_rek" class="col-form-label">Nomor Rekening</label>
                    <input type="text" class="form-control" name="no_rekening" value="<?= $data->no_rekening ?>">
                </div>
                <div class="form-group">
                    <label for="saldo" class="col-form-label">Nominal Uang</label>
                    <input type="text" class="form-control" name="nominal_uang" value="<?= $data->nominal_uang ?>">
                </div>
        </div>
        <div class="text-right">
            <div class="card-footer">
                <INPUT TYPE="button" class="btn btn-secondary" VALUE="Close" onClick="history.go(-1);">
                <button type="submit" class="btn btn-primary"><i class = "fas fa-paper-plane"></i> Submit</button>
            </div>
        </div>