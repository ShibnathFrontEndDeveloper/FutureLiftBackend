<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Helpers;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;
use App\Models\Tag;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\SubscribeEmail;

class BlogController extends Controller
{
    public function indexBlogCategory($show){
        if($show == "list"){
            $blogCategory = BlogCategory::orderBy('id','DESC')->get();
            return view('admin.Dashboard.blog-category',compact(['blogCategory']));
        }else if($show == "add"){
            return view('admin.Dashboard.blog-category');
        }
        else{
            return view('admin.Dashboard.404');
        }
    }
    public function blogCategoryAddFun(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error($value[0],'error');
        	}
        	return back()->withInput();
        }

        $blogCategory = BlogCategory::where('name',$request->name)->get()->count();
        if($blogCategory > 0){
            Toastr::error('This category allready exists','error');
            return back()->withInput();
        }

        $slug = Str::slug($request->name);

        $category = new BlogCategory();
        $category->name = $request->name;
        $category->slug = $slug;
        $category->save();
        Toastr::success('Category added successfully','success');
        return Redirect('/admin/blog-category/list');

    }
    public function indexBlogCategoryEdit($show,$id){
        if($show == "edit"){
            $category = BlogCategory::find($id);
            return view('admin.Dashboard.blog-category',compact(['category']));
        }
        else{
            return view('admin.Dashboard.404');
        }
    }
    public function blogCategoryEditFun(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error($value[0],'error');
        	}
        	return back()->withInput();
        }

        $blogCategory = BlogCategory::where('name',$request->name)->where('id','!=',$request->editId)->get()->count();
        if($blogCategory > 0){
            Toastr::error('This category allready exists','error');
            return back()->withInput();
        }

        $slug = Str::slug($request->name);

        $category = BlogCategory::find($request->editId);
        $category->name = $request->name;
        $category->slug = $slug;
        $category->save();
        Toastr::success('Category updated successfully','success');
        return Redirect('/admin/blog-category/list');
    }
    public function blogCategoryDeleteFun($id){
        BlogCategory::where('id',$id)->delete();
        Toastr::success('Category deleted successfully','success');
        return Redirect('/admin/blog-category/list');
    }
    public function indexBlogSection($show){
        if($show == "list"){
            $blog = Blog::orderBy('id','DESC')->get();
            return view('admin.Dashboard.blog-section',compact(['blog']));
        }else if($show == "add"){
            $blogCategory = BlogCategory::get();
            $tag = Tag::get();
            return view('admin.Dashboard.blog-section',compact(['blogCategory','tag']));
        }
        else{
            return view('admin.Dashboard.404');
        }
    }
    public function blogAddFun(Request $request){
        $validator = Validator::make($request->all(), [
            'category' => 'required',
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png,bmp,gif,svg',
            'tag' => 'required',
            'content' => 'required'
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error($value[0],'error');
        	}
        	return back()->withInput();
        }

        if(count($request->tag) == 0){
            Toastr::error('Select at least one tag','error');
            return back()->withInput();
        }

        if($request->has('image')){
            $imageName = time().'_'.rand(999,9999).'.'.$request->image->extension();
            $request->image->move(public_path('assets/blog_images'), $imageName);
        }else{
            $imageName = NULL;
        }

        $blog = new Blog();
        $blog->categoryId = $request->category;
        $blog->userId = Auth::guard('admin')->user()->id;
        $blog->title = $request->title;
        $blog->image = $imageName;
        $blog->content = $request->content;
        $blog->save();

        $slug = Str::slug($request->title).'-'.$blog->id;

        $blogUpdate = Blog::find($blog->id);
        $blogUpdate->slug = $slug;
        $blogUpdate->save();

        foreach ($request->tag as $key => $value) {
            $slugTag = Str::slug($value);

            $blogTag = new BlogTag();
            $blogTag->blogId = $blog->id;
            $blogTag->tag = $value;
            $blogTag->slug = $slugTag;
            $blogTag->save();

            $tagExits = Tag::where('slug',$slugTag)->get()->count();
            if($tagExits == 0){
                $tagSave = new Tag();
                $tagSave->tag = $value;
                $tagSave->slug = $slugTag;
                $tagSave->save();
            }
        }

        $blogDetails = Blog::find($blog->id);
        $subsEmail = SubscribeEmail::get();
        if($subsEmail->count() > 0){
            foreach ($subsEmail as $subsEmailkey => $subsEmailvalue) {
                $html = '';
                $html .= Helpers::blogMailContent($blogDetails->title,asset('/assets/blog_images/'.$blogDetails->image),url('/blog-details/'.$blogDetails->slug),Str::words(strip_tags($blogDetails->content), 30, ' ...'));
                $subject = $blogDetails->title;
                $mailSend = Helpers::phpMailerMailSend($subsEmailvalue->email,'Subscriber',$subject,$html);
            }
        }


        Toastr::success('Blog added successfully','success');
        return Redirect('/admin/blog-section/list');

    }
    public function indexBlogSectionEdit($show,$id){
        if($show == "edit"){
            $blog = Blog::find($id);
            $tag = Tag::get();
            $blogTag = BlogTag::select('tag')->where('blogId',$id)->pluck('tag')->toArray();
            $blogCategory = BlogCategory::get();
            return view('admin.Dashboard.blog-section',compact(['blog','tag','blogTag','blogCategory']));
        }
        else{
            return view('admin.Dashboard.404');
        }
    }
    public function blogEditFun(Request $request){
        $validator = Validator::make($request->all(), [
            'category' => 'required',
            'title' => 'required',
            'image' => 'image|mimes:jpeg,jpg,png,bmp,gif,svg',
            'tag' => 'required',
            'content' => 'required'
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error($value[0],'error');
        	}
        	return back()->withInput();
        }

        if(count($request->tag) == 0){
            Toastr::error('Select at least one tag','error');
            return back()->withInput();
        }

        $blog = Blog::find($request->editId);

        if($request->has('image')){
            $imageName = time().'_'.rand(999,9999).'.'.$request->image->extension();
            $request->image->move(public_path('assets/blog_images'), $imageName);
        }else{
            $imageName = $blog->image;
        }


        $blog = Blog::find($request->editId);
        $blog->categoryId = $request->category;
        $blog->title = $request->title;
        $blog->image = $imageName;
        $blog->content = $request->content;
        $blog->save();

        $slug = Str::slug($request->title).'-'.$request->editId;

        $blogUpdate = Blog::find($request->editId);
        $blogUpdate->slug = $slug;
        $blogUpdate->save();

        BlogTag::where('blogId',$request->editId)->delete();
        foreach ($request->tag as $key => $value) {
            $slugTag = Str::slug($value);

            $blogTag = new BlogTag();
            $blogTag->blogId = $request->editId;
            $blogTag->tag = $value;
            $blogTag->slug = $slugTag;
            $blogTag->save();


            $tagExits = Tag::where('slug',$slugTag)->get()->count();
            if($tagExits == 0){
                $tagSave = new Tag();
                $tagSave->tag = $value;
                $tagSave->slug = $slugTag;
                $tagSave->save();
            }
        }

        Toastr::success('Blog updated successfully','success');
        return Redirect('/admin/blog-section/list');

    }
    public function blogDeleteFun($id){
        Blog::where('id',$id)->delete();
        BlogTag::where('blogId',$id)->delete();
        Toastr::success('Blog deleted successfully','success');
        return Redirect('/admin/blog-section/list');
    }
}
