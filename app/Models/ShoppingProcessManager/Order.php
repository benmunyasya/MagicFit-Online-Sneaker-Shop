<?php

namespace App\Models\ShoppingProcessManager;

use App\Models\ShoppingProcessManager\OrderItem;
use App\Models\User;
use App\Models\ShoppingProcessManager\Payment;
use App\Models\CustomerManager\Customer;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['total_price', 'status', 'user_id','customer_id'];
    public function orderItems():HasMany{
        return $this->hasMany(OrderItem::class);
    }
    public function payments():HasMany{
        return $this->hasMany(Payment::class);
    }

   

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function customer():BelongsTo{
        return $this->belongsTo(Customer::class);
    }
}
