<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Image;
use App\Http\Requests;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $products = Product::where('image', 'LIKE', "%$keyword%")
                ->orWhere('name', 'LIKE', "%$keyword%")
                ->orWhere('category_id', 'LIKE', "%$keyword%")
                ->orWhere('sub_name', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('description2', 'LIKE', "%$keyword%")
                ->orWhere('quantity', 'LIKE', "%$keyword%")
                ->orWhere('price', 'LIKE', "%$keyword%")
                ->orWhere('weight', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $products = Product::latest()->paginate($perPage);
        }

        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {  
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'image'     =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $requestData = $request->all();

        // имя файла с расширение
        $filenamewithextension = $request->file('image')->getClientOriginalName();

        // имя файла без расширение
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

        // получаем расширение файла
        $extension = $request->file('image')->getClientOriginalExtension();

        // имя файла для хранения в бд
        $filenametostore = $filename . '_' . time() . '.' . $extension;

        //Создаем миниатюру изображения и сохраняем ее
        /*
        $smallthumbnail = $filename . '_small_' . time() . '.' . $extension;

        $mediumthumbnail = $filename . '_medium_' . time() . '.' . $extension;

        $largethumbnail = $filename . '_large_' . time() . '.' . $extension;
        */

        //загруажаем файлы
        $request->image->move(public_path('/img_app/product/origin'), $filenametostore);
        /*
        $request->file('image')->storeAs('/img_app/product/small', $smallthumbnail);
        $request->file('image')->storeAs('/img_app/product/meduim', $mediumthumbnail);
        $request->file('image')->storeAs('/img_app/product/large', $largethumbnail);

        //create small thumbnail
        $smallthumbnailpath = public_path('storage/img_app/small/' . $smallthumbnail);
        $this->createThumbnail($smallthumbnailpath, 150, 93);

        //create medium thumbnail
        $mediumthumbnailpath = public_path('storage/img_app/meduim/' . $mediumthumbnail);
        $this->createThumbnail($mediumthumbnailpath, 300, 185);

        //create large thumbnail
        $largethumbnailpath = public_path('storage/img_app/large/' . $largethumbnail);
        $this->createThumbnail($largethumbnailpath, 550, 340);
        */

        //Сохраняем картинку в БД
        $requestData['image'] = $filenametostore;
        
        Product::create($requestData);

        return redirect('admin/products')->with('flash_message', 'Товар добавлен!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $product = Product::findOrFail($id);
        $product->update($requestData);

        return redirect('admin/products')->with('flash_message', 'Товар изменен!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Product::destroy($id);

        return redirect('admin/products')->with('flash_message', 'Товар удален!');
    }

    /**
     * Create a thumbnail of specified size
     *
     * @param string $path path of thumbnail
     * @param int $width
     * @param int $height
     */
    // public function createThumbnail($path, $width, $height)
    // {
    //     $img = Image::make($path)->resize($width, $height, function ($constraint) {
    //         $constraint->aspectRatio();
    //     });
    //     $img->save($path);
    // }
}
