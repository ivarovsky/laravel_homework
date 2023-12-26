<?php

namespace App\Context;

interface Strategy {
    public function execute(object $data);
}