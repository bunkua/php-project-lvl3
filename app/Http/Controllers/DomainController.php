<?php

namespace App\Http\Controllers;

use App\Domain;
use App\Http\Requests\StoreDomain;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $domains = DB::table('domains')->get();
        $data = ['domains' => $domains];
        return response()->view('pages.domains', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create()
    {
        return response()->redirectTo('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreDomain $request)
    {
        $connection = DB::table('domains');
        $domainToAdd = $request->input('domain');

        $connection->insertOrIgnore([
            'name' => $domainToAdd,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        $domainId = $connection->where(['name' => $domainToAdd])->value('id');
        //TODO: make falsh messages 'success' and 'already exists'
        return response()->redirectToRoute('domains.show', $domainId);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Domain  $domain
     * @return \Illuminate\Http\Response
     */
    public function show(Domain $domain)
    {
        return response()->view('pages.show_domain', compact('domain'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Domain  $domain
     * @return \Illuminate\Http\Response
     */
    public function edit(Domain $domain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Domain  $domain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Domain $domain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Domain  $domain
     * @return \Illuminate\Http\Response
     */
    public function destroy(Domain $domain)
    {
        //
    }
}
