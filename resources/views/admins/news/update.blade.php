@extends('admins.layouts.master')

@section('title')
    Update
@endsection

@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Create New</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">News</li>
                            <li class="breadcrumb-item active">Create New</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Examples</h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <form action="#">
                            <div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="mb-3">
                                            <label for="cleave-date" class="form-label">Title</label>
                                            <input type="text" class="form-control" id="cleave-date">
                                        </div>

                                    </div><!-- end col -->

                                    <div class="col-xl-6">
                                        <div class="mb-3">
                                            <label for="cleave-date-format" class="form-label">Category</label>
                                            <input type="text" class="form-control" id="cleave-date-format">
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="mb-3">
                                            <label for="cleave-date" class="form-label">Date</label>
                                            <input type="date" class="form-control" id="cleave-date">
                                        </div>

                                    </div><!-- end col -->

                                    <div class="col-xl-6">
                                        <div class="mb-3">
                                            <label for="cleave-date-format" class="form-label">Views</label>
                                            <input type="number" class="form-control" id="cleave-date-format">
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div>
                            <div>
                                <label for="cleave-date" class="form-label">Description</label>
                                <div class="ckeditor-classic"></div>

                            </div>

                            <button type="button" class="btn btn-primary mt-3">Primary</button>

                        </form><!-- end form -->
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div> <!-- container-fluid -->
@endsection
