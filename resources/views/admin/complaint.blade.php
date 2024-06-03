@extends('layout.layout')

@push('page-title')
    Complaints
@endpush

@section('head-links')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>



    <style>
        .note-editor .note-editing-area {
            direction: ltr !important;
        }
    </style>
@endsection


@section('add-btn')
    <div class="container complain-form mt-3">

        @if (Auth::guard('admin')->user()->role != 'admin')
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Add Complaint
            </button>
        @endif

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">
                            Complain Form
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body ">
                        <form>
                            <div class="mb-3 mt-3">
                                <label for="title" class="form-label float-start">Complain Title</label>
                                <input type="text" class="form-control" id="title" aria-describedby="emailHelp" />
                                <div id="titleHelp" class="form-text">
                                    Your complain will be treated with utmost care.
                                </div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="complaint" class="form-label float-start">Complaint Description</label>
                                <input type="textarea" class="form-control" id="complaint"
                                    aria-describedby="complaint Help" />

                            </div>

                            <button type="submit" class="btn btn-primary float-start">
                                Submit Complain
                            </button>
                        </form>



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
                            <th>Title</th>
                            <th>Complaint Letter</th>
                            <th>Complaint from</th>
                            <th>Complaint Status</th>



                            <th>Actions </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> Improper Guidance</td>
                            <td> Lorem ipsum dolor sit amet </td>
                            <td> Sita Kumari </td>
                            <td>

                                Unsolved

                            </td>



                            <td>
                                <div class="btn btn-sm btn-primary">View</div>
                                <div class="btn btn-sm btn-success">Resolved</div>

                            </td>

                        </tr>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>Complaint Letter</th>
                            <th>Complaint from</th>




                            <th>Actions </th>

                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
