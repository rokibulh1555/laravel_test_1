{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Dashboard') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 text-gray-900">--}}
{{--                    {{ __("You're logged in!") }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            background-color: #e6d5f7;
            /*height: 100vh;*/
            padding: 20px;
        }
        .sidebar a {
            text-decoration: none;
            color: #000;
            display: block;
            padding: 10px;
            border-radius: 5px;
        }
        .sidebar a:hover, .sidebar a.active {
            background-color: #d4b5f7;
        }

        .upper_box {
            height: 100%;
            width: 100%;
            object-fit: contain;
            scale: 0.65;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 sidebar">
            <div style="scale: 0.8; margin-bottom: 2rem">
                <img src="{{ asset('images/Logo_1.png') }}" alt="Logo" />
            </div>
            <a href="#" class="active"><i class="fas fa-home"></i> Home</a>
            <a href="#"><i class="fas fa-box"></i> Products</a>
            <a href="#"><i class="fas fa-shopping-cart"></i> Orders</a>
            <a href="#"><i class="fas fa-tags"></i> Coupons</a>
            <a href="#"><i class="fas fa-envelope"></i> Email Marketing</a>
            <a href="#"><i class="fas fa-users"></i> Customers</a>
            <a href="#"><i class="fas fa-store"></i> My Store</a>
            <a href="#"><i class="fas fa-user-friends"></i> Affiliate</a>
            <a href="#"><i class="fas fa-cog"></i> Settings</a>
        </nav>

        <main class="col-md-10 p-4">
            <div>
                <img src="{{ asset('images/dashboard_navbar.png') }}" height="50" width="1000"  alt="revenue chart"/>
            </div>
            <div class="row">
                <div class="col-md-4" style="margin-left: -40px; margin-bottom: 2rem;">
                    <div class="upper_box" style="height: 6.5rem; margin-left: -1rem">
                        <img src="{{ asset('images/dashboard_upper_box_1.png')  }}" alt="Dashboard_card" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="upper_box" style="height: 6.5rem;">
                        <img src="{{ asset('images/dashboard_upper_box_2.png')  }}" alt="Dashboard_card" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="upper_box" style="height: 6.5rem;">
                        <img src="{{ asset('images/dashboard_upper_box_3.png')  }}" alt="Dashboard_card" />
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-8">
                    <div>
                        <img src="{{ asset('images/revenue_chart.png') }}" height="295" width="650"  alt="revenue chart"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <img src="{{ asset('images/overview_chart.png') }}" height="295" width="280"  alt="revenue chart"/>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-12">
                    <div>
                        <img src="{{ asset('images/recent_orders.png') }}" width="1000" height="247" alt="recent orders"/>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
</html>

