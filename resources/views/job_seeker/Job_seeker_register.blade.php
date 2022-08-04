@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
				@if (session('success'))
                    <div class="alert alert-success">
                        <strong>Success!&nbsp;</strong>{{ session('success') }}
                    </div>
                @endif

                 @if (session('failed'))
                    <div class="alert alert-danger">
                        <strong>Failed!&nbsp;</strong>{{ session('failed') }}
                    </div>
                @endif

                @if(count($errors->all()) > 0)
                    <div class="alert alert-danger" role="alert">
                        <p><b></b></p>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('jobSeekerSave') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                           <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>                            
                        </div>
                        <div class="row mb-3">
                            <label for="experience" class="col-md-4 col-form-label text-md-end">{{ __('Experience') }}</label>

                            <div class="col-md-6">
                                <input id="experience" type="number" class="form-control @error('experience') is-invalid @enderror" name="experience" value="{{ old('experience') }}" required autocomplete="experience">

                                @error('experience')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>                            
                        </div>
                        <div class="row mb-3">
                            <label for="notice_periord" class="col-md-4 col-form-label text-md-end">{{ __('Notice Period') }}</label>

                            <div class="col-md-6">
                                <input id="notice_period" type="number" class="form-control @error('notice_period') is-invalid @enderror" name="notice_period" value="{{ old('notice_period') }}" required autocomplete="notice_period">

                                @error('notice_periord')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>                            
                        </div>
                        <div class="row mb-3">
                            <label for="skill" class="col-md-4 col-form-label text-md-end">{{ __('Skill') }}</label>

                            <div class="col-md-6">
                                <input id="skill" type="text" class="form-control @error('skill') is-invalid @enderror" name="skill" value="{{ old('skill') }}" required autocomplete="skill">

                                @error('notice_periord')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>                            
                        </div>
                        <div class="row mb-3">
                            <label for="job_location" class="col-md-4 col-form-label text-md-end">{{ __('Job Location') }}</label>

                            <div class="col-md-6">
                                <select class="form-select" name="job_location" id="job_location">
										<option value="">Select</option>
									@foreach($jobLocation as $location)
										<option value="{{$location->id}}">{{$location->name}}</option>
									@endforeach
                                </select>
                                @error('job_location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>                            
                        </div>
                        <div class="row mb-3">
                            <label for="job_location" class="col-md-4 col-form-label text-md-end">{{ __('Resume') }}</label>
                            <div class="col-md-6">
                                <input class="form-control" type="file" id="resume" name="resume" value="">                           
                            </div>                  
                        </div> 
                        <div class="row mb-3">
                            <label for="photo" class="col-md-4 col-form-label text-md-end">{{ __('Photo') }}</label>
                            <div class="col-md-6">
                                <input class="form-control" type="file" id="photo" name="photo" value="">                           
                            </div>                  
                        </div>                                                              
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
