@extends('layout.main')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form class="bg-light p-4 rounded shadow" method="POST" action="/Signup/store">
                    @csrf
                    <!-- Email input -->
                    <h1 class="text-center">
                        REGISTER
                    </h1>

                    <div class="mb-4">
                        <label for="form2Example2" class="form-label">Name</label>
                        <input type="text" id="form2Example2" name="name" class="form-control" placeholder="Enter your Name" />
                    </div>

                    <div class="mb-4">
                        <label for="form2Example1" class="form-label">Email address</label>
                        <input type="email" id="form2Example1" name="email" class="form-control" placeholder="Enter your email" />
                    </div>

                    <!-- Password input -->
                    <div class="mb-4">
                        <label for="form2Example2" class="form-label">Password</label>
                        <input type="password" id="form2Example2" name="password" class="form-control" placeholder="Enter your password" />
                    </div>

                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                        <div class="col d-flex align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                <label class="form-check-label" for="form2Example31"> Remember me </label>
                            </div>
                        </div>

                        <div class="col text-end">
                            <!-- Simple link -->
                            <a href="#!" class="text-decoration-none">Forgot password?</a>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <a href="/Signup/store">
                        <button class="btn btn-warning">Register</button>
                    </a>
                    <!-- Register buttons -->
                    <div class="text-center mb-3">
                        <p class="mb-1">Have a member? <a href="/Login/signin" class="text-decoration-none">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection