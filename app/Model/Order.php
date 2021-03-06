<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Process;
use App\Model\OrderDetail;
use App\Model\SaleOff;
class Order extends Model
{
	protected $table = "order";
	public $timestamps = true;
	public function getSalesOff() {
		// return $this->hasOne('App\Model\SaleOff', 'key', 'key_sales_off');
		return SaleOff::where('key', $this->key_sales_off)->first();
	}
	public function getProcess() {
		return Process::where('id', $this->id_process)->first();
		// return $this->hasOne('App\Model\Process', 'id', 'id_process');
	}
	public function getListOrderDetail() {
		return OrderDetail::where('id_order', $this->id)->get();
		// return $this->hasMany('App\Model\OrderDetail', 'id', 'id_order');
	}
	public function getListOrderDetailMapping() {
		// return OrderDetail::where('id_order', $this->id)->get();
		return $this->hasMany('App\Model\OrderDetail', 'id_order', 'id');
	}
	public function getCreated_timestampAttribute()
	{
		return $this->created_at->timestamp();
	}
}
