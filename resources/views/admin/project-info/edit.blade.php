@extends('admin.layouts.master')
@section('title', 'Project')
@section('projects')
active show-sub
@endsection
@section('add-project-info')
    active
@endsection
@section('content')

<nav class="breadcrumb sl-breadcrumb">
    <span class="breadcrumb-item active">Dashboard</span>
    <a class="breadcrumb-item" href=""> Update Project Information </a>
</nav>

<div class="sl-pagebody">
    {{-- Form part Start --}}
    <div class="row row-sm">
        <div class="col-md-2"></div>
        <div class="col-md-8">

            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                <h6 class="card-body-title">Update Project Information</h6><br>
                <form class="form-horizontal project-details-form" id="projectform" method="post" action="{{ route('project-info-update') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body card_form">
                            <input type="hidden" name="id" value="{{ $edit->proj_id }}">
                            <div
                                class="form-group row custom_form_group{{ $errors->has('proj_name') ? ' has-error' : '' }}">
                                <label class="col-sm-3 control-label">Project Name:<span
                                        class="req_star">*</span></label>
                                <div class="col-sm-7">
                                    <input type="text" placeholder="Enter project name" class="form-control" id="proj_name"
                                        name="proj_name" value="{{ $edit->proj_name }}" required>
                                    @if ($errors->has('proj_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('proj_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div
                                class="form-group row custom_form_group{{ $errors->has('starting_date') ? ' has-error' : '' }}">
                                <label class="col-sm-3 control-label">Starting Date:<span
                                        class="req_star">*</span></label>
                                <div class="col-sm-7">
                                    <input type="date" placeholder="starting date" class="form-control"
                                        id="starting_date" name="starting_date" value="{{ $edit->starting_date }}" required>
                                    @if ($errors->has('starting_date'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('starting_date') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div
                                class="form-group row custom_form_group{{ $errors->has('address') ? ' has-error' : '' }}">
                                <label class="col-sm-3 control-label">Project Location:<span
                                        class="req_star">*</span></label>
                                <div class="col-sm-7">
                                    <textarea id="address" name="address" placeholder="Enter project location"
                                        class="form-control" required>{{ $edit->address }}</textarea>
                                    @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div
                                class="form-group row custom_form_group{{ $errors->has('proj_code') ? ' has-error' : '' }}">
                                <label class="col-sm-3 control-label">Project Code:</label>
                                <div class="col-sm-7">
                                    <input type="text" placeholder="Enter project code" class="form-control" id="proj_code"
                                        name="proj_code" value="{{ $edit->proj_code }}" required>
                                    @if ($errors->has('proj_code'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('proj_code') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div
                                class="form-group row custom_form_group{{ $errors->has('proj_budget') ? ' has-error' : '' }}">
                                <label class="col-sm-3 control-label">Project Value:<span
                                        class="req_star">*</span></label>
                                <div class="col-sm-7">
                                    <input type="text" placeholder="Budget amount" class="form-control" id="proj_budget"
                                        name="proj_budget" value="{{ $edit->proj_budget }}" required>
                                    @if ($errors->has('proj_budget'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('proj_budget') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div
                                class="form-group row custom_form_group{{ $errors->has('proj_deadline') ? ' has-error' : '' }}">
                                <label class="col-sm-3 control-label">Project Deadline:<span
                                        class="req_star">*</span></label>
                                <div class="col-sm-7">
                                    <input type="date" class="form-control" id="proj_deadline" name="proj_deadline"
                                        value="{{ $edit->proj_deadline }}" required>
                                    @if ($errors->has('proj_deadline'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('proj_deadline') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row custom_form_group">
                                <label class="col-sm-3 control-label">Description:<span
                                        class="req_star">*</span></label>
                                <div class="col-sm-7">
                                    <textarea name="proj_description" class="form-control"
                                        placeholder="Enter project description" required>{{ $edit->proj_description }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer card_footer_button text-center">
                            <button type="submit" onclick="formValidation();"
                                class="btn btn-primary waves-effect">Update Info</button>
                        </div>
                    </div>
                </form>
            </div><!-- card -->
        </div>
        <div class="col-md-2"></div>
    </div>
    {{-- Form part End --}}
</div>
<br><br><br><br><br><br><br><br><br><br>
@endsection
