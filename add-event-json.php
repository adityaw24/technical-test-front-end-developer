$addEvent = file_get_contents('php://input');

$event = json_decode($addEvent);
$title = $event->title;
$location = $event->location;
$participant = $event->participant;
$date = $event->date;
$note = $event->note;
echo "Penambahan event $title sukses";