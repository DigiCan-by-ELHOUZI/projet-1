<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    private $userID, $userRole,
        // $coaches = 0,
         $users = 0
        //   $trainingSessionsCount = 0,
        //    $ReservationsCount = 0
           ;

    public function index()
    {

        return view("home" );
    }
    public function courses()
    {

        return view("courses" );
    }

    public function pricing()
    {

        return view("pricing");
    }

    public function contact()
    {

        return view("contact");
    }


    public function dashboard()
    {
        $this->userID = Auth::id();
        $this->userData = Adherents::find($this->userID);
        $this->userRole = Auth::user()->getRoleNames();

        $todayDay = Carbon::now();


        switch ($this->userRole['0']) {
                case 'entraineurs':

                   $this->users = count(Adherents::role('membre')->get());
                //    $this->trainingSessionsCount =  count(TrainingSession::where('day', '=', $todayDay->toDateString())->get());
                break;

                case 'membre':
                    $this->ReservationsCount =  count(Reservation::where('user_id', '=',  Auth::user()->id)->get());
                break;


                // case 'coach':
                //     $userOfGym = User::with(['trainingSessions'])->where('id', $this->userID)->first();

                //    if (count($userOfGym->trainingSessions) <= 0) { //for empty statement
                //       return view('empty');
                //    }
                //    return view("dashboard", [
                //       'trainingSessions' => $userOfGym->trainingSessions,
                //    ]);
                // break;
        }

        return view("dashboard", [

            // 'coaches' => $this->coaches,
            'users' => $this->users,
            // 'trainingSessionsCount' => $this->trainingSessionsCount,
            // 'reservationsCount' => $this->ReservationsCount,
        ]);
    }
}
