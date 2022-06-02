<?php

namespace Sajjadkazazi\Ticketify\Enumoration\Ticket;

class TicketPriority
{
    const HIGH = "HIGH";
    const MEDIUM = "MEDIUM";
    const LOW = "LOW";


    const statuses = [
        self::HIGH,
        self::MEDIUM,
        self::LOW
    ];

    const persian = [
        self::HIGH => 'زیاد',
        self::MEDIUM => 'متوسط',
        self::LOW => 'کم',

    ];
}
