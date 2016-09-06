<?php
namespace App\Http\Controllers\Main;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller {

    public function wellcome() {
        $courses = DB::select('SELECT cr.name, CASE WHEN cr.start_date < "1900-01-01"'.
            ' THEN cr.start_date_str WHEN cr.start_date > "1900-01-01"'.
            ' THEN cr.start_date END AS start_date, cr.start_time, cr.end_time, cr.duration_h, cr.courselevel, crt.name as course_type_name FROM sugesto_db.courses cr, sugesto_db.coursetypes crt WHERE cr.coursetypes_id = crt.id GROUP BY cr.id;');
        $team_members = DB::select('SELECT cr.id as id, cr.name as name, cr.surname as surname,cr.description as description,cr.image as image,court.name as course_type FROM sugesto_db.teachers cr LEFT JOIN sugesto_db.coursetypes_teachers crt on crt.teachers_id = cr.id LEFT JOIN sugesto_db.coursetypes court on court.id = crt.coursetypes_id;');
        
        return view('index')
            ->nest('header_template', 'partials\header')
            ->nest('logo_template', 'sections\logo')
            ->nest('courses_template', 'sections\courses', ['courses'=>$courses])
            ->nest('team_template', 'sections\team', ['t_members'=>$team_members])
            ->nest('suggestopedy_template', 'sections\suggestopedy')
            ->nest('signin_template', 'sections\signin')
            ->nest('contacts_template', 'sections\contacts')
            ->nest('footer_template', 'partials\footer');
    }    
}