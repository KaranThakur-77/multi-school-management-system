@extends('layout.layout')

@push('page-title')
    Ram Thapa
@endpush


@section('add-btn')
    <a href="{{ route('staffs.index') }}" class="btn btn-primary">Back</a>
@endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 align-items-center">
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="row gutters-sm">
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-column align-items-center text-center">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                                class="rounded-circle" width="150" />
                                            <div class="mt-3">
                                                <h4>Ram Thapa</h4>
                                                <p class="text-secondary mb-1">
                                                    class 5
                                                </p>
                                                <p class="text-muted font-size-sm">
                                                    Biratnagar - 08
                                                </p>
                                                <a href="" class="btn btn-success" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">Edit</a>
                                                <a href="" class="btn btn-danger">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="card-heading text-center mb-4">
                                            <h3 class="">Staff's Information:</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Full Name</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                Ram Thapa
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Email</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">ram@jukmuh.al</div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Phone</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                (239) 816-9029
                                            </div>
                                        </div>

                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Address</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                Biratnagar-08
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="d-flex justify-content-between flex-wrap gap-2">

                                            <a href="" class="btn btn-primary flex-grow-1">Salary History</a>
                                            <a href="" class="btn btn-primary flex-grow-1">View Complaints</a>
                                            <a href="" class="btn btn-primary flex-grow-1">Remaining Payments</a>
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

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Fullname" />
                            <label for="floatingInput">Fullname</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Address" />
                            <label for="floatingInput">Address</label>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="E-Mail" />
                                    <label for="floatingInput">E-Mail</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="Contact Number" />
                                    <label for="floatingInput">Contact Number</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option selected>Choose your gender...</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                                <option value="3">Others</option>
                            </select>
                            <label for="floatingSelect">Gender</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option selected>Select your role...</option>
                                <option value="1">Stduent</option>
                                <option value="2">Staff</option>
                                <option value="3">Guardians</option>
                            </select>
                            <label for="floatingSelect">User Type</label>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">Upload</label>
                            <input type="file" class="form-control" id="inputGroupFile01" />
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
