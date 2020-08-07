@extends('backend.app')


@section('title','Agent-list')
@push('css')

@endpush

@section('content')
<!-- Welcome Area -->
   <div class="welcome-area">
                <div class="row m-0 align-items-center">
                    <div class="col-lg-5 col-md-12 p-0">
                        <div class="welcome-content">
                            <h2>Agent Section </h2>
                             
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
                            <h3>Create Agent</h3>

                            
                        </div>

                        <div class="card-body">
                        <form action="{{route('admin.agent.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Agent Frist Name</label>
                                <input type="text" name="first_name" class="form-control" required>
                                
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
                                <input type="text" name="last_name" class="form-control" required>
                                
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
                                <input type="email" name="email_addr" class="form-control" required>
                                
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
                                <input type="text" name="org_name" class="form-control" required>
                                
                                @error('org_name')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
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
                                        <option value="{{$area->id}}">{{$area->area_name}}</option>

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
                                <input type="text" name="org_mobile" class="form-control" required>
                                
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
                                <input type="text" name="org_address" class="form-control" required>
                                
                                @error('org_address')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                                    </div>
                                @enderror
                            </div>





                           
                            <button type="submit" class="btn btn-primary">Add Agent</button>
                        </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 col-md-12">
                    <div class="card recent-orders-box mb-30">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3>Agent List</h3>

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
                                            <th>Agent Name</th>
                                            <th>Area</th>
                                            <th>Mobile No</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                    @foreach($datas as $data)
                                        <tr>
                                            <td class="name"> {{$data->user->first_name??''}} {{$data->user->last_name??''}}</td>
                                            <td class="name"> {{$data->area->area_name??''}} </td>
                                            <td class="name"> {{$data->org_mobile}} </td>
                                            <td>
                                                <a href="#" class="d-inline-block text-warning mr-2" data-toggle="modal"  data-target="#agentshow_{{$data->id}}"    data-placement="top" title="Show Info" ><i class="bx bx-show"></i></a>
                                                <a href="#" class="d-inline-block text-success mr-2"  data-toggle="modal" data-target="#areaEdit_{{$data->id}}" title="Edit Info"><i class="bx bx-edit"></i></a>
                                                <a onclick="deleteArea('{{$data->id}}')" class="d-inline-block text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="bx bx-trash"></i></a>
                                                <form action="{{route('admin.agent.destroy',$data->id)}}" id="delete-form-{{$data->id}}" method="post" >
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
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Agent Information</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        


                                    <form action="{{route('admin.agent.update',$data->id)}}" method="POST">
                            @csrf

                            @method('PUT')
                            
                            <div class="form-group">
                                <label>Agent Frist Name</label>
                                <input type="text" name="first_name" value="{{$data->user->first_name}}" class="form-control" required>
                                
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
                                <input type="text" name="last_name" value="{{$data->user->last_name}}"  class="form-control" required>
                                
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
                                <input type="email" name="email_addr" value="{{$data->user->email}}"   class="form-control" required>
                                
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
                                <input type="password" name="agent_pass" class="form-control" >
                                
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
                                <input type="text" name="org_name"  value="{{$data->org_name}}"  class="form-control" required>
                                
                                @error('org_name')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
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
                                <input type="text" name="org_mobile" value="{{$data->org_mobile}}"  class="form-control" required>
                                
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
                                <input type="text" name="org_address" value="{{$data->org_address}}"   class="form-control" required>
                                
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
                             <h5 class="modal-title" id="exampleModalLabel">Show Agent Information</h5>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                             </button>
                         </div>
                         <div class="modal-body">
                             


                         <form action="#" method="POST">
                            
                         <div class="form-group">
                                <label>Agent Frist Name</label>
                                <input type="text" readonly name="first_name" value="{{$data->user->first_name}}" class="form-control" required>
                                
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
                                <input type="text" readonly name="last_name" value="{{$data->user->last_name}}"  class="form-control" required>
                                
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
                                <input type="email" readonly name="email_addr" value="{{$data->user->email}}"   class="form-control" required>
                                
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

  <!-- ApexCharts JS -->
  <script src="{{asset('backend/assets/js/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/apexcharts/apexcharts-stock-prices.js')}}"></script>
        <script src="{{asset('backend/assets/js/apexcharts/apexcharts-irregular-data-series.js')}}"></script>
        <script src="{{asset('backend/assets/js/apexcharts/apex-custom-line-chart.js')}}"></script>
        <script src="{{asset('backend/assets/js/apexcharts/apex-custom-pie-donut-chart.js')}}"></script>
        <script src="{{asset('backend/assets/js/apexcharts/apex-custom-area-charts.js')}}"></script>
        <script src="{{asset('backend/assets/js/apexcharts/apex-custom-column-chart.js')}}"></script>
        <script src="{{asset('backend/assets/js/apexcharts/apex-custom-bar-charts.js')}}"></script>
        <script src="{{asset('backend/assets/js/apexcharts/apex-custom-mixed-charts.js')}}"></script>
        <script src="{{asset('backend/assets/js/apexcharts/apex-custom-radialbar-charts.js')}}"></script>
        <script src="{{asset('backend/assets/js/apexcharts/apex-custom-radar-chart.js')}}"></script>




        <!-- ChartJS -->
        <script src="{{asset('backend/assets/js/chartjs/chartjs.min.js')}}"></script>
        <div class="chartjs-colors"> <!-- To use template colors with Javascript -->
            <div class="bg-primary"></div>
            <div class="bg-primary-light"></div>
            <div class="bg-secondary"></div>
            <div class="bg-info"></div>
            <div class="bg-success"></div>
            <div class="bg-success-light"></div>
            <div class="bg-danger"></div>
            <div class="bg-warning"></div>
            <div class="bg-purple"></div>
            <div class="bg-pink"></div>
        </div>
        
        <!-- jvectormap Min JS -->
        <script src="{{asset('backend/assets/js/jvectormap-1.2.2.min.js')}}"></script>
        <!-- jvectormap World Mil JS -->
        <script src="{{asset('backend/assets/js/jvectormap-world-mill-en.js')}}"></script>
@endpush