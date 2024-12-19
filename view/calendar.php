<?php
// Inclure le contrôleur pour obtenir les événements
require_once '../controller/eventController.php';

// Récupérer tous les événements
$events = listEvents();  // Assurez-vous que cette fonction récupère bien tous les événements

// Créer un tableau JSON des événements
$calendarEvents = [];
foreach ($events as $event) {
    $calendarEvents[] = [
        'id' => $event['id'],  // Assurez-vous que 'id' existe et est unique
        'title' => $event['title'],
        'start' => date('Y-m-d', strtotime($event['date'])),  // Format YYYY-MM-DD pour FullCalendar
        'location' => $event['location'],
        'description' => $event['description'], // Ajout de la description pour l'affichage dans la pop-up
    ];
}

// Convertir en JSON et l'envoyer à JavaScript
echo '<script type="text/javascript">';
echo 'var events = ' . json_encode($calendarEvents) . ';';
echo '</script>';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendrier des événements</title>
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>

    <!-- Styles pour la modale -->
    <style>
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
    }

    .modal-content {
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        width: 80%;
        max-width: 600px;
    }

    .modal-header {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .modal-body {
        font-size: 18px;
    }

    .modal-footer {
        text-align: right;
    }

    .close {
        cursor: pointer;
        font-size: 20px;
        color: #aaa;
    }
    </style>
</head>

<body>

    <div class="container">
        <h2>Calendrier des événements</h2>
        <div id="calendar"></div>
    </div>

    <!-- Modale pour afficher les détails de l'événement -->
    <div id="eventModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2 id="eventTitle"></h2>
            </div>
            <div class="modal-body">
                <p><strong>Date :</strong> <span id="eventDate"></span></p>
                <p><strong>Location :</strong> <span id="eventLocation"></span></p>
                <p><strong>Description :</strong> <span id="eventDescription"></span></p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary close">Fermer</button>
            </div>
        </div>
    </div>

    <script>
    $(document).ready(function() {
        // Initialisation du calendrier avec FullCalendar
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            events: events, // Utiliser la variable 'events' générée en PHP
            eventClick: function(info) {
                // Afficher la modale avec les détails de l'événement
                var event = info.event;

                $('#eventTitle').text(event.title);
                $('#eventDate').text(event.start.toLocaleDateString()); // Format date locale
                $('#eventLocation').text(event.extendedProps.location);
                $('#eventDescription').text(event.extendedProps.description);

                // Afficher la modale
                $('#eventModal').fadeIn();
            }
        });
        calendar.render();

        // Fermer la modale quand l'utilisateur clique sur la croix ou le bouton "Fermer"
        $('.close').click(function() {
            $('#eventModal').fadeOut();
        });
    });
    </script>

</body>

</html>