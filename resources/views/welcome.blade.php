<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-2"> </div>

            <div class="col-md-8">
                <h2 class="my-5 text-center">my CRUD</h2>
                <div class="table-data">
                    <a href="#" type="button" class="btn btn-primary my-2" data-bs-toggle="modal" data-bs-target="#addModal">Add Product</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>
                                    <a href="" class="btn btn-success"><i class="las la-edit"></i></a>
                                    <a href="" class="btn btn-danger"><i class="las la-times"></i></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@include('add_product')
@include('script');


</body>

</html>
