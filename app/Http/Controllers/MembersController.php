<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Club;
use Illuminate\Http\Request;
use Monolog\Level; 
use Monolog\Logger; 
use Monolog\Handler\StreamHandler;

class MembersController extends Controller
{
    public function __construct()
    {
        logger("_construct");
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        logger("index");
        $members = Member::all();
        return view('members.index', compact('members'));
    }

    public function create(Request $request)
    {
        logger("create");

        $clubs = Club::all();
        return view('members.create', compact('clubs'));
    }

    public function store(Request $request)
    {
        logger("store");
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable',
            'club_id' => 'required|exists:clubs,id',
        ]);

        Member::create($request->all());

        return redirect()->route('members.index')->with('success', 'Member created successfully.');
    }

    public function show(Member $member)
    {
        logger("show");
        return view('members.show', compact('member'));
    }

    public function edit(Member $member)
    {
        logger("Edit");
        $clubs = Club::all();
        return view('members.edit', compact('member', 'clubs'));
    }

    public function update(Request $request, Member $member)
    {
        logger("Update");
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable',
            'club_id' => 'required|exists:clubs,id',
        ]);

        $member->update($request->all());

        return redirect()->route('members.index')->with('success', 'Member updated successfully.');
    }

    public function destroy(Member $member)
    {
        logger("Destroy");
        $member->delete();
        return redirect()->route('members.index')->with('success', 'Member deleted successfully.');
    }

    public function logger($arg_func='def')
    {
        $log = new Logger('name'); 
        $log->pushHandler(new StreamHandler("./loggg.log", Level::Warning));  
        $log->error($arg_func); 
        $log->warning($arg_func); 
    }
}
