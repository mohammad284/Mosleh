@include('dashboard.layout.header')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Car type</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Car type</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#add-car">
                  Add New car
                </button>
            </h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>type</th>
                      <th>age</th>
                      <th>create</th>
                      <th>option</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($cars as $car)
                    <tr>
                      <td>{{$car->id}}</td>
                      <td>{{$car->type}}</td>
                      <td>{{$car->age}}</td>
                      <td>{{$car->created_at}}</td>
                      <td>
                        <a href="/admin/cars/destroy/{{$car->id}}"><i class="fa fa-trash text-danger" style="margin-right: 10px;"></i> </a>
                        <a href="#" data-toggle="modal" data-target="#edit-car-{{$car->id}}" ><i class="fa fa-edit "></i> </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
  <div class="modal fade" id="add-car">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">add new car</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="post" enctype="multipart/form-data" action="/admin/cars/store">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">car type :</label>
                    <input type="text" name="type" class="form-control"  placeholder="Enter category">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">age :</label>
                    <input type="text" name="age" class="form-control">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </form>
            <!-- /.card -->

            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- edit -->
    @foreach($cars as $car)
    <div class="modal fade" id="edit-car-{{$car->id}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit car</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="post" enctype="multipart/form-data"  action="/admin/cars/update/{{$car->id}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">type :</label>
                    <input type="text" name="type" value="{{$car->type}}" class="form-control"  placeholder="Enter category">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">age :</label>
                    <input type="text" value="{{$car->age}}" name="age" class="form-control">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">update changes</button>
                </div>
              </form>
            <!-- /.card -->

            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    @endforeach

<script>

</script>
			
@include('dashboard.layout.footer')
