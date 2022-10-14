<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    /**
     * @OA\Post(
     *      path="/api/commande_create",
     *      operationId="createCommande",
     *      tags={"Commande"},
     *      summary="Créer des commande de carte",
     *      description="Permet de créer des commandes",
     *      security={{"apiAuth":{}}},
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\MediaType(
     *             mediaType="multipart/form-data",
     *                  @OA\Schema(
     *                      @OA\Property(
     *                              property="nom",
     *                              type="string"
     *                                      ),
     *                          @OA\Property(
     *                               property="prenom",
     *                               type="string"
     *                                      ),
     *                          @OA\Property(
     *                               property="email",
     *                               type="email"
     *                                      ),
     *                          @OA\Property(
     *                               property="pays",
     *                               type="string"
     *                                     ),
     *                           @OA\Property(
     *                               property="tel",
     *                               type="string"
     *                                     ),
     *                           @OA\Property(
     *                               property="adresse",
     *                               type="string"
     *                                     ),
     *                           @OA\Property(
     *                               property="avatar1",
     *                               type="file"
     *                                     ),
     *                          )
     *                    )
     *                  ),
     *      @OA\Response(
     *          response=201,
     *          description="Successful operation",
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *
     *      @OA\Response(
     *          response=403,
     *          description="Something when wrong"
     *      ),
     *
     * @OA\Response(
     *      response=500,
     *      description="Internal server error"
     *   ),
     *
     *  )
     *
     */
    public function create(Request $request){
        $photo = time() . '.' . $request->avatar1->extension();
        $path = $request->file('avatar1')->storeAs(
        'photos', $photo , 'public'
            );

        $create = Commande::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'pays' => $request->pays,
            'tel' => $request->tel,
            'adresse' => $request->adresse,
            'piece' => '2222'
            ]);
        $create->piece=$path;
        $result=$create->save();

        try {
            if($result){
                return ["statusCode"=>201,
                        "message"=>"Successful operation",
                        "succes"=>true
            ];
            }
            else{
                return ["statusCode"=>500,
                "message"=>"Internal server error",
                "succes"=>false];
            }
        } catch (\Throwable $th) {
            return ["statusCode"=>403,
                "message"=>"Echec ressayer",
                "succes"=>false];
        }

        return ["statusCode"=>500,
                "message"=>"votre mot de passe ne coreespond pas",
                "succes"=>false];
    }
}

