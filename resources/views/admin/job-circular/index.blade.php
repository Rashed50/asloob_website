@extends('admin.layouts.master')
@section('title', 'Job Circular')
@section('jobCircular')
active show-sub
@endsection
@section('circular-add-ui')
    active
@endsection
@section('content')

<nav class="breadcrumb sl-breadcrumb">
    <span class="breadcrumb-item active">Dashboard</span>
    <a class="breadcrumb-item" href="">Company Job Circular Information</a>
</nav>

<div class="sl-pagebody">
    {{-- Form part Start --}}
    <div class="row row-sm">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            {{-- Alert Massege Start --}}
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    @if(Session::has('success'))
                      <div class="alert alert-success alertsuccess" role="alert">
                        <strong>Successfully!</strong> Added New Job Circular information.
                      </div>
                    @endif
                    @if(Session::has('success_soft'))
                      <div class="alert alert-success alertsuccess" role="alert">
                        <strong>Successfully!</strong> Job Circular information deleted successfully.
                      </div>
                    @endif

                    @if(Session::has('success_update'))
                      <div class="alert alert-success alertsuccess" role="alert">
                        <strong>Successfully!</strong> updated Job Circular information.
                      </div>
                    @endif

                    @if(Session::has('error'))
                      <div class="alert alert-warning alerterror" role="alert">
                        <strong>Opps!</strong> please try again.
                      </div>
                    @endif
                </div>
                <div class="col-md-2"></div>
            </div>
            {{-- Alert Massege End --}}

            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                <h6 class="card-body-title">Add New Job Circular</h6><br>
                <form class="form-horizontal project-details-form" method="post" action="{{ route('job-circular-add') }}" enctype="multipart/form-data">
                  @csrf
                        <div class="row mg-t-20 form-group  {{ $errors->has('jobtitle_id') ? ' has-error' : '' }}">
                            {{-- Select option with search facility --}}
                            <label class="col-sm-3 form-control-label">Select Job Title: <span
                                    class="tx-danger">*</span></label>
                            <div class="col-sm-7 mg-t-10 mg-sm-t-0">
                                <select class="form-control select2-show-search" name="jobtitle_id"
                                    data-placeholder="Choose one" required>
                                    <option label="Choose one"></option>
                                    @foreach ($jobs as $job)
                                        <option value=" {{ $job->jobtitleId }} "> {{$job->title }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('jobtitle_id')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div><!-- row -->
                        <div class="row mg-t-20  form-group  {{ $errors->has('opening_date') ? ' has-error' : '' }}">
                            <label class="col-sm-3 form-control-label">Opening Date: <span class="tx-danger">*</span></label>
                            <div class="col-sm-7 mg-t-10 mg-sm-t-0">
                                <input type="date" class="form-control" name="opening_date" value="{{ old('opening_date') }}" required>

                                @error('opening_date')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mg-t-20  form-group  {{ $errors->has('closing_date') ? ' has-error' : '' }}">
                            <label class="col-sm-3 form-control-label">Closing Date: <span class="tx-danger">*</span></label>
                            <div class="col-sm-7 mg-t-10 mg-sm-t-0">
                                <input type="date" class="form-control" name="closing_date" value="{{ old('closing_date') }}" required>

                                @error('closing_date')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row custom_form_group{{ $errors->has('vacancy_no') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">Vacancy:<span class="req_star">*</span></label>
                            <div class="col-sm-7">
                              <input type="text" placeholder="Enter No Of Vacancy Here " class="form-control" id="vacancy_no" name="vacancy_no" value="{{old('vacancy_no')}}" required>
                              @if ($errors->has('vacancy_no'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('vacancy_no') }}</strong>
                                  </span>
                              @endif
                            </div>
                        </div>

                      <div class="card-footer card_footer_button text-center">
                          <button type="submit"  onclick="formValidation();" class="btn btn-primary waves-effect">Save Circular</button>
                      </div>

                </form>
            </div><!-- card -->
        </div>
        <div class="col-md-2"></div>
    </div>
    {{-- Form part End --}}
    <br><br><br>
    {{-- Table Part Start --}}
    <div class="row row-sm">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">All Job Circulars</h6>
                <br>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap table-primary mg-b-0">
                        <thead>
                            <tr>
                                <th class="wd-20p">Title</th>
                                <th class="wd-15p">Opening Date</th>
                                <th class="wd-15p">Closing Date</th>
                                <th class="wd-10p">Vacancy</th>
                                <th class="wd-15p">Status</th>
                                <th class="wd-25p">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($jobCircular as $circular )
                            <tr>
                                <td> {{ $circular->JobCircular->title }} </td>
                                <td>
                                    {{ Carbon\Carbon::parse($circular->openingDate)->format('D, d F Y') }}
                                </td>
                                <td>
                                    {{ Carbon\Carbon::parse($circular->closingDate)->format('D, d F Y') }}
                                </td>
                                <td> {{ $circular->noOfVacancy }} </td>
                                <td>
                                    @if ($circular->status == 1)
                                        <span class="badge badge-pill badge-success">Running</span>
                                    @else
                                        <span class="badge badge-pill badge-danger">Time Over</span>
                                    @endif

                                </td>
                                <td>
                                    <a href=" {{ url('/company/job-circular/edit-ui/'. $circular->jobCircularId ) }} "
                                        class="btn btn-primary" title="Edit">
                                        <i class="tx-18 fa fa-pencil-square-o"></i>
                                    </a>

                                    <a href=" {{ url('/company/job-circular/delete/'. $circular->jobCircularId ) }} "
                                         class="btn btn-danger" title="Delete" id="delete"><i class="tx-18 fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div>
        <div class="col-md-1"></div>
    </div><!-- row -->
</div>
<br><br><br><br><br><br><br><br><br><br>
@endsection
