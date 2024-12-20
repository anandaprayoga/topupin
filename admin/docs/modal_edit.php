<div id="editModal" class="modal fade">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit User</h4>
            </div>
            <form method="POST" action="action.php" name="">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">

                            <input name="id_admin" type="hidden" class="form-control" id="id_admin">

                            <div class="form-group mb-4">
                                <label>Nama</label>
                                <input name="nama" type="text" class="form-control" id="nama">
                            </div>
                            <div class="form-group mb-4">
                                <label>Username</label>
                                <input name="username" type="text" class="form-control" id="username">
                            </div>
                            <div class="form-group mb-4">
                                <label>Password</label>
                                <input name="password" type="password" class="form-control">
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-sm col-sm-2 btn-default" data-dismiss="modal">Batal</button>
                    <input name="edituser" type="submit" class="btn btn-sm col-sm-2 btn-primary" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>