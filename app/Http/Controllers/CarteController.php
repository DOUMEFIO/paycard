<?php

namespace App\Http\Controllers;

use App\Models\Carte;
use Illuminate\Http\Request;


class CarteController extends Controller
{
    /**
     * @OA\Post(
     *      path="/api/carte_create",
     *      operationId="createCarte",
     *      tags={"Carte"},
     *      summary="Créer des carte ",
     *      description="Permet de créer des cartes",
     *      security={{"apiAuth":{}}},
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\MediaType(
     *             mediaType="application/json",
     *                  @OA\Schema(
     *                      @OA\Property(
     *                              property="numero",
     *                              type="integer"
     *                                      ),
     *                          @OA\Property(
     *                               property="ccv",
     *                               type="integer"
     *                                      ),
     *                          @OA\Property(
     *                               property="expire",
     *                               type="date"
     *                                      ),
     *                          @OA\Property(
     *                               property="categorie_id",
     *                               type="string"
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
        $request->validate([
            'numero' => 'required',
            'ccv' => 'required',
            'expire' => 'required',
            'categorie_id' => 'required'
        ]);
        $result=Carte::create([
            'numero' => $request->numero,
            'ccv' => $request->ccv,
            'expire' => $request->expire,
            'categorie_id' => $request->categorie_id,
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
