@extends('layout.layout')

@push('page-title')
    Subjects
@endpush

@section('add-btn')
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add Subject
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Subject</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- =====modal body  starts here===== -->
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="">
                                <form>
                                    <div class="mb-3">
                                        <label for="name" class="form-label float-start">Subject Name</label>
                                        <input type="text" class="form-control" id="name" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label float-start">Description</label>
                                        <textarea class="form-control" id="description" rows="4"></textarea>

                                    </div>
                                    <div class="mb-3">
                                        <label for="syllabus" class="form-label float-start">Syllabus</label>
                                        <textarea class="form-control" id="syllabus" rows="4"></textarea>
                                    </div>

                                    <div class=" d-lg-flex justify-content-start gap-5">
                                        <div class="mb-3">
                                            <label for="class-id" class="form-label float-start">Class</label>
                                            <select class="form-select" id="class-id" style="width: 200px;">
                                                <option value="1">Class 1</option>
                                                <option value="2">Class 2</option>
                                                <option value="3">Class 3</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="teacher-id" class="form-label float-start">Teacher</label>
                                            <select class="form-select" id="teacher-id" style="width: 200px;">
                                                <option value="1">Teacher 1</option>
                                                <option value="2">Teacher 2</option>
                                                <option value="3">Teacher 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary float-start">Add</button>
                                </form>
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
                            <th>Name</th>
                            <th>Description</th>
                            <th>Syllabus</th>
                            <th>Class</th>
                            <th>Teacher</th>
                            <th>Full Marks</th>
                            <th>Pass Marks</th>


                            <th>Actions </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Computer Science</td>
                            <td>Latest about technologies</td>
                            <td>this is syllabus</td>
                            <td>Class 5</td>
                            <td>Ram Thapa</td>
                            <td>100</td>
                            <td>30</td>

                            <td>
                                <div class="btn btn-sm btn-primary">Update</div>
                                <div class="btn btn-sm btn-danger">Delete</div>

                            </td>

                        </tr>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Syllabus</th>
                            <th>Class</th>
                            <th>Teacher</th>
                            <th>Full Marks</th>
                            <th>Pass Marks</th>


                            <th>Actions </th>

                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
