<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'orders';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'phone', 'city', 'street', 'entrance', 'floor', 'flat', 'intercom', 'comment'];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity')->withTimestamps();
    }

    public function getFullPrice()
    {
        $sum = 0;
        foreach ($this->products as  $product) {
            $sum += $product->getPriceForCount();
        }

        return $sum;
    }

    public function saveOrder($name, $phone, $city, $street, $entrance, $floor, $flat, $intercom, $comment)
    {
        if ($this->status == 0) {

            $this->status = 1;
            $this->name = $name;
            $this->phone = $phone;
            $this->city = $city;
            $this->street = $street;
            $this->entrance = $entrance;
            $this->floor = $floor;
            $this->flat = $flat;
            $this->intercom = $intercom;
            $this->comment = $comment;
            $this->save();
            session()->forget('orderId');

            return true;
        } else {
            return false;
        }
    }
    
}
