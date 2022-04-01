<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\SliderServices;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    protected $slider;

    public function __construct(SliderServices $slider)
    {
        $this->slider = $slider;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = $this->slider->getAll();

        return view('Admin.Slider.list', [
            'sliders' => $sliders,
            'title' => 'Sliders List'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Slider.create', [
            'title' => 'Create Slider',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator);
        }

        $result = $this->slider->create($request);

        if ($result) {
            return redirect()->route('slider.index')->with('success', 'Slider created successfully');
        } else {
            return redirect()->route('slider.index')->with('error', 'Slider created failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('Admin.Slider.edit', [
            'slider' => $slider,
            'title' => 'Edit Slider'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator);
        }

        $result = $this->slider->update($request, $slider->id);

        if ($result) {
            return redirect()->route('slider.index')->with('success', 'Slider updated successfully');
        } else {
            return redirect()->back()->with('error', 'Slider updated failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $result = $this->slider->delete($request->id);

        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Slider deleted successfully'
            ]);
        } else {
            return response()->json([
                'error' => true,
            ]);
        }
    }
}
