@extends('admin.layouts.layout-basic')

@section('content')
    <div class="main-content" id="dashboardPage">
        <div class="row">
            <div class="col-md-12 col-lg-6 col-xl-3">
                <a class="dashbox" href="#">
                    <i class="icon-fa icon-fa-book text-primary"></i>
                    <span class="title">
                      30
                    </span>
                    <span class="desc">
                      Projets
                    </span>
                </a>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-3">
                <a class="dashbox" href="#">
                    <i class="icon-fa icon-fa-calendar-minus-o text-success"></i>
                    <span class="title">
                      200
                    </span>
                    <span class="desc">
                      Tâches
                    </span>
                </a>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-3">
                <a class="dashbox" href="#">
                    <i class="icon-fa icon-fa-group text-warning"></i>
                    <span class="title">
                      100
                    </span>
                    <span class="desc">
                      Utilisateurs
                    </span>
                </a>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-3">
                <a class="dashbox" href="#">
                    <i class="icon-fa icon-fa-comments text-info"></i>
                    <span class="title">
                      59
                    </span>
                    <span class="desc">
                      Discussions
                    </span>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xl-6 mt-2">
                <div class="card">
                    <div class="card-header">
                        <h6><i class="icon-fa icon-fa-line-chart text-warning"></i> Courbe évolutive</h6>
                    </div>
                    <div class="card-body">
                        <line-chart :labels="['Janvier','Fevrier','Mars','Juin','Juillet']" :values="[20,30,40,60,70]"></line-chart>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6 mt-2">
                <div class="card">
                    <div class="card-header">
                        <h6><i class="icon-fa icon-fa-bar-chart text-success"></i> Répresentation en bâtons</h6>
                    </div>
                    <div class="card-body">
                        <bar-chart :labels="['Janvier','Fevrier','Mars','Juin','Juillet']" :values="[20,30,40,60,80]"></bar-chart>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
