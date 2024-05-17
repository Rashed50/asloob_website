@extends('admin.layouts.master')
@section('title', 'Company Information')
@section('company-profile')
active show-sub
@endsection
@section('add-company-profile')
    active
@endsection
@section('content')

<nav class="breadcrumb sl-breadcrumb">
    <span class="breadcrumb-item active">Dashboard</span>
    <a class="breadcrumb-item" href="">Company Information</a>
</nav>

<div class="sl-pagebody">
    {{-- Form part Start --}}
    <div class="row row-sm">
        <div class="col-md-2"></div>
        <div class="col-md-8">

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    @if(Session::has('success'))
                    <div class="alert alert-success alertsuccess" role="alert" style="margin-left: -20px">
                       <strong>Successfully!</strong> Updated Profile.
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
                <h6 class="card-body-title">Add Company Info</h6>
                <form action="{{ route('company-profile-update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row custom_form_group{{ $errors->has('comp_name_en') ? ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">English Name:<span class="req_star">*</span></label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="comp_name_en" placeholder="Enter Company English Name" value="{!! $profile == null ? '' : $profile->comp_name_en !!}" required>
                        @if ($errors->has('comp_name_en'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('comp_name_en') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>
                    <div class="form-group row custom_form_group{{ $errors->has('comp_name_arb') ? ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">Arabic Name:<span class="req_star">*</span></label>
                        <div class="col-sm-7">
                        <input type="text" placeholder="Enter Company Arabic Name"  class="form-control" name="comp_name_arb" value="{!! $profile == null ? '' : $profile->comp_name_arb !!}" required>
                        @if ($errors->has('comp_name_arb'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('comp_name_arb') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>

                    <div class="form-group row custom_form_group{{ $errors->has('comp_email1') ? ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">Email 1:<span class="req_star">*</span></label>
                        <div class="col-sm-7">
                        <input type="email" placeholder="Enter Company Email Address"  class="form-control" name="comp_email1" value="{!! $profile == null ? ' ' : $profile->comp_email1 !!}" required>
                        @if ($errors->has('comp_email1'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('comp_email1') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>

                    <div class="form-group row custom_form_group{{ $errors->has('comp_email2') ? ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">Email 2:<span class="req_star">*</span></label>
                        <div class="col-sm-7">
                        <input type="email" placeholder="Enter Company Email Address" class="form-control" name="comp_email2" value="{!! $profile == null ? '' : $profile->comp_email2 !!}" required>
                        @if ($errors->has('comp_email2'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('comp_email2') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>
                    <div class="form-group row custom_form_group{{ $errors->has('comp_phone1') ? ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">Phone 1:<span class="req_star">*</span></label>
                        <div class="col-sm-7">
                        <input type="text" placeholder="Enter Company Phone"  class="form-control" name="comp_phone1" value="{!! $profile == null ? '' : $profile->comp_phone1 !!}" required>
                        @if ($errors->has('comp_phone1'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('comp_phone1') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>
                    <div class="form-group row custom_form_group">
                        <label class="col-sm-3 control-label">Phone 2:</label>
                        <div class="col-sm-7">
                        <input type="text" placeholder="Enter Company Phone" class="form-control" name="comp_phone2" value="{!! $profile == null ? '' : $profile->comp_phone2 !!}">

                        </div>
                    </div>
                    <div class="form-group row custom_form_group{{ $errors->has('comp_mobile1') ? ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">Mobile 1:<span class="req_star">*</span></label>
                        <div class="col-sm-7">
                        <input type="text" placeholder="Enter Company Mobile Number"  class="form-control" name="comp_mobile1" value="{!! $profile == null ? '' : $profile->comp_mobile1 !!}" required>
                        @if ($errors->has('comp_mobile1'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('comp_mobile1') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>
                    <div class="form-group row custom_form_group{{ $errors->has('comp_mobile2') ? ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">Mobile 2:<span class="req_star">*</span></label>
                        <div class="col-sm-7">
                        <input type="text" placeholder="Enter Company Mobile Number" class="form-control" name="comp_mobile2" value="{!! $profile == null ? '' : $profile->comp_mobile2 !!}" required>
                        @if ($errors->has('comp_mobile2'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('comp_mobile2') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>
                    <div class="form-group row custom_form_group{{ $errors->has('comp_support_number') ? ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">Contact Number:<span class="req_star">*</span></label>
                        <div class="col-sm-7">
                        <input type="text" placeholder="Enter Company Contact Number" class="form-control" name="comp_support_number" value="{!! $profile == null ? '' : $profile->comp_support_number !!}" required>
                        @if ($errors->has('comp_support_number'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('comp_support_number') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>
                    <div class="form-group row custom_form_group{{ $errors->has('comp_contact_address') ? ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">Contact Address:<span class="req_star">*</span></label>
                        <div class="col-sm-7">
                        <textarea placeholder="Enter Company Contact Address" name="comp_contact_address" class="form-control" required>{!! $profile == null ? '' : $profile->comp_contact_address !!}</textarea>
                        @if ($errors->has('comp_contact_address'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('comp_contact_address') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>

                    <div class="form-group row custom_form_group{{ $errors->has('facebook_url') ? ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">Facebook Link:<span class="req_star">*</span></label>
                        <div class="col-sm-7">
                            <input type="text" placeholder="Your Facebook Link" class="form-control" name="facebook_url" value="{!! $profile == null ? '' : $profile->facebook_url !!}" required>
                            @if ($errors->has('facebook_url'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('facebook_url') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row custom_form_group{{ $errors->has('linkedin_url') ? ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">LinkedIn Link:<span class="req_star">*</span></label>
                        <div class="col-sm-7">
                            <input type="text" placeholder="Your LinkedIn Link" class="form-control" name="linkedin_url" value="{!! $profile == null ? '' : $profile->linkedin_url !!}" required>
                            @if ($errors->has('linkedin_url'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('linkedin_url') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row custom_form_group{{ $errors->has('twitter_url') ? ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">Twitter link:<span class="req_star">*</span></label>
                        <div class="col-sm-7">
                            <input type="text" placeholder="Your Twitter Link " class="form-control" name="twitter_url" value="{!! $profile == null ? '' : $profile->twitter_url !!}" required>
                            @if ($errors->has('twitter_url'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('twitter_url') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row custom_form_group{{ $errors->has('whatsapp_num') ? ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">Whatsapp Number:<span class="req_star">*</span></label>
                        <div class="col-sm-7">
                            <input type="number" placeholder="Your Whatsapp Number" class="form-control" name="whatsapp_num" value="{!! $profile == null ? '' : $profile->whatsapp_num !!}" required>
                            @if ($errors->has('whatsapp_num'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('whatsapp_num') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row custom_form_group{{ $errors->has('comp_hotline_number') ? ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">Hotline Number:<span class="req_star">*</span></label>
                        <div class="col-sm-7">
                        <input type="text"  placeholder="Enter Company Hotline Number"  class="form-control" name="comp_hotline_number" value="{!! $profile == null ? '' : $profile->comp_hotline_number !!}" required>
                        @if ($errors->has('comp_hotline_number'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('comp_hotline_number') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>
                    <div class="form-group row custom_form_group{{ $errors->has('comp_address') ? ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">Address:<span class="req_star">*</span></label>
                        <div class="col-sm-7">
                        <textarea placeholder="Enter Company Address"  name="comp_address" class="form-control" required>{!! $profile == null ? '' : $profile->comp_address !!}</textarea>
                        @if ($errors->has('comp_address'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('comp_address') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>
                    <div class="form-group row custom_form_group{{ $errors->has('comp_mission') ? ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">Mission:<span class="req_star">*</span></label>
                        <div class="col-sm-7">
                        <textarea placeholder="Enter Company Mission"  name="comp_mission" class="form-control" required>{!! $profile == null ? '' : $profile->comp_mission !!}</textarea>
                        @if ($errors->has('comp_mission'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('comp_mission') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>
                    <div class="form-group row custom_form_group{{ $errors->has('comp_vission') ? ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">Vision:<span class="req_star">*</span></label>
                        <div class="col-sm-7">
                        <textarea placeholder="Enter Company Vission" name="comp_vission" class="form-control" required>{!! $profile == null ? '' : $profile->comp_vission !!}</textarea>
                        @if ($errors->has('comp_vission'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('comp_vission') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>
                    <div class="card-footer card_footer_button text-center">
                        <button type="submit" id="onSubmit" onclick="formValidation();" class="btn btn-primary waves-effect">UPDATE</button>
                    </div>
                </form>
            </div><!-- card -->
        </div>
        <div class="col-md-2"></div>
    </div>
    {{-- Form part End --}}
    <br><br><br>
</div>
<br><br><br><br><br><br><br><br><br><br>
@endsection
