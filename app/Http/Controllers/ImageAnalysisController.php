<?php

namespace App\Http\Controllers;

use App\Models\ImageAnalysis;
use Illuminate\Http\Request;

class ImageAnalysisController extends Controller
{
    public function index()
    {
        return ImageAnalysis::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'image_url' => 'required|string',
            'skin_tone_result' => 'required|string',
        ]);

        return ImageAnalysis::create($request->all());
    }

    public function show(ImageAnalysis $imageAnalysis)
    {
        return $imageAnalysis;
    }

    public function update(Request $request, ImageAnalysis $imageAnalysis)
    {
        $imageAnalysis->update($request->all());
        return $imageAnalysis;
    }

    public function destroy(ImageAnalysis $imageAnalysis)
    {
        $imageAnalysis->delete();
        return response()->json(['message' => 'تم الحذف بنجاح']);
    }

    public function testEnvVariable()
    {
        // قراءة المتغير من ملف .env
        $path = env('PYTHON_SCRIPT_PATH');

        // طباعة القيمة على الشاشة
        dd($path); // dd() توقف التنفيذ وتعرض النتيجة
    }
}
