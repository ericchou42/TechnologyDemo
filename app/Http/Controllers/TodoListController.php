<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList;

/**
 * @OA\Info(
 *      version="0.1",
 *      title="technology demo API",
 *      @OA\Contact(
 *          email="iachievedream@gmail.com"
 *      ),
 *      @OA\License(
 *         name="Apache 2.0",
 *         url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *      )
 * ),
 * @OA\Server(
 *     url="http://technologydemoback.test/api",
 *     description="本機測試",
 * ),
 * @OA\Server(
 *     url="http://127.0.0.1/api",
 *     description="測試demi",
 * ),
 *  @OA\SecurityScheme(
 *         securityScheme="bearerAuth",
 *         type="http",
 *         scheme="bearer"
 *     ),
 */
class TodoListController extends Controller
{
    /**
    * @OA\Get(
    *      path="/todo",
    *      operationId="todo",
    *      tags={"todo"},
    *      summary="顯示全部列表",
    *      description="顯示全部列表",
    *      security={
    *         {
    *              "bearerAuth": {}
    *         }
    *      },
    *      @OA\Response(
    *          response=200,
    *          description="200"
    *       )
    * ),
    **/
    public function index()
    {
        $todo = TodoList::all();
        return response()->json($todo, 200);
    }

    public function store(Request $request)
    {
        $todo = TodoList::create($request->all());
        return response()->json($todo, 200);
    }

    /**
    * @OA\Get(
    *      path="/todo/{id}",
    *      operationId="todo_id",
    *      tags={"todo"},
    *      summary="顯示此筆list",
    *      description="顯示此筆list",
    *      security={
    *         {
    *              "bearerAuth": {}
    *         }
    *      },
    *      @OA\Parameter(
    *          name="id",
    *          description="id",
    *          required=true,
    *          in="path",
    *          @OA\Schema(
    *              type="integer",
    *              example="2",
    *          ),
    *      ),
    *      @OA\Response(
    *          response=200,
    *          description="200"
    *       )
    * ),
    **/
    public function show(string $id)
    {
        $todo = TodoList::find($id);
        return response()->json($todo, 200);
    }

    /**
    * @OA\Post(
    *      path="/todo/{id}",
    *      operationId="todo_id_update",
    *      tags={"todo"},
    *      summary="更新list",
    *      description="更新list",
    *      security={
    *         {
    *              "bearerAuth": {}
    *         }
    *      },
    *      @OA\Parameter(
    *          name="id",
    *          description="id",
    *          required=true,
    *          in="path",
    *          @OA\Schema(
    *              type="integer",
    *              example="2",
    *          ),
    *      ),
    *      @OA\RequestBody(
    *          @OA\MediaType(
    *              mediaType="application/json",
    *              @OA\Schema(
    *                  @OA\Property(
    *                      property="title",
    *                      type="string"
    *                  ),
    *                  @OA\Property(
    *                      property="type",
    *                      type="string"
    *                  ),
    *                  @OA\Property(
    *                      property="content",
    *                      type="string"
    *                  ),
    *                  example={
    *                      "title":"我的第一個發文",
    *                      "type":"第一個分類",
    *                      "content":"這個todolist如何呢？",
    *                  }
    *              )
    *          )
    *      ),
    *      @OA\Response(
    *          response=200,
    *          description="200"
    *       )
    * ),
    **/
    public function update(Request $request, string $id)
    {
        echo '<pre>';
        print_r($request->all());
        echo '</pre>';
        exit(); // 停止腳本的執行

        $todo = TodoList::update($id, $request->all());
        return response()->json($todo, 200);
    }

    public function destroy(string $id)
    {
        $todo = TodoList::destroy($id);
        return response()->json($todo, 200);
    }
}
