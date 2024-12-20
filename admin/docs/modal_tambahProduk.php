<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Staff</h4>
            </div>
            <form method="POST" action="action.php" name="">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group mb-4">
                                <label>Nama</label>
                                <input name="name" type="text" class="form-control" required autofocus>
                            </div>
                            <div class="form-group mb-4">
                                <label>Id Game</label>
                                <input name="id_game" type="text" class="form-control" required>
                            </div>
                            <div class="form-group mb-4">
                                <label>Harga</label>
                                <input name="harga" type="number" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-sm col-sm-2 btn-default" data-dismiss="modal">Batal</button>
                    <input name="addProduct" type="submit" class="btn btn-sm col-sm-2 btn-primary" value="Tambah">
                </div>
            </form>
        </div>
    </div>
</div>