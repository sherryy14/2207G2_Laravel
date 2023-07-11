@extends('template.section')
@push('title')
    <title>Contact</title>
@endpush


@section('section')
    <h1 class="text-center">Contact Page</h1>
    <div class="container">

        <form class="row g-3" method="post" >
            @csrf
            <div class="col-md-4">
                <label for="validationDefault01" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="validationDefault01">
                <span class="text-danger">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="col-md-4">
                <label for="validationDefault02" class="form-label">Email</label>
                <input type="text" class="form-control" id="validationDefault02" name="email">
                <span class="text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="col-md-4">
                <label for="validationDefaultUsername" class="form-label">Username</label>
                <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                    <input type="text" class="form-control" id="validationDefaultUsername" name="username"
                        aria-describedby="inputGroupPrepend2">
                        
                </div>
                <span class="text-danger">
                    @error('username')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="col-md-6">
                <label for="validationDefault03" class="form-label">Password</label>
                <input type="password" class="form-control" id="validationDefault03" name="password">
                <span class="text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="col-md-6">
                <label for="validationDefault03" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="validationDefault03" name="confirm_password">
                <span class="text-danger">
                    @error('confirm_password')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="col-md-6">
                <label for="validationDefault03" class="form-label">City</label>
                <input type="text" class="form-control" id="validationDefault03" name="city">
                <span class="text-danger">
                    @error('city')
                        {{ $message }}
                    @enderror
                </span>
            </div>


            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
    </div>
@endsection
