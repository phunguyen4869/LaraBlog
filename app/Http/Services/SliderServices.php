<?php

namespace App\Http\Services;

use App\Models\Slider;
use Illuminate\Support\Facades\Log;

class SliderServices
{
    public function getAll()
    {
        $sliders = Slider::all();

        return $sliders;
    }

    public function get()
    {
        $sliders = Slider::where('active', 1)->get();

        return $sliders;
    }

    public function getById($id)
    {
        $slider = Slider::find($id);

        return $slider;
    }

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

    public function update($request, $id)
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
            Slider::where('id', $id)->update([
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

    public function delete($id)
    {
        try {
            Slider::where('id', $id)->delete();
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            return false;
        }

        return true;
    }
}
