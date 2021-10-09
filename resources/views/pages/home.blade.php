@extends('layouts.userMaster')
@section('title', 'প্রশ্নপত্র')
@section('user-content')
<div class="container">
    <div class="row py-4 align-items-center">
        <!-- For Demo Purpose -->
        <!-- Registeration Form -->
        <div class="col-lg-7  mx-auto">
            <div class="appointment-head p-4 mb-3">
                <h3>মাল্টিপারপাস হেলথ ভলান্টিয়া ( এমএইচভি)৩ দিন ব্যাপি রিফ্রেশার্স প্রশিক্ষণ চাহিদা নিরুপণ প্রশ্নপত্র ( অনলাইন)</h3>
            </div>
            <div class="appointment pt-5 px-5">
                <form action="" method="POST">
                    @csrf
                    <div class="row">
                        <!-- First Name -->
                        <div class="form-group col-lg-12 mb-3">
                            <label for="name">এমএইচভির নাম <span class="text-danger">*</span></label>
                            <input id="name" type="text" name="name"  class="form-control bg-white @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="নাম" />
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
            
                        <div class="form-group col-lg-6 mb-2">
                            <label for="gender">লিঙ্গ সিলেক্ট করুন  <span class="text-danger">*</span></label> <br>
                            <label for="male"><input type="radio" name="gender" id="male" value="পুরুষ"> পুরুষ</label> <br>
                            <label for="female"> <input type="radio" name="gender" id="female" value="মহিলা"> মহিলা</label> <br>
                            <label for="other"><input type="radio" name="gender" id="other" value="অন্যান্য"> অন্যান্য</label>
                            
                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6 mb-2">
                            <label for="age">বয়স সিলেক্ট করুন <span class="text-danger">*</span></label> <br>
                            <label for="18-20"><input type="radio" name="age" id="18-20" value="১৮-২০"> ১৮-২০</label> <br>
                            <label for="21-30"> <input type="radio" name="age" id="21-30" value="২১-৩০"> ২১-৩০</label> <br>
                            <label for="31-45"><input type="radio" name="age" id="31-45" value="৩১-৪৫"> ৩১-৪৫</label>
                            @error('age')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-lg-12 mb-3">
                            <label for="msb_nomination_date">MHV হিসাবে চূড়ান্ত মনোনয়ন পেয়েছেন কোন সালে?<span class="text-danger">*</span></label>
                            <input id="mhv_nomination_date" type="date" name="mhv_nomination_date"  class="form-control bg-white @error('mhv_nomination_date') is-invalid @enderror" value="<?php echo date('Y-m-d'); ?>" />
                            @error('mhv_nomination_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-lg-12 mb-3">
                            <label for="mhv_id_number">MHV আইডি নাম্বার (ইংরেজীতে লিখুন) <span class="text-danger">*</span></label>
                            <input id="mhv_id_number" type="text" name="mhv_id_number"  class="form-control bg-white @error('mhv_id_number') is-invalid @enderror" value="{{ old('mhv_id_number') }}" placeholder="MHV আইডি" />
                            @error('mhv_id_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-lg-12 mb-3">
                            <label for="mobile">মোবাইল নাম্বার (ইংরেজীতে লিখুন) <span class="text-danger">*</span></label>
                            <input id="mobile" type="text" name="mobile"  class="form-control bg-white @error('mobile') is-invalid @enderror" value="{{ old('mobile') }}" placeholder="মোবাইল " />
                            @error('mobile')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-lg-12 mb-3">
                            <label for="cc_name">সিসির নাম (ইংরেজীতে লিখুন) <span class="text-danger">*</span></label>
                            <input id="cc_name" type="text" name="cc_name"  class="form-control bg-white @error('cc_name') is-invalid @enderror" value="{{ old('cc_name') }}" placeholder="সিসির নাম" />
                            @error('cc_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-lg-12 mb-3">
                            <label for="email">ইমেইল আইডি (ইংরেজীতে লিখুন) <span class="text-danger">*</span></label>
                            <input id="email" type="text" name="email"  class="form-control bg-white @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="ইমেইল আইডি" />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-lg-12 mb-3">
                            <label for="cc_id">সিসির আইডি (ইংরেজীতে লিখুন) <span class="text-danger">*</span></label>
                            <input id="cc_id" type="text" name="cc_id"  class="form-control bg-white @error('cc_id') is-invalid @enderror" value="{{ old('cc_id') }}" placeholder="সিসির আইডি" />
                            @error('cc_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6 mb-3">
                            <label for="zila">জেলা নির্বাচন করুন <span class="text-danger">*</span></label>
                            <input id="zila" type="text" name="zila"  class="form-control bg-white @error('zila') is-invalid @enderror" value="{{ old('zila') }}" placeholder="জেলা" />
                            @error('zila')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6 mb-3">
                            <label for="upazila">উপজেলা নির্বাচন করুন <span class="text-danger">*</span></label>
                            <input id="upazila" type="text" name="upazila"  class="form-control bg-white @error('upazila') is-invalid @enderror" value="{{ old('upazila') }}" placeholder="উপজেলা" />
                            @error('upazila')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6 mb-3">
                            <label for="union">ইউনিয়ন নির্বাচন করুন  <span class="text-danger">*</span></label>
                            <input id="union" type="text" name="union"  class="form-control bg-white @error('union') is-invalid @enderror" value="{{ old('union') }}" placeholder="ইউনিয়ন" />
                            @error('union')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6 mb-3">
                            <label for="word">ওয়ার্ড নির্বাচন করুন  <span class="text-danger">*</span></label>
                            <input id="word" type="text" name="word"  class="form-control bg-white @error('word') is-invalid @enderror" value="{{ old('word') }}" placeholder="ওয়ার্ড" />
                            @error('word')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                       
                        <div class="form-group col-lg-12 mb-3">
                            <label for="cc_block_no">সিসি-ব্লক নং(ইংরেজীতে লিখুন ) <span class="text-danger">*</span></label>
                            <input id="cc_block_no" type="text" name="cc_block_no"  class="form-control bg-white @error('cc_block_no') is-invalid @enderror" value="{{ old('cc_block_no') }}" placeholder="সিসি-ব্লক নং" />
                            @error('cc_block_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- Submit Button -->
                        <div class="form-group pl-3 pb-3">
                            <button type="submit" class="btn btn-info btn-block py-2 px-4">
                                <span class="font-weight-bold">Next</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection