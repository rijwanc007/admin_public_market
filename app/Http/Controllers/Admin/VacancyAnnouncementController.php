<?php

namespace App\Http\Controllers\Admin;

use App\VacancyAnnouncement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VacancyAnnouncementController extends Controller
{
    public function index()
    {
        $from = null;
        $to = null;
        $allAds = VacancyAnnouncement::orderBy('id','DESC')->paginate(20);
        return view('backend.vacancy-announcement.index',compact('allAds','from','to'));
    }


    public function create()
    {
        return view('backend.vacancy-announcement.create');
    }


    public function store(Request $request)
    {
        //dd($request->all());

        VacancyAnnouncement::create([
            'user_id'=>$request-> user_id,
            'date'=>$request-> date,
            'company_name'=>$request-> company_name,
            'position'=>$request-> position,
            'vacancy'=>$request-> vacancy,
            'qualification_requirement'=>$request-> qualification_requirement,
            'job_location'=>$request-> job_location,
            'employment_status'=>$request-> employment_status,
            'workplace'=>$request-> workplace,
            'salary'=>$request-> salary,
            'experience_requirement'=>$request-> experience_requirement,
            'fresher_encouraged'=>$request-> fresher_encouraged,
            'description'=>$request-> description,
            'job_context'=>$request-> job_context,
            'responsibility_description'=>$request-> responsibility_description,
            'additional_requirements'=>$request-> additional_requirements,
            'compensation_other_benefits'=>$request-> compensation_other_benefits,
            'perks'=>json_encode($request->perks),
        ]);
        Session::flash('success','Vacancy Announcement Created Successfully');
        return redirect()->route('vacancy-announcement.index');
    }


    public function show($id)
    {
        $show=VacancyAnnouncement::find($id);
        $show['perks']=explode(',',str_replace(str_split('[]""'),'',$show->perks));
        return view('backend.vacancy-announcement.show',compact('show'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $delete = VacancyAnnouncement::find($id);
        $delete['image']=explode(',',str_replace(str_split('[]""'),'',$delete->image));
        for($i=0; $i<count($delete->image) ; $i++){
            if(!empty($delete->image[$i])){
                unlink('assets/BackEnd/images/product/'.$delete->image[$i]);
            }
        }
        $delete->delete();
        Session::flash('success','Vacancy Announcement Deleted Successfully');
        return redirect()->route('vacancy-announcement.index');
    }
    public function search(Request $request){
        $input = $request->input;
        $allAds = VacancyAnnouncement::where('company_name', 'like', "%$input%")
            ->orWhere('position', 'like', "%$input%")
            ->orWhere('vacancy', 'like', "%$input%")
            ->orWhere('qualification_requirement', 'like', "%$input%")
            ->orWhere('job_location', 'like', "%$input%")
            ->orWhere('employment_status', 'like', "%$input%")
            ->orWhere('workplace', 'like', "%$input%")
            ->orWhere('salary', 'like', "%$input%")
            ->orWhere('experience_requirement', 'like', "%$input%")
            ->orWhere('fresher_encouraged', 'like', "%$input%")
            ->orWhere('description', 'like', "%$input%")
            ->orWhere('job_context', 'like', "%$input%")
            ->orWhere('responsibility_description', 'like', "%$input%")
            ->orWhere('additional_requirements', 'like', "%$input%")
            ->orWhere('compensation_other_benefits', 'like', "%$input%")
            ->orWhere('perks', 'like', "%$input%")
            ->orderBy('id', 'DESC')->paginate(20);
        return view('backend.vacancy-announcement.index',compact('allAds'));
    }

    public function vacancyAnnouncementFind(Request $request){
        $from = $request->date_from;
        $to = $request->date_to;
        $allAds = VacancyAnnouncement::whereDate('date', '>=', $from)->whereDate('date', '<=', $to)->orderBy('id', 'DESC')->paginate(20);
        return view('backend.vacancy-announcement.index',compact('allAds','from','to'));
    }

    public function approve($id){
        $approve = VacancyAnnouncement::find($id);
        $approve->update([
            'approve' => 1,
        ]);

        Session::flash('success', 'Approved Successfully');
        return redirect()->route('vacancy-announcement.index');
    }

    public function frontShow(){
        $all_vacancy_announcement = VacancyAnnouncement::orderBy('id','DESC')->get();
        dd($all_vacancy_announcement);
    }
}
