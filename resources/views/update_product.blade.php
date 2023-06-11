
  
  <!-- Modal -->
  <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <form action="" method="Post" id="updateProductForm">
        @csrf
        <input type="hidden" id="u-id">
    <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="updateModalLabel">Update Product</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

        <div class="errMsgContainer">

        </div>
    </div>

          <div class="form-group ">
            <input class="form-control" type="text" name="u_name" id="u_name" placeholder="Enter Name">
          </div>
          <div class="form-group my-2">
            <input class="form-control" type="text" name="u_price" id="u_price" placeholder="Enter Price">
          </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary update_product" >Update Product</button>
        </div>

      </div>
    </div>
</form>

  </div>