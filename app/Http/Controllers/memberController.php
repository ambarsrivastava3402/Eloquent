<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\Comment;
use App\User;


class memberController extends Controller
{
  public function onetoone( )
  {
  	$phone = new phone();
  	$phone = User::find(1)->getphone;
  	return $phone;
  }
    public function insertpost()
  {
  	$post = new post();
  	$post->title = "first article";
  	$post->body = "Gunmen attacked six locations in Vienna on Monday, starting outside the city’s main synagogue, in what Austria’s government has called a “repulsive terror attack.” While Vienna Police shot dead one of the attackers, Austria’s interior minister Karl Nehammer said at least one perpetrator is still on the run.";
    $post->save();

  }
  
   public function insertcomment()
  {
  	
  	$post = post::find(1);
  	$comment = new Comment();
  	$comment->comment = "This is today's news in  Austria";
  	$comment->post_id = $post->id;
  	$comment->save();
    
  } 
   public function onetomany()
   {

   	$comment = post::find(2)->getcomment;
   	return $comment;
   }

   public function manytomany()
   {
   	$user = new User();
   	$user = User::find(1)->getroles;
   	return $user;
   // $role = Role::find(1)->getuser;
   // return $role;

   }

                          


}