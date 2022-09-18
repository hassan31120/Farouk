<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Carbon::setLocale('ar');
        $cats = Category::all();
        return view('admin.categories.index', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required'
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filepath = 'storage/admin/images/categories/' . date('Y') . '/' . date('m') . '/';
            $filename = $filepath . time() . '-' . $file->getClientOriginalName();
            $file->move($filepath, $filename);
            $data['image'] = $filename;
        }

        Category::create($data);

        return redirect(route('admin.categories'))->with('success', 'تم اضافة الشركة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat = Category::find($id);
        return view('admin.categories.edit', compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cat = Category::find($id);
        $request->validate([
            'name' => 'required',
        ]);

        $data = $request->except(['old-image']);

        if($request->hasfile('image')){
            $file = $request->file('image');
            $filepath = 'storage/admin/images/categories/'.date('Y').'/'.date('m').'/';
            $filename =$filepath.time().'-'.$file->getClientOriginalName();
            $file->move($filepath, $filename);
            if(request('old-image')){
                $oldpath=request('old-image');
                if(File::exists($oldpath)){
                    unlink($oldpath);
                }

            }
          $data['image'] = $filename;
        }

        $cat->update($data);

        return redirect()->back()->with('success', 'تم تعديل الشركة بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Category::find($id);
        $cat->delete();
        return redirect(route('admin.categories'))->with('success', 'تم حذف الشركة بنجاح');
    }
}
