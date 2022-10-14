<?php

namespace App\Models;
/**
 * @OA\Schema(
 *    title="Carte",
 *    description="Les champ à fourni",
 * )
 */

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carte extends Model
{
    use HasFactory;
    protected $table="carte";
    protected $fillable = [
        'numero','ccv','expire','categorie_id'
    ];
    /**
     *  @OA\Property(
     *    type="string",
     *        ),
     */
    public $numero;
    /**
     *  @OA\Property(
     *    type="integer",
     *        ),
     */
    public $ccv;
    /**
     *  @OA\Property(
     *    type="integer",
     *        ),
     */
    public $expire;
    /**
     *  @OA\Property(
     *    type="array",
     *       @OA\Items(ref="#/components/schemas/Categorie"),
     *        )
     */    
    public $categorie_id;

}
