<?php

namespace My\User;

use My\File\Image;
use My\User\Traits\RoleTrait;
use My\File\Traits\ImageAbleTrait;
use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
	use RoleTrait;
	use ImageAbleTrait;

    protected $fillable = ['user_id', 'WO', 'rank', 'points', 'fans', 'quality', 'working_age', 'work_area', 'ex_company', 'tel', 'from', 'deposit'];

    public function offers()
    {
        return $this->hasMany(\My\Project\Offer::class);
    }

}
