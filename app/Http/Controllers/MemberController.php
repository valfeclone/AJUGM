<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index_view()
    {
        return view('pages.member.member-data', [
            'member' => Member::class
        ]);
    }
}
