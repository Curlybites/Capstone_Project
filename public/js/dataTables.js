document.addEventListener('DOMContentLoaded', function () {
    var table = new DataTable("#dataTable", {
        paging: true,
        lengthMenu: [5,10,20],
        pageLength: 5 // Optional: If you want to set the initial page length explicitly
    });
});

// $(document).ready(function() {
//     $('#dataTable').DataTable({
//         "paging": true,
//         "pageLength": 5 // Display 5 rows per page
//     });
// });
