<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Challenge;
use Illuminate\Http\Request;

class ChallengeController extends Controller
{

    public function index()
    {
        $challenges = Challenge::whenSearch(request()->search)->latest()->paginate(10);

        return view('dashboard.challenges.index', compact('challenges'));

    }//end of index

    
    public function create()
    {
        return view('dashboard.challenges.create');

    }//end of create

    
    public function store(Request $request)
    {
        $request->validate([
            'name'  => ['required'],
            'image' => ['required','image'],
        ]);

        try {

            $request_data['image'] = $request->file('image')->store('challenge_images','public');

            Challenge::create($request_data);

            session()->flash('success', __('dashboard.added_successfully'));
            return redirect()->route('dashboard.challenges.index');

        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        }//end try

    }//end of store

    

    public function edit(Challenge $challenge)
    {
        return view('dashboard.challenges.edit', compact('challenge'));

    }//end of edit

    
    public function update(Request $request, Challenge $challenge)
    {
        $request->validate([
            'name'  => ['required'],
        ]);

        try {

            if ($request->image) {
                
                $request_data['image'] = $request->file('image')->store('challenge_images','public');

            }//endof if

            $challenge->update($request_data);

            session()->flash('success', __('dashboard.updated_successfully'));
            return redirect()->route('dashboard.challenges.index');

        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        }//end try

    }//end of update

    
    public function destroy(Challenge $challenge)
    {
        try {

            $challenge->delete();
            session()->flash('success', __('dashboard.deleted_successfully'));
            return redirect()->route('dashboard.challenges.index');

         } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        }//end try

    }//end of destroy

}//end of controller
