<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PythonController extends Controller
{
    public function runPythonScript()
    {
        // تحديد مسار سكربت Python
        $pythonScriptPath = base_path('app/python_scripts/script.py');

        // التأكد من أن الملف موجود
        if (!file_exists($pythonScriptPath)) {
            return response()->json(['error' => 'ملف Python غير موجود.'], 404);
        }

        // تنفيذ سكربت Python باستخدام "python" بدلاً من "python3"
        $escapedPath = escapeshellarg($pythonScriptPath);
        $output = shell_exec("python $escapedPath 2>&1");

        // التحقق من نجاح التنفيذ
        if (empty($output)) {
            return response()->json(['error' => 'فشل في تنفيذ سكربت Python.']);
        }

        return response()->json(['output' => $output]);
    }
}
