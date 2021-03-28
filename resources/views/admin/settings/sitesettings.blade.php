@extends('admin.layouts.app')
@section('content')

<div class="ibox col-md-4">
    <div class="ibox-content">
        <h4>Site Settings</h4>
        <form action="{{ url('admin/site-update/'.$getsiteSetting->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <input type="text" class="form-control" name="siteName" placeholder="Site Name" value="{{ old('siteName') ? old('siteName') : $getsiteSetting->dbsiteName }}">
            </div>
            <div class="form-group">
                @if($errors->has('email'))
                {{ $errors->first('email')}}
                @endif
                <input type="email" class="form-control" name="email" placeholder="Email Adress" value="{{ old('email') ? old('email') : $getsiteSetting->dbemail }}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="contact" placeholder="Contact Number" value="{{ old('contact') ? old('contact') : $getsiteSetting->dbcontact }}">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="address" placeholder="Address" rows="5" style="resize: none;">{{ old('address') ? old('address') : $getsiteSetting->dbaddress }}</textarea>
            </div>
            <div class="custom-file input-group mb-3">
                <input type="file" class="custom-file-input" name="favicon" id="inputGroupFile01">
                <label class="custom-file-label" for="inputGroupFile01">Choose Favicon</label>
            </div>
            @if ($getsiteSetting->dbfavicon)
                <div class="ml-2 col-sm-6">
                    <img src="{{ asset('storage/image/favicon/'.$getsiteSetting->dbfavicon) }}" id="preview" class="img-thumbnail">
                </div>
            @endif
            <div class="custom-file input-group mb-3">
                <input type="file" class="custom-file-input" name="logo" id="inputGroupFile01">
                <label class="custom-file-label" for="inputGroupFile01">Choose Logo</label>
            </div>
            @if ($getsiteSetting->dblogo)
                <div class="ml-2 col-sm-6">
                    <img src="{{ asset('storage/image/logo/'.$getsiteSetting->dblogo) }}" id="preview" class="img-thumbnail">
                </div>
            @endif

            <button class="btn btn-sm btn-primary" type="submit">Save</button>
        </form>
        @if (!empty(Session::get('message1')) && Session::get('message1')['status'] == '1')
        <div class="control-group">
            <div class="alert-success inline">
                {{ Session::get('message1')['text'] }}
            </div>
        </div>
        @elseif(!empty(Session::get('message1')) && Session::get('message1')['status'] == '0')
        <div class="control-group">
            <div class="alert-danger inline">
                {{ Session::get('message1')['text'] }}
            </div>
        </div>
        @endif
    </div>
</div>



























@endsection