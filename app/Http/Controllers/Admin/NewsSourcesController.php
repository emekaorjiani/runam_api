<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyNewsSourceRequest;
use App\Http\Requests\StoreNewsSourceRequest;
use App\Http\Requests\UpdateNewsSourceRequest;
use App\Models\NewsSource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NewsSourcesController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('news_source_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $newsSources = NewsSource::with(['created_by'])->get();

        return view('admin.newsSources.index', compact('newsSources'));
    }

    public function create()
    {
        abort_if(Gate::denies('news_source_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.newsSources.create');
    }

    public function store(StoreNewsSourceRequest $request)
    {
        $newsSource = NewsSource::create($request->all());

        return redirect()->route('admin.news-sources.index');
    }

    public function edit(NewsSource $newsSource)
    {
        abort_if(Gate::denies('news_source_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $newsSource->load('created_by');

        return view('admin.newsSources.edit', compact('newsSource'));
    }

    public function update(UpdateNewsSourceRequest $request, NewsSource $newsSource)
    {
        $newsSource->update($request->all());

        return redirect()->route('admin.news-sources.index');
    }

    public function show(NewsSource $newsSource)
    {
        abort_if(Gate::denies('news_source_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $newsSource->load('created_by');

        return view('admin.newsSources.show', compact('newsSource'));
    }

    public function destroy(NewsSource $newsSource)
    {
        abort_if(Gate::denies('news_source_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $newsSource->delete();

        return back();
    }

    public function massDestroy(MassDestroyNewsSourceRequest $request)
    {
        NewsSource::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
