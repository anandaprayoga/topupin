<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Game</h4>
            </div>
            <form method="POST" action="action.php" name="">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group mb-4">
                                <label>Nama Game</label>
                                <input name="nama" type="text" class="form-control" required autofocus>
                            </div>

                            <div class="form-group mb-4">
                                <label>Developer</label>
                                <input name="developer" type="text" class="form-control" required>
                            </div>

                            <div class="form-group mb-4">
                                <label>Gambar</label>
                                <input name="gambar" type="image" class="form-control" required>
                            </div>
                            <!-- <div class="form-group mb-4">
                                <label>Role</label>
                                <select class="form-select form-select-sm" id="inputGroupSelect01" name="role">
                                    <option value="Choose..." selected>Choose...</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Keuangan">Keuangan</option>
                                </select>
                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-sm col-sm-2 btn-default" data-dismiss="modal">Batal</button>
                    <input name="addgame" type="submit" class="btn btn-sm col-sm-2 btn-primary" value="Tambah">
                </div>
            </form>
        </div>
    </div>
</div>