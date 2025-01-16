<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form class="modal-content" method="POST" action="{{ route('event.submit') }}">
            @csrf 
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Add Schedule</h5>
                <button type of="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="event">Event Name</label>
                    <input type="text" class="form-control" id="event" name="event" placeholder="Enter event name" required>
                </div>
                <div class="form-group">
                    <label for="start">Start Date</label>
                    <input type="datetime-local" class="form-control" id="start" name="start" required>
                </div>
                <div class="form-group">
                    <label for="end">End Date</label>
                    <input type="datetime-local" class="form-control" id="end" name="end" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type of="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
<!-- FullCalendar CSS -->
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css" rel="stylesheet">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- FullCalendar JS -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</div>
