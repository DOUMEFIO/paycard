<?php

namespace App\Models;
/**
 * @OA\Schema(
 *    title="Categorie",
 *    description="Les champ à fourni",
 * )
 */

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $table="categorie";
    protected $fillable = [
        'type'
    ];

    /**
     *  @OA\Property(
     *    type="string",
     *        ),
     */
    public $type;
}
