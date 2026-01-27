@if(count($errors) > 0)
    @push('scripts')
    <script>
        $(document).ready(function() {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                html: '<ul style="text-align: left; list-style-position: inside;">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>',
            });
        });
    </script>
    @endpush
@endif

@if(session('success'))
    @push('scripts')
    <script>
        $(document).ready(function() {
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                timer: 3000,
                showConfirmButton: false
            });
        });
    </script>
    @endpush
@endif

@if(session('error'))
    @push('scripts')
    <script>
        $(document).ready(function() {
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: '{{ session('error') }}',
            });
        });
    </script>
    @endpush
@endif