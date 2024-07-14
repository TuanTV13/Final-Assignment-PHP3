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
                    <p class="text-muted">Here are the various types of beautiful, responsive, customizable, and accessible
                        sweet alerts.</p>

                    <div class="table-responsive">
                        <table class="table table-nowrap align-middle justify-content-center mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 50%;">
                                        Trường dữ liệu
                                    </th>
                                    <th scope="col" class="text-center">
                                        Giá trị
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>
                                        A Basic Message
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-primary btn-sm" id="sa-basic">Click
                                            me</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        A Title with a Text Under
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-primary btn-sm" id="sa-title">Click
                                            me</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        A success message!
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-primary btn-sm" id="sa-success">Click
                                            me</button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <!-- end table -->
                    </div>
                    <!-- end table responsive -->
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
@endsection
