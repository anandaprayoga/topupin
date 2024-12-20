<div id="editModal" class="modal fade">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Produk</h4>
            </div>
            <form method="POST" action="action.php" name="">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">

                            <input name="id_product" type="hidden" class="form-control" id="id_product">

                            <div class="form-group mb-4">
                                <label>Nama</label>
                                <input name="name" type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group mb-4">
                                <label>ID game</label>
                                <input name="id_game" type="text" class="form-control" id="id_game">
                            </div>
                            <div class="form-group mb-4">
                                <label>Harga</label>
                                <input name="amount" type="number" class="form-control" id="amount">
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-sm col-sm-2 btn-default" data-dismiss="modal">Batal</button>
                    <input name="editProduct" type="submit" class="btn btn-sm col-sm-2 btn-primary" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>