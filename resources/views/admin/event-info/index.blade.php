@extends('admin.layouts.master')
@section('title', 'Event Information')
@section('company-events')
active show-sub
@endsection
@section('event-add-ui')
    active
@endsection
@section('content')

<nav class="breadcrumb sl-breadcrumb">
    <span class="breadcrumb-item active">Dashboard</span>
    <a class="breadcrumb-item" href="">Company Event Information</a>
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
                        <strong>Successfully!</strong> Added New Event information.
                      </div>
                    @endif
                    @if(Session::has('success_soft'))
                      <div class="alert alert-success alertsuccess" role="alert">
                        <strong>Successfully!</strong> Event information deleted successfully.
                      </div>
                    @endif

                    @if(Session::has('success_update'))
                      <div class="alert alert-success alertsuccess" role="alert">
                        <strong>Successfully!</strong> update Event information.
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
                <h6 class="card-body-title">Add Company Event Info</h6><br>
                <form class="form-horizontal project-details-form" method="post" action="{{ route('event-add-request') }}" enctype="multipart/form-data">
                  @csrf
                        <div class="form-group row custom_form_group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">Event Title:<span class="req_star">*</span></label>
                            <div class="col-sm-7">
                              <input type="text" placeholder="Event Title Here " class="form-control" id="title" name="title" value="{{old('title')}}" required>
                              @if ($errors->has('title'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('title') }}</strong>
                                  </span>
                              @endif
                            </div>
                        </div>
                        <div class="form-group row custom_form_group{{ $errors->has('sub_title') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">Event Sub Title:<span class="req_star">*</span></label>
                            <div class="col-sm-7">
                              <input type="text" placeholder="Event Sub Title Here " class="form-control" id="sub_title" name="sub_title" value="{{old('sub_title')}}" required>
                              @if ($errors->has('sub_title'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('sub_title') }}</strong>
                                  </span>
                              @endif
                            </div>
                        </div>
                        <div class="form-group row custom_form_group{{ $errors->has('file_url') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">Event File URL:<span class="req_star">*</span></label>
                            <div class="col-sm-9">
                              <div class="input-group">
                                  <span class="input-group-btn">
                                      <span class="btn btn-default btn-file btnu_browse">
                                          Browse…  <input type="file" name="file_url" id="EventImg" required>
                                      </span>
                                  </span>
                                  {{-- <input type="text" class="form-control" readonly> --}}
                              </div>
                              @if ($errors->has('file_url'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('file_url') }}</strong>
                                  </span>
                              @endif
                            </div>
                            <div class="row" id="preview_image"></div>
                        </div>
                        <div class="form-group row custom_form_group">
                            <label class="col-sm-3 control-label">Description:<span class="req_star">*</span></label>
                            <div class="col-sm-7">
                              <textarea name="event_description" id="summernote1" cols="15" rows="10" class="form-control" required></textarea>
                            </div>
                        </div>

                      <div class="card-footer card_footer_button text-center">
                          <button type="submit"  onclick="formValidation();" class="btn btn-primary waves-effect">Save Event</button>
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
                                <th class="wd-20p">Title</th>
                                <th class="wd-20p">Sub Title</th>
                                <th class="wd-20p">Description</th>
                                <th class="wd-20p">Image</th>
                                <th class="wd-20p">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($allEvents as $event )
                            <tr>
                                <td> {{ $event->event_title }} </td>
                                <td> {{ $event->event_subtitle }} </td>
                                <td> {!! $event->event_description !!} </td>
                                <td>
                                    <img src=" {{ asset($event->file_url) }} " alt="" style="width: 80px">
                                </td>
                                <td>
                                    <a href=" {{ url('company/event-info/delete/'. $event->event_id ) }} "
                                        class="btn btn-danger" title="Delete" id="delete">
                                        <i class="tx-18 fa fa-trash"></i>
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

@section('scripts')
<script>
    //  ################## Selected Image preview ###################
    $(document).ready(function () {
        $('#EventImg').on('change', function () { //on file input change
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
</script>
@endsection
