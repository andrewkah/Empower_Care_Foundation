<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use OwenIt\Auditing\Contracts\Auditable;

class User extends Authenticatable implements Auditable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
    use \OwenIt\Auditing\Auditable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // function to get user with email
    public  function get_user_with_email($email)
    {
        return $this->where('email', $email)->first();
    }
    // function get all users
    public  function get_all_users()
    {
        return $this->orderBy('name', 'asc')->get();
    }
    // function to get user with id
    public  function get_user_by_id($id)
    {
        return $this->findOrFail($id);
    }
    public  function create_user($data, $img)
    {
        $data['avatar'] = $img;
        $user = $this->create($data);
        return $user;
    }
    // function to update user
    public  function update_user($data, $id, $imgpath)
    {
        $user = $this->findOrFail($id);
        // check if image has been changed 
        if ($imgpath != null) {
            $data['avatar'] = $imgpath;
        } else {
            $data['avatar'] = $user->avatar;
        }
        $user->update($data);
        return $user;
    }
    
    // function to delete user
    public  function delete_user($id)
    {
        return $this->findOrFail($id)->delete();
    }

    //get delete user 
    public  function get_delete_user()
    {
        return $this->onlyTrashed()->get();
    }
    // function to reactivate user
    public  function reactive_user($id)
    {
        return $this->withTrashed()->find($id)->restore();
    }
    // function to get all inactive users
    public  function get_all_inactive_users()
    {
        return $this->onlyTrashed()->get();
    }
}
