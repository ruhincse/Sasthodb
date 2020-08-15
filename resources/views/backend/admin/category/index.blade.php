@extends('backend.app')


@section('title','Category-list')
@push('css')

@endpush

@section('content')
<!-- Welcome Area -->
   <div class="welcome-area">
                <div class="row m-0 align-items-center">
                    <div class="col-lg-5 col-md-12 p-0">
                        <div class="welcome-content">
                            <h2>Category Section </h2>
                             
                        </div>
                    </div>

                    
                </div>
            </div>
            <!-- End Welcome Area -->

          

            
          

            <!-- Start -->
            <div class="row">
            <div class="col-lg-5 col-md-12">
                    <div class="card mb-30">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3>Create Category</h3>

                            
                        </div>

                        <div class="card-body">
                        <form action="{{route('admin.category.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Category Name</label>
                                <input type="text" name="category_name" class="form-control" required>
                                
                                @error('area_name')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                                    </div>
                                @enderror
                            </div>                           
                           
                            <button type="submit" class="btn btn-primary">Add Category</button>
                        </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 col-md-12">
                    <div class="card recent-orders-box mb-30">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3>Category List</h3>

                            <div class="dropdown">
                                <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class='bx bx-dots-horizontal-rounded' ></i>
                                </button>
                               
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Category Name</th>
                                            <th>Category Slug</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                    @foreach($datas as $data)
                                        <tr>
                                            <td class="name">  {{$data->category_name}}</td>
                                            <td class="name">  {{$data->category_slug}}</td>
                                            <td>
                                                <!-- <a href="#" class="d-inline-block text-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="hello@tomhardy.com"><i class="bx bx-envelope"></i></a> -->
                                                <a href="#" class="d-inline-block text-success mr-2"  data-toggle="modal" data-target="#areaEdit_{{$data->id}}"><i class="bx bx-edit"></i></a>
                                                <a onclick="deleteArea('{{$data->id}}')" class="d-inline-block text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="bx bx-trash"></i></a>
                                                <form action="{{route('admin.category.destroy',$data->id)}}" id="delete-form-{{$data->id}}" method="post" >
                                              @csrf
                                             @method('delete')

                                            </form>
                                            
                                            </td>
                                        </tr>



                                        <div class="modal fade" id="areaEdit_{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                             
                                        <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Area Information</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        


                                    <form action="{{route('admin.category.update',$data->id)}}" method="POST">
                            @csrf

                            @method('PUT')
                            <div class="form-group">
                                <label>Category Name</label>
                                <input type="text" name="category_name" value="{{$data->category_name}}" class="form-control" required>
                                
                                @error('area_name')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                                    </div>
                                @enderror
                            </div>                           
                           
                            <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update </button>
                                    </div>
                        </form>


                                    </div>
                                   
                                    </div>
                                </div>
                                </div> 
                                    
                                        @endforeach
                                        
                                      
                                       
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

             
            </div>
            <!-- End -->

           
@endsection

@push('js')

<script type="text/javascript">
        
        function deleteArea(id){
                           Swal.fire({
                             title: 'Are you sure?',
                             text: "You won't be able to revert this!",
                             type: 'warning',
                             showCancelButton: true,
                             confirmButtonColor: '#3085d6',
                             cancelButtonColor: '#d33',
                             confirmButtonText: 'Yes, delete it!'
                           }).then((result) => {
                             if (result.value) {
                           event.preventDefault();
                           document.getElementById('delete-form-'+id).submit();
                               
                             }
                           })
                     
                   }


   </script>


@endpush