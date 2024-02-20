<?php

namespace App\Http\Middleware;

use App\Models\Invitation;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EnsureInvitationIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        /**
         * Only for GET requests. Otherwise, this middleware will block our registration.
         */
        if ($request->isMethod('get')) {

            /**
             * No token = Goodbye.
             */
            if (!$request->has('invitation_token')) {
                abort(401);
            }

            $invitation_token = $request->get('invitation_token');

            /**
             * Lets try to find invitation by its token.
             */
            $invitation = Invitation::where('link', $invitation_token)->firstOrFail();

            /**
             * Let's check if users already registered.
             */
            if (!is_null($invitation->accepted_at)) {
                // abort(403, 'This invitation link has already been used.');
                return new Response(view('invitations.accept'));
            }

            /**
             * Let's check if the invitation already exprired.
             */
            $expiryDate = Carbon::parse($invitation->expiry_at);
            $currentDate = Carbon::parse(date('Y-m-d'));

            if ($currentDate->diffInDays($expiryDate, false) < 0) {
                abort(403, 'This invitation link has expired.');
            }
        }

        return $next($request);
    }
}
