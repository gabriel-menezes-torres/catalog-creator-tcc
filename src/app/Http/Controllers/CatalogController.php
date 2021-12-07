<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse as JSON;

use App\Repositories\Contracts\CatalogItemInterface;
use App\Repositories\Contracts\CategoryInterface;
use App\Repositories\Contracts\CatalogStockInterface;

class CatalogController extends Controller
{
    private $catalog;
    private $category;
    private $stock;

    private $request;

    public function __construct(CatalogItemInterface $catalog, CategoryInterface $category, Request $request, CatalogStockInterface $stock) 
    {
        dd(2);
        $this->catalog = $catalog;
        $this->category = $category;
        $this->stock = $stock;

        $this->request = $request;
    }

    public function add(Request $request): JSON
    {
        dd(2);
        $data = json_decode($request->getContent(), true);
        $success = false;
        $httpCode = 400;
        $message = 'fail';

        if (isset($data) && is_array($data)) {
            $this->catalog->create($data);
            $httpCode = 200;
            $success = true;
            $message = 'success';
        }

        return response()->json(['success' => $success, 'message' => $message], $httpCode);
    }

    public function listAll(Request $request): JSON
    {
        $data = json_decode($request->getContent(), true);
        $success = false;
        $httpCode = 501;
        $message = 'not implemented';

        return response()->json(['success' => $success, 'message' => $message], $httpCode);
    }

    public function fetchByCategory(Request $request): JSON
    {
        $data = json_decode($request->getContent(), true);
        $success = false;
        $httpCode = 501;
        $message = 'not implemented';

        return response()->json(['success' => $success, 'message' => $message], $httpCode);
    }
    
    public function updateStock(Request $request): JSON
    {
        $data = json_decode($request->getContent(), true);
        $success = false;
        $httpCode = 501;
        $message = 'not implemented';

        return response()->json(['success' => $success, 'message' => $message], $httpCode);
    }
    
    public function fetchStockByCatalogId(Request $request): JSON
    {
        $data = json_decode($request->getContent(), true);
        $success = false;
        $httpCode = 501;
        $message = 'not implemented';

        return response()->json(['success' => $success, 'message' => $message], $httpCode);
    }
    
    public function addCategory(Request $request): JSON
    {
        $data = json_decode($request->getContent(), true);
        $success = false;
        $httpCode = 501;
        $message = 'not implemented';

        return response()->json(['success' => $success, 'message' => $message], $httpCode);
    }
    
    public function fetchAllCategory(Request $request): JSON
    {
        $data = json_decode($request->getContent(), true);
        $success = false;
        $httpCode = 501;
        $message = 'not implemented';

        return response()->json(['success' => $success, 'message' => $message], $httpCode);
    }
}