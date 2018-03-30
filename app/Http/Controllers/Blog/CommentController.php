<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Controller;

use App\Post;
use App\Comment;
use App\Reply;
use App\Category;

class CommentController extends Controller
{
    //

    public function create(Request $request)
    {
    	$formData=$request->all();

        $rule=array(
            'comment' => 'required',
            'author'=>'required',
            'email'=>'required',
            'post_id'=>'required',
            );

        $message=array(
            'comment.required'=>'Cover image is required.',
            );

        $validator=Validator::make($formData, $rule, $message);

        if($validator->fails()){

        	return Response::json($validator);
            

        }else{

        	$comment=new Comment;

        	$comment->post_id=$request->post_id;

        	$comment->name=$request->author;

        	$comment->email=$request->email;

        	$comment->body=$request->comment;

        	$comment->avatar="1";

        	$comment->save();

        	echo '<li class="comment even thread-even depth-1" id="li-comment-7">
                                                        <div id="comment-7" class="comment clearfix">
                                                            <div class="comment-block">
                                                                <header class="comment-meta comment-author vcard clearfix">
                                                                    <div class="comment-avatar">
                                                                        <img  src="http://0.gravatar.com/avatar/0c661574016319819b09715da00dc310?s=50&amp;d=mm&amp;r=g" srcset="http://0.gravatar.com/avatar/0c661574016319819b09715da00dc310?s=100&amp;d=mm&amp;r=g 2x"
                                                                        class="avatar avatar-50 photo" height="50" width="50" />
                                                                    </div>
                                                                </header>
                                                                <div class="comment-body"> <cite class="fn"><a href="../../../color-theme.com/index.html" rel="external nofollow" class="url">'.$request->author.'</a></cite>
                                                                    <a class="comment-time muted-small" ">
                                                                        <time datetime="2015-06-24T13:19:35+00:00">
                                                                        Now
                                                                    </time>
                                                                    </a>
                                                                    
                                                                    <br>
                                                                    <div class="comment-content comment clearfix">
                                                                        <p>
                                                                            '.$request->comment.'
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </li>';
        	//return Response::json(['success'=>true])


    }

    }
}
