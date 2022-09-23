@extends('layout.studentMainTemplate')

@section('body')

<<style>
    .btn.btn-lg{
    font-size: 17px;
    }
    h3 {
    padding: 1em;
    }
    </style>
    <div class=" col-md-1">


    </div>

    <div class="container-fluid py-5 col-md-8" style="text-align:center; line-height:1.4em; ">
        <h2> Post a task here </h2>

        <h3> Dont be stressed with balancing school and work life, have a life at the same time achieve your dreams! Let
            an
            expert handle your task</h3>
        <button class="btn btn-success btn-lg .btn-rounded centered" data-bs-toggle="modal" data-bs-target="#postQModal"
            type="button">
            <h1>Post a new task</h1>
        </button>
    </div>



    <div class=" col-md-2">


    </div>

    <div class="container=-fluid py-5 row">

        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">New Tasks</h4>
                    <p class="card-description">
                        Add class <code>.table</code>
                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Profile</th>
                                    <th>VatNo.</th>
                                    <th>Created</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Jacob</td>
                                    <td>53275531</td>
                                    <td>12 May 2017</td>
                                    <td><label class="badge badge-danger">Pending</label></td>
                                </tr>
                                <tr>
                                    <td>Messsy</td>
                                    <td>53275532</td>
                                    <td>15 May 2017</td>
                                    <td><label class="badge badge-warning">In progress</label></td>
                                </tr>
                                <tr>
                                    <td>John</td>
                                    <td>53275533</td>
                                    <td>14 May 2017</td>
                                    <td><label class="badge badge-info">Fixed</label></td>
                                </tr>
                                <tr>
                                    <td>Peter</td>
                                    <td>53275534</td>
                                    <td>16 May 2017</td>
                                    <td><label class="badge badge-success">Completed</label></td>
                                </tr>
                                <tr>
                                    <td>Dave</td>
                                    <td>53275535</td>
                                    <td>20 May 2017</td>
                                    <td><label class="badge badge-warning">In progress</label></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Answered Tasks</h4>
                    <p class="card-description">
                        Add class <code>.table-hover</code>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Product</th>
                                    <th>Sale</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Jacob</td>
                                    <td>Photoshop</td>
                                    <td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
                                    <td><label class="badge badge-danger">Pending</label></td>
                                </tr>
                                <tr>
                                    <td>Messsy</td>
                                    <td>Flash</td>
                                    <td class="text-danger"> 21.06% <i class="ti-arrow-down"></i></td>
                                    <td><label class="badge badge-warning">In progress</label></td>
                                </tr>
                                <tr>
                                    <td>John</td>
                                    <td>Premier</td>
                                    <td class="text-danger"> 35.00% <i class="ti-arrow-down"></i></td>
                                    <td><label class="badge badge-info">Fixed</label></td>
                                </tr>
                                <tr>
                                    <td>Peter</td>
                                    <td>After effects</td>
                                    <td class="text-success"> 82.00% <i class="ti-arrow-up"></i></td>
                                    <td><label class="badge badge-success">Completed</label></td>
                                </tr>
                                <tr>
                                    <td>Dave</td>
                                    <td>53275535</td>
                                    <td class="text-success"> 98.05% <i class="ti-arrow-up"></i></td>
                                    <td><label class="badge badge-warning">In progress</label></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <<style>
        .modal-dialog{
        max-width:78%;
        font-size:1.5em;
        }
        </style>


        <div class="modal modal-lg fade" id="postQModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Submit Task</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body col-md-12">
                        <div class="grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Enter Task Details</h4>

                                    <form class="forms-sample">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Task Type</label>
                                            <input type="text" class="form-control" id="exampleInputUsername1"
                                                placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1"
                                                placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputConfirmPassword1">Confirm Password</label>
                                            <input type="password" class="form-control"
                                                id="exampleInputConfirmPassword1" placeholder="Password">
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                                Remember me
                                                <i class="input-helper"></i></label>
                                        </div>
                                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                                        <button class="btn btn-light">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            @endsection