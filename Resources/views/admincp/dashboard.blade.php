@extends('core::admincp.admincp')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item">
        <a href="https://coreui.io/demo/#">Admin</a>
    </li>
    <li class="breadcrumb-item active">Dashboard</li>

    <li class="breadcrumb-menu d-md-down-none">
        <div class="btn-group" role="group" aria-label="Button group">
            <a class="btn" href="https://coreui.io/demo/#">
                <i class="icon-speech"></i>
            </a>
            <a class="btn" href="https://coreui.io/demo/">
                <i class="icon-graph"></i> &nbsp;Dashboard</a>
            <a class="btn" href="https://coreui.io/demo/#">
                <i class="icon-settings"></i> &nbsp;Settings</a>
        </div>
    </li>
</ol>
<div class="container-fluid">
    <div id="ui-view">

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">Traffic</h4>
                        <div class="small text-muted">November 2017</div>
                    </div>

                    <div class="col-sm-7 d-none d-md-block">
                        <button class="btn btn-primary float-right" type="button">
                            <i class="icon-cloud-download"></i>
                        </button>
                        <div class="btn-group btn-group-toggle float-right mr-3" data-toggle="buttons">
                            <label class="btn btn-outline-secondary">
                                <input id="option1" type="radio" name="options" autocomplete="off"> Day
                            </label>
                            <label class="btn btn-outline-secondary active">
                                <input id="option2" type="radio" name="options" autocomplete="off" checked="">
                                Month
                            </label>
                            <label class="btn btn-outline-secondary">
                                <input id="option3" type="radio" name="options" autocomplete="off"> Year
                            </label>
                        </div>
                    </div>

                </div>

                <div class="chart-wrapper" style="height:300px;margin-top:40px;">
                    <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                        <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                            <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                            <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                        </div>
                    </div>
                    <canvas class="chart chartjs-render-monitor" id="main-chart" height="300" width="1351" style="display: block; width: 1351px; height: 300px;"></canvas>
                    <div id="main-chart-tooltip" class="chartjs-tooltip center" style="opacity: 0; left: 540.021px; top: 188.928px;">
                        <div class="tooltip-header">
                            <div class="tooltip-header-item">T</div>
                        </div>
                        <div class="tooltip-body">
                            <div class="tooltip-body-item"><span class="tooltip-body-item-color" style="background-color: rgb(255, 255, 255);"></span><span
                                    class="tooltip-body-item-label">My First dataset</span><span class="tooltip-body-item-value">173</span></div>
                            <div class="tooltip-body-item"><span class="tooltip-body-item-color" style="background-color: rgb(255, 255, 255);"></span><span
                                    class="tooltip-body-item-label">My Second dataset</span><span class="tooltip-body-item-value">93</span></div>
                            <div class="tooltip-body-item"><span class="tooltip-body-item-color" style="background-color: rgb(255, 255, 255);"></span><span
                                    class="tooltip-body-item-label">My Third dataset</span><span class="tooltip-body-item-value">65</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row text-center">
                    <div class="col-sm-12 col-md mb-sm-2 mb-0">
                        <div class="text-muted">Visits</div>
                        <strong>29.703 Users (40%)</strong>
                        <div class="progress progress-xs mt-2">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md mb-sm-2 mb-0">
                        <div class="text-muted">Unique</div>
                        <strong>24.093 Users (20%)</strong>
                        <div class="progress progress-xs mt-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md mb-sm-2 mb-0">
                        <div class="text-muted">Pageviews</div>
                        <strong>78.706 Views (60%)</strong>
                        <div class="progress progress-xs mt-2">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md mb-sm-2 mb-0">
                        <div class="text-muted">New Users</div>
                        <strong>22.123 Users (80%)</strong>
                        <div class="progress progress-xs mt-2">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md mb-sm-2 mb-0">
                        <div class="text-muted">Bounce Rate</div>
                        <strong>40.15%</strong>
                        <div class="progress progress-xs mt-2">
                            <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item">
        <a href="https://coreui.io/demo/#">Admin</a>
    </li>
    <li class="breadcrumb-item active">Dashboard</li>

    <li class="breadcrumb-menu d-md-down-none">
        <div class="btn-group" role="group" aria-label="Button group">
            <a class="btn" href="https://coreui.io/demo/#">
                <i class="icon-speech"></i>
            </a>
            <a class="btn" href="https://coreui.io/demo/">
                <i class="icon-graph"></i> &nbsp;Dashboard</a>
            <a class="btn" href="https://coreui.io/demo/#">
                <i class="icon-settings"></i> &nbsp;Settings</a>
        </div>
    </li>
</ol>

@endsection