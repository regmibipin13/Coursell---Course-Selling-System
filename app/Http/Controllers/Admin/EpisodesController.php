<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Episode\BulkDestroyEpisode;
use App\Http\Requests\Admin\Episode\DestroyEpisode;
use App\Http\Requests\Admin\Episode\IndexEpisode;
use App\Http\Requests\Admin\Episode\StoreEpisode;
use App\Http\Requests\Admin\Episode\UpdateEpisode;
use App\Models\Course;
use App\Models\Episode;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class EpisodesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexEpisode $request
     * @return array|Factory|View
     */
    public function index(IndexEpisode $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Episode::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['course_id', 'duration', 'id', 'title'],

            // set columns to searchIn
            ['description', 'duration', 'id', 'title']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.episode.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.episode.create');
        $courses = Course::all();
        return view('admin.episode.create',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreEpisode $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreEpisode $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Episode
        $episode = Episode::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/episodes'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/episodes');
    }

    /**
     * Display the specified resource.
     *
     * @param Episode $episode
     * @throws AuthorizationException
     * @return void
     */
    public function show(Episode $episode)
    {
        $this->authorize('admin.episode.show', $episode);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Episode $episode
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Episode $episode)
    {
        $this->authorize('admin.episode.edit', $episode);

        $episode->load(['course']);
        $courses = Course::all();
        return view('admin.episode.edit', [
            'episode' => $episode,
            'courses' => $courses
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateEpisode $request
     * @param Episode $episode
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateEpisode $request, Episode $episode)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Episode
        $episode->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/episodes'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/episodes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyEpisode $request
     * @param Episode $episode
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyEpisode $request, Episode $episode)
    {
        $episode->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyEpisode $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyEpisode $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Episode::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
