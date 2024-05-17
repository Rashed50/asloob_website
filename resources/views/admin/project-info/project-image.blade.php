@extends('admin.layouts.master')
@section('title', 'Project')
@section('projects')
active show-sub
@endsection
@section('add-project-image')
active
@endsection
@section('content')

<nav class="breadcrumb sl-breadcrumb">
    <span class="breadcrumb-item active">Dashboard</span>
    <a class="breadcrumb-item" href=""> Update Project Image </a>
</nav>

<div class="sl-pagebody">
    {{-- Form part Start --}}
    <div class="row row-sm">
        <div class="col-md-2"></div>
        <div class="col-md-8">

            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                <h6 class="card-body-title">Update Project Image </h6><br>
                <form class="form-horizontal project-details-form" id="projectform" method="post"
                    action="{{ route('project-image-upload') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card">

                        <div class="row mg-t-20 form-group  {{ $errors->has('proj_id') ? ' has-error' : '' }}">
                            {{-- Select option with search facility --}}
                            <label class="col-sm-3 form-control-label">Select Project: <span
                                    class="tx-danger">*</span></label>
                            <div class="col-sm-7 mg-t-10 mg-sm-t-0">
                                <select class="form-control select2-show-search" name="proj_id"
                                    data-placeholder="Choose one" required>
                                    <option label="Choose one"></option>
                                    @foreach ($all as $project)
                                    <option value=" {{ $project->proj_id }} "> {{$project->proj_name }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('proj_id')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div><!-- row -->

                        <div class="form-group row custom_form_group">
                            <label class="col-sm-4 control-label"> Upload Multiple Image:<span
                                    class="req_star">*</span></label>
                            <div class="col-sm-7 project_image">
                                <div class="input-group ">
                                    <span class="input-group-btn ">
                                        <span class="btn btn-default btn-file btnu_browse ">
                                            Browse… <input type="file" name="project_image[]"
                                                value="{{ old('multi_img') }}" multiple id="multiImg" required>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- show image -->
                        <div class="row show_multiple_image">
                            <div class="col-md-4"></div>
                            <div class="col-md-8">
                                <div class="show_multiple_image" id="preview_img"></div>
                            </div>
                        </div>
                        <!-- end show image -->

                        <div class="card-footer card_footer_button text-center">
                            <button type="submit" onclick="formValidation();"
                                class="btn btn-primary waves-effect">Update Image</button>
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

@section('scripts')

<!-- this script for show multiple images -->
<script>

    $(document).ready(function () {
        $('#multiImg').on('change', function () { //on file input change
            if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
            {
                var data = $(this)[0].files; //this file data

                $.each(data, function (index, file) { //loop though each file
                    if (/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)) { //check supported file type
                        var fRead = new FileReader(); //new filereader
                        fRead.onload = (function (file) { //trigger function on successful read
                            return function (e) {
                                var img = $('<img/>').addClass('thumb').attr('src', e.target.result).width(80)
                                    .height(80); //create image element
                                $('#preview_img').append(img); //append image to output element
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

</script>
<!-- ===================================== -->


@endsection
