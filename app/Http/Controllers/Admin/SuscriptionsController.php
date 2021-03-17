<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Suscription\BulkDestroySuscription;
use App\Http\Requests\Admin\Suscription\DestroySuscription;
use App\Http\Requests\Admin\Suscription\IndexSuscription;
use App\Http\Requests\Admin\Suscription\StoreSuscription;
use App\Http\Requests\Admin\Suscription\UpdateSuscription;
use App\Models\Suscription;
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

class SuscriptionsController extends Controller
{
    public $stripe;
    public function __construct()
    {
        $this->stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
    }

    /**
     * Display a listing of the resource.
     *
     * @param IndexSuscription $request
     * @return array|Factory|View
     */
    public function index(IndexSuscription $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Suscription::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'name', 'price', 'type', 'stripe_id'],

            // set columns to searchIn
            ['id', 'name', 'features', 'type', 'stripe_id']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.suscription.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.suscription.create');

        return view('admin.suscription.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreSuscription $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreSuscription $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        $response = $this->stripe->products->create([
            'name' => $request->name,
        ]);


        $sanitized['stripe_id'] = $response->id;

        // Store the Suscription
        $suscription = Suscription::create($sanitized);

        $this->stripe->prices->create([
            'unit_amount' => $suscription->price * 100,
            'currency' => env('STRIPE_CURRENCY'),
            'recurring' => ['interval'=>$suscription->type],
            'product' => $suscription->stripe_id,
        ]);
        if ($request->ajax()) {
            return ['redirect' => url('admin/suscriptions'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/suscriptions');
    }

    /**
     * Display the specified resource.
     *
     * @param Suscription $suscription
     * @throws AuthorizationException
     * @return void
     */
    public function show(Suscription $suscription)
    {
        $this->authorize('admin.suscription.show', $suscription);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Suscription $suscription
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Suscription $suscription)
    {
        $this->authorize('admin.suscription.edit', $suscription);
        return view('admin.suscription.edit', [
            'suscription' => $suscription,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateSuscription $request
     * @param Suscription $suscription
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateSuscription $request, Suscription $suscription)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Suscription
        $suscription->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/suscriptions'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/suscriptions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroySuscription $request
     * @param Suscription $suscription
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroySuscription $request, Suscription $suscription)
    {
        $suscription->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroySuscription $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroySuscription $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Suscription::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
