<?php

namespace App\Models;
/**
 * @OA\Schema(
 *    title="Commande",
 *    description="Les champ à fourni",
 * )
 */

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $table="commande";
    protected $fillable = [
        'nom','prenom','email','pays','tel','adresse','piece'
    ];
    /**
     *  @OA\Property(
     *    type="string",
     *        ),
     */
    public $nom;

    /**
     *  @OA\Property(
     *    type="string",
     *        ),
     */
    public $prenom;
    /**
     *  @OA\Property(
     *    type="email",
     *        ),
     */
    public $email;
    /**
     *  @OA\Property(
     *    type="string",
     *        ),
     */
    public $pays;
    /**
     *  @OA\Property(
     *    type="string",
     *        ),
     */
    public $tel;
    /**
     *  @OA\Property(
     *    type="string",
     *        ),
     */
    public $adresse;
    /**
     *  @OA\Property(
     *    type="string",
     *        ),
     */
    public $piece;

}
