<?php

namespace App\Http\Resources;

use App\Models\Myplan;
use App\Models\Role;
use Illuminate\Http\Resources\Json\JsonResource;

class RolesResource extends JsonResource
{
    public function toArray($request)
    {
        $planname = Myplan::where('id', $this->my_plans_id)->first();

        $rolename = Role::where('id', $this->role_id)->first();

        return [
            'id' => $this->id,
            'name' => $this->name.' '.$this->surname,
            'role_id' => $rolename->name,
            'email' => $this->email,
            'my_plans_id' => $planname->name,
            'billing' => $this->billing,
            'avatar' => $this->avatar,
        ];
    }
}
