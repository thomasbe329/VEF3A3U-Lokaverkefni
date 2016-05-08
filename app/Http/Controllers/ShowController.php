<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ShowController extends Controller
{
    public function index()
    {
        $content = file_get_contents('http://api.tvmaze.com/schedule');
        $schedule = json_decode($content, true);
        $hour = "0";
        return view('shows.index', compact('schedule', 'hour'));
    }

    public function show($showid)
    {
        $content = file_get_contents('http://api.tvmaze.com/shows/' . $showid . '?embed=episodes');
        $show = json_decode($content, true);
        $season = -1;
        return view('shows.show', compact('show', 'season'));
    }

    public function shows($page)
    {
        $content = file_get_contents('http://api.tvmaze.com/shows?page=' . $page);
        $shows = json_decode($content, true);
        return view('shows.shows', compact('shows', 'page'));
    }

    public function search($query)
    {
        $content = file_get_contents('http://api.tvmaze.com/search/shows?q=' . $query);
        $shows = json_decode($content, true);
        return view('shows.search', compact('shows', 'query'));
    }
}
