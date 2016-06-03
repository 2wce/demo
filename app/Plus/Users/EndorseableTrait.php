<?php

namespace Chatty\Plus\Users;


trait EndorseableTrait
{

  /**
    *
    * Relationships with ENDORSEMENTS table
    *
    */

   public function endorsements(){
       $friendsList =
           $this->myEndorsed()->get()
               ->merge( $this->endorsedBy()->get() );
       //dd($friendsList);
       return $endorserList;
   }

   /**
    * Endorsement handling
    */

   public function myEndorsed(){
       return $this->belongsToMany('Chatty\Plus\Users\User', 'tbl_endorsements', 'user_id', 'endorser_id');
   }

   public function endorsedBy(){
       return $this->belongsToMany('Chatty\Plus\Users\User', 'tbl_endorsements', 'endorser_id', 'user_id');
   }

   public function hasEndorsed(User $user){
       return (bool) $this->endorsedBy()->where('user_id', $user->id)->count();
   }

   public function addEndorsement(User $user){
       return $this->myEndorsed()->attach($user->id);

   }


   /**
      *
      * HELPER functions  to get various user name combinations
      *
      */
     //  get this user's rating of endorsements
     public function getEndorsementRating(User $user)
     {
         $numEndorsements = (int) DB::table('tbl_endorsements')->where('user_id', $user->id)->count();
         if($numEndorsements>=5)
             return 5;
         else
             return (int) DB::table('tbl_endorsements')->where('user_id', $user->id)->count();

     }
}
