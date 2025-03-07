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
            <div style="text-align: left">
                <div style="width: 100%">
                    <img src="{{ asset('images/Logo_1.png') }}" alt="Logo" />
                </div>
                <div class="mt-4 font-weight-bold">
                    <p>Nice to see you again</p>
                </div>
            </div>

            <form method="POST" action="{{ route('login') }}" class="p-4">
                @csrf
                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Login</label>
                    <input id="email" type="email" name="email" class="form-control" placeholder="Email or Phone Number" required>
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" type="password" name="password" class="form-control" placeholder="Enter Password" required>
                </div>

                <!-- Remember Me -->
                <div class="form-check mb-3">
                    <input type="checkbox" id="remember" class="form-check-input">
                    <label for="remember" class="form-check-label">Remember me</label>
                </div>

                <!-- Submit Button -->
                <button style="background-color: #A946E7; border: 1px solid #A946E7" type="submit" class="btn btn-primary w-100">Create account</button>

                <p class="mt-3 text-center">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="text-decoration-none" style="color: #A946E7">Sign up now</a>
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
