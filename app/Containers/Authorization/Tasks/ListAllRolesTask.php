<?php

namespace App\Containers\Authorization\Tasks;

use App\Containers\Authorization\Data\Repositories\RoleRepository;
use App\Port\Task\Abstracts\Task;

/**
 * Class ListAllRolesTask.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class ListAllRolesTask extends Task
{

    /**
     * @var  \App\Containers\Authorization\Data\Repositories\RoleRepository
     */
    private $roleRepository;

    /**
     * GetAdminRoleTask constructor.
     *
     * @param \App\Containers\Authorization\Data\Repositories\RoleRepository $roleRepository
     */
    public function __construct(RoleRepository $roleRepository)
    {
        $this->roleRepository = $roleRepository;
    }

    /**
     * @return  mixed
     */
    public function run()
    {
        return $this->roleRepository->all();
    }

}
