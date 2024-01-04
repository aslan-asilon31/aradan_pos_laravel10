<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\CategorySub;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class CategorySubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $row = (int) request('row', 10);

        if ($row < 1 || $row > 100) {
            abort(400, 'The per-page parameter must be an integer between 1 and 100.');
        }

            $categorysubs = CategorySub::filter(request(['search']))
            ->leftJoin('categories', 'category_subs.cat_id', '=', 'categories.cat_id')
            ->select('category_subs.*', 'categories.name as category_name')
                ->sortable()
                ->paginate($row)
                ->appends(request()->query());
                // dd($categorysubs);

        return view('categorysubs.index', compact('categorysubs'));

        // return view('categorysubs.index', [
        //     'categorysubs' => CategorySub::filter(request(['search']))
        //     ->leftJoin('categories', 'categorysubs.cat_id', '=', 'categories.cat_id')
        //     ->select('categorysubs.*', 'categories.name')
        //         ->sortable()
        //         ->paginate($row)
        //         ->appends(request()->query()),
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorysubs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|unique:category_subs,name',
            'slug' => 'required|unique:category_subs,slug|alpha_dash',
        ];

        $validatedData = $request->validate($rules);

        CategorySub::create($validatedData);

        return Redirect::route('categorysubs.index')->with('success', 'Category has been created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $categorysub)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $categorysub)
    {
        return view('categorysubs.edit', [
            'categorysub' => $categorysub
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $categorysub)
    {
        $rules = [
            'name' => 'required|unique:category_subs,name,'.$categorysub->id,
            'slug' => 'required|alpha_dash|unique:category_subs,slug,'.$categorysub->id,
        ];

        $validatedData = $request->validate($rules);

        CategorySub::where('slug', $categorysub->slug)->update($validatedData);

        return Redirect::route('categorysubs.index')->with('success', 'Category has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $categorysub)
    {
        CategorySub::destroy($categorysub->slug);

        return Redirect::route('categorysubs.index')->with('success', 'Category has been deleted!');
    }
}

