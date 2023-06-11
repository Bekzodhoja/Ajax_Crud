<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

<script>
    $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
$(document).ready(function()
{
    $(document).on('click','.add_product',function(e){
        e.preventDefault();
        let name = $('#name').val();
        let price = $('#price').val();

        $.ajax({

            url:"{{ route('add.product') }}",
            method:'POST',
            data:{name:name,price:price},
            success:function(res){

                if(res.status=='success'){
                    $('#addModal').modal('hide');
                    $('#addProductForm')[0].reset();
                }
            },error:function(err){
               let error= err.responseJSON;
               $.each(error.errors,function(index,value){

                $('.errMsgContainer').append('<span class="text-danger">'+value+'</span>'+'<br>');
               });
            }
        });
    })
    });
</script>