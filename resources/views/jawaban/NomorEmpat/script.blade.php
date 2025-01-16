<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        var calendarElement = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarElement, {
            initialView: 'dayGridMonth',
            themeSystem: 'bootstrap5',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            events: {
                url: "{{ route('event.get-json') }}",
                method: 'GET',
                failure: function() {
                    alert('Gagal mendapatkan event');
                }
            },
            eventContent: function(info) {
                let eventTitle = info.event.title;
                let eventStart = info.event.start.toLocaleString('id-ID', {
                    weekday: 'long',
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric',
                    hour: '2-digit',
                    minute: '2-digit',
                });

                let htmlContent = `
                    <div style="font-size: 0.9rem; font-weight: bold; color: #fff; background: ${info.event.backgroundColor}; border-radius: 5px; padding: 5px;">
                        <span>${eventTitle}</span>
                        <br>
                        <small>${eventStart}</small>
                    </div>
                `;
                return {
                    html: htmlContent
                };
            },
            editable: false,
            droppable: false,
            eventColor: '#007bff',
            eventTextColor: '#fff',
        });

        calendar.render();
    });
</script>
