<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use Livewire\Component;

class LikeDislike extends Component
{
    public Post $post;
        public function mount(Post $post)
        {
            $this->post = $post;
            # code...
        }
    public function render()
    {
        
        $likes= \App\Models\LikeDislike::where('post_id',$this->post->id)->where('is_like',true)->count();
        $dislikes= \App\Models\LikeDislike::where('post_id',$this->post->id)->where('is_like',false)->count();

        $hasLike = null;
         /** @var \App\Models\User $user */

         $user = auth()->user();
         if ($user) {
             $model = \App\Models\LikeDislike::where('post_id', $this->post->id)
             ->where('user_id', $user->id)
             ->first();
             if($model){
                 $hasLike = !!$model->is_like;
             }
         }


        return view('livewire.like-dislike', compact('likes','dislikes', 'hasLike'));
    }

    public function likeDislike($like = true)
    {
        /** @var \App\Models\User $user */

        $user = auth()->user();
        if (!$user) {
            return redirect()->route('login');
        }
        if(!$user->hasVerifiedEmail()){
            return redirect()->route('verification.notice');
        }

        $model = \App\Models\LikeDislike::where('post_id', $this->post->id)->where('user_id', $user->id)->first();

        if(!$model){
            \App\Models\LikeDislike::create([
                'post_id' => $this->post->id,
                'user_id' => $user->id,
                'is_like' => $like,
            ]);
            return;
        }
        if($like && $model->is_like || !$like && !$model->is_like){
            $model->delete();
            
        }
        else{
            $model->is_like = $like;
            $model->save();
        }


    }
    
}
