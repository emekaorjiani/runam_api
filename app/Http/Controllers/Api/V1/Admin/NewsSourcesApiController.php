<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsSourceRequest;
use App\Http\Requests\UpdateNewsSourceRequest;
use App\Http\Resources\Admin\NewsSourceResource;
use App\Models\NewsSource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NewsSourcesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('news_source_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new NewsSourceResource(NewsSource::with(['created_by'])->get());
    }

    public function store(StoreNewsSourceRequest $request)
    {
        $newsSource = NewsSource::create($request->all());

        return (new NewsSourceResource($newsSource))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(NewsSource $newsSource)
    {
        abort_if(Gate::denies('news_source_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new NewsSourceResource($newsSource->load(['created_by']));
    }

    public function update(UpdateNewsSourceRequest $request, NewsSource $newsSource)
    {
        $newsSource->update($request->all());

        return (new NewsSourceResource($newsSource))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(NewsSource $newsSource)
    {
        abort_if(Gate::denies('news_source_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $newsSource->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
