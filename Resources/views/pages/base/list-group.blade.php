@extends('admincp.admincp')
@section('content')
<!-- Breadcrumb-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item">
        <a href="#">Admin</a>
    </li>
    <li class="breadcrumb-item active">Dashboard</li>
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
        <div class="btn-group" role="group" aria-label="Button group">
            <a class="btn" href="#">
                <i class="icon-speech"></i>
            </a>
            <a class="btn" href="./">
                <i class="icon-graph"></i>  Dashboard</a>
            <a class="btn" href="#">
                <i class="icon-settings"></i>  Settings</a>
        </div>
    </li>
</ol>
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> List group
                        <div class="card-header-actions">
                            <a class="card-header-action" href="http://coreui.io/docs/components/bootstrap-list-group/"
                                target="_blank">
                                <small class="text-muted">docs</small>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> List group
                        <small>active items</small>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item active">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> List group
                        <small>links with disabled items</small>
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            <a class="list-group-item active" href="#">Cras justo odio</a>
                            <a class="list-group-item list-group-item-action" href="#">Dapibus ac facilisis in</a>
                            <a class="list-group-item list-group-item-action" href="#">Morbi leo risus</a>
                            <a class="list-group-item list-group-item-action" href="#">Porta ac consectetur ac</a>
                            <a class="list-group-item list-group-item-action disabled" href="#">Vestibulum at
                                eros</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> List group
                        <small>buttons with disabled items</small>
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            <button class="list-group-item list-group-item-action active" type="button">Cras
                                justo odio</button>
                            <button class="list-group-item list-group-item-action" type="button">Dapibus ac
                                facilisis in</button>
                            <button class="list-group-item list-group-item-action" type="button">Morbi leo
                                risus</button>
                            <button class="list-group-item list-group-item-action" type="button">Porta ac
                                consectetur ac</button>
                            <button class="list-group-item list-group-item-action" type="button" disabled="">Vestibulum
                                at eros</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> List group
                        <small>contextual classes</small>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item list-group-item-primary">This is a primary list group
                                item</li>
                            <li class="list-group-item list-group-item-secondary">This is a secondary list
                                group item</li>
                            <li class="list-group-item list-group-item-success">This is a success list group
                                item</li>
                            <li class="list-group-item list-group-item-danger">This is a danger list group item</li>
                            <li class="list-group-item list-group-item-warning">This is a warning list group
                                item</li>
                            <li class="list-group-item list-group-item-info">This is a info list group item</li>
                            <li class="list-group-item list-group-item-light">This is a light list group item</li>
                            <li class="list-group-item list-group-item-dark">This is a dark list group item</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> List group
                        <small>contextual with
                            <code>.action</code>
                        </small>
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            <a class="list-group-item list-group-item-action" href="#">Dapibus ac facilisis in</a>
                            <a class="list-group-item list-group-item-action list-group-item-primary" href="#">
                                This is a primary list group item</a>
                            <a class="list-group-item list-group-item-action list-group-item-secondary" href="#">
                                This is a secondary list group item</a>
                            <a class="list-group-item list-group-item-action list-group-item-success" href="#">
                                This is a success list group item</a>
                            <a class="list-group-item list-group-item-action list-group-item-danger" href="#">
                                This is a danger list group item</a>
                            <a class="list-group-item list-group-item-action list-group-item-warning" href="#">
                                This is a warning list group item</a>
                            <a class="list-group-item list-group-item-action list-group-item-info" href="#">
                                This is a info list group item
                            </a>
                            <a class="list-group-item list-group-item-action list-group-item-light" href="#">
                                This is a light list group item
                            </a>
                            <a class="list-group-item list-group-item-action list-group-item-dark" href="#">
                                This is a dark list group item
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> List group
                        <small>with badges</small>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item d-flex list-group-item-action justify-content-between align-items-center">Cras
                                justo odio
                                <span class="badge badge-primary badge-pill">14</span>
                            </li>
                            <li class="list-group-item d-flex list-group-item-action justify-content-between align-items-center">Dapibus
                                ac facilisis in
                                <span class="badge badge-primary badge-pill">2</span>
                            </li>
                            <li class="list-group-item d-flex list-group-item-action justify-content-between align-items-center">Morbi
                                leo risus
                                <span class="badge badge-primary badge-pill">1</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> List group
                        <small>custom content</small>
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            <a class="list-group-item list-group-item-action flex-column align-items-start active" href="#">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">List group item heading</h5>
                                    <small>3 days ago</small>
                                </div>
                                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed
                                    diam eget risus varius blandit.</p>
                                <small>Donec id elit non mi porta.</small>
                            </a>
                            <a class="list-group-item list-group-item-action flex-column align-items-start" href="#">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">List group item heading</h5>
                                    <small class="text-muted">3 days ago</small>
                                </div>
                                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed
                                    diam eget risus varius blandit.</p>
                                <small class="text-muted">Donec id elit non mi porta.</small>
                            </a>
                            <a class="list-group-item list-group-item-action flex-column align-items-start" href="#">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">List group item heading</h5>
                                    <small class="text-muted">3 days ago</small>
                                </div>
                                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed
                                    diam eget risus varius blandit.</p>
                                <small class="text-muted">Donec id elit non mi porta.</small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> List group
                        <small>tab Javascript plugin</small>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="list-group" id="list-tab" role="tablist">
                                    <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="tab"
                                        href="#list-home" role="tab" aria-controls="list-home" aria-selected="false">Home</a>
                                    <a class="list-group-item list-group-item-action active" id="list-profile-list"
                                        data-toggle="tab" href="#list-profile" role="tab" aria-controls="list-profile"
                                        aria-selected="true">Profile</a>
                                    <a class="list-group-item list-group-item-action" id="list-messages-list"
                                        data-toggle="tab" href="#list-messages" role="tab" aria-controls="list-messages">Messages</a>
                                    <a class="list-group-item list-group-item-action" id="list-settings-list"
                                        data-toggle="tab" href="#list-settings" role="tab" aria-controls="list-settings">Settings</a>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                        <p>Velit aute mollit ipsum ad dolor consectetur nulla officia culpa
                                            adipisicing exercitation fugiat tempor. Voluptate deserunt sit sunt
                                            nisi aliqua fugiat proident ea ut. Mollit voluptate reprehenderit
                                            occaecat nisi ad non minim
                                            tempor sunt voluptate consectetur exercitation id ut nulla. Ea et
                                            fugiat aliquip nostrud sunt incididunt consectetur culpa aliquip
                                            eiusmod dolor. Anim ad Lorem aliqua in cupidatat nisi enim eu
                                            nostrud do aliquip veniam minim.</p>
                                    </div>
                                    <div class="tab-pane fade active show" id="list-profile" role="tabpanel"
                                        aria-labelledby="list-profile-list">
                                        <p>Cupidatat quis ad sint excepteur laborum in esse qui. Et excepteur
                                            consectetur ex nisi eu do cillum ad laborum. Mollit et eu officia
                                            dolore sunt Lorem culpa qui commodo velit ex amet id ex. Officia
                                            anim incididunt laboris deserunt
                                            anim aute dolor incididunt veniam aute dolore do exercitation.
                                            Dolor nisi culpa ex ad irure in elit eu dolore. Ad laboris ipsum
                                            reprehenderit irure non commodo enim culpa commodo veniam
                                            incididunt veniam ad.</p>
                                    </div>
                                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                                        <p>Ut ut do pariatur aliquip aliqua aliquip exercitation do nostrud
                                            commodo reprehenderit aute ipsum voluptate. Irure Lorem et laboris
                                            nostrud amet cupidatat cupidatat anim do ut velit mollit consequat
                                            enim tempor. Consectetur
                                            est minim nostrud nostrud consectetur irure labore voluptate irure.
                                            Ipsum id Lorem sit sint voluptate est pariatur eu ad cupidatat et
                                            deserunt culpa sit eiusmod deserunt. Consectetur et fugiat anim do
                                            eiusmod aliquip nulla
                                            laborum elit adipisicing pariatur cillum.</p>
                                    </div>
                                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                                        <p>Irure enim occaecat labore sit qui aliquip reprehenderit amet velit.
                                            Deserunt ullamco ex elit nostrud ut dolore nisi officia magna sit
                                            occaecat laboris sunt dolor. Nisi eu minim cillum occaecat aute est
                                            cupidatat aliqua labore
                                            aute occaecat ea aliquip sunt amet. Aute mollit dolor ut
                                            exercitation irure commodo non amet consectetur quis amet culpa.
                                            Quis ullamco nisi amet qui aute irure eu. Magna labore dolor quis
                                            ex labore id nostrud deserunt dolor
                                            eiusmod eu pariatur culpa mollit in irure.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
