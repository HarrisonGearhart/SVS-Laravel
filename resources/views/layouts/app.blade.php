<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Filtrex Chat</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    
    <style>
        body {
            background: linear-gradient(135deg, #b8d4ff 0%, #a1c4ff 50%, #cfe0ff 100%);
            min-height: 100vh;
        }
        
        .navbar-inverse {
            background-color: #007bff;
            border-color: #0056b3;
        }
        .navbar-inverse .navbar-brand,
        .navbar-inverse .navbar-nav > li > a {
            color: #fff;
        }
        .navbar-inverse .navbar-nav > li > a:hover,
        .navbar-inverse .navbar-nav > li > a:focus {
            background-color: #0056b3;
            color: #fff;
        }
        .navbar-inverse .navbar-toggle {
            border-color: #0056b3;
        }
        .navbar-inverse .navbar-toggle:hover,
        .navbar-inverse .navbar-toggle:focus {
            background-color: #0056b3;
        }
        .navbar-inverse .navbar-collapse {
            border-color: #0056b3;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary:active {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }
        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
            color: #343a40;
        }
        .btn-warning:hover {
            background-color: #e0a800;
            border-color: #d39e00;
            color: #343a40;
        }
        .btn-info {
            background-color: #17a2b8;
            border-color: #17a2b8;
        }
        .btn-info:hover {
            background-color: #138496;
            border-color: #117a8b;
        }
        .panel-primary > .panel-heading {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
        }
        .page-header {
            border-bottom-color: #007bff;
        }
        a {
            color: #007bff;
        }
        a:hover,
        a:focus {
            color: #0056b3;
        }
        .pagination > .active > a,
        .pagination > .active > span,
        .pagination > .active > a:hover,
        .pagination > .active > span:hover,
        .pagination > .active > a:focus,
        .pagination > .active > span:focus {
            background-color: #007bff;
            border-color: #007bff;
        }
        .pagination > li > a,
        .pagination > li > span {
            color: #007bff;
        }
        .pagination > li > a:hover,
        .pagination > li > span:hover,
        .pagination > li > a:focus,
        .pagination > li > span:focus {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div id="app">
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>

    <!-- SweetAlert2 Handler -->
    <script>
        // Setup CSRF token for all AJAX requests
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Handle delete confirmations
        $(document).on('click', '.delete-confirm', function(e) {
            e.preventDefault();
            var form = $(this).closest('form');
            
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });

        // Handle logout confirmation
        $(document).on('click', '.logout-link', function(e) {
            e.preventDefault();
            
            Swal.fire({
                title: 'Are you sure you want to log out?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#007bff',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Yes, log out',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('logout-form').submit();
                }
            });
        });
    </script>

    @stack('scripts')
</body>
</html>