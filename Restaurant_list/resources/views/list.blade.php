<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/list.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>Login Page</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-secondary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Restaurant Gallery</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/list">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#at-Add" href="#">Add</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- *****************************Navbar part end*************************** -->
    <section class="body">
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card w-100">
                    <div class="header">
                        <h1>Restaurant list</h1>
                        @if(Session::get('satus'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            {{Session::get('satus')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $item)
                                <tr>
                                    <th scope="row">{{$item->id}}</th>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->address}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                    </div>
                    </table>
                </div>
            </div>
        </div>

    </section>


    <!-- ****************************End Dashboard******************* -->

    <section class="at-Add-form">
        <div class="modal fade" id="at-Add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Restaurant</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <form class="form-modal-container" method="post" action="{{URL::to('/new')}}">
                            {{ csrf_field()}}
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="res-name" class="col-form-label">Restaurant name</label>
                                    <input type="text" name="name" class="form-control" id="res-name">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="addr" class="col-form-label">Address</label>
                                    <input type="text" name="address" class="form-control" id="addr">
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-success">Save New</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>