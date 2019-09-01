<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    protected $tableName = "categories";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $categories = Category::all();
            return view('admin.category.crud.index', compact('categories'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

            $validateData = $request->validate([
                'category' => 'required|unique:categories|min:4',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $category = ucwords( mb_strtolower( $request->category ) );
            $folder = "/images/".$this->tableName;
            $img = time().'.'.$request->image->getClientOriginalExtension();
            $image = $folder."/".$img;

            $data = [
                'category' => $category,
                'image' => $image,
            ];

            $res = Category::create( $data );

            if ( $res ) {
                $request->image->move( public_path( $folder ), $img );
                $message = ['success' => 'Categoria creada satisfactoriamente!'];
            } else {
                $message = ['errors' => 'No se pudo crear la categoria'];
            }

            return redirect()->route('category.index')->with( $message );

        } catch (\Throwable $th) {
            throw $th;
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        try {
            return view('admin.category.crud.show', compact('category'));
        } catch (\Throwable $th) {
            throw $th;
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        try {
            return view('admin.category.crud.edit', compact('category'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        try {

            $validateData = $request->validate([
                'category' => 'required|min:4',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $categoryName =  ucwords( mb_strtolower( $request->category ) );
            $folder = "/images/".$this->tableName;
            $img = time().'.'.$request->image->getClientOriginalExtension();
            $image = $folder."/".$img;

            $cat = Category::findOrFail( $category->id );
            $cat->category = $categoryName;
            $cat->image = $image;
            $cat->save();

            if ( $cat ) {
                $request->image->move( public_path( $folder ), $img );
                unlink( public_path().$category->image );

                $message = ['success' => 'Categoria actualizada satisfactoriamente.'];
            } else {
                $message = ['errors' => 'Hubo un error al actualizar la categoria.'];
            }

            return redirect()->route('category.index')->with( $message );

        } catch (\Throwable $th) {
            throw $th;
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        try {
            
            $cat = Category::findOrFail($category->id);
            
            if ($cat->services->count()>0) {
                $message = ['errors' => 'No se puede eliminar esta categoria porque esta relacionada con otras tablas.'];
                return redirect()->route('category.index')->with( $message );
            }

            $cat->delete();

            if ( $cat ) {
                $message = ['success' => 'Categoria eliminada exitosamente.'];
                unlink( public_path().$category->image );
            }

            return redirect()->route('category.index')->with( $message );

        } catch (\Throwable $th) {
            throw $th;
        }
        
    }
}
