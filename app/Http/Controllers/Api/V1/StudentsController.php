<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StutendRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class StudentsController extends Controller
{
    //
    public function home()
    {
        return response()->json([
            "status" => true,
            "message" => '',
            "data" => $paciente = 0
        ]);
    }

    public function create_user(StutendRequest $request)
    {
        try {
            $student = new Student;
            $student->create($request->all());

            return response()->json([
                "status" => true,
                "message" => 'Estudiante creado con éxito',
                "data" =>''
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "status" => false,
                "message" => 'Ocurrio un error al insertar estudiante',
                "data" => ''
            ]);
        }
    }
    public function search_date(Request $request)
    {
        $from = date($request->intial_date);
        $to = date($request->final_date);
        $students=Student::whereBetween('date_admission', [$from, $to])->get();

        return response()->json([
            "status" => true,
            "message" => 'Estudiante creado con éxito',
            "data" => $students
        ]);
    }
    public function search_card(Request $request)
    {
        $students=Student::where('card',$request->card)->get();
        return response()->json([
            "status" => true,
            "message" => 'Estudiante creado con éxito',
            "data" => $students
        ]);
    }
    public function search_grade(Request $request)
    {
        $students=Student::where('grade',$request->grade)->get();

        return response()->json([
            "status" => true,
            "message" => 'Estudiante creado con éxito',
            "data" => $students
        ]);
    }
}
