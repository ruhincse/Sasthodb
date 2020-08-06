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
                            <h1 class="mb-2">Hi, Welcomeback Admin!</h1>
                            <p class="mb-0">Just Do Somethings Better</p>
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-12 p-0">
                        <div class="welcome-img">
                            <img src="{{asset('backend/assets/img/welcome-img.png')}}" alt="image">
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
                <div class="col-lg-6 col-md-12">
                    <div class="card mb-30">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3>Revenue Summary</h3>

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
                            <div class="revenue-summary-content">
                                <div class="d-sm-flex">
                                    <div class="pr-4 border-right">
                                        <p class="mb-1">Net Revenue</p>
                                        <h5 class="mb-0">
                                            <span class="font-weight-bold">$50,525</span>
                                            <span class="primary-text">+8.71%</span>
                                        </h5>
                                    </div>

                                    <div class="px-4 border-right">
                                        <p class="mb-1">Selling</p>
                                        <h5 class="mb-0">
                                            <span class="font-weight-bold">$20,520</span>
                                            <span class="danger-text">+2.82%</span>
                                        </h5>
                                    </div>

                                    <div class="px-4">
                                        <p class="mb-1">Cost</p>
                                        <h5 class="mb-0">
                                            <span class="font-weight-bold">$7,317</span>
                                            <span class="primary-text">+10.2%</span>
                                        </h5>
                                    </div>
                                </div>
                            </div>

                            <div id="revenue-summary-chart" class="extra-margin"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4">
                    <div class="new-product-box">
                        <div class="icon">
                            <i class='bx bx-shopping-bag'></i>
                        </div>
                        New Products
                        <span class="sub-text d-block font-weight-bold">1.3K</span>
                    </div>

                    <div class="new-user-box">
                        <div class="icon">
                            <i class='bx bx-user-pin'></i>
                        </div>
                        New Users
                        <span class="sub-text d-block font-weight-bold">2.5K</span>
                    </div>

                    <div class="upcoming-product-box">
                        <div class="icon">
                            <i class='bx bx-cart-alt'></i>
                        </div>
                        Upcoming Products
                        <span class="sub-text d-block font-weight-bold">1.1K</span>
                    </div>
                </div>

                <div class="col-lg-4 col-md-8">
                    <div class="card browser-statistics-box mb-30">
                        <div class="card-header">
                            <h3>Browser Statistics</h3>
                        </div>

                        <div class="card-body">
                            <div class="box d-flex align-items-center">
                                <div class="img">
                                    <img src="{{asset('backend/assets/img/chrome.png')}}" alt="image">
                                </div>

                                <div class="content">
                                    <h5 class="mb-0">Google Chrome</h5>

                                    <div class="statistics-bar d-flex align-items-center">
                                        <div class="bar-inner">
                                            <div class="bar progress-line" data-width="100"></div>
                                        </div>
                                        <div class="count-box">
                                            <span class="count-text" data-speed="2000" data-stop="100">0</span>%
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="box d-flex align-items-center">
                                <div class="img">
                                    <img src="{{asset('backend/assets/img/mozilla.png')}}" alt="image">
                                </div>

                                <div class="content">
                                    <h5 class="mb-0">Mozila Firefox</h5>

                                    <div class="statistics-bar d-flex align-items-center">
                                        <div class="bar-inner">
                                            <div class="bar progress-line" data-width="99"></div>
                                        </div>
                                        <div class="count-box">
                                            <span class="count-text" data-speed="2000" data-stop="99">0</span>%
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="box d-flex align-items-center">
                                <div class="img">
                                    <img src="{{asset('backend/assets/img/opera.png')}}" alt="image">
                                </div>

                                <div class="content">
                                    <h5 class="mb-0">Opera Mini</h5>

                                    <div class="statistics-bar d-flex align-items-center">
                                        <div class="bar-inner">
                                            <div class="bar progress-line" data-width="95"></div>
                                        </div>
                                        <div class="count-box">
                                            <span class="count-text" data-speed="2000" data-stop="95">0</span>%
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="box d-flex align-items-center">
                                <div class="img">
                                    <img src="{{asset('backend/assets/img/edge.png')}}" alt="image">
                                </div>

                                <div class="content">
                                    <h5 class="mb-0">Microsoft Edge</h5>

                                    <div class="statistics-bar d-flex align-items-center">
                                        <div class="bar-inner">
                                            <div class="bar progress-line" data-width="90"></div>
                                        </div>
                                        <div class="count-box">
                                            <span class="count-text" data-speed="2000" data-stop="90">0</span>%
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="box d-flex align-items-center">
                                <div class="img">
                                    <img src="{{asset('backend/assets/img/internet-explore.png')}}" alt="image">
                                </div>

                                <div class="content">
                                    <h5 class="mb-0">Internet Explorer</h5>

                                    <div class="statistics-bar d-flex align-items-center">
                                        <div class="bar-inner">
                                            <div class="bar progress-line" data-width="85"></div>
                                        </div>
                                        <div class="count-box">
                                            <span class="count-text" data-speed="2000" data-stop="85">0</span>%
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="box d-flex align-items-center">
                                <div class="img">
                                    <img src="{{asset('backend/assets/img/brave.png')}}" alt="image">
                                </div>

                                <div class="content">
                                    <h5 class="mb-0">Brave</h5>

                                    <div class="statistics-bar d-flex align-items-center">
                                        <div class="bar-inner">
                                            <div class="bar progress-line" data-width="95"></div>
                                        </div>
                                        <div class="count-box">
                                            <span class="count-text" data-speed="2000" data-stop="95">0</span>%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End -->

            <!-- Start -->
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="card mb-30 greetings-card-box">
                        <div class="card-header">
                            <h3>Best seller of the month</h3>
                        </div>

                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="image">
                                    <img src="{{asset('backend/assets/img/trophy.png')}}" width="400" height="400" alt="image">
                                </div>

                                <div class="content">
                                    <div class="icon mb-3">
                                        <i class='bx bx-award'></i>
                                    </div>
                                    <h3>Congratulations Admin!</h3>
                                    <p class="mb-0">You have done <span class="d-inline-block">99.9%</span> more sales today. Check your new badge in your profile.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="card mb-30">
                        <div class="card-header">
                            <h3>Client Recollection</h3>
                        </div>

                        <div class="card-body">
                            <div id="client-recollection-chart" class="extra-margin"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End -->

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

            <!-- Start -->
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="card mb-30 social-marketing-box">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3>Sales By Social Source</h3>

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
                            <div class="list">
                                <div class="icon facebook">
                                    <i class='bx bxl-facebook'></i>
                                </div>
                                <h4 class="mb-1"><a href="#" class="d-inline-block">Facebook Ads</a></h4>
                                <p class="mb-0">5.5k Sale - 5.2k Like</p>
                                <div class="stats">
                                    <i class='bx bx-trending-up text-success'></i>
                                    50%
                                </div>
                            </div>

                            <div class="list">
                                <div class="icon twitter">
                                    <i class='bx bxl-twitter'></i>
                                </div>
                                <h4 class="mb-1"><a href="#" class="d-inline-block">Twitter Ads</a></h4>
                                <p class="mb-0">5.3k Sale - 4.9k Like</p>
                                <div class="stats">
                                    <i class='bx bx-trending-up text-success'></i>
                                    20%
                                </div>
                            </div>

                            <div class="list">
                                <div class="icon instagram">
                                    <i class='bx bxl-instagram'></i>
                                </div>
                                <h4 class="mb-1"><a href="#" class="d-inline-block">Instagram Ads</a></h4>
                                <p class="mb-0">5.1k Sale - 4.6k Like</p>
                                <div class="stats">
                                    <i class='bx bx-trending-down text-danger'></i>
                                    88%
                                </div>
                            </div>

                            <div class="list">
                                <div class="icon linkedin">
                                    <i class='bx bxl-linkedin'></i>
                                </div>
                                <h4 class="mb-1"><a href="#" class="d-inline-block">Linkedin Ads</a></h4>
                                <p class="mb-0">5.5k Sale - 5.2k Like</p>
                                <div class="stats">
                                    <i class='bx bx-trending-up text-success'></i>
                                    54%
                                </div>
                            </div>

                            <div class="list">
                                <div class="icon youtube">
                                    <i class='bx bxl-youtube'></i>
                                </div>
                                <h4 class="mb-1"><a href="#" class="d-inline-block">Youtube Ads</a></h4>
                                <p class="mb-0">5.3k Sale - 4.9k Like</p>
                                <div class="stats">
                                    <i class='bx bx-trending-up text-success'></i>
                                    70%
                                </div>
                            </div>

                            <div class="list">
                                <div class="icon github">
                                    <i class='bx bxl-github'></i>
                                </div>
                                <h4 class="mb-1"><a href="#" class="d-inline-block">GitHub Ads</a></h4>
                                <p class="mb-0">5.1k Sale - 4.6k Like</p>
                                <div class="stats">
                                    <i class='bx bx-trending-down text-danger'></i>
                                    30%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="card mb-30 new-customer-box">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3>New Customers</h3>

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
                                            <th>Name</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td class="name"><img src="{{asset('backend/assets/img/user1.jpg')}}" alt="image"> Atony Rony</td>
                                            <td>
                                                <a href="#" class="d-inline-block text-warning mr-2" data-toggle="tooltip" data-placement="top" title="hello@tomhardy.com"><i class='bx bx-envelope'></i></a>
                                                <a href="#" class="d-inline-block text-success mr-2" data-toggle="tooltip" data-placement="top" title="Edit"><i class='bx bx-edit'></i></a>
                                                <a href="#" class="d-inline-block text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class='bx bx-trash'></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="name"><img src="{{asset('backend/assets/img/user2.jpg')}}" alt="image"> Tom Hardy</td>
                                            <td>
                                                <a href="#" class="d-inline-block text-warning mr-2" data-toggle="tooltip" data-placement="top" title="hello@tomhardy.com"><i class='bx bx-envelope'></i></a>
                                                <a href="#" class="d-inline-block text-success mr-2" data-toggle="tooltip" data-placement="top" title="Edit"><i class='bx bx-edit'></i></a>
                                                <a href="#" class="d-inline-block text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class='bx bx-trash'></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="name"><img src="{{asset('backend/assets/img/user3.jpg')}}" alt="image"> Colin Firth</td>
                                            <td>
                                                <a href="#" class="d-inline-block text-warning mr-2" data-toggle="tooltip" data-placement="top" title="hello@colinfirth.com"><i class='bx bx-envelope'></i></a>
                                                <a href="#" class="d-inline-block text-success mr-2" data-toggle="tooltip" data-placement="top" title="Edit"><i class='bx bx-edit'></i></a>
                                                <a href="#" class="d-inline-block text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class='bx bx-trash'></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="name"><img src="{{asset('backend/assets/img/user4.jpg')}}" alt="image"> Jude Law</td>
                                            <td>
                                                <a href="#" class="d-inline-block text-warning mr-2" data-toggle="tooltip" data-placement="top" title="hello@judelaw.com"><i class='bx bx-envelope'></i></a>
                                                <a href="#" class="d-inline-block text-success mr-2" data-toggle="tooltip" data-placement="top" title="Edit"><i class='bx bx-edit'></i></a>
                                                <a href="#" class="d-inline-block text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class='bx bx-trash'></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="name"><img src="{{asset('backend/assets/img/user5.jpg')}}" alt="image"> Idris Elba</td>
                                            <td>
                                                <a href="#" class="d-inline-block text-warning mr-2" data-toggle="tooltip" data-placement="top" title="hello@idriselba.com"><i class='bx bx-envelope'></i></a>
                                                <a href="#" class="d-inline-block text-success mr-2" data-toggle="tooltip" data-placement="top" title="Edit"><i class='bx bx-edit'></i></a>
                                                <a href="#" class="d-inline-block text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class='bx bx-trash'></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="name"><img src="{{asset('backend/assets/img/user1.jpg')}}" alt="image"> Atony Rony</td>
                                            <td>
                                                <a href="#" class="d-inline-block text-warning mr-2" data-toggle="tooltip" data-placement="top" title="hello@tomhardy.com"><i class='bx bx-envelope'></i></a>
                                                <a href="#" class="d-inline-block text-success mr-2" data-toggle="tooltip" data-placement="top" title="Edit"><i class='bx bx-edit'></i></a>
                                                <a href="#" class="d-inline-block text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class='bx bx-trash'></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="card top-rated-product-box mb-30">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3>Top Rated Products</h3>

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
                            <ul>
                                <li class="single-product">
                                    <a href="#" class="image d-inline-block">
                                        <img src="{{asset('backend/assets/img/product1.jpg')}}" alt="image">
                                    </a>
                                    <h4 class="mb-2"><a href="#" class="d-inline-block">Macbook Pro</a></h4>
                                    <p class="mb-2">There are many variations of...</p>
                                    <div class="price mr-2 d-inline-block">$1999</div>
                                    <div class="rating d-inline-block">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div>
                                    <a href="#" class="view-link d-inline-block" data-toggle="tooltip" data-placement="top" title="View Details"><i class='bx bxs-arrow-to-right'></i></a>
                                </li>

                                <li class="single-product">
                                    <a href="#" class="image d-inline-block">
                                        <img src="{{asset('backend/assets/img/product2.jpg')}}" alt="image">
                                    </a>
                                    <h4 class="mb-2"><a href="#" class="d-inline-block">iPhone 11 pro</a></h4>
                                    <p class="mb-2">There are many variations of...</p>
                                    <div class="price mr-2 d-inline-block">$999</div>
                                    <div class="rating d-inline-block">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div>
                                    <a href="#" class="view-link d-inline-block" data-toggle="tooltip" data-placement="top" title="View Details"><i class='bx bxs-arrow-to-right'></i></a>
                                </li>

                                <li class="single-product">
                                    <a href="#" class="image d-inline-block">
                                        <img src="{{asset('backend/assets/img/product3.jpg')}}" alt="image">
                                    </a>
                                    <h4 class="mb-2"><a href="#" class="d-inline-block">HeadPhone</a></h4>
                                    <p class="mb-2">There are many variations of...</p>
                                    <div class="price mr-2 d-inline-block">$499</div>
                                    <div class="rating d-inline-block">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div>
                                    <a href="#" class="view-link d-inline-block" data-toggle="tooltip" data-placement="top" title="View Details"><i class='bx bxs-arrow-to-right'></i></a>
                                </li>

                                <li class="single-product">
                                    <a href="#" class="image d-inline-block">
                                        <img src="{{asset('backend/assets/img/product4.jpg')}}" alt="image">
                                    </a>
                                    <h4 class="mb-2"><a href="#" class="d-inline-block">Superstar Shoes</a></h4>
                                    <p class="mb-2">There are many variations of...</p>
                                    <div class="price mr-2 d-inline-block">$80</div>
                                    <div class="rating d-inline-block">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div>
                                    <a href="#" class="view-link d-inline-block" data-toggle="tooltip" data-placement="top" title="View Details"><i class='bx bxs-arrow-to-right'></i></a>
                                </li>
                            </ul>
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