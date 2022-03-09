<?php

namespace App\Http\Services;

use App\Models\Slider;
use Illuminate\Support\Facades\Log;

class SliderServices
{
    public function create($request)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $image = $request->input('image');

        if ($request->input('active') === 'on') {
            $active = 1;
        } else {
            $active = 0;
        }

        try {
            Slider::create([
                'title' => $title,
                'description' => $description,
                'image' => $image,
                'active' => $active
            ]);
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            return false;
        }

        return true;
    }
}
