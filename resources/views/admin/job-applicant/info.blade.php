@extends('admin.layouts.master')
@section('title', 'Job Circular')
@section('jobApplicants')
active show-sub
@endsection
@section('Applicant-list')
    active
@endsection
@section('content')

<nav class="breadcrumb sl-breadcrumb">
    <span class="breadcrumb-item active">Dashboard</span>
    <a class="breadcrumb-item" href="">Company Job Applicants Information</a>
</nav>


{{-- Page Content Start --}}
<div class="sl-pagebody">
    <div class="row row-sm">
        <div class="col-md-12">
            <div class="card pd-20 pd-sm-40">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        @if(Session::has('success'))
                        <div class="alert alert-success alertsuccess" role="alert">
                            <strong> {{ Session::get('success')}} </strong>
                        </div>
                        @endif
                        @if(Session::has('error'))
                        <div class="alert alert-warning alerterror" role="alert">
                            <strong> {{ Session::get('error') }} </strong>
                        </div>
                        @endif
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="card pd-20 pd-sm-40">
                    <h3 class="card-body-title">Applicant Details Informations</h3>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-bordered mg-b-0">
                            <thead>
                                <tr>
                                    <th class="wd-25p">Applicant Name</th>
                                    <th class="wd-25p">Applied Position</th>
                                    <th class="wd-25p"> Email </th>
                                    <th class="wd-25p"> Phone </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><p> {{ $singleApplicant->applicant_name }} </p></td>
                                    <td><p> {{ $singleApplicant->job_title }} </p></td>
                                    <td><p> {{ $singleApplicant->email }} </p></td>
                                    <td><p> {{ $singleApplicant->phone }} </p></td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th class="wd-25p">Applied Date</th>
                                    <th class="wd-25p">Experiance</th>
                                    <th class="wd-25p">Seen By</th>
                                    <th class="wd-25p">Review Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><p> {{ Carbon\Carbon::parse($singleApplicant->app_date)->format('D, d F Y') }} </p></td>
                                    <td><p> {{ $singleApplicant->experiance_year }} Years </p></td>
                                    <td><p> {{ $singleApplicant->seen_by_id }} </p></td>
                                    <td><p> {{ $singleApplicant->review_status }} </p></td>
                                </tr>
                            </tbody>

                            {{-- <thead>
                                <tr>
                                    <th class="wd-25p">Insert At</th>
                                    <th class="wd-25p">Update At</th>
                                    <th class="wd-25p">Product Status</th>
                                    <th class="wd-25p">Thumbnail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> {{ Carbon\Carbon::parse($productData->created_at)->format('D, d F Y') }} </td>
                                    <td> {{ Carbon\Carbon::parse($productData->updated_at)->format('D, d F Y') }} </td>
                                    <td>
                                        @if ($productData->product_status == 1)
                                            <span class="badge badge-pill badge-success">Available</span>
                                        @else
                                            <span class="badge badge-pill badge-danger">Unavailable</span>
                                        @endif
                                    </td>
                                    <td>
                                        <img src=" {{ asset($productData->product_thumbnail) }} " alt="" height="80" width="80">
                                    </td>
                                </tr>
                            </tbody> --}}

                        </table>
                    </div><!-- table-responsive -->
                </div><!-- card -->
            </div><!-- card -->
        </div>
    </div>

</div>
{{-- Page Content End --}}
<br><br><br><br><br><br><br><br><br><br>
@endsection
