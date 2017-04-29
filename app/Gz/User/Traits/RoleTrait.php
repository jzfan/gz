<?php
namespace Gz\User\Traits;

trait RoleTrait
{
	public function isAdmin()
	{
	    return $this->role == 'admin';
	}

	public function isCustomer()
	{
	    return $this->role == 'customer';
	}

	public function isLeader()
	{
	    return $this->role == 'leader';
	}

	public function isWorker()
	{
	    return $this->role == 'worker';
	}

	public function isEditor()
	{
	    return $this->role == 'editor';
	}

	public function transRole()
	{
	    switch ($this->role) {
	        case 'admin':
	            return '管理员';
	        case 'editor':
	            return '编辑';
	        case 'leader':
	            return '工长';
	        case 'worker':
	            return '工人';
	        default:
	            return '业主';
	    }
	}
}