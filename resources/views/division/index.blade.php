@section('title', 'Division Page')
@extends('templates.head')
@section('content')
<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-5">
            <h4 class="page-title">Division Page</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Division</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-7">
            <!-- <div class="text-end upgrade-btn">
                <a href="https://www.wrappixel.com/templates/xtremeadmin/" class="btn btn-danger text-white" target="_blank">Upgrade to Pro</a>
            </div> -->
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- title -->
                    <div class="d-md-flex">
                        <div>
                            <h4 class="card-title">Company Divisions</h4>
                            <h5 class="card-subtitle">Lists of company divisions</h5>
                        </div>
                        <!-- <div class="ms-auto">
                            <div class="dl">
                                <select class="form-select shadow-none">
                                    <option value="0" selected>Monthly</option>
                                    <option value="1">Daily</option>
                                    <option value="2">Weekly</option>
                                    <option value="3">Yearly</option>
                                </select>
                            </div>
                        </div> -->
                    </div>
                    <!-- title -->
                </div>
                <div class="table-responsive">
                    <table class="table v-middle">
                        <thead>
                            <tr class="bg-light">
                                <th class="border-top-0">Division Name</th>
                                <th class="border-top-0">Division Lead</th>
                                <th class="border-top-0">Employees Number</th>
                                <th class="border-top-0">Overview</th>
                                <th class="border-top-0">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="m-r-10"><a class="btn btn-circle d-flex btn-info text-white">EA</a>
                                        </div>
                                        <div class="">
                                            <h4 class="m-b-0 font-16">Elite Admin</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <label class="label label-danger">Angular</label>
                                </td>
                                <td>
                                    <h5 class="m-b-0">$2850.06</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="m-r-10"><a class="btn btn-circle d-flex btn-orange text-white">MA</a>
                                        </div>
                                        <div class="">
                                            <h4 class="m-b-0 font-16">Monster Admin</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <label class="label label-info">Vue Js</label>
                                </td>
                                <td>
                                    <h5 class="m-b-0">$2850.06</h5>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop