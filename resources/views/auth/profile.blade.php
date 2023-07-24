@section('title', 'Dashboard Page')
@extends('templates.head')
@section('content')
<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-5">
            <h4 class="page-title">Profile Page</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-7">
            <div class="text-end upgrade-btn">
                <a href="https://www.wrappixel.com/templates/xtremeadmin/" class="btn btn-danger text-white" target="_blank">Upgrade to Pro</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-body">
                    <center class="m-t-30"> <img src="../../assets/images/users/5.jpg" class="rounded-circle" width="150" />
                        @if(!empty($user->Name))
                        <h4 class="card-title m-t-10">{{ $user->Name }}</h4>
                        @else
                        <h4 class="card-title m-t-10">John Doe</h4>
                        @endif
                        <h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
                        <div class="row text-center justify-content-md-center">
                            <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i>
                                    <font class="font-medium">254</font>
                                </a></div>
                            <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i>
                                    <font class="font-medium">54</font>
                                </a></div>
                        </div>
                    </center>
                </div>
                <div>
                    <hr>
                </div>
                <div class="card-body"> <small class="text-muted">Email address </small>
                    <h6>hannagover@gmail.com</h6> <small class="text-muted p-t-30 db">Phone</small>
                    <h6>+91 654 784 547</h6> <small class="text-muted p-t-30 db">Address</small>
                    <h6>71 Pilgrim Avenue Chevy Chase, MD 20815</h6>
                    <div class="map-box">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div> <small class="text-muted p-t-30 db">Social Profile</small>
                    <br />
                    <button class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i></button>
                    <button class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></button>
                    <button class="btn btn-circle btn-secondary"><i class="fab fa-youtube"></i></button>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-material mx-2">
                        <div class="form-group">
                            <label class="col-md-12">Full Name</label>
                            <div class="col-md-12">
                                @if(!empty($user->Name))
                                <input type="text" name='Name' value="{{ $user->Name }}" class="form-control form-control-line">
                                @else
                                <input type="text" name='Name' placeholder="Johnathan Doe" class="form-control form-control-line">
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">Email</label>
                            <div class="col-md-12">
                                @if(!empty($user->UserEmail))
                                <input type="email" name="UserEmail" value="{{ $user->UserEmail }}" class="form-control form-control-line">
                                @else
                                <input type="email" name="UserEmail" placeholder="johnathan@admin.com" class="form-control form-control-line">
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Password</label>
                            <div class="col-md-12">
                                <input type="password" name="Password" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Address</label>
                            <div class="col-md-12">
                                @if(!empty($user->Address))
                                <input type="text" name="Address" value="{{ $user->Address }}" class="form-control form-control-line">
                                @else
                                <input type="text" name="Address" placeholder="Jl. Gagak Bunga" class="form-control form-control-line">
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">DOB</label>
                            <div class="col-md-12">
                                @if(!empty($user->DOB))
                                <input type="date" name="DOB" value="{{ $user->DOB }}" class="form-control form-control-line">
                                @else
                                <input type="date" name="DOB" class="form-control form-control-line">
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Gender</label>
                            <div class="col-md-12">
                                <select name="Gender" id="Gender" class="form-control form-control-line">
                                    <option value="Female" {{ $user->Gender == "Female" ? 'selected' : '' }}>Female</option>
                                    <option value="Male" {{ $user->Gender == "Male" ? 'selected' : '' }}>Male</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">DivisionID</label>
                            <div class="col-md-12">
                                <select name="DivisionID" id="DivisionID" class="form-control form-control-line">
                                    @foreach ($division as $division)
                                    <option value="{{$division->DivisionID}}" {{ $division->DivisionID == $user->DivisionID ? 'selected' : '' }}>{{$division->DivisionName}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">EmployeeLevel</label>
                            <div class="col-md-12">
                                <select name="EmployeeLevel" id="EmployeeLevel" class="form-control form-control-line">
                                    <option value="">Select Level</option>
                                    <option value="1" {{ $user->EmployeeLevel == "1" ? 'selected' : '' }}>Staff Junior</option>
                                    <option value="2" {{ $user->EmployeeLevel == "2" ? 'selected' : '' }}>Staff Senior</option>
                                    <option value="3" {{ $user->EmployeeLevel == "3" ? 'selected' : '' }}>Division Lead</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Employee Basic Salary</label>
                            <div class="col-md-12">
                                <input type="number" name="BasicSalary" id="BasicSalary" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-success text-white">Update Profile</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop