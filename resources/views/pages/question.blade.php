@extends('layouts.userMaster')
@section('title', 'প্রশ্নপত্র')
@section('user-content')
<div class="container">
    <div class="row py-4 align-items-center">
        <!-- For Demo Purpose -->
        <!-- Registeration Form -->
        <div class="col-lg-7  mx-auto">
           
            <div class="appointment px-4 py-4">
                <div class="">
                    <h4>মাল্টিপারপাস হেলথ ভলান্টিয়া ( এমএইচভি)৩ দিন ব্যাপি রিফ্রেশার্স প্রশিক্ষণ চাহিদা নিরুপণ প্রশ্নপত্র ( অনলাইন).</h4>
                </div>
                <hr>
                <form action="" method="">
                    
                    <div class="row">
                        <!-- First Name -->
                        <div class="form-group col-lg-12 mb-2">
                            <label for="gender">১। আপনি কি ৫ দিন ব্যাপি মৌলিক প্রশিক্ষণ পেয়েছেন?</label><br>
                            <label class="ml-4" for="yes1"><input type="radio" name="gender" id="yes1" value="হ্যাঁ"> হ্যাঁ</label> <br>
                            <label class="ml-4" for="no1"> <input type="radio" name="gender" id="no1" value="না"> না</label> <br>
                            
                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group col-lg-12 mb-2">
                            <label for="age">২। কত সালে মৌলিক প্রশিক্ষণ পেয়েছেন ? </label><br>
                            <label class="ml-4" for="2018"><input type="radio" name="age" id="2018" value="২০১৮"> ২০১৮</label> <br>
                            <label class="ml-4" for="2019"> <input type="radio" name="age" id="2019" value="২০১৯"> ২০১৯</label> <br>
                            <label class="ml-4" for="2020"><input type="radio" name="age" id="2020" value="২০২০"> ২০২০</label><br>
                            <label class="ml-4" for="2021"><input type="radio" name="age" id="2021" value="২০২১"> ২০২১</label>
                            @error('age')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group col-lg-12 mb-2">
                            <label for="gender">৩। ৫ দিনব্যপী  মৌলিক  প্রশিক্ষণ  ব্যাতীত আর কোন  প্রশিক্ষণ পেয়েছেন?</label><br>
                            <label class="ml-4" for="yes2"><input type="radio" name="gender" id="yes2" value="হ্যাঁ"> হ্যাঁ</label> <br>
                            <label class="ml-4" for="no2"> <input type="radio" name="gender" id="no2" value="না"> না</label> <br>
                            
                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-lg-12 mb-2">
                            <label for="gender">৪। যদি হ্যাঁ হয় উল্লেখ করুন কী কী বিষয়ে প্রশিক্ষণ পেয়েছেন?</label><br>
                            <label class="ml-4" for="mhb-application"><input type="checkbox" name="gender" id="mhb-application" value="MHV অ্যাপ্লিকেশন"> MHV অ্যাপ্লিকেশন</label> <br>
                            <label class="ml-4" for="prima"> <input type="checkbox" name="gender" id="prima" value="PRIMA অ্যাপ্লিকেশন"> PRIMA অ্যাপ্লিকেশন</label><br>
                            <label class="ml-4" for="khana"> <input type="checkbox" name="gender" id="khana" value="খানা ভিত্তিক তথ্য সংগ্রহ"> খানা ভিত্তিক তথ্য সংগ্রহ</label> <br>
                            <label class="ml-4" for="kahna-info"> <input type="checkbox" name="gender" id="kahna-info" value="খানা ভিত্তিক তথ্য সংগ্রহ"> খানা ভিত্তিক তথ্য সংগ্রহ</label> <br>
                            <label class="ml-4" for="epi"> <input type="checkbox" name="gender" id="epi" value="ইপিআই"> ইপিআই</label><br>
                            <label class="ml-4" for="vitamin"> <input type="checkbox" name="gender" id="vitamin" value="ভিটামিন A+ ক্যাম্পেইন"> ভিটামিন A+ ক্যাম্পেইন </label> <br>
                            <label class="ml-4" for="covid-19"> <input type="checkbox" name="gender" id="covid-19" value="কোভিড -১৯ "> কোভিড -১৯  </label> <br>
                            <label class="ml-4" for="melaria"> <input type="checkbox" name="gender" id="melaria" value="ম্যালেরিয়া"> ম্যালেরিয়া </label><br>
                            <label class="ml-4" for="dengu"> <input type="checkbox" name="gender" id="dengu" value="ডেঙ্গু "> ডেঙ্গু </label><br>
                            <label class="ml-4" for="chikon"> <input type="checkbox" name="gender" id="chikon" value="চিকুনগুনিয়া"> চিকুনগুনিয়া </label><br>
                            <label class="ml-4" for="matri-sastho"> <input type="checkbox" name="gender" id="matri-sastho" value="মাতৃ স্বাস্থ্য"> মাতৃ স্বাস্থ্য  </label> <br>
                            <label class="ml-4" for="nobojatok"> <input type="checkbox" name="gender" id="nobojatok" value="নবজাতক ও শিশু স্বাস্থ্য"> নবজাতক ও শিশু স্বাস্থ্য </label><br>
                            <label class="ml-4" for="manosik"> <input type="checkbox" name="gender" id="manosik" value="মানসিক স্বাস্থ্য"> মানসিক স্বাস্থ্য </label><br>
                            <label class="ml-4" for="pusti"> <input type="checkbox" name="gender" id="pusti" value="পুষ্টি"> পুষ্টি </label><br>
                            <label class="ml-4" for="krimi"> <input type="checkbox" name="gender" id="krimi" value="কৃমি নিয়ন্ত্রণ"> কৃমি নিয়ন্ত্রণ </label><br>
                            <label class="ml-4" for="ucco-rokto"> <input type="checkbox" name="gender" id="ucco-rokto" value="উচ্চরক্তচাপ"> উচ্চরক্তচাপ </label><br>
                            <label class="ml-4" for="daybetice"> <input type="checkbox" name="gender" id="daybetice" value="ডায়াবেটিস"> ডায়াবেটিস </label><br>
                            <label class="ml-4" for="snack"> <input type="checkbox" name="gender" id="snack" value="সর্পদংশন প্রতিরোধ ও করণীয়"> সর্পদংশন প্রতিরোধ  ও করণীয় </label> <br>
                            <label class="ml-4" for="jokkha"> <input type="checkbox" name="gender" id="jokkha" value="যক্ষা"> যক্ষা </label><br>
                            <label class="ml-4" for="hib"> <input type="checkbox" name="gender" id="hib" value="এইচআইভি"> এইচআইভি  </label> <br>
                            <label class="ml-4" for="sastho"> <input type="checkbox" name="gender" id="sastho" value="স্বাস্থ্য শিক্ষা কাউন্সেলিং"> স্বাস্থ্য শিক্ষা কাউন্সেলিং </label><br>
                            <label class="ml-4" for="hand"> <input type="checkbox" name="gender" id="hand" value="হাত ধোয়া"> হাত ধোয়া </label><br>
                            <label class="ml-4" for="otijom"> <input type="checkbox" name="gender" id="otijom" value="অটিজম/ বিকাশ জনিত সমস্যা"> অটিজম/ বিকাশ জনিত সমস্যা </label><br>
                            <label class="ml-4" for="natue"> <input type="checkbox" name="gender" id="natue" value="পরিবেশ ও দুর্যোগ ব্যবস্থাপনা"> পরিবেশ ও দুর্যোগ ব্যবস্থাপনা</label><br>
                            <label class="ml-4" for="gender"> <input type="checkbox" name="gender" id="gender" value="জেন্ডার ও নারীর প্রতি বৈষম্য"> জেন্ডার ও নারীর প্রতি বৈষম্য</label><br>
                            <label class="ml-4" for="csb"> <input type="checkbox" name="gender" id="csb" value="সিএসবিএ প্রশিক্ষণ"> সিএসবিএ প্রশিক্ষণ</label><br>
                            <label class="ml-4" for="family"> <input type="checkbox" name="gender" id="family" value="পরিবার পরিকল্পনা পদ্ধতি"> পরিবার পরিকল্পনা পদ্ধতি</label><br>
                            
                            
                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-lg-12 mb-2">
                            <label for="gender">৫। কমিউনিটি ক্লিনিকের ব্যবস্থপনায় কমিউনিটি গ্রুপ / সাপোর্ট  গ্রুপ সভা কার্যক্রম সম্পর্কে আপনি কি প্রশিক্ষণ পেয়েছেন ?</label><br>
                            <label class="ml-4" for="yes1"><input type="radio" name="gender" id="yes1" value="হ্যাঁ"> হ্যাঁ</label> <br>
                            <label class="ml-4" for="no2"> <input type="radio" name="gender" id="no2" value="না"> না</label> <br>
                            
                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group col-lg-12 mb-2">
                            <label for="gender">৬। খানা পর্যায়ে স্বাস্থ্যসেবা প্রদানে অ্যাপস ভিত্তিক কর্ম সম্পাদনে আপনার সমস্যাসমহূ চিহ্নিত করুন:</label><br>
                            <label class="ml-4" for="apps-download"><input type="checkbox" name="gender" id="apps-download" value="অ্যাপস ডাউনলোড  ইনস্টল"> অ্যাপস ডাউনলোড  ইনস্টল</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="লগইন ইউজার আইড"> লগইন ইউজার আইড</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="খানা পর্যায়ে তথ্য সংগ্রহ"> খানা পর্যায়ে তথ্য সংগ্রহ</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="তথ্য মোবাইল অ্যাপসে সংরক্ষণ"> তথ্য মোবাইল অ্যাপসে সংরক্ষণ</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="ইন্টারনেট"> ইন্টারনেট</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="সার্ভার"> সার্ভার </label> <br>
                            
                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-lg-12 mb-2">
                            <label for="gender">৭। খানা পর্যায়ে স্বাস্থ্যসেবা প্রদানের ক্ষেত্রে  কী কী  বিষয় প্রয়োজনীয়  বলে মনে করেন?</label><br>
                            <label class="ml-4" for="male"><input type="checkbox" name="gender" id="male" value="৫ দিন ব্যাপি মৌলিক প্রশিক্ষণ"> ৫ দিন ব্যাপি মৌলিক প্রশিক্ষণ</label> <br>
                            <label class="ml-4" for="male"><input type="checkbox" name="gender" id="male" value="MHV অ্যাপ্লিকেশন"> MHV অ্যাপ্লিকেশন</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="PRIMA অ্যাপ্লিকেশন"> PRIMA অ্যাপ্লিকেশন</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="কোভিড -১৯ "> কোভিড -১৯  </label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="মাতৃস্বাস্থ্য বিষয় সমূহ"> মাতৃস্বাস্থ্য বিষয় সমূহ</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="পরিবার পরিকল্পনা সেবা সমূহ"> পরিবার পরিকল্পনা সেবা সমূহ</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="সংক্রামক রোগসমূহ"> সংক্রামক রোগসমূহ</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="অসংক্রামক রোগসমূহ"> অসংক্রামক রোগসমূহ </label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="সাধারণ জখম ও কাটা-ছেঁড়ার চিকিৎসা"> সাধারণ জখম ও কাটা-ছেঁড়ার চিকিৎসা </label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="স্বাস্থ্যশিক্ষা"> স্বাস্থ্যশিক্ষা </label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="কাউন্সেলিং"> কাউন্সেলিং </label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="রেফারেল ব্যবস্থা"> রেফারেল ব্যবস্থা </label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="সামাজিক সমস্যাসমূহ"> সামাজিক সমস্যাসমূহ </label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="কমিউনিটি গ্রুপ ও সাপোর্ট গ্রুপের সভার আয়োজন সম্পর্কে"> কমিউনিটি গ্রুপ ও সাপোর্ট গ্রুপের সভার আয়োজন সম্পর্কে </label> <br>
                            
                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group col-lg-12 mb-2">
                            <label for="gender">৮। কোভিড-১৯ প্রতিরোধও স্বাস্থ্যসুরক্ষা বিষয় সমহেূহের মধ্যে কী বিষয়ে আপনার প্রশিক্ষণ পাওয়া প্রয়োজন</label><br>
                            <label class="ml-4" for="male"><input type="radio" name="gender" id="male" value="হাত ধোয়া"> হাত ধোয়া</label> <br>
                            <label class="ml-4" for="female"> <input type="radio" name="gender" id="female" value="মাস্ক পরা"> মাস্ক পরা</label> <br>
                            <label class="ml-4" for="female"> <input type="radio" name="gender" id="female" value="সামাজিক দুরুত্ব মেনে চলা"> সামাজিক দুরুত্ব মেনে চলা</label> <br>
                            <label class="ml-4" for="female"> <input type="radio" name="gender" id="female" value="কোভিড-১৯ সম্পর্কে সচেতনতা সৃষ্টি করা"> কোভিড-১৯ সম্পর্কে সচেতনতা সৃষ্টি করা</label> <br>
                            <label class="ml-4" for="female"> <input type="radio" name="gender" id="female" value="হাঁচি, কাশি বিষয়ক শিষ্টাচার"> হাঁচি, কাশি বিষয়ক শিষ্টাচার</label> <br>
                            <label class="ml-4" for="female"> <input type="radio" name="gender" id="female" value="কোভিড-১৯ ভ্যাকসিন গ্রহণে উদ্বুদ্ধকরণ"> কোভিড-১৯ ভ্যাকসিন গ্রহণে উদ্বুদ্ধকরণ</label> <br>
                            <label class="ml-4" for="female"> <input type="radio" name="gender" id="female" value="উপরের সব কয়টি"> উপরের সব কয়টি</label> <br>
                            <label class="ml-4" for="female"> <input type="radio" name="gender" id="female" value="একটাও না"> একটাও না</label> <br>
                            
                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-lg-12 mb-2">
                            <label for="gender">৯। এমএইচভি (MHV) কর্মপরিধি অনুযারী ডিজিটাল অ্যাপস এর ব্যবহার কী কী  ক্ষেত্রে বেশি ব্যবহার হয়েছে?</label><br>
                            <label class="ml-4" for="male"><input type="checkbox" name="gender" id="male" value="কমিউনিটি গ্রুপ সভার তথ্য প্রদান"> কমিউনিটি গ্রুপ সভার তথ্য প্রদান</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="শিশু স্বাস্থ্য সেবার তথ্য প্রদান"> শিশু স্বাস্থ্য সেবার তথ্য প্রদান</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="মাতৃ স্বাস্থ্য সেবার তথ্য প্রদান"> মাতৃ স্বাস্থ্য সেবার তথ্য প্রদান</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="সংক্রামক ব্যাধির তথ্য প্রদান"> সংক্রামক ব্যাধির তথ্য প্রদান</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="অসংক্রামক ব্যাধির তথ্য প্রদান"> অসংক্রামক ব্যাধির তথ্য প্রদান</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="রেফার করার তথ্য প্রদান"> রেফার করার তথ্য প্রদান </label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="স্বাস্থ্য শিক্ষার তথ্য প্রদান "> স্বাস্থ্য শিক্ষার তথ্য প্রদান </label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="উঠান বৈঠাকের তথ্য প্রদান"> উঠান বৈঠাকের তথ্য প্রদান </label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="কমিউনিটি সাপোর্ট গ্রুপ সভার তথ্য প্রদান"> কমিউনিটি সাপোর্ট গ্রুপ সভার তথ্য প্রদান </label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="খানা ভিত্তিক তথ্য সংগ্রহ প্রদান"> খানা ভিত্তিক তথ্য সংগ্রহ প্রদান </label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="পুষ্টি সেবার তথ্য প্রদান"> পুষ্টি সেবার তথ্য প্রদান </label> <br>
                            
                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-lg-12 mb-2">
                            <label for="gender">১০। খানা পর্যায়ে রোগ প্রতিরোধের জন্য কী কী বিষয় আপনি প্রয়োজনীয় মনে করেন?</label><br>
                            <label class="ml-4" for="male"><input type="checkbox" name="gender" id="male" value="স্বাস্থ্যশিক্ষা"> স্বাস্থ্যশিক্ষা</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="সিজি সভায় রোগ প্রতিরোধ সম্পর্কে আলোচনা"> সিজি সভায় রোগ প্রতিরোধ সম্পর্কে আলোচনা</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="সিএসজি সদস্যদের মাধ্যমে কমিউনিটিতে স্বাস্থ্য সচেতনতা সৃষ্টি করা"> সিএসজি সদস্যদের মাধ্যমে কমিউনিটিতে স্বাস্থ্য সচেতনতা সৃষ্টি করা</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="উঠান বৈঠকে রোগ প্রতিরোধের পদ্ধতি সম্পর্কে আলোচনা করা"> উঠান বৈঠকে রোগ প্রতিরোধের পদ্ধতি সম্পর্কে আলোচনা করা</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="সম্ভাব্য রোগীদের রেফার"> সম্ভাব্য রোগীদের রেফার</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="সম্ভাব্য রোগীদের সম্পর্কে উর্ধবতন  কর্তৃপক্ষকে অবগত করা"> সম্ভাব্য রোগীদের সম্পর্কে উর্ধবতন  কর্তৃপক্ষকে অবগত করা </label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="সিজি ও সিএসজি সভা আয়োজনে এমএইচভিদের করণীয়"> সিজি ও সিএসজি সভা আয়োজনে এমএইচভিদের করণীয়</label> <br>
                        </div>
                        
                        <div class="form-group col-lg-12 mb-2">
                            <label for="gender">১১। শিশুর স্বাভাবিক বিকাশ অধিবেশনের আওতায় নিচের কোন বিষয়টি আপনার কাছে অধিক গুরুত্বপূর্ণ।</label><br>
                            <label class="ml-4" for="male"><input type="radio" name="gender" id="male" value="শিশুর বিকাশের ক্ষেত্র সমূহ"> শিশুর বিকাশের ক্ষেত্র সমূহ</label> <br>
                            <label class="ml-4" for="female"> <input type="radio" name="gender" id="female" value="শিশুর বিকাশের ধাপসমূহ"> শিশুর বিকাশের ধাপসমূহ</label> <br>
                            <label class="ml-4" for="female"> <input type="radio" name="gender" id="female" value="শিশুর বিকাশ জনিত সমস্যার উপসর্গ সমূহ"> শিশুর বিকাশ জনিত সমস্যার উপসর্গ সমূহ</label> <br>
                            <label class="ml-4" for="female"> <input type="radio" name="gender" id="female" value="অটিজম  এর প্রথমিক পর্যায়ের লক্ষণ সমূহ"> অটিজম  এর প্রথমিক পর্যায়ের লক্ষণ সমূহ</label> <br>
                            <label class="ml-4" for="female"> <input type="radio" name="gender" id="female" value="শিশুর বিকাশ জনিত সমস্যা প্রতিরোধে কমিউনিটি পর্যায়ে এমএইচভিদের করণীয়"> শিশুর বিকাশ জনিত সমস্যা প্রতিরোধে কমিউনিটি পর্যায়ে এমএইচভিদের করণীয়</label> <br>
                        </div>
                        <div class="form-group col-lg-12 mb-2">
                            <label for="gender">১২। হাতে কলমে প্রশিক্ষণের জন্য কোন বিষয়টি গুরুত্বপূর্ণ মনে করেন ?</label><br>
                            <label class="ml-4" for="male"><input type="radio" name="gender" id="male" value="MHV অ্যাপস এর ব্যবহার"> MHV অ্যাপস এর ব্যবহার</label> <br>
                            <label class="ml-4" for="female"> <input type="radio" name="gender" id="female" value="PRIMA অ্যাপস এর ব্যবহার"> PRIMA অ্যাপস এর ব্যবহার</label> <br>
                            <label class="ml-4" for="female"> <input type="radio" name="gender" id="female" value="সমন্বিত MHV এবং PRIMA অ্যাপস ব্যবহার"> সমন্বিত MHV এবং PRIMA অ্যাপস ব্যবহার</label> <br>
                            <label class="ml-4" for="female"> <input type="radio" name="gender" id="female" value="মোবাইল অ্যাপ্লিকেশন কর্মসহায়িকা"> মোবাইল অ্যাপ্লিকেশন কর্মসহায়িকা</label> <br>
                            <label class="ml-4" for="female"> <input type="radio" name="gender" id="female" value="অনলাইন রিপোটিং (অ্যাপস এর ব্যবহার)"> অনলাইন রিপোটিং (অ্যাপস এর ব্যবহার)</label> <br>
                        </div>
                        <div class="form-group col-lg-12 mb-2">
                            <label for="gender">১৩। রিফ্রেশার্স প্রশিক্ষণে মাল্টিপারপাস হেলথ ভলান্টিয়ার এবং কমিউনিটি ক্লিনিক বিষয়ক কোন অধিবেশনটি আপনার নিকট  গুরুত্বপূর্ণ ?</label><br>
                            <label class="ml-4" for="male"><input type="checkbox" name="gender" id="male" value="মাল্টিপারপাস হেলথ ভলান্টিয়ারের ধারণা"> মাল্টিপারপাস হেলথ ভলান্টিয়ারের ধারণা</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="কমিউনিটি ক্লিনিকের পাটভূমি"> কমিউনিটি ক্লিনিকের পাটভূমি</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="এমএইচভিদের কর্মপরিধি  এবং প্রণোদনভাতা"> এমএইচভিদের কর্মপরিধি  এবং প্রণোদনভাতা</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="মাল্টিপারপাস হেলথ ভলান্টিয়ার’ কে? এবং কেন?"> মাল্টিপারপাস হেলথ ভলান্টিয়ার’ কে? এবং কেন?</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="সিজি এবং সিএসজি সভা আয়োজন ও সঞ্চালনায় এমএইচভিদের করণীয়"> সিজি এবং সিএসজি সভা আয়োজন ও সঞ্চালনায় এমএইচভিদের করণীয়</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="জনগণের অংশগ্রহণ ও সিজি তহবিল গঠনে এমএইচভিদের করণীয়"> জনগণের অংশগ্রহণ ও সিজি তহবিল গঠনে এমএইচভিদের করণীয়</label> <br>
                        </div>
                        <div class="form-group col-lg-12 mb-2">
                            <label for="gender">১৪। রিফ্রেশার্স প্রশিক্ষণে যোগাযোগ ও স্বাস্থ্য শিক্ষা বিষয়ক কোন অধিবেশনটি  আপনি গুরুত্বপূর্ণ মনে করেন?</label><br>
                            <label class="ml-4" for="male"><input type="checkbox" name="gender" id="male" value="যোগাযোগ"> যোগাযোগ</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="এলাকার জনগোষ্ঠীকে জানা"> এলাকার জনগোষ্ঠীকে জানা</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="কমিউনিটির স্বাস্থ্যচিত্র জানা এবং বুঝা"> কমিউনিটির স্বাস্থ্যচিত্র জানা এবং বুঝা</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="খানার ধারণা ও গঠন"> খানার ধারণা ও গঠন</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="কাউন্সেলিং বা পরামর্শদান"> কাউন্সেলিং বা পরামর্শদান</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="উঠান বৈঠক ও স্বাস্থ্য শিক্ষা"> উঠান বৈঠক ও স্বাস্থ্য শিক্ষা</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="রেফারেল সেবা"> রেফারেল সেবা</label> <br>
                        </div>
                        <div class="form-group col-lg-12 mb-2">
                            <label for="gender">১৫। রিফ্রেশার্স প্রশিক্ষণে মাতৃস্বাস্থ্য বিষয়ক কোন অধিবেশনটি  আপনি গুরুত্বপূর্ণ মনে করেন?</label><br>
                            <label class="ml-4" for="male"><input type="checkbox" name="gender" id="male" value="গর্ভবতী মায়ের যত্ন"> গর্ভবতী মায়ের যত্ন</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="গর্ভবতী মায়ের উচ্চরক্তচাপ"> গর্ভবতী মায়ের উচ্চরক্তচাপ</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="গর্ভবতী ও প্রসূতি মায়ের পুষ্টি"> গর্ভবতী ও প্রসূতি মায়ের পুষ্টি</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="প্রসবপরবর্তী  পরিবার - পরিকল্পনা সেবা"> প্রসবপরবর্তী  পরিবার - পরিকল্পনা সেবা</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="বাড়ীতে গর্ভবতী মায়ের যত্ন"> বাড়ীতে গর্ভবতী মায়ের যত্ন</label> <br>
                        </div>
                        <div class="form-group col-lg-12 mb-2">
                            <label for="gender">১৬। রিফ্রেশার্স প্রশিক্ষণে সংক্রামক রোগ প্রতিরোধ বিষয়ক কোন অধিবেশনটি  আপনি গুরুত্বপূর্ণ মনে করেন?</label><br>
                            <label class="ml-4" for="male"><input type="checkbox" name="gender" id="male" value="রোগ কী,সংক্রামক রোগের বিস্তার, ঝুঁকিপূর্ণ জনগোষ্ঠী চিহ্নিতকরণ এবং প্রতিকার"> রোগ কী,সংক্রামক রোগের বিস্তার, ঝুঁকিপূর্ণ জনগোষ্ঠী চিহ্নিতকরণ এবং প্রতিকার</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="ম্যালেরিয়া"> ম্যালেরিয়া</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="যক্ষ্মরোগ"> যক্ষ্মরোগ</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="ডেঙ্গুজ্বর"> ডেঙ্গুজ্বর</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="কুষ্ঠরোগ"> কুষ্ঠরোগ</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="জলাতম্ক"> জলাতম্ক</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="যকৃতের ভাইরাস জনিত প্রদাহ"> যকৃতের ভাইরাস জনিত প্রদাহ</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="বার্ড ফ্লু/ এভিয়ান ফ্লু ও সোয়াইস ফ্লু এবং নিপাহ রোগ"> বার্ড ফ্লু/ এভিয়ান ফ্লু ও সোয়াইস ফ্লু এবং নিপাহ রোগ</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="কোভিড-১৯"> কোভিড-১৯</label> <br>
                        </div>
                        <div class="form-group col-lg-12 mb-2">
                            <label for="gender">১৭। রিফ্রেশার্স প্রশিক্ষণে অসংক্রামক রোগ প্রতিরোধ বিষয়ক কোন অধিবেশনটি  আপনি গুরুত্বপূর্ণ মনে করেন?</label><br>
                            <label class="ml-4" for="male"><input type="checkbox" name="gender" id="male" value="সর্প দংশন প্রতিরোধও প্রাথমিকভাবে কমিউনিটি পর্যায়ে করণীয়"> সর্প দংশন প্রতিরোধও প্রাথমিকভাবে কমিউনিটি পর্যায়ে করণীয়</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="উচ্চরক্তচাপ"> উচ্চরক্তচাপ</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="ডায়াবেটিস"> ডায়াবেটিস</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="নারীদের স্তন ক্যান্সার"> নারীদের স্তন ক্যান্সার</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="জরায়ু- মুখ ক্যান্সার"> জরায়ু- মুখ ক্যান্সার</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="শিশুর প্রারাম্ভিক বিকাশ"> শিশুর প্রারাম্ভিক বিকাশ</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="অটিজম"> অটিজম</label> <br>
                        </div>
                        <div class="form-group col-lg-12 mb-2">
                            <label for="gender">১৮। রিফ্রেশার্স প্রশিক্ষণে শিশুস্বাস্থ্য ও পুষ্টি  বিষয়ক কোন অধিবেশনটি  আপনি গুরুত্বপূর্ণ মনে করেন?</label><br>
                            <label class="ml-4" for="male"><input type="checkbox" name="gender" id="male" value="নবজাতকের পরিচর্যা/ যত্ন বা সেবা"> নবজাতকের পরিচর্যা/ যত্ন বা সেবা</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="শিশুর জন্মকালীন স্বল্প ওজন"> শিশুর জন্মকালীন স্বল্প ওজন</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="মাতৃদুগ্ধ দান"> মাতৃদুগ্ধ দান</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="ডায়রিয়া"> ডায়রিয়া</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="নিউমোনিয়া"> নিউমোনিয়া</label> <br>
                        </div>
                        <div class="form-group col-lg-12 mb-2">
                            <label for="gender">১৯। রিফ্রেশার্স প্রশিক্ষণে প্রাথমিক স্বাস্থ্য পরিচর্যা  বিষয়ক কোন অধিবেশনটি  আপনি গুরুত্বপূর্ণ মনে করেন?</label><br>
                            <label class="ml-4" for="male"><input type="checkbox" name="gender" id="male" value="প্রাথমিক স্বাস্থ্য পরিচর্যা"> প্রাথমিক স্বাস্থ্য পরিচর্যা</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="প্রবীণদের স্বাস্থ্য পরিবর্যা"> প্রবীণদের স্বাস্থ্য পরিবর্যা</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="দূর্ঘটনাজনিত আঘাত ও পরিস্থিতি মোকাবেলা"> দূর্ঘটনাজনিত আঘাত ও পরিস্থিতি মোকাবেলা</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="পরিষ্কার পরিচ্ছন্নতা ও কিশোর - কিশোরীর স্বাস্থ্য"> পরিষ্কার পরিচ্ছন্নতা ও কিশোর - কিশোরীর স্বাস্থ্য</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="চোখের রোগ ও দৃষ্টিহীনতা"> চোখের রোগ ও দৃষ্টিহীনতা</label> <br>
                        </div>
                        <div class="form-group col-lg-12 mb-2">
                            <label for="gender">২০। রিফ্রেশার্স প্রশিক্ষণে কিশোর -কিশোরীর   স্বাস্থ্য পরিচর্যা  বিষয়ক কোন অধিবেশনটি  আপনি গুরুত্বপূর্ণ মনে করেন?</label><br>
                            <label class="ml-4" for="male"><input type="checkbox" name="gender" id="male" value="কিশোর কিশোরীর পুষ্টি"> কিশোর কিশোরীর পুষ্টি</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="কিশোর- কিশোরীদের বয়ঃসন্ধিকালীন স্বাস্থ্য পরিচর্যা"> কিশোর- কিশোরীদের বয়ঃসন্ধিকালীন স্বাস্থ্য পরিচর্যা</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="প্রজনন স্বাস্থ্যসেবা"> প্রজনন স্বাস্থ্যসেবা</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="পরিষ্কার পরিচ্ছন্নতা ও কিশোর - কিশোরীর স্বাস্থ্য"> পরিষ্কার পরিচ্ছন্নতা ও কিশোর - কিশোরীর স্বাস্থ্য</label> <br>
                        </div>
                        <div class="form-group col-lg-12 mb-2">
                            <label for="gender">২১। রিফ্রেশার্স প্রশিক্ষণে  স্বাস্থ্য  বিষয়ক সামাজিক সমস্যার কোন অধিবেশনটি  আপনি গুরুত্বপূর্ণ মনে করেন?</label><br>
                            <label class="ml-4" for="male"><input type="checkbox" name="gender" id="male" value="বাল্যবিবাহের কুফল ও করণীয়"> বাল্যবিবাহের কুফল ও করণীয়</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="জেন্ডার: বৈষম্য ও সচেতনতা"> জেন্ডার: বৈষম্য ও সচেতনতা</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="মেয়েদের উত্ত্যক্ত করা বা ইভটিজিং এবং যৌন নিপীড়ন নির্যাতন"> প্রজনন স্বাস্থ্যসেবা</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="ট্রান্স জেন্ডার"> ট্রান্স জেন্ডার</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="নারীর প্রতি বৈসম্য সহিংসতা প্রতিরোধ"> নারীর প্রতি বৈসম্য সহিংসতা প্রতিরোধ</label> <br>
                            <label class="ml-4" for="female"> <input type="checkbox" name="gender" id="female" value="শুদ্ধাচার কৌশল বাস্তবায়ন"> শুদ্ধাচার কৌশল বাস্তবায়ন</label> <br>
                        </div>
                        <div class="form-group col-lg-12 mb-2">
                            <label>২২। মতামত </label> <br>
                            <textarea style="border-top:none; border-left:none; border-right:none; border-radius:none;" class="form-control" col="4" row="4"></textarea>
                        </div>
                        <div class="clearfix mt-2">
                            <div class="float-md-right ml-3">
                                <a href="{{ route('home') }}" class="btn btn-dark">Back</a>
                                <button type="submit" class="btn btn-info">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
@endpush

