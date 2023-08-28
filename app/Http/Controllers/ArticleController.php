<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = Article::all();
        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $article = request()->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);
        $image = '';

        if (request()->hasfile('image')) {
            //get the file field data and name field from form submission
            $file = request()->file('image');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $image = $file->move('articles', $file_name);
        }
        $article['image'] = $image;

        Article::create($article);

        return back()->with('message', 'Article successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
        return view('admin.articles.show', compact('article'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
        return view('admin.articles.edit', compact('article'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Article $article)
    {
        //
        $updated = request()->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);

        $image = $article->image;

        if (request()->hasfile('image')) {
            //get the file field data and name field from form submission
            $file = request()->file('image');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $image = $file->move('articles', $file_name);

            $old_path = $article->image;
            if ($old_path != null) {
                unlink($old_path);
            }
        }

        $updated['image'] = $image;

        $article->update($updated);

        return back()->with('message', 'Article updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
        $article->delete();
        return redirect('/admin/articles')->with('message', 'Article deleted successfully');
    }


    public function article_images(Article $article)
    {
        request()->validate([
            'image' => 'required',
        ]);

        $files = request()->file('image');
        $number = 0;
        if (request()->hasfile('image')) {

            //get the file field data and name field from form submission
            foreach ($files as $file) {
                //get file original name
                $name = $file->getClientOriginalName();

                //create a unique file name using the time variable plus the name
                $file_name = $number . time() . $name;

                //upload the file to a directory in Public folder
                $path = $file->move('article_images', $file_name);

                $article_image['file'] = $path;

                $article->addImages($article_image);

                $number = $number + 1;
            }

        }

        return back()->with('message', 'Images added successfully');
    }

    public function article_files(Article $article)
    {
        request()->validate([
            'file' => 'required',
            'name' => 'nullable',
        ]);

        $files = request()->file('file');
        $number = 0;
        if (request()->hasfile('file')) {

            //get the file field data and name field from form submission
            foreach ($files as $file) {
                //get file original name
                $name = $file->getClientOriginalName();
                //create a unique file name using the time variable plus the name
                $file_name = $number . time() . $name;

                //upload the file to a directory in Public folder
                $path = $file->move('article_files', $file_name);


                $article_file['file'] = $path;
                $article_file['name'] = $name;

                $article->addDocuments($article_file);

                $number = $number + 1;
            }

        }

        return back()->with('message', 'files added successfully');
    }

}
