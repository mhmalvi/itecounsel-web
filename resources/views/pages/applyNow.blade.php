@extends('layouts.app')

@section('content')
<section class="eligibility">
    <div style="padding: 35px 0px 15px 0px; text-align: center;">
        <h2>Apply Yourself Today</h2>
    </div>
    <div class="container" style="padding: 45px 25px;">
        <div>
            <div class="row">
                <div class="col-md-6" style="padding: 25px 20px;">
                    <img src="{{asset('assets/images/Personal_text.svg')}}" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <form action="{{route('apply')}}" method="POST" id="apply_form">
                        @csrf
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="">Full Name</label>
                                <input type="text" class="form-control" name="name" style="border-color: #999999; margin-bottom: 0px;" required>
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="">Contact Number</label>
                                <input type="text" class="form-control" name="mobile" style="border-color: #999999; margin-bottom: 0px;" required>
                                @error('mobile')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="">Email Address</label>
                                <input type="text" class="form-control" name="mail" style="border-color: #999999; margin-bottom: 0px;" required>
                                @error('mail')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="">Nationality</label>
                                <input type="text" class="form-control" name="place" style="border-color: #999999; margin-bottom: 0px;" required>
                                @error('place')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="">Qualification you looking for?</label>
                                <select name="cours" class="form-control" style="background-color: #eef1f6; height: 50px; border-radius: 0px; border-color: #999999; margin-bottom: 0px;" required>
                                    <option disabled selected value>Select Course</option>
                                    @isset($courses)
                                        @foreach($courses as $course)
                                        <option value="{{$course->id}}">{{$course->course_name}}</option>
                                        @endforeach
                                    @endisset
                                </select>
                                @error('cours')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div style="display: flex; justify-content: center;">
                            <button type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection