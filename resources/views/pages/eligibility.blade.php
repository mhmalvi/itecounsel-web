@extends('layouts.app')

@section('content')
    <section class="eligibility">
        <div style="padding: 35px 0px 15px 0px; text-align: center;">
            <h2>Let's Check Your Eligibility</h2>
        </div>
        <div class="container" style="padding: 45px 25px;">
            <form action="{{route('eligibity_check')}}" method="POST" id="eligibility_form" class="eligibility_form">
                @csrf
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="">Full Name</label>
                        <input type="text" class="form-control" name="fullname" style="border-color: #999999; margin-bottom: 0px;" required>
                        @error('fullname')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">
                        <label for="">Contact Number</label>
                        <input type="text" class="form-control" name="contact" style="border-color: #999999; margin-bottom: 0px;" required>
                        @error('contact')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="">Email Address</label>
                        <input type="text" class="form-control" name="email" style="border-color: #999999; margin-bottom: 0px;" required>
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">
                        <label for="">Nationality</label>
                        <input type="text" class="form-control" name="nationality" style="border-color: #999999; margin-bottom: 0px;" required>
                        @error('nationality')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                    
                    <div class="col-md-6">
                        <label for="">Qualification you looking for?</label>
                        <select name="course" class="form-control" style="background-color: #eef1f6; height: 50px; border-radius: 0px; border-color: #999999; margin-bottom: 0px;" required>
                            <option disabled selected value>Select Course</option>
                            @isset($courses)
                                @foreach($courses as $course)
                                <option value="{{$course->id}}">{{$course->course_name}}</option>
                                @endforeach
                            @endisset
                        </select>
                        @error('course')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">
                        <label for="">Where do you work?</label>
                        <input type="text" class="form-control" name="work" style="border-color: #999999; margin-bottom: 0px;" required>
                    </div>
                    <div class="col-md-6">
                        <label for="">What is your designation?</label>
                        <input type="text" class="form-control" name="designation" style="border-color: #999999; margin-bottom: 0px;" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">
                        <label for="">Relevant work experience?</label>
                        <select name="experience_one" class="form-control" style="background-color: #eef1f6; height: 50px; border-radius: 0px; border-color: #999999; margin-bottom: 0px;" required>
                            <option disabled selected value>Select relevant work experience</option>
                            <option value="1-2">1-2</option>
                            <option value="3-5">3-5</option>
                            <option value="6-8">6-8</option>
                            <option value="8+">8+</option>
                        </select>
                        @error('experience_one')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="">What state do you live in?</label>
                        <select name="live" class="form-control" style="background-color: #eef1f6; height: 50px; border-radius: 0px; border-color: #999999; margin-bottom: 0px;" required>
                            <option disabled selected value>Select state you live in</option>
                            <option value="NSW">NSW</option>
                            <option value="VIC">VIC</option>
                            <option value="QLD">QLD</option>
                            <option value="SA">SA</option>
                            <option value="WA">WA</option>
                            <option value="ACT">ACT</option>
                            <option value="NT">NT</option>
                            <option value="TAS">TAS</option>
                        </select>
                        @error('live')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="">Any question for us?</label>
                        <textarea name="question" class="form-control" rows="5" style="background-color: #eef1f6; border-color: #999999; border-radius: 0px !important; resize: none;" required></textarea>
                        @error('question')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div style="display: flex; justify-content: center;">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </section>
@endsection
