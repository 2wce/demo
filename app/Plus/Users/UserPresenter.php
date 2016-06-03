<?php

namespace Chatty\Plus\Users;

use Codru\Presenter\Presenter;

class UserPresenter extends Presenter
{
    /**
     * @param int $size
     * @return string
     */
     public function getAvatarUrl()
     {
         return "https://www.gravatar.com/avatar/{{md5($this->email)}}?d=mm&s=50";
     }

    /**
     * Human style count of followers
     *
     * @return string
     */
    public function followerCount()
    {
        $count = $this->entity->followers()->count();
        $plural = str_plural('Follower', $count);

        return "$count $plural";
    }

    /**
     * Human style count of statuses
     *
     * @return string
     */
    public function statusCount()
    {
        $count = $this->entity->statuses()->count();
        $plural = str_plural('Status', $count);

        return "$count $plural";
    }

    /**
     * Human style count of statuses
     *
     * @return string
     */
    public function endorsementCount()
    {
        $count = $this->entity->endorsedBy()->count();
        $plural = str_plural('Endorsement', $count);

        return "$count $plural";
    }

}
