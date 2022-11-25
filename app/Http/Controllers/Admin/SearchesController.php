<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySearchRequest;
use App\Http\Requests\StoreSearchRequest;
use App\Http\Requests\UpdateSearchRequest;
use App\Models\NewsSource;
use App\Models\Search;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SearchesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('search_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $searches = Search::with(['source', 'created_by'])->get();

        return view('admin.searches.index', compact('searches'));
    }

    public function create()
    {
        abort_if(Gate::denies('search_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sources = NewsSource::pluck('source', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.searches.create', compact('sources'));
//        return redirect()->back()->with('isVerified', $sources->id);
    }

    public function store(StoreSearchRequest $request)
    {
        $search = Search::create($request->all());

//        return redirect()->route('admin.searches.index');
//        return redirect()->back()->with('isVerified', $request->sources->id);

//        dd($request->source);
        return view('result')->with('source', $request->source);


    }

    public function edit(Search $search)
    {
        abort_if(Gate::denies('search_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sources = NewsSource::pluck('source', 'id')->prepend(trans('global.pleaseSelect'), '');

        $search->load('source', 'created_by');

        return view('admin.searches.edit', compact('search', 'sources'));
    }

    public function update(UpdateSearchRequest $request, Search $search)
    {
        $search->update($request->all());

        return redirect()->route('admin.searches.index');
    }

    public function show(Search $search)
    {
        abort_if(Gate::denies('search_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $search->load('source', 'created_by');

        return view('admin.searches.show', compact('search'));
    }

    public function destroy(Search $search)
    {
        abort_if(Gate::denies('search_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $search->delete();

        return back();
    }

    public function massDestroy(MassDestroySearchRequest $request)
    {
        Search::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
