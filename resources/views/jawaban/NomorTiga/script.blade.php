<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.btn-edit').forEach(button => {
            button.addEventListener('click', function () {
                const eventId = this.dataset.id;
                const eventName = this.dataset.name;
                const startTime = this.dataset.start;
                const endTime = this.dataset.end;

                document.getElementById('event_id').value = eventId;
                document.getElementById('edit_event').value = eventName;
                document.getElementById('edit_start').value = startTime.replace(' ', 'T');
                document.getElementById('edit_end').value = endTime.replace(' ', 'T');

                const editModal = new bootstrap.Modal(document.getElementById('editModal'));
                editModal.show();
            });
        });

        document.querySelectorAll('.btn-delete').forEach(button => {
            button.addEventListener('click', function () {
                if (confirm('Apakah Anda yakin ingin menghapus event ini?')) {
                    this.closest('form').submit();
                }
            });
        });
    });

    $('.table-schedule').DataTable({
        pageLength: 10,
        lengthMenu: [10, 25, 50, 100], 
        language: {
            paginate: {
                next: '<button class="btn btn-primary btn-sm d-flex align-items-center justify-content-center"><i class="bi bi-chevron-right"></i></button>',
                previous: '<button class="btn btn-primary btn-sm d-flex align-items-center justify-content-center"><i class="bi bi-chevron-left"></i></button>'
            },
            lengthMenu: "Display <select class='form-select form-select-sm ms-1 me-1'>" +
                "<option value='10'>10</option>" +
                "<option value='25'>25</option>" +
                "<option value='50'>50</option>" +
                "<option value='100'>100</option>" +
                "</select> records per page",
            zeroRecords: "No records found.",
            info: "Showing page <b>_PAGE_</b> of <b>_PAGES_</b>",
            infoEmpty: "No records available.",
            infoFiltered: "(filtered from a total of <b>_MAX_</b> records)"
        },
        dom: '<"row mb-3"<"col-md-6 d-flex align-items-center"l><"col-md-6 d-flex justify-content-end"f>>' +
             '<"row"<"col-12 table-responsive"tr>>' +
             '<"row mt-3"<"col-md-5 d-flex align-items-center"i><"col-md-7 d-flex justify-content-end"p>>'
    });
</script>

<!-- FullCalendar CSS -->
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css" rel="stylesheet">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- FullCalendar JS -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
