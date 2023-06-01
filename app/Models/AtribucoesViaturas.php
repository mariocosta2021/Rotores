<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AtribucoesViaturas extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'atribuicoes_viaturas';
    public $fillable = ['fk_user', 'fk_viaturas', 'detalhes'];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    public function viaturas()
    {
        return $this->belongsTo(Viatura::class, 'fk_viaturas');
    }
    public function usuarios()
    {
        return $this->belongsTo(User::class, 'fk_user');
    }
    protected $dates = ['deleted_at'];

}
