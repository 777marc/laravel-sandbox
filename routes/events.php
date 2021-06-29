<?php

use Illuminate\Support\Facades\Event;
use App\Events\GiftCertificatePurchased;

Event::listen(function (GiftCertificatePurchased $event) {
    dd($event);
});
