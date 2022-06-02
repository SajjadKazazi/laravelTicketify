<?php

namespace Sajjadkazazi\Ticketify\Enumoration\Ticket;

class TicketStatus
{
    const PENDING = "PENDING";
    const HAS_BEEN_ANSWERED = "HAS_BEEN_ANSWERED";
    const WAITING_FOR_ANSWER = "WAITING_FOR_ANSWER";
    const USER_ANSWERED = 'USER_ANSWERED';
    const KEPT = 'KEPT';
    const CLOSED = 'CLOSED';

    const statuses = [
        self::PENDING,
        self::HAS_BEEN_ANSWERED,
        self::WAITING_FOR_ANSWER,
        self::USER_ANSWERED,
        self::KEPT,
        self::CLOSED,
    ];

    const persian = [
        self::PENDING => 'در حال بررسی',
        self::HAS_BEEN_ANSWERED => 'پاسخ داده شده',
        self::WAITING_FOR_ANSWER => 'در انتظار پاسخ',
        self::USER_ANSWERED => 'پاسخ کاربر',
        self::KEPT => 'نگه داشته شده',
        self::CLOSED => 'بسته شده',
    ];
}
