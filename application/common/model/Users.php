<?php
/**
 * User: Wisp X
 * Date: 2018/9/25
 * Time: 下午3:20
 * Link: https://github.com/wisp-x
 */

namespace app\common\model;

use think\Exception;
use think\facade\Session;
use think\Model;
use think\model\concern\SoftDelete;

class Users extends Model
{
    use SoftDelete;

    protected $insert = ['reg_ip', 'quota', 'token', 'group_id'];

    protected $append = ['use_quota'];

    public function setGroupIdAttr()
    {
        return Group::where('default', 1)->value('id');
    }

    public function setPassWordAttr($password)
    {
        return md5($password);
    }

    public function setRegIpAttr()
    {
        return request()->ip();
    }

    public function setQuotaAttr($quota)
    {
        return $quota ? $quota : Config::where('name', 'user_initial_quota')->value('value');
    }

    public function setTokenAttr()
    {
        return make_token();
    }

    public function getUseQuotaAttr()
    {
        return sprintf("%.2f", $this->images()->sum('size'));
    }

    public static function login($account, $password, $field = 'email')
    {
        if (!$account) {
            throw new Exception(lang('Please enter the account number'));
        }

        if (!$password) {
            throw new Exception(lang('Please input a password'));
        }

        if ($user = self::get([$field => $account])) {
            if (0 === $user->state) {
                throw new Exception(lang('Your account has been frozen, please contact the administrator!'));
            }
            if ($user->password !== md5($password)) {
                throw new Exception(lang('Incorrect password'));
            }
            Session::set('uid', $user->id);
        } else {
            throw new Exception(lang('User does not exist'));
        }
    }

    public function images()
    {
        return $this->hasMany(Images::class, 'user_id', 'id');
    }

    public function folders()
    {
        return $this->hasMany(Folders::class, 'user_id', 'id');
    }

    public function role()
    {
        return $this->hasOne(Group::class, 'id', 'group_id');
    }
}
