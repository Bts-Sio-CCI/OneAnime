<?php
class Reservation
{
    private $id;
    private $manga;
    private $user;
    private $date;

    public function __construct($id, $manga, $user, $date)
    {
        $this->idutilisateur = $id;
        $this->manga = $manga;
        $this->utilisateur = $user;
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
        return "IdReservation [id=" . $this->id . ", manga=" . $this->manga . ", utilisateur=" . $this->user . ", date=" . $this->date . "]";
    }
}


$reservation1 = new Reservation(1, "One Piece", "John", "2022-10-01");
$reservation2 = new Reservation(2, "Naruto", "Alice", "2022-10-02");



$reservations = array($reservation1, $reservation2);





foreach ($reservations as $reservation) {

    $reservationModel->insertReservation($reservation);
}


$reservations = array();


$reservations = $reservationModel->getAllReservations();


