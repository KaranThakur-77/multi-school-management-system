@extends('layout.layout')

@push('page-title')
    {{ $page_name }}
@endpush


@section('add-btn')
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Add {{ $page_name }}
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">
                        Registration Form
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="" class="">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Fullname" />
                            <label for="floatingInput">Fullname</label>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Address" />
                                    <label for="floatingInput">Address</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control  nepali-datepicker" id="floatingInput"
                                        placeholder="Date of Birth" />
                                    <label for="floatingInput">Date of Birth</label>
                                </div>
                            </div>
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
                                <option selected>Select user's role...</option>
                                <option value="1">Stduent</option>
                                <option value="2">Staff</option>
                                <option value="3">Guardians</option>
                            </select>
                            <label for="floatingSelect">User Type</label>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">Profile Picture</label>
                            <input type="file" class="form-control" id="inputGroupFile01">
                        </div>


                        <button type="submit" class="btn btn-primary float-start">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                        <tr>

                            <th>SN</th>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Email</th>

                            <th>Actions </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <div class="user-avatar">
                                    <a href="https://twitter.com/twcloudchen" class="circle">
                                        <img height="40" width="40"
                                            src="http://www.gravatar.com/avatar/9017a5f22556ae0eb7fb0710711ec125?s=128"
                                            alt="Cloud Chen">
                                    </a>
                                </div>
                            </td>
                            <td>Shyam Kumar Mandal</td>
                            <td>Biratnagar</td>
                            <td>9800000000</td>
                            <td>shaym@hotmail.com</td>


                            <td>
                                @if ($page_name != 'Parents')
                                    @if ($page_name == 'Staffs')
                                        <a class="btn btn-sm btn-primary" href="{{ route('staffs.show', 1) }}">Details</a>
                                    @else
                                        <a class="btn btn-sm btn-primary" href="{{ route('students.show', 1) }}">Details</a>
                                    @endif
                                @else
                                    <a href="" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#editModal">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>

                                    <div class="modal fade" id="editModal" tabindex="-1"
                                        aria-labelledby="editModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editModalLabel">Edit Information</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="" method="">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" id="floatingInput"
                                                                placeholder="Fullname" />
                                                            <label for="floatingInput">Fullname</label>
                                                        </div>
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" id="floatingInput"
                                                                placeholder="Address" />
                                                            <label for="floatingInput">Address</label>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-floating mb-3">
                                                                    <input type="email" class="form-control"
                                                                        id="floatingInput" placeholder="E-Mail" />
                                                                    <label for="floatingInput">E-Mail</label>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-floating mb-3">
                                                                    <input type="text" class="form-control"
                                                                        id="floatingInput" placeholder="Contact Number" />
                                                                    <label for="floatingInput">Contact Number</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-floating mb-3">
                                                            <select class="form-select" id="floatingSelect"
                                                                aria-label="Floating label select example">
                                                                <option selected>Choose your gender...</option>
                                                                <option value="1">Male</option>
                                                                <option value="2">Female</option>
                                                                <option value="3">Others</option>
                                                            </select>
                                                            <label for="floatingSelect">Gender</label>
                                                        </div>
                                                        <div class="form-floating mb-3">
                                                            <select class="form-select" id="floatingSelect"
                                                                aria-label="Floating label select example">
                                                                <option selected>Select your role...</option>
                                                                <option value="1">Stduent</option>
                                                                <option value="2">Staff</option>
                                                                <option value="3">Guardians</option>
                                                            </select>
                                                            <label for="floatingSelect">User Type</label>
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <label class="input-group-text"
                                                                for="inputGroupFile01">Upload</label>
                                                            <input type="file" class="form-control"
                                                                id="inputGroupFile01" />
                                                        </div>

                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </td>


                        </tr>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>SN</th>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Email</th>

                            <th>Actions </th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection


@section('add-scripts')
    <script src="{{ url('nepaliDatePicker/script.js') }}"></script>

    {{-- <script>
        $('.nepali-datepicker').nepaliDatePicker();
    </script> --}}

    {{-- jquery cdn  --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    {{-- jquery cdn  --}}
@endsection
