@extends('backend.app')


@section('title','index')
@push('css')

@endpush

@section('content')
<!-- Welcome Area -->
   <div class="welcome-area">
                <div class="row m-0 align-items-center">
                    <div class="col-lg-5 col-md-12 p-0">
                        <div class="welcome-content">
                            <h2>Business Overview </h2>
                             
                        </div>
                    </div>

                    
                </div>
            </div>
            <!-- End Welcome Area -->

            <!-- Stats Area -->
            <div class="ecommerce-stats-area">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="single-stats-card-box">
                            <div class="icon">
                                <i class='bx bxs-user-check'></i>
                            </div>
                            <span class="sub-title">Subscribe Gained</span>
                            <h3>23.7k <span class="badge"><i class='bx bx-up-arrow-alt'></i> 26.0%</span></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="single-stats-card-box">
                            <div class="icon">
                                <i class='bx bxs-badge-dollar'></i>
                            </div>
                            <span class="sub-title">Revenue Generated</span>
                            <h3>15.1k <span class="badge badge-red"><i class='bx bx-down-arrow-alt'></i> 45.5%</span></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="single-stats-card-box">
                            <div class="icon">
                                <i class='bx bx-purchase-tag'></i>
                            </div>
                            <span class="sub-title">Quarterly Sales</span>
                            <h3>30.9k <span class="badge"><i class='bx bx-up-arrow-alt'></i> 32.1%</span></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="single-stats-card-box">
                            <div class="icon">
                                <i class='bx bx-shopping-bag'></i>
                            </div>
                            <span class="sub-title">Orders Received</span>
                            <h3>10.5k <span class="badge"><i class='bx bx-up-arrow-alt'></i> 56.9%</span></h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Stats Area -->

            
          

            <!-- Start -->
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <div class="card recent-orders-box mb-30">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3>Recent Orders</h3>

                            <div class="dropdown">
                                <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class='bx bx-dots-horizontal-rounded' ></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <i class='bx bx-show'></i> View
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <i class='bx bx-edit-alt'></i> Edit
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <i class='bx bx-trash'></i> Delete
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <i class='bx bx-printer'></i> Print
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <i class='bx bx-download'></i> Download
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Invoice</th>
                                            <th>Customer</th>
                                            <th>Purchase On</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>#6791679</td>
                                            <td class="name"><img src="{{asset('backend/assets/img/user1.jpg')}}" alt="image"> Atony Rony</td>
                                            <td>12 May 2019</td>
                                            <td>$564</td>
                                            <td><span class="badge badge-primary">Received</span></td>
                                        </tr>
                                        <tr>
                                            <td>#6791674</td>
                                            <td class="name"><img src="{{asset('backend/assets/img/user2.jpg')}}" alt="image"> Tom Hardy</td>
                                            <td>11 May 2019</td>
                                            <td>$954</td>
                                            <td><span class="badge badge-success">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td>#6791654</td>
                                            <td class="name"><img src="{{asset('backend/assets/img/user3.jpg')}}" alt="image"> Colin Firth</td>
                                            <td>10 May 2019</td>
                                            <td>$214</td>
                                            <td><span class="badge badge-danger">Declined</span></td>
                                        </tr>
                                        <tr>
                                            <td>#6791699</td>
                                            <td class="name"><img src="{{asset('backend/assets/img/user4.jpg')}}" alt="image"> Jude Law</td>
                                            <td>09 May 2019</td>
                                            <td>$120</td>
                                            <td><span class="badge badge-success">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td>#6791647</td>
                                            <td class="name"><img src="{{asset('backend/assets/img/user5.jpg')}}" alt="image"> Idris Elba</td>
                                            <td>08 May 2019</td>
                                            <td>$999</td>
                                            <td><span class="badge badge-primary">Received</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12">
                    <div class="card mb-30">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3>Revenue Growth</h3>

                            <div class="dropdown">
                                <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class='bx bx-dots-horizontal-rounded' ></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <i class='bx bx-show'></i> View
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <i class='bx bx-edit-alt'></i> Edit
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <i class='bx bx-trash'></i> Delete
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <i class='bx bx-printer'></i> Print
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <i class='bx bx-download'></i> Download
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div id="revenue-growth-chart" class="extra-margin"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End -->

           
@endsection

@push('js')
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