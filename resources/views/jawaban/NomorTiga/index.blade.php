<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<table class="table table-bordered table-schedule">
    <thead>
        <tr>
            <th>ID</th>
            <th>Event Name</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($events as $event)
            <tr>
                <td>{{ $event->id }}</td>
                <td>{{ $event->event_name }}</td>
                <td>{{ $event->start_time }}</td>
                <td>{{ $event->end_time }}</td>
                <td>
                    <div class="action-buttons">
                        <button 
                            class="btn btn-icon btn-edit"
                            data-id="{{ $event->id }}" 
                            data-name="{{ $event->event_name }}" 
                            data-start="{{ $event->start_time }}" 
                            data-end="{{ $event->end_time }}">
                            <i class="fas fa-edit"></i>
                        </button>
                        <form action="{{ route('event.delete') }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="id" value="{{ $event->id }}">
                            <button 
                                type="button" 
                                class="btn btn-icon btn-delete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Event</h5>
                <button type of="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="editForm" method="POST" action="{{ route('event.update') }}">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <input type="hidden" id="event_id" name="id">
                    <div class="form-group">
                        <label for="edit_event">Event Name:</label>
                        <input type="text" id="edit_event" name="event" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="edit_start">Start Time:</label>
                        <input type="datetime-local" id="edit_start" name="start" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="edit_end">End Time:</label>
                        <input type="datetime-local" id="edit_end" name="end" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- FullCalendar CSS -->
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css" rel="stylesheet">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- FullCalendar JS -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
