<?php
class Reservation
{
    private $id;
    private $manga;
    private $user;
    private $date;

    public function __construct($id, $manga, $user, $date)
    {
        $this->id = $id;
        $this->manga = $manga;
        $this->user = $user;
        $this->date = $date;
    }


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getManga()
    {
        return $this->manga;
    }

    public function setManga($manga)
    {
        $this->manga = $manga;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }



    public function toString()
    {
        return "Reservation [id=" . $this->id . ", manga=" . $this->manga . ", user=" . $this->user . ", date=" . $this->date . "]";
    }
}


$reservation1 = new Reservation(1, "One Piece", "John", "2022-10-01");
$reservation2 = new Reservation(2, "Naruto", "Alice", "2022-10-02");

var_dump($reservation1);
var_dump($reservation2);



$reservations = array($reservation1, $reservation2);

var_dump($reservations);



foreach ($reservations as $reservation) {

    $reservationModel->insertReservation($reservation);
}


$reservations = array();


$reservations = $reservationModel->getAllReservations();

var_dump($reservations);
