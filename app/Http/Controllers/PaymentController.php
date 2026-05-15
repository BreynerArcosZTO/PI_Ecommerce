<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
        if (! Auth::check()) {
            return response()->json([
                'success' => false,
                'message' => 'Debes iniciar sesion para continuar con el pago.',
                'redirect' => route('login'),
            ], 401);
        }

        $validated = $request->validate([
            'recipient_name' => 'required|string|max:255',
            'phone' => 'required|string|regex:/^[0-9\s\-\+\(\)]+$/|max:20',
            'country' => 'required|string|max:100',
            'department' => 'required|string|max:100',
            'city' => 'required|string|max:100',
            'postal_code' => 'nullable|string|regex:/^[0-9\-]+$/|max:10',
            'address_line_1' => 'required|string|max:255',
            'address_line_2' => 'nullable|string|max:255',
            'reference' => 'nullable|string|max:500',
            'payment_method' => 'required|in:transfer',
            'order_data' => 'required|array|min:1',
        ]);

        $validated['user_id'] = Auth::id();
        $validated['status'] = 'pending';

        $address = Address::create($validated);

        return response()->json([
            'success' => true,
            'address_id' => $address->id,
            'message' => 'Pago confirmado correctamente'
        ]);
    }

    public function confirmation($id)
    {
        $address = Address::where('user_id', Auth::id())->findOrFail($id);

        return view('shop.confirmation', ['address' => $address]);
    }
}
