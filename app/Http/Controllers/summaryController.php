<?php

namespace App\Http\Controllers;

use App\Http\Models\summaryModel;
use App\Http\Requests\summaryRequest;


class summaryController extends Controller
{

    public function updateSummary($id)
    {
        $summary = new summaryModel();
        return view('update-summary', ['data' => $summary->find($id)]);
    }

    public function updateSummarySubmit($id, SummaryRequest $req)
    {
        $summary = summaryModel::find($id);
        $summary->img = $req->input('img');
        $summary->name = $req->input('name');
        $summary->surname = $req->input('surname');
        $summary->middle_name = $req->input('middle_name');
        $summary->age = $req->input('age');
        $summary->city = $req->input('city');
        $summary->education = $req->input('education');
        $summary->nationality = $req->input('nationality');
        $summary->vacancy = $req->input('vacancy');
        $summary->salary = $req->input('salary');
        $summary->work = $req->input('work');
        $summary->work_experience = $req->input('work_experience');
        $summary->education_all1 = $req->input('education_all1');
        $summary->education_all2 = $req->input('education_all2');
        $summary->about_me = $req->input('about_me');
        $summary->other_information = $req->input('other_information');

        $summary->save();

        return redirect()->route('my-summery');
    }

    public function createSummary(summaryRequest $req)
    {
        $summary = new summaryModel();
        $summary->img = $req->input('img');
        $summary->name = $req->input('name');
        $summary->surname = $req->input('surname');
        $summary->middle_name = $req->input('middle_name');
        $summary->age = $req->input('age');
        $summary->city = $req->input('city');
        $summary->education = $req->input('education');
        $summary->nationality = $req->input('nationality');
        $summary->vacancy = $req->input('vacancy');
        $summary->salary = $req->input('salary');
        $summary->work = $req->input('work');
        $summary->work_experience = $req->input('work_experience');
        $summary->education_all1 = $req->input('education_all1');
        $summary->education_all2 = $req->input('education_all2');
        $summary->about_me = $req->input('about_me');
        $summary->other_information = $req->input('other_information');



        $summary->save();

        return redirect()->route('summary_home')->with('success', 'Сообщение было добавленно');
    }

    public function allSummary()
    {
        $summary = new summaryModel();
        return view('summary_saved', ['data'=> $summary->find(1)]);
    }
}


