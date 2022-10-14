<?php

namespace App\Models;
/**
 * @OA\Schema(
 *    title="Users",
 *    description="Les champ à fourni",
 * )
 */

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name','prenom','numero','fonction','email', 'password',
    ];
    /**
     *  @OA\Property(
     *    type="string",
     *        ),
     */
    public $name;
    /**
     *  @OA\Property(
     *    type="string",
     *        ),
     */
    public $prenom;
    /**
     *  @OA\Property(
     *    type="string",
     *        ),
     */
    public $numero;
    /**
     *  @OA\Property(
     *    type="string",
     *        ),
     */
    public $fonction;
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
    public $password;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
