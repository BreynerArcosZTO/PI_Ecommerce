<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
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
        ]);

        $validated['user_id'] = Auth::id();
        $validated['status'] = 'pending';
        $validated['order_data'] = $request->input('order_data', []);

        $address = Address::create($validated);

        return response()->json([
            'success' => true,
            'address_id' => $address->id,
            'message' => 'Pago confirmado correctamente'
        ]);
    }

    public function confirmation($id)
    {
        $address = Address::findOrFail($id);

        // Verificar que solo el usuario dueño pueda ver su confirmación
        if ($address->user_id && $address->user_id !== Auth::id()) {
            abort(403);
        }

        return view('shop.confirmation', ['address' => $address]);
    }
}
