<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1">
                <i class="bi-hexagon-fill me-2"></i> Data Master
            </a>

            <button type="button" class="navbar-toggler"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto">
                        <a href="{{ route('home') }}" class="nav-link">Home</a>
                    </li>

                    <li class="nav-item col-2 col-md-auto">
                        <a href="{{ route('employees.index') }}" class="nav-link active">
                            Employee List
                        </a>
                    </li>
                </ul>

                <a href="{{ route('profile') }}" class="btn btn-outline-light my-2 ms-md-auto">
                    <i class="bi-person-circle me-1"></i> My Profile
                </a>
            </div>
        </div>
    </nav>

    <!-- Employee Detail -->
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3">{{ $pageTitle }}</h4>
            </div>
        </div>

        <hr>

        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered mb-0 bg-white">
                <tr>
                    <th>First Name</th>
                    <td>{{ $employee->firstname }}</td>
                </tr>
                <tr>
                    <th>Last Name</th>
                    <td>{{ $employee->lastname }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $employee->email }}</td>
                </tr>
                <tr>
                    <th>Age</th>
                    <td>{{ $employee->age }}</td>
                </tr>
                <tr>
                    <th>Position</th>
                    <td>{{ $employee->position_name }}</td>
                </tr>
            </table>
        </div>

        <a href="{{ route('employees.index') }}" class="btn btn-outline-dark mt-3">
            <i class="bi-arrow-left-circle me-2"></i> Back
        </a>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
