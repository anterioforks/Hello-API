<?php

namespace App\Containers\Authorization\Data\Repositories;

use App\Containers\Authorization\Models\Permission;
use App\Port\Repository\Abstracts\Repository;

/**
 * Class PermissionRepository.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class PermissionRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [

    ];

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return Permission::class;
    }
}
