@extends('layouts.master')
@section('title', 'Home')
@section('main-content')
<main>
    <div class="container-fluid">
        <div class="heading-title p-2 my-2">
            <span class="my-3 heading "><i class="fas fa-home"></i> <a class="" href="">Home</a> > Dashboard</span>
        </div>
        <div class="row mt-3">
            <div class="col-xl-6">
                <div class="card mb-4 border">
                    <div class="card-header">
                        <i class="fas fa-chart-area me-1"></i>
                        Area Chart Example
                    </div>
                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4 border">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-1"></i>
                        Bar Chart Example
                    </div>
                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
            {{-- <div class="col-xl-3 col-md-6">
                <div class="card mb-3 dashboard-card">
                    <div class="card-body mx-auto">
                        <div class=" d-flex justify-content-center align-items-center">
                            <i class="fas fa-users fa-2x"></i>
                        </div>
                        <p class="dashboard-card-text">Primary Card</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mb-3 dashboard-card">
                    <div class="card-body mx-auto">
                        <div class=" d-flex justify-content-center align-items-center">
                            <i class="far fa-money-bill-alt fa-2x"></i>
                        </div>
                        <p class="dashboard-card-text">Primary Card</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mb-3 dashboard-card">
                    <div class="card-body mx-auto">
                        <div class=" d-flex justify-content-center align-items-center">
                            <i class="far fa-file-alt fa-2x"></i>
                        </div>
                        <p class="dashboard-card-text">Primary Card</p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</main>
@endsection