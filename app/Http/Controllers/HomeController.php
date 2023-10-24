<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    public function index(){
        // load home page intro and about data
        $introData = json_decode(file_get_contents(storage_path('data/intro.json')));
        $aboutData = json_decode(file_get_contents(storage_path('data/about.json')));

        return view('pages.index')->with([
            'introData' => $introData,
            'aboutData' => $aboutData
        ]);
    }

    // resume page
    public function resume(){
        // education and experience data
        $educationData = json_decode(file_get_contents(storage_path('data/education.json')));
        $experienceData = json_decode(file_get_contents(storage_path('data/experience.json')));

        return view('pages.resume')->with([
            'educationData' => $educationData,
            'experienceData' => $experienceData
        ]);
    }

    // portjects page
    public function projects(){
        // project data
        $projectsData = json_decode(file_get_contents(storage_path('data/projects.json')));

        return view('pages.projects')->with([
            'projectsData' => $projectsData
        ]);
    }

    // single project page
    public function showProject($id){
        // get single project data
        $project = $this->getProjectById($id);

        // if project exist then show project data
        if ($project) {
            return view('pages.single-project')->with([
                'project' => $project
            ]);
        } else {
            echo "Not Found";
            return;
        }
    }

    // retrieve single project data by id
    private function getProjectById($id) {
        // try diffrent way to get data into array format
        $projectsData = json_decode(file_get_contents(storage_path('data/projects.json')), true);

        foreach ($projectsData as $project) {
            if ($project['id'] == $id) {
                return $project;
            }
        }

        return null;
    }
}
