$(document).ready(function() {
    // Initialiser FullCalendar
    $('#calendar').fullCalendar({
        events: events, // Utiliser la variable 'events' passée depuis PHP
        eventRender: function(event, element) {
            // Afficher la localisation de l'événement dans la fenêtre popup de l'événement
            element.attr('title', 'Location: ' + event.location);
        },
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        }
    });

    // Cacher le calendrier au début
    $('#calendar').hide();

    // Afficher/masquer le calendrier lorsqu'on clique sur le bouton
    $('#calendarButton').click(function() {
        $('#calendar').toggle(); // Alterner l'affichage du calendrier
    });
});
