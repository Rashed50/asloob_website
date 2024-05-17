@extends('admin.layouts.master')
@section('title', 'Company Information')
@section('company-profile')
active show-sub
@endsection
@section('update-description')
    active
@endsection
@section('content')

<nav class="breadcrumb sl-breadcrumb">
    <span class="breadcrumb-item active">Dashboard</span>
    <a class="breadcrumb-item" href="">Company Description Update</a>
</nav>

<div class="sl-pagebody">
    {{-- Form part Start --}}
    <div class="row row-sm">
        <div class="col-md-2"></div>
        <div class="col-md-8">

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    {{-- @if(Session::has('success'))
                    <div class="alert alert-success alertsuccess" role="alert">
                        <strong> {{ Session::get('success')}} </strong>
                    </div>
                    @endif
                    @if(Session::has('error'))
                    <div class="alert alert-warning alerterror" role="alert">
                        <strong> {{ Session::get('error') }} </strong>
                    </div>
                    @endif --}}

                    @if(Session::has('success'))
                    <div class="alert alert-success alertsuccess" role="alert" style="margin-left: -20px">
                       <strong>Successfully!</strong> Updated Profile Description.
                    </div>
                  @endif
                  @if(Session::has('error'))
                    <div class="alert alert-warning alerterror" role="alert" style="margin-left: -20px">
                       <strong>Opps!</strong> please try again.
                    </div>
                  @endif
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                <h6 class="card-body-title">Company Description Update</h6>
                <form action="{{ route('update-company-description') }}" method="post">
                    @csrf
                    <div class="col-lg-12">
                        <div class="form-group mg-t-20-force">
                            <label class="form-control-label">Profile Description: <span
                                    class="tx-danger">*</span></label>
                            <textarea name="profile_descp" id="summernote1" cols="15"
                                rows="10" required>{!! $profile == null ? '' : $profile->comp_description !!}</textarea>
                                @error('profile_descp')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
                        </div>
                    </div><!-- col-12 -->
                    <div class="card-footer card_footer_button text-center">
                        <button type="submit" onclick="formValidation();" class="btn btn-primary waves-effect">UPDATE</button>
                    </div>
                </form>
            </div><!-- card -->
        </div>
        <div class="col-md-2"></div>
    </div>


</div>
<br><br><br><br><br><br><br><br><br><br>
@endsection

@section('scripts')
<script>
    //Summernote text editor
    $(function () {
        'use strict';
        // Summernote editor
        $('#summernote1').summernote({
            height: 150,
            tooltip: false
        })
    });
</script>


@endsection

