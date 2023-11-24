<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    public function index(){
        $introData = json_decode(file_get_contents(storage_path('data/intro.json')));
        $aboutData = json_decode(file_get_contents(storage_path('data/about.json')));

        return view('index')->with([
            'introData' => $introData,
            'aboutData' => $aboutData
        ]);
    }

    public function resume(){
        $educationData = json_decode(file_get_contents(storage_path('data/education.json')));
        $experienceData = json_decode(file_get_contents(storage_path('data/experience.json')));

        return view('pages.resume')->with([
            'educationData' => $educationData,
            'experienceData' => $experienceData
        ]);
    }

    public function projects(){
        $projectsData = json_decode(file_get_contents(storage_path('data/projects.json')));

        return view('pages.projects')->with([
            'projectsData' => $projectsData
        ]);
    }

    public function showProject($id){
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

    private function getProjectById($id) {
        // try different way to get data into array format
        $projectsData = json_decode(file_get_contents(storage_path('data/projects.json')), true);

        foreach ($projectsData as $project) {
            if ($project['id'] == $id) {
                return $project;
            }
        }

        return null;
    }
}
