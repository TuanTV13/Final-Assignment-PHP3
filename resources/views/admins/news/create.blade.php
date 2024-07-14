@extends('admins.layouts.master')

@section('title')
    Create
@endsection

@section('content')
    @include('admins.components.breadcump', ['name' => 'Table'])

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
@endsection
