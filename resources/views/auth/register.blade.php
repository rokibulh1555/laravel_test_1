<!DOCTYPE html>
<html>
    <head>
        <title>Practice</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    </head>
<body>

<div class="w-full h-100 d-flex" style="background-color: #ffffff">
    <div class="w-50" style="padding: 3rem 5rem;">
        <div class="regi_box">
            <div style="text-align: left; margin-left: 1.7rem">
                <div style="width: 100%">
                    <img src="{{ asset('images/Logo_1.png') }}" alt="Logo" />
                </div>
                <div class="mt-4 font-weight-bold">
                    <p>Get started with a free Account</p>
                </div>
            </div>

            <form method="POST" action="{{ route('register') }}" class="p-4">
                @csrf

                <!-- Name Fields -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="first_name" class="form-label">First Name</label>
                        <input id="first_name" type="text" name="first_name" class="form-control" required autofocus>
                    </div>
                    <div class="col-md-6">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input id="last_name" type="text" name="last_name" class="form-control" required>
                    </div>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input id="email" type="email" name="email" class="form-control" required>
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" type="password" name="password" class="form-control" required>
                </div>

                <!-- Remember Me -->
                <div class="form-check mb-3">
                    <input type="checkbox" id="remember" class="form-check-input">
                    <label for="remember" class="form-check-label">Remember me</label>
                </div>

                <!-- Submit Button -->
                <button style="background-color: #A946E7; border: 1px solid #A946E7" type="submit" class="btn btn-primary w-100">Create account</button>

                <p class="mt-3 text-center">
                    Already have an account?
                    <a href="{{ route('login') }}" class="text-decoration-none" style="color: #A946E7">Sign in now</a>
                </p>

                <div class="font-weight-light" style="margin-top: 3rem">&copy Ezipzy 2025</div>
            </form>


        </div>
    </div>
    <div class="w-50 right_banner">
        <h1>EZIPYZI</h1>
        <div style="font-size: 1.2rem">Sell your digital files</div>
    </div>
</div>
</body>
</html>
