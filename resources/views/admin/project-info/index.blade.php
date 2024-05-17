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
    <a class="breadcrumb-item" href="">Company New Project Add</a>
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
                        <strong>Successfully!</strong> Added New project information.
                    </div>
                    @endif
                    @if(Session::has('success_soft'))
                    <div class="alert alert-success alertsuccess" role="alert">
                        <strong>Successfully!</strong> delete project information.
                    </div>
                    @endif

                    @if(Session::has('success_incharge'))
                    <div class="alert alert-success alertsuccess" role="alert">
                        <strong>Successfully!</strong> Added Project Incharge.
                    </div>
                    @endif

                    @if(Session::has('success_update'))
                    <div class="alert alert-success alertsuccess" role="alert">
                        <strong>Successfully!</strong> update project information.
                    </div>
                    @endif

                    @if(Session::has('data_not_found'))
                    <div class="alert alert-warning alerterror" role="alert">
                        <strong>Opps!</strong> invalid Employee Id.
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
                <h6 class="card-body-title">Add New Project Information</h6><br>
                <form class="form-horizontal project-details-form" id="projectform" method="post" action="{{ route('project-add') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body card_form">
                            <div
                                class="form-group row custom_form_group{{ $errors->has('proj_name') ? ' has-error' : '' }}">
                                <label class="col-sm-3 control-label">Project Name:<span
                                        class="req_star">*</span></label>
                                <div class="col-sm-7">
                                    <input type="text" placeholder="Enter project name" class="form-control" id="proj_name"
                                        name="proj_name" value="{{old('proj_name')}}" required>
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
                                        id="starting_date" name="starting_date" value="{{old('starting_date')}}" required>
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
                                        class="form-control" required>{{ old('address') }}</textarea>
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
                                        name="proj_code" value="{{old('proj_code')}}" required>
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
                                        name="proj_budget" value="{{old('proj_budget')}}" required>
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
                                        value="{{old('proj_deadline')}}" required>
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
                                        placeholder="Enter project description" required></textarea>
                                </div>
                            </div>
                            <div class="form-group row custom_form_group{{ $errors->has('proj_main_thumb') ? ' has-error' : '' }}">
                                <label class="col-sm-3 control-label">Event File URL:<span class="req_star">*</span></label>
                                <div class="col-sm-9">
                                  <div class="input-group">
                                      <span class="input-group-btn">
                                          <span class="btn btn-default btn-file btnu_browse">
                                              Browse…  <input type="file" name="proj_main_thumb" id="ProjImg" required>
                                          </span>
                                      </span>
                                      {{-- <input type="text" class="form-control" readonly> --}}
                                  </div>
                                  @if ($errors->has('proj_main_thumb'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('proj_main_thumb') }}</strong>
                                      </span>
                                  @endif
                                </div>
                                <div class="row" id="preview_image"></div>
                            </div>



                        </div>
                        <div class="card-footer card_footer_button text-center">
                            <button type="submit" onclick="formValidation();"
                                class="btn btn-primary waves-effect">Save Info</button>
                        </div>
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
                <h6 class="card-body-title">All Active Events</h6>
                <br>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap table-primary mg-b-0">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Starting Date</th>
                                <th>Deadline</th>
                                <th>Project ID</th>
                                <th>Project Name</th>
                                <th>Project Incharge</th>
                                <th>Project Value</th>
                                <th>Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($all as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ Carbon\Carbon::parse($item->starting_date)->format('d-m-Y') }}</td>
                                <td>{{ Carbon\Carbon::parse($item->proj_deadline)->format('d-m-Y') }}</td>
                                <td>{{ $item->proj_id }}</td>
                                <td>{{ $item->proj_name }}</td>
                                <td>{{ $item->proj_Incharge_id == NULL ? 'Not Assigned' : $item->employee->employee_name
                                    }}</td>
                                <td>{{ $item->proj_budget }}</td>

                                <td>
                                    <a href="{{ route('project-info-edit',[$item->proj_id]) }}" title="edit"><i
                                            class="fa fa-pencil-square fa-lg edit_icon"></i></a>

                                   {{--  <a href="{{ route('project-info-delete',[$item->proj_id]) }}" title="delete" id="delete"><i class="fa fa-trash fa-lg delete_icon"></i></a> --}}
                                </td>
                            </tr>
                            @empty
                            <p class="data_not_found">Data Not Found</p>
                            @endforelse
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

@section('scripts')
<script>
    //  ################## Selected Image preview ###################
    $(document).ready(function () {
        $('#ProjImg').on('change', function () { //on file input change
            if (window.File && window.FileReader && window.FileList && window
                .Blob) //check File API supported browser
            {
                var data = $(this)[0].files; //this file data

                $.each(data, function (index, file) { //loop though each file
                    if (/(\.|\/)(gif|jpe?g|png)$/i.test(file
                        .type)) { //check supported file type
                        var fRead = new FileReader(); //new filereader
                        fRead.onload = (function (file) { //trigger function on successful read
                            return function (e) {
                                var img = $('<img/>').addClass('thumb').attr('src',
                                    e.target.result).width(80)
                                    .height(80); //create image element
                                $('#preview_image').append(
                                    img); //append image to output element
                            };
                        })(file);
                        fRead.readAsDataURL(file); //URL representing the file's data.
                    }
                });

            } else {
                alert("Your browser doesn't support File API!"); //if File API is absent
            }
        });
    });


    //Summernote text editor
    $(function () {
        'use strict';
        // Summernote editor
        $('#summernote1').summernote({
            height: 150,
            tooltip: false
        })
    });


  /* form validation */
  $(document).ready(function() {
    $("#projectform").validate({
      /* form tag off  */
      // submitHandler: function(form) { return false; },
      /* form tag off  */
      rules: {
        proj_name: {
          required: true,

        },
        starting_date: {
          required: true,
        },
        proj_deadline: {
          required: true,
        },
        address: {
          required: true,
        },
        proj_code: {
          required: true,
        },
        proj_description: {
          required: true,
        },
        proj_budget: {
          required: true,
          number: true,
          maxlength: 11,
        },
      },

      messages: {
        proj_name: {
          required: "You Must Be Input This Field!",
        },
        starting_date: {
          required: "You Must Be Select This Field!",
        },
        proj_deadline: {
          required: "You Must Be Select This Field!",
        },
        address: {
          required: "You Must Be Input This Field!",
        },
        proj_code: {
          required: "You Must Be Input This Field!",
        },
        proj_description: {
          required: "You Must Be Input This Field!",
        },
        proj_budget: {
          required: "Please Input This Field!",
          number: "You Must Be Input Number!",
          max: "You Must Be Input Maximum Length 11!",
        },
      },
    });
  });
</script>
@endsection
