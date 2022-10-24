<?php namespace App\Models;

use CodeIgniter\Model;

class PenelitianModel extends Model
{
    /**
     * table name
     */
    protected $table = "penelitian";

    /**
     * allowed Field
     */
    protected $allowedFields = [
        'id_penelitian',
        'judul_penelitian',
        'nama_peneliti',
        'jabatan',
        'no_hp',
        'email'
    ];
}