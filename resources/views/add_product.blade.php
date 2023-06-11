
  
  <!-- Modal -->
  <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <form action="" method="Post" id="addProductForm">
        @csrf
    <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="addModalLabel">Add Product</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

        <div class="erMsgContainer">

        </div>
    </div>

          <div class="form-group ">
            <input class="form-control" type="text" name="name" id="name" placeholder="Enter Name">
          </div>
          <div class="form-group my-2">
            <input class="form-control" type="text" name="price" id="price" placeholder="Ent Price">
          </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary add_product" >Save Product</button>
        </div>

      </div>
    </div>
</form>

  </div>