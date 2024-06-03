@extends('layout.layout')

@push('page-title')
    Class
@endpush

@section('add-btn')
    <!-- Button to trigger the modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add Class
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Class Management</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- =====modal body  starts here===== -->
                <div class="modal-body">
                    <div class="class-container">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 form-container">
                                    <form class="">
                                        <div class="mb-3 ">
                                            <label for="class" class="form-label float-start">Class</label>
                                            <input type="text" class="form-control" id="class" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="class" class="form-label  float-start">Room Number</label>
                                            <input type="number" class="form-control" id="romm-number" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="dropdown" class="form-label  float-start">Select Class
                                                Teacher:</label>
                                            <select class="form-control" id="dropdown">
                                                <option value="" selected disabled>
                                                    Select a teacher
                                                </option>
                                                <option value="Ram" data-phone="123-456-7890">
                                                    Ram (123-456-7890)
                                                </option>
                                                <option value="Shyam" data-phone="234-567-8901">
                                                    Shyam (234-567-8901)
                                                </option>
                                                <option value="Gopal" data-phone="345-678-9012">
                                                    Gopal (345-678-9012)
                                                </option>
                                                <option value="Muna" data-phone="456-789-0123">
                                                    Muna (456-789-0123)
                                                </option>
                                                <option value="Madan" data-phone="567-890-1234">
                                                    Madan (567-890-1234)
                                                </option>
                                                <option value="Hari" data-phone="678-901-2345">
                                                    Hari (678-901-2345)
                                                </option>
                                                <option value="Radha" data-phone="789-012-3456">
                                                    Radha (789-012-3456)
                                                </option>
                                                <option value="Sumitra" data-phone="890-123-4567">
                                                    Sumitra (890-123-4567)
                                                </option>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-primary  float-start">Add</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Class List</h5>
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Class Name</th>
                            <th>Class Teacher</th>
                            <th>Room No.</th>

                            <th>Actions </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Class 1</td>
                            <td>Ram Thapa</td>
                            <td>101</td>

                            <td>
                                <div class="btn btn-sm btn-primary">Update</div>
                                <div class="btn btn-sm btn-danger">Delete</div>

                            </td>

                        </tr>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Class Name</th>
                            <th>Class Teacher</th>
                            <th>Room No.</th>

                            <th>Actions </th>

                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
