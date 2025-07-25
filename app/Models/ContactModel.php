<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'contacts';
    protected $primaryKey = 'id';
    protected $allowedFields = ['email', 'password', 'nama', 'no_hp'];
    protected $useTimestamps = true;
}
