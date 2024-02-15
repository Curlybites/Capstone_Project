<div class="bs-toast toast position-fixed bottom-0 end-0 m-3 fade show bg-green text-success" role="alert" aria-live="assertive" aria-atomic="true" id="alert" data-bs-autohide="true" data-bs-delay="3000">
    <div class="toast-header ">
        <i class='bx bx-bell d-block w-px-20 h-auto rounded me-2 text-white'></i>
        <div class="me-auto fw-medium text-white">QCMDS</div>
        <small class="text-white">Just now</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body text-white">
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