<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id' , 'name' , 'username' , 'password' , 'email_address' , 'mobile_no' , 'status' , 'login_status' , 'last_login_time' , 'created_date' ,'updated_date'  ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


    public $db;

    function __construct(){
        parent::__construct();
        $this->db = \Config\Database::connect();
    }
    /**
    * Verify Enter Login details by Username
    * @route 127.0.0.1/login -> validateUser (controller method)
    * @since 06-07-2024
    * @author Sarfaraj Sipai <sarfaraj.sipai@techaxion.com>
    */
    public function verifyData($username)
    {
        $query = $this->db->table('users')->where('username', $username)->get()->getRowArray();
        return $query;
    }
}
