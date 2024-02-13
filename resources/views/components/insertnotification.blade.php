<div class="bs-toast toast fade show position-fixed bottom-0 end-0 m-3 bg-primary " role="alert" aria-live="assertive" aria-atomic="true" id="alert">
    <div class="toast-header">
    <i class='bx bx-check d-block w-px-20 h-auto rounded me-2' ></i>
    {{-- <i class='bx bxs-bell  d-block w-px-20 h-auto rounded me-2'></i> --}}
    <div class="me-auto fw-medium">QCMDS Notification</div>
        <small>Just now</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
     <div class="toast-body">
        {{ session('success') }}
    </div>
</div>

<script>
    // Hide the toast after 5 seconds (5000 milliseconds)
    setTimeout(function() {
        var alert = document.getElementById('alert');
        var bsToast = new bootstrap.Toast(alert);
        bsToast.hide();
    }, 2000);
</script>