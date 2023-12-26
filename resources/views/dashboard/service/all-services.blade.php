@include('dashboard.layout.header')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Services</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Services</li>
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
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#add-cat">
                  Add New Service
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
                      <th>name</th>
                      <th>icon</th>
                      <th>create</th>
                      <th>option</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($services as $service)
                    <tr>
                      <td>{{$service->id}}</td>
                      <td>{{$service->name}}</td>
                      <td><img style="height:50px;width:50px;" src="{{ asset($service->icon) }}"  alt="Product Image"></td>
                      <td>{{$service->created_at}}</td>
                      <td>
                        <a href="/admin/services/delete/{{$service->id}}"><i class="fa fa-trash text-danger" style="margin-right: 10px;"></i> </a>
                        <a href="#" data-toggle="modal" data-target="#edit-service-{{$service->id}}" ><i class="fa fa-edit "></i> </a>
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
  
  <div class="modal fade" id="add-cat">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">add new service</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="post" enctype="multipart/form-data" action="/admin/services/store">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Service name :</label>
                    <input type="text" name="name" class="form-control"  placeholder="Enter category">
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Service icon :</label>
                    <input type="file" name="image" class="form-control">
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
    @foreach($services as $service)
    <div class="modal fade" id="edit-service-{{$service->id}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Service</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="post" enctype="multipart/form-data"  action="/admin/services/update/{{$service->id}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Service name :</label>
                    <input type="text" name="name" value="{{$service->name}}" class="form-control"  placeholder="Enter category">
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Service icon :</label>
                    <input type="file" name="image" class="form-control">
                  </div>
                </div>
                <div class="col-sm-4">
                  <img class="img-fluid" src="{{ asset($service->icon) }}" alt="Photo">
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
