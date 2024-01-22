<?php

namespace App\Http\Controllers;

use App\Models\Rule;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class RuleController extends Controller
{
    public function index()
    {
        $rules = Rule::all();
        return view('rules', compact('rules'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $image_my = $request->image;

        $dom = new DOMDocument();
        $dom->loadHTML($image_my, 9);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
            $image_name = "/upload/" . time(). $key.'.png';
            file_put_contents(public_path().$image_name,$data);

            $img->removeAttribute('src');
            $img->setAttribute('src',$image_name);
        }
        $image_my = $dom->saveHTML();

        Rule::create([
            'title' => $request->title,
            'rule_rule' => $request->rule_rule,
            'content' => $request->content,
            'image' => $image_my
        ]);

        return redirect('/');
    }

    public function show($id)
    {
        $rule = Rule::find($id);
        return view('show', compact('rule'));
    }

    public function edit($id)
    {
        $rule = Rule::find($id);
        return view('edit', compact('rule'));
    }

    public function update(Request $request, $id)
    {
        $rule = Rule::find($id);

        $image_my = $request->image;

        $dom = new DOMDocument();
        $dom->loadHTML($image_my, 9);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {

            if (strpos($img->getAttribute('src'),'data:image/') ===0) {

                $data = base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
                $image_name = "/upload/" . time(). $key.'.png';
                file_put_contents(public_path().$image_name,$data);
                
                $img->removeAttribute('src');
                $img->setAttribute('src',$image_name);
            }

        }
        $image_my = $dom->saveHTML();

        $rule->update([
            'title' => $request->title,
            'rule_rule' => $request->rule_rule,
            'content' => $request->content,
            'image' => $image_my
        ]);

        return redirect('/');

    }

    public function destroy($id)
    {
        $rule = Rule::find($id);
        
        $dom= new DOMDocument();
        $dom->loadHTML($rule->content, 9);
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            
            $src = $img->getAttribute('src');
            $path = Str::of($src)->after('/');


            if (File::exists($path)) {
                File::delete($path);
               
            }
        }

        $rule->delete();
        return redirect()->back();

    }
}
