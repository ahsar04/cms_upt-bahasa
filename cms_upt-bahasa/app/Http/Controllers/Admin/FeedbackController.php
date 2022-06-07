<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;
use routes\web;

class FeedbackController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function index(){
        $feedback = Feedback::all();
        return view('pages.admin.feedback.feedback', compact('feedback'));
    }

    /**
     * @param int $id_feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_feedback)
    {
        $feedback = Feedback::findorfail($id_feedback);
        $feedback->delete();
        return back()->with('toast_success', 'Data Deleted Successfully');;
    }
}
