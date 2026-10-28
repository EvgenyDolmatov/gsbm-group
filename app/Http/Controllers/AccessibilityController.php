<?php

namespace App\Http\Controllers;

use App\actions\Accessibility\ToggleVisuallyImpairedModeAction;
use Illuminate\Http\RedirectResponse;

class AccessibilityController extends Controller
{
    public function toggle(ToggleVisuallyImpairedModeAction $action): RedirectResponse
    {
        $action->execute();
        return back();
    }
}
