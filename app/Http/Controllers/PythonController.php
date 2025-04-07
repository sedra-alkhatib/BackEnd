<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PythonController extends Controller
{
    public function analyzeSkin(Request $request)
    {
        // قراءة مسار الصورة من الطلبPYTHON_SCRIPT_PATH
        $imagePath = $request->input('image_path');
        
        // سجّل المسار لمراجعة الأخطاء
        Log::info('Image Path: ' . $imagePath);
    
        // التحقق من وجود المسار
        if (!$imagePath || !file_exists($imagePath)) {
            return response()->json([
                'success' => false,
                'message' => 'الصورة غير موجودة أو مسارها غير صحيح'
            ]);
        }
    
        // تحديد مسار السكربت البايثون
        $pythonScript = base_path('python_script/run.py');
        $imagePathArg = escapeshellarg(realpath($imagePath));
        
        $command = escapeshellcmd("python \"$pythonScript\" $imagePathArg");
        $output = shell_exec($command);
        
    
        if ($output) {
            $decoded = json_decode($output, true);
            return response()->json([
                'success' => true,
                'result' => $decoded
            ]);
        }
    
        return response()->json([
            'success' => false,
            'message' => 'فشل في تشغيل تحليل البشرة'
        ]);
    }
}
