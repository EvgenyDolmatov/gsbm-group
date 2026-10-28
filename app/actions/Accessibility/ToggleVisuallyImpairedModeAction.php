<?php

namespace App\actions\Accessibility;

use Illuminate\Support\Facades\Session;

class ToggleVisuallyImpairedModeAction
{
    private const SESSION_KEY = 'visually_impaired_mode';

    public function execute(): void
    {
        $currentState = Session::get(self::SESSION_KEY, false);

        Session::put(self::SESSION_KEY, !$currentState);
    }
}
