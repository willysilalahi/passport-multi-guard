<?php

namespace App\Http\Controllers;

use App\Models\MemberModel;
use App\Models\TrainerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function memberDashboard()
    {
        $members = MemberModel::all();
        $success =  $members;
        return response()->json($success, 200);
    }

    public function trainerDashboard()
    {
        $trainers = TrainerModel::all();
        $success =  $trainers;

        return response()->json($success, 200);
    }

    public function memberLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->all()]);
        }

        if (auth()->guard('member')->attempt(['email' => request('email'), 'password' => request('password')])) {

            config(['auth.guards.api.provider' => 'member']);

            $member = MemberModel::select('members.*')->find(auth()->guard('member')->user()->id);
            $success =  $member;
            $success['token'] =  $member->createToken('MyApp', ['member'])->accessToken;
            $success['scope'] = 'member';

            return response()->json($success, 200);
        } else {
            return response()->json(['error' => ['Email and Password are Wrong.']], 200);
        }
    }

    public function trainerLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->all()]);
        }

        if (auth()->guard('trainer')->attempt(['email' => request('email'), 'password' => request('password')])) {

            config(['auth.guards.api.provider' => 'trainer-api']);

            $trainer = TrainerModel::select('trainers.*')->find(auth()->guard('trainer')->user()->id);
            $success =  $trainer;
            $success['token'] =  $trainer->createToken('MyApp', ['trainer'])->accessToken;
            $success['scope'] = 'trainer';

            return response()->json($success, 200);
        } else {
            return response()->json(['error' => ['Email and Password are Wrong.']], 200);
        }
    }
}
