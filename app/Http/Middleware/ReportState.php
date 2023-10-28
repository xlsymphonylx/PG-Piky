<?php

namespace App\Http\Middleware;

use App\Models\Draft;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ReportState
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Retrieve the latest work order
        $latestWorkOrder = unserialize(session('latestWorkOrder'));
        $latestWorkOrderId = $latestWorkOrder->id;

        // Check if there is an associated draft
        $draft = Draft::where('work_order_id', $latestWorkOrderId)->first();

        if ($draft && !$draft->finalized) {
            // The draft is finalized, handle accordingly (e.g., redirect or return a response)
            return response()->view('errors.draftNotFinalized'); // Example of redirection
        }

        // The draft is not finalized, continue with the request
        return $next($request);
    }
}
