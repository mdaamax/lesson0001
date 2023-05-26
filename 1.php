<?php

class TicketMachine {
    protected $ticketPrice;
    protected $totalTicketsSold = 0;
    protected $totalRevenue = 0;

    public function __construct($ticketPrice) {
        $this->ticketPrice = $ticketPrice;
    }

    public function __destruct() {
        echo "Всего продано билетов: " . $this->totalTicketsSold . " шт<br>";
        echo "Общий доход " . $this->totalRevenue . " ₽<br>";
    }

    protected function printReceipt($numTickets) {
        echo "Распечатать квитанцию на " . $numTickets . " билет(ов) за " . $this->ticketPrice . " ₽<br>";
    }



    public function issueTickets($numTickets) {
        $this->totalTicketsSold += $numTickets;
        $this->totalRevenue += $this->ticketPrice * $numTickets;
        $this->printReceipt($numTickets);
    }
}

$ticketPrice = 1200;
$ticketMachine = new TicketMachine($ticketPrice);
$ticketMachine->issueTickets(5);

?>


