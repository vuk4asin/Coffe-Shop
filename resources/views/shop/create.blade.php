

<div class="container">
    <!-- Modal -->
    <form action="{{ route('shops.store') }}" id="form-add" method="post" enctype="multipart/form-data">
        @csrf
    <div class="modal fade" id="shop-add" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">

                <div class="modal-header">
                    <h3>Add Coffee Shop</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body" id="body-add">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="" class="form-control mb-2" required>
                    <label for="Address">Address:</label>
                    <input type="text" name="address" class="form-control" required>
                    <label for="phone">Phone:</label>
                    <input type="text" name="phone" id="" class="form-control mb-2">
                    <label for="picture">Picture:</label>
                    <input type="file" name="picture" id=""  class="form-control-file">
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success float-left">Create</button>
                </div>
                
            </div>
            <!-- End Modal content-->
        </div>
    </div>
    </form>
    <!-- End Modal -->
</div>