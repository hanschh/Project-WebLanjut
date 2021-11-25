<div class="container pt-5">

    <div class="card">
        <div class="card-header bg-dark text-white">
            <h4 class="card-title" style="text-align: center;">Data Nasabah</h4>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Nomor Rekening</th>
                            <th>Nominal Uang</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $i => $r) { ?>
                            <tr>
                                <th scope="row"><?= $i + 1; ?></th>
                                <td><?= $r->nama ?></td>
                                <td><?= $r->no_rekening ?></td>
                                <td><?= $r->nominal_uang ?></td>
                                <td>
                                    <a href="<?= base_url('crud/form_update/' . $r->id) ?>">Update</a>
                                    <a href="<?= base_url('crud/delete/' . $r->id) ?>">Delete</a>

                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>

                </table>
            </div>
        </div>
        <div class=" container text-right">
            <a class="btn btn-primary" href="<?= base_url('crud/form_create') ?>">Create</a>
        </div><br>
    </div>
</div>