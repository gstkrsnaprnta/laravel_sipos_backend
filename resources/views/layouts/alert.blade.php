@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible show fade">
        <div class="alert-body">
            <button class="close" data-dismiss="alert">
                <span>×</span>
            </button>
            <p>{{ $message }}</p>
        </div>
    </div>

    <script>
        setTimeout(function() {
            $('.alert').alert('close');
        }, 3000); // 3000 ms = 3 detik
    </script>
@endif
