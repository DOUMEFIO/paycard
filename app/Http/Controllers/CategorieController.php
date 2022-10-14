<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;


class CategorieController extends Controller
{
    /**
     * @OA\Post(
     *      path="/api/categorie_create",
     *      operationId="createCategorie",
     *      tags={"Categorie"},
     *      summary="Créer des categories de carte",
     *      description="Permet de créer des categorie(petit,grand)",
     *      security={{"apiAuth":{}}},
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\MediaType(
     *              mediaType="application/json",
     *                  @OA\Schema(
     *                      @OA\Property(
     *                              property="type",
     *                              type="string"
     *                                      ),
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
     */

    public function create(Request $request){
        $request->validate([
            'type' => 'required'
        ]);
        $result=Categorie::create([
            'type' => $request->type
        ]);

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
