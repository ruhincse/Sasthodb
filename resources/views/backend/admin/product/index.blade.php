@extends('backend.app')


@section('title','Product-list')
@push('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@section('content')
<!-- Welcome Area -->
   <div class="welcome-area">
                <div class="row m-0 align-items-center">
                    <div class="col-lg-5 col-md-12 p-0">
                        <div class="welcome-content">
                            <h2>Product Section </h2>
                             
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
                            <h3>Create Product</h3>

                            
                        </div>

                        <div class="card-body">
                        <form action="{{route('admin.product.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Product Title</label>
                                <input type="text" name="product_name" class="form-control" required>
                                
                                @error('product_name')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                                    </div>
                                @enderror
                            </div>

                             <div class="form-group">
                                <label>Product Category</label>
                                 <select name="category_id" class="form-control" required>
                                        <option value="">Select Category</option>

                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}" >{{$category->category_name}}</option>

                                        @endforeach

                                </select>

                                @error('category_id')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label>Product Image</label>
                                <input type="file" name="pro_image" class="form-control" >
                                
                                @error('pro_image')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                                    </div>
                                @enderror
                            </div>



                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" name="price" class="form-control" required>
                                
                                @error('price')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Discount Price</label>
                                <input type="text" name="dis_price" class="form-control" >
                                
                                @error('dis_price')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                                    </div>
                                @enderror
                            </div>


                                            


                            <div class="form-group">
                                <label>Short Description</label>
                                <textarea id="summernote" name="pro_short_desc" ></textarea>

                                
                                @error('pro_short_desc')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label>Description</label>
                                <textarea id="summernotedes" name="pro_desc" ></textarea>
                                
                                @error('pro_desc')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                                    </div>
                                @enderror
                            </div>





                           
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 col-md-12">
                    <div class="card recent-orders-box mb-30">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3>Product List</h3>

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
                                            <th>Product Name</th>
                                            <th>Image</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                    @foreach($datas as $data)
                                        <tr>
                                    
                                        <td>{{$data->product_name}} </td>
                                        <td><img src="{{asset('product/'.$data->product_image)}}" height="60" width="60" /> </td>
                                        <td>{{$data->product_price}} </td>
                                        <td>
                                                <!-- <a href="#" class="d-inline-block text-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="hello@tomhardy.com"><i class="bx bx-envelope"></i></a> -->
                                                <a href="#" class="d-inline-block text-success mr-2"  data-toggle="modal" data-target="#areaEdit_{{$data->id}}"><i class="bx bx-edit"></i></a>
                                                <a onclick="deleteArea('{{$data->id}}')" class="d-inline-block text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="bx bx-trash"></i></a>
                                                <form action="{{route('admin.product.destroy',$data->id)}}" id="delete-form-{{$data->id}}" method="post" >
                                              @csrf
                                             @method('delete')

                                            </form>
                                            
                                            </td>

                                        </tr>

                          <!--  Edit Modal Start here -->

                                        <div class="modal fade" id="areaEdit_{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                             
                                        <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Product Information</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        


                        <form action="{{route('admin.product.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            @method('PUT')
                            
                            <div class="form-group">
                                <label>Product Title</label>
                                <input type="text" name="product_name" value="{{$data->product_name}}" class="form-control" required>
                                
                                @error('product_name')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                                    </div>
                                @enderror
                            </div>

                             <div class="form-group">
                                <label>Product Category</label>
                                 <select name="category_id" class="form-control" required>
                                        <option value="">Select Category</option>

                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{($category->id==$data->category_id)?'selected':''}} >{{$category->category_name}}</option>

                                        @endforeach

                                </select>

                                @error('category_id')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label>Product Image</label>
                                <input type="file" name="pro_image" class="form-control" >
                                                        <br>     <br>
                                <img  src="{{asset('product/'.$data->product_image)}}" height="100" width="100" />
                                
                                @error('pro_image')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                                    </div>
                                @enderror
                            </div>



                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" value="{{$data->product_price}}" name="price" class="form-control" required>
                                
                                @error('price')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Discount Price</label>
                                <input type="text" value="{{$data->product_dis_price}}"  name="dis_price" class="form-control" >
                                
                                @error('dis_price')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                                    </div>
                                @enderror
                            </div>


                                            


                            <div class="form-group">
                                <label>Short Description</label>
                                <textarea id="summernoteEdit"  name="pro_short_desc" >{{$data->product_short_desc}}</textarea>

                                
                                @error('pro_short_desc')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label>Description</label>
                                <textarea id="summernotedeEdit1" name="pro_desc" > {{$data->product_desc}}</textarea>
                                
                                @error('pro_desc')
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


                                 <!--  Edit Modal Edit here -->

                                 <div class="modal fade" id="agentshow_{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                             
                             <div class="modal-dialog" role="document">
                         <div class="modal-content">
                         <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalLabel">Show Product Information</h5>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                             </button>
                         </div>
                         <div class="modal-body">
                             


                         <form action="#" method="POST">
                            
                         <div class="form-group">
                                <label>Agent Frist Name</label>
                                <input type="text" readonly name="first_name" value="{{$data->user->first_name??''}}" class="form-control" required>
                                
                                @error('first_name')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                                    </div>
                                @enderror
                            </div>

                             <div class="form-group">
                                <label>Agent Last Name</label>
                                <input type="text" readonly name="last_name" value="{{$data->user->last_name??''}}"  class="form-control" required>
                                
                                @error('last_name')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" readonly name="email_addr" value="{{$data->user->email??''}}"   class="form-control" required>
                                
                                @error('email_addr')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="agent_pass" class="form-control" required>
                                
                                @error('agent_pass')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label>Organization Name</label>
                                <input type="text"  readonly name="org_name"  value="{{$data->org_name}}"  class="form-control" required>
                                
                                @error('org_name')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    <button  readonly type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                                    </div>
                                @enderror
                            </div>


                           


                            <div class="form-group">
                                <label>Organization Area</label>

                                <select name="org_area" class="form-control" required>
                                        <option>Select Area</option>

                                        @foreach($areas as $area)
                                        <option value="{{$area->id}}"  {{($area->id==$data->area_id)?'selected':''}} >{{$area->area_name}}</option>

                                        @endforeach

                                </select>
                                 
                                
                                @error('org_area')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label>Mobile No</label>
                                <input type="text" readonly  name="org_mobile" value="{{$data->org_mobile}}"  class="form-control" required>
                                
                                @error('org_mobile')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" readonly name="org_address" value="{{$data->org_address}}"   class="form-control" required>
                                
                                @error('org_address')
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
                             
                         </div>
             </form>


                         </div>
                        
                         </div>
                     </div>
                     </div> 

                                  <!--  Show  Modal Start here -->




                                   <!--  Edit Modal End here -->

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



   </script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
    $(document).ready(function() {
        $('#summernote').summernote();
        $('#summernotedes').summernote();
        $('#summernoteEdit').summernote();
        $('#summernotedeEdit1').summernote();


        

        
    });
  </script>

@endpush